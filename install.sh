#!/bin/bash
# =============================================
# 🚀 Максимально надёжный неинтерактивный скрипт LEMP + Webasyst
# Ubuntu 24.04, PHP 8.3, MariaDB, Nginx
# =============================================
set -e
export DEBIAN_FRONTEND=noninteractive

echo "🔄 Отключаем автоматические обновления..."
sudo systemctl stop unattended-upgrades 2>/dev/null || true
sudo systemctl disable --now unattended-upgrades 2>/dev/null || true

echo "🗑️ Очистка блокировок..."
sudo rm -f /var/lib/dpkg/lock* /var/cache/apt/archives/lock /var/lib/apt/lists/lock

echo "🔧 Исправляем повреждённые пакеты..."
sudo dpkg --configure -a || true
sudo apt --fix-broken install -y || true

echo "🔄 Обновление системы..."
sudo apt update && sudo apt upgrade -y
sudo apt install -y git unzip curl

echo "📦 Полная очистка MariaDB..."
sudo systemctl stop mariadb 2>/dev/null || true
sudo apt purge -y mariadb* mysql* libmariadb* 2>/dev/null || true
sudo rm -rf /etc/mysql /var/lib/mysql /var/log/mysql /run/mysqld ~/.my.cnf 2>/dev/null || true

echo "📦 Установка пакетов LEMP..."
sudo apt install -y nginx mariadb-server mariadb-client \
    php8.3 php8.3-fpm php8.3-mysql php8.3-curl php8.3-gd \
    php8.3-mbstring php8.3-xml php8.3-zip php8.3-cli

# ================= MariaDB =================
echo "📝 Настройка MariaDB и прав доступа..."
sudo groupadd -f mysql
sudo id -u mysql &>/dev/null || sudo useradd -r -g mysql -s /bin/false mysql
sudo mkdir -p /var/lib/mysql /run/mysqld /etc/mysql
sudo chown -R mysql:mysql /var/lib/mysql /run/mysqld /etc/mysql
sudo chmod -R 750 /var/lib/mysql
sudo chmod -R 755 /run/mysqld

echo "▶️ Запуск MariaDB..."
sudo systemctl enable --now mariadb
sleep 3

echo "🔐 Простая настройка MariaDB (root без пароля)..."
sudo mysql -e "ALTER USER 'root'@'localhost' IDENTIFIED BY '';" 2>/dev/null || true

# ================= База данных =================
echo "🗄️ Создание базы данных Webasyst"
read -p "Введите имя базы данных: " DB_NAME
read -p "Введите имя пользователя БД: " DB_USER
read -s -p "Введите пароль пользователя БД: " DB_PASS
echo
read -p "Хост (по умолчанию localhost): " DB_HOST
DB_HOST=${DB_HOST:-localhost}

sudo mysql -u root <<EOF
CREATE DATABASE IF NOT EXISTS \`$DB_NAME\` CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
CREATE USER IF NOT EXISTS '$DB_USER'@'$DB_HOST' IDENTIFIED BY '$DB_PASS';
GRANT ALL PRIVILEGES ON \`$DB_NAME\`.* TO '$DB_USER'@'$DB_HOST';
FLUSH PRIVILEGES;
EOF
echo "✅ База данных создана!"

# ================= Проект =================
SRC_DIR="$PWD"
TARGET_DIR="/var/www/web-magaz"

echo "✅ Копирование сайта..."
sudo rm -rf "$TARGET_DIR" 2>/dev/null || true
sudo mkdir -p "$TARGET_DIR"
sudo cp -r "$SRC_DIR"/* "$TARGET_DIR"/

# Безопасное удаление исходной папки проекта
if [ "$SRC_DIR" != "/" ]; then
    sudo rm -rf "$SRC_DIR"
fi

echo "📁 Настройка прав проекта..."
sudo chown -R www-data:www-data "$TARGET_DIR"
sudo find "$TARGET_DIR" -type d -exec chmod 755 {} \;
sudo find "$TARGET_DIR" -type f -exec chmod 644 {} \;

# ================= Nginx =================
echo "🌐 Настройка Nginx..."
sudo mkdir -p /etc/nginx/snippets

sudo tee /etc/nginx/snippets/fastcgi-php.conf > /dev/null <<'EOF'
fastcgi_split_path_info ^(.+\.php)(/.+)$;
try_files $fastcgi_script_name =404;
fastcgi_buffers 16 16k;
fastcgi_buffer_size 32k;
fastcgi_read_timeout 300;
include fastcgi_params;
fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
fastcgi_param PATH_INFO $fastcgi_path_info;
EOF

sudo tee /etc/nginx/sites-available/webasyst > /dev/null <<EOF
server {
    listen 80;
    server_name _;
    root $TARGET_DIR;
    index index.php index.html;

    location / {
        try_files \$uri \$uri/ /index.php?\$query_string;
    }

    location ~ \.php\$ {
        include snippets/fastcgi-php.conf;
        fastcgi_pass unix:/run/php/php8.3-fpm.sock;
    }

    location ~ /\. {
        deny all;
    }
}
EOF

sudo ln -sf /etc/nginx/sites-available/webasyst /etc/nginx/sites-enabled/
sudo rm -f /etc/nginx/sites-enabled/default

echo "🔍 Проверка и перезапуск сервисов..."
sudo nginx -t && sudo systemctl restart nginx
sudo systemctl restart php8.3-fpm

# ================= Завершение =================
echo ""
echo "✅ Установка завершена!"

# Получаем IPv4
MYIP=$(curl -4 -s ifconfig.me || curl -4 -s icanhazip.com || hostname -I | awk '{print $1}')

echo ""
echo "🌍 Адрес вашего сайта: http://$MYIP"
echo "✅ Нажми «Установить» и «Продолжить»"
echo "✅ Заполни Базу данных MySQL:"
echo "❇️ Сервер: $DB_HOST"
echo "❇️ Пользователь: $DB_USER"
echo "❇️ Пароль: $DB_PASS"
echo "❇️ Имя базы данных: $DB_NAME"
echo "✅ И жми «Подключиться»"
