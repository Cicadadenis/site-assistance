#!/bin/bash
# ========================================================
#          🚀 УСТАНОВЩИК LEMP + Site-Assistence
# ========================================================
# Автоматическая установка:
# • Nginx + PHP 8.3 + MariaDB
# • Webasyst (Cicada Site Assistance)
# • Полностью неинтерактивная (кроме ввода данных БД)
# ========================================================
# Автор: Cicada Denis
# Версия: 2026
# ========================================================

set -e

export DEBIAN_FRONTEND=noninteractive

echo "========================================================"
echo "   🚀 Начинаем установку LEMP + Site-Assistence"
echo "========================================================"

echo "🔄 Отключаем автоматические обновления..."
sudo systemctl stop unattended-upgrades 2>/dev/null || true
sudo systemctl disable --now unattended-upgrades 2>/dev/null || true

echo "🗑️  Очистка блокировок apt..."
sudo rm -f /var/lib/dpkg/lock* /var/cache/apt/archives/lock /var/lib/apt/lists/lock

echo "🔧 Исправляем повреждённые пакеты..."
sudo dpkg --configure -a || true
sudo apt --fix-broken install -y || true

echo "🛠️  Подготовка директорий MariaDB..."
sudo mkdir -p /etc/mysql
sudo touch /etc/mysql/mariadb.cnf /etc/mysql/my.cnf

echo "🔄 Обновление системы..."
sudo apt update && sudo apt upgrade -y

echo "📦 Установка необходимых пакетов..."
sudo apt install -y nginx mariadb-server mariadb-client \
    php8.3 php8.3-fpm php8.3-mysql php8.3-curl php8.3-gd \
    php8.3-mbstring php8.3-xml php8.3-zip php8.3-cli \
    git unzip curl

echo "📦 Полная очистка предыдущей установки MariaDB..."
sudo systemctl stop mariadb 2>/dev/null || true
sudo apt purge -y mariadb* mysql* libmariadb* 2>/dev/null || true
sudo rm -rf /etc/mysql /var/lib/mysql /var/log/mysql /run/mysqld ~/.my.cnf

echo "📝 Исправляем права и структуру MariaDB..."
sudo mkdir -p /var/lib/mysql /run/mysqld
sudo chown -R mysql:mysql /var/lib/mysql /run/mysqld /etc/mysql
sudo chmod -R 750 /var/lib/mysql
sudo chmod -R 755 /run/mysqld

echo "▶️  Запуск MariaDB..."
sudo systemctl enable --now mariadb
sleep 4

echo "🔐 Настройка MariaDB (root без пароля)..."
sudo mysql -e "ALTER USER 'root'@'localhost' IDENTIFIED BY '';" 2>/dev/null || true

# ====================== БАЗА ДАННЫХ ======================
echo ""
echo "🗄️  Создание базы данных для Webasyst"
read -p "   Введите имя базы данных: " DB_NAME
read -p "   Введите имя пользователя БД: " DB_USER
read -s -p "   Введите пароль пользователя БД: " DB_PASS
echo
read -p "   Хост (по умолчанию localhost): " DB_HOST
DB_HOST=${DB_HOST:-localhost}

sudo mysql -u root <<EOF
CREATE DATABASE IF NOT EXISTS \`$DB_NAME\` CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
CREATE USER IF NOT EXISTS '$DB_USER'@'$DB_HOST' IDENTIFIED BY '$DB_PASS';
GRANT ALL PRIVILEGES ON \`$DB_NAME\`.* TO '$DB_USER'@'$DB_HOST';
FLUSH PRIVILEGES;
EOF

echo "✅ База данных успешно создана!"

# ====================== КОПИРОВАНИЕ ПРОЕКТА ======================
echo ""
echo "📂 Копирование файлов сайта в /var/www/web-magaz ..."
sudo mkdir -p /var/www/web-magaz
sudo cp -r * /var/www/web-magaz/ 2>/dev/null || true

echo "📁 Настройка прав доступа..."
sudo chown -R www-data:www-data /var/www/web-magaz
sudo find /var/www/web-magaz -type d -exec chmod 755 {} \;
sudo find /var/www/web-magaz -type f -exec chmod 644 {} \;

# ====================== НАСТРОЙКА NGINX ======================
echo "🌐 Настройка веб-сервера Nginx..."

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

    root /var/www/web-magaz;
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

echo "🔍 Проверка конфигурации Nginx..."
sudo nginx -t && sudo systemctl restart nginx php8.3-fpm

echo ""
echo "========================================================"
echo "   🎉 УСТАНОВКА ЗАВЕРШЕНА УСПЕШНО!"
echo "========================================================"
echo ""
echo "🌍 Адрес вашего сайта: http://$(curl -s ifconfig.me || hostname -I | awk '{print \$1}')"
echo ""
echo "📋 Данные для установки:"
echo "   Сервер:          $DB_HOST"
echo "   Имя базы данных: $DB_NAME"
echo "   Пользователь:    $DB_USER"
echo "   Пароль:          $DB_PASS"
echo ""
echo "✅ Откройте сайт в браузере и нажмите «Установить»"
echo "✅ Заполните данные базы данных и нажмите «Подключиться»"
echo "========================================================"
