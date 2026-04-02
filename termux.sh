#!/data/data/com.termux/files/usr/bin/bash

set -e

PREFIX="/data/data/com.termux/files/usr"
MYSQL_DATADIR="${PREFIX}/var/lib/mysql"
MYSQL_SOCK="${PREFIX}/var/run/mysqld.sock"

# Порт (можно изменить)
TARGET_PORT=8090

echo "🔄 Обновление пакетов..."
pkg update -y && pkg upgrade -y

echo "📦 Установка пакетов..."
pkg install -y nginx mariadb php php-fpm git unzip curl

# =============================================
# 🧹 Очистка процессов
# =============================================
pkill -9 nginx 2>/dev/null || true
pkill -9 php-fpm 2>/dev/null || true
pkill -9 mariadbd 2>/dev/null || true
pkill -9 mysqld 2>/dev/null || true
sleep 2

# =============================================
# 🌍 Получаем IP
# =============================================
MYIP=$(curl -4 -s ifconfig.me 2>/dev/null || echo "127.0.0.1")
echo "🌍 Ваш IP: $MYIP"

# =============================================
# ⚙️ PHP config
# =============================================
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
mkdir -p "${PREFIX}/var/run/mysqld"
chmod 777 "${PREFIX}/var/run/mysqld"

if [ ! -d "${MYSQL_DATADIR}/mysql" ]; then
    mysql_install_db --user=$(whoami) --datadir="${MYSQL_DATADIR}" || true
fi

mysqld_safe --user=$(whoami) --datadir="${MYSQL_DATADIR}" --socket="${MYSQL_SOCK}" &
sleep 8

mariadb -u root <<EOF
ALTER USER 'root'@'localhost' IDENTIFIED BY '';
FLUSH PRIVILEGES;
EOF

pkill -9 mysqld 2>/dev/null || true
sleep 3

mysqld_safe --user=$(whoami) --datadir="${MYSQL_DATADIR}" &
sleep 6

# =============================================
# 🗄️ БД
# =============================================
read -p "DB name: " DB_NAME
read -p "DB user: " DB_USER
read -s -p "DB pass: " DB_PASS
echo
read -p "Host (Enter = 127.0.0.1): " DB_HOST
DB_HOST=${DB_HOST:-127.0.0.1}

mariadb -u root <<EOF
CREATE DATABASE IF NOT EXISTS \`$DB_NAME\` CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
CREATE USER IF NOT EXISTS '$DB_USER'@'$DB_HOST' IDENTIFIED BY '$DB_PASS';
GRANT ALL PRIVILEGES ON \`$DB_NAME\`.* TO '$DB_USER'@'$DB_HOST';
FLUSH PRIVILEGES;
EOF

# =============================================
# 📁 Проект
# =============================================
TARGET_DIR="$HOME/web-magaz"
rm -rf "$TARGET_DIR" 2>/dev/null || true
mkdir -p "$TARGET_DIR"
cp -a "$PWD"/. "$TARGET_DIR"/

chown -R $(whoami) "$TARGET_DIR"
chmod -R 755 "$TARGET_DIR"
find "$TARGET_DIR" -type f -exec chmod 644 {} \;

# =============================================
# 🌐 Nginx
# =============================================
mkdir -p "${PREFIX}/etc/nginx/snippets"
mkdir -p "${PREFIX}/etc/nginx/sites-available"
mkdir -p "${PREFIX}/etc/nginx/sites-enabled"

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

cat > "${PREFIX}/etc/nginx/sites-available/webasyst" <<EOF
server {
    listen ${TARGET_PORT};
    server_name ${MYIP};

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

if ! grep -q "sites-enabled" "${PREFIX}/etc/nginx/nginx.conf"; then
    sed -i '/http {/a \    include sites-enabled/*;' "${PREFIX}/etc/nginx/nginx.conf"
fi

# fallback порт в nginx.conf
sed -i "s/listen[[:space:]]\+8080;/listen ${TARGET_PORT};/g" "${PREFIX}/etc/nginx/nginx.conf" 2>/dev/null || true

nginx -t

# =============================================
# 🚀 Запуск
# =============================================
php-fpm -D
sleep 2
nginx

# =============================================
# 🎯 Результат
# =============================================
echo ""
echo "✅ Установка завершена!"
echo "🌍 Сайт: http://$MYIP:${TARGET_PORT}"
echo ""
echo "DB:"
echo "User: $DB_USER"
echo "Pass: $DB_PASS"
echo "DB:   $DB_NAME"
