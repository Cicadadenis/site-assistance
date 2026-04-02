#!/data/data/com.termux/files/usr/bin/bash
# =============================================
# 🚀 LEMP + Webasyst (Termux)
# Nginx + MariaDB + PHP-FPM
# =============================================

set -e

PREFIX="/data/data/com.termux/files/usr"
MYSQL_DATADIR="${PREFIX}/var/lib/mysql"
MYSQL_SOCK="${PREFIX}/var/run/mysqld.sock"
TARGET_PORT=8090

echo "🔄 Обновление пакетов..."
pkg update -y && pkg upgrade -y

echo "📦 Установка пакетов..."
pkg install -y nginx mariadb php php-fpm git unzip curl

# =============================================
# 🧹 Очистка процессов
# =============================================
echo "🧹 Очистка старых процессов..."
pkill -9 nginx 2>/dev/null || true
pkill -9 php-fpm 2>/dev/null || true
pkill -9 mariadbd 2>/dev/null || true
pkill -9 mysqld 2>/dev/null || true
sleep 2

# =============================================
# ⚙️ PHP CONFIG (conf.d)
# =============================================
echo "⚙️ Настройка PHP конфигурации..."

mkdir -p "${PREFIX}/etc/php/conf.d"

cat > "${PREFIX}/etc/php/conf.d/custom.ini" <<EOF
error_reporting = E_ALL & ~E_DEPRECATED & ~E_STRICT
display_errors = Off
display_startup_errors = Off
log_errors = On
date.timezone = UTC
EOF

# =============================================
# 🐘 MariaDB
# =============================================
echo "📦 Настройка MariaDB..."

mkdir -p "${PREFIX}/var/run/mysqld"
chmod 777 "${PREFIX}/var/run/mysqld"

if [ ! -d "${MYSQL_DATADIR}/mysql" ]; then
    echo "🛠 Инициализация базы данных..."
    mysql_install_db --user=$(whoami) --datadir="${MYSQL_DATADIR}" || true
fi

echo "▶️ Запуск MariaDB временно..."
mysqld_safe --user=$(whoami) --datadir="${MYSQL_DATADIR}" --socket="${MYSQL_SOCK}" &
sleep 8

echo "🔐 Настройка root..."
mariadb -u root <<EOF
ALTER USER 'root'@'localhost' IDENTIFIED BY '';
FLUSH PRIVILEGES;
EOF

pkill -9 mysqld 2>/dev/null || true
sleep 3

echo "▶️ Запуск MariaDB в нормальном режиме..."
mysqld_safe --user=$(whoami) --datadir="${MYSQL_DATADIR}" &
sleep 6

# =============================================
# 🗄️ База данных Webasyst
# =============================================
echo "🗄️ Создание базы данных..."

read -p "Введите имя базы данных: " DB_NAME
read -p "Введите имя пользователя БД: " DB_USER
read -s -p "Введите пароль пользователя БД: " DB_PASS
echo
read -p "Хост (Enter = 127.0.0.1): " DB_HOST
DB_HOST=${DB_HOST:-127.0.0.1}

mariadb -u root <<EOF
CREATE DATABASE IF NOT EXISTS \`$DB_NAME\` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
CREATE USER IF NOT EXISTS '$DB_USER'@'$DB_HOST' IDENTIFIED BY '$DB_PASS';
GRANT ALL PRIVILEGES ON \`$DB_NAME\`.* TO '$DB_USER'@'$DB_HOST';
FLUSH PRIVILEGES;
EOF

echo "✅ База данных создана"

# =============================================
# 📁 Проект
# =============================================
SRC_DIR="$PWD"
TARGET_DIR="$HOME/web-magaz"

echo "📁 Копирование проекта..."
rm -rf "$TARGET_DIR" 2>/dev/null || true
mkdir -p "$TARGET_DIR"
cp -a "$SRC_DIR"/. "$TARGET_DIR"/

chown -R $(whoami) "$TARGET_DIR"
chmod -R 755 "$TARGET_DIR"
find "$TARGET_DIR" -type f -exec chmod 644 {} \;

# =============================================
# 🌐 Nginx
# =============================================
echo "🌐 Настройка Nginx..."

mkdir -p "${PREFIX}/etc/nginx/snippets"

cat > "${PREFIX}/etc/nginx/snippets/fastcgi-php.conf" <<EOF
fastcgi_split_path_info ^(.+\.php)(/.+)$;
try_files \$fastcgi_script_name =404;
fastcgi_buffers 16 16k;
fastcgi_buffer_size 32k;
fastcgi_read_timeout 300;
include fastcgi_params;
fastcgi_param SCRIPT_FILENAME \$document_root\$fastcgi_script_name;
fastcgi_param PATH_INFO \$fastcgi_path_info;
EOF

mkdir -p "${PREFIX}/etc/nginx/sites-available"
mkdir -p "${PREFIX}/etc/nginx/sites-enabled"

cat > "${PREFIX}/etc/nginx/sites-available/webasyst" <<EOF
server {
    listen ${TARGET_PORT};
    server_name _;
    root $TARGET_DIR;
    index index.php index.html;

    location / {
        try_files \$uri \$uri/ /index.php?\$query_string;
    }

    location ~ \.php$ {
        include snippets/fastcgi-php.conf;
        fastcgi_pass unix:${PREFIX}/var/run/php-fpm.sock;
    }

    location ~ /\. {
        deny all;
    }
}
EOF

ln -sf "${PREFIX}/etc/nginx/sites-available/webasyst" "${PREFIX}/etc/nginx/sites-enabled/default"

# Подключаем sites-enabled
if ! grep -q "sites-enabled" "${PREFIX}/etc/nginx/nginx.conf"; then
    sed -i '/http {/a \    include sites-enabled/*;' "${PREFIX}/etc/nginx/nginx.conf"
fi

# Меняем основной порт nginx.conf если есть 8080
sed -i "s/listen[[:space:]]\+8080;/listen ${TARGET_PORT};/g" "${PREFIX}/etc/nginx/nginx.conf" || true

echo "🔍 Проверка nginx..."
nginx -t

# =============================================
# 🚀 Запуск сервисов
# =============================================
echo "🚀 Запуск сервисов..."

pkill nginx 2>/dev/null || true
pkill php-fpm 2>/dev/null || true

php-fpm -D
sleep 2
nginx

# =============================================
# 🌍 Информация
# =============================================
MYIP=$(curl -4 -s ifconfig.me 2>/dev/null || echo "127.0.0.1")

echo ""
echo "✅ Установка завершена!"
echo "🌍 Сайт: http://$MYIP:${TARGET_PORT}"
echo ""
echo "Данные БД:"
echo "Server: 127.0.0.1"
echo "User: $DB_USER"
echo "Password: $DB_PASS"
echo "Database: $DB_NAME"
