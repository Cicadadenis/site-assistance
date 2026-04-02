#!/data/data/com.termux/files/usr/bin/bash
# =============================================
# 🚀 LEMP + Webasyst (Termux Stable Version)
# =============================================

set -e

PREFIX="/data/data/com.termux/files/usr"

MYSQL_DATADIR="${PREFIX}/var/lib/mysql"
MYSQL_SOCK="${PREFIX}/var/run/mysqld.sock"

SITE_SRC="$HOME/site-assistance"
TARGET_DIR="$HOME/web-magaz"

PORT=8090   # ← авто-порт (можешь поменять)

echo "🔄 Обновление пакетов..."
pkg update -y && pkg upgrade -y

echo "📦 Установка пакетов..."
pkg install -y nginx mariadb php php-fpm git unzip curl

# ================= CLEAN =================

echo "🧹 Очистка процессов..."
pkill -9 nginx 2>/dev/null || true
pkill -9 php-fpm 2>/dev/null || true
pkill -9 mysqld 2>/dev/null || true
pkill -9 mariadbd 2>/dev/null || true

sleep 3

# ================= MARIADB =================

echo "📦 Настройка MariaDB..."

mkdir -p "${PREFIX}/var/run/mysqld"
chmod 777 "${PREFIX}/var/run/mysqld"

if [ ! -d "${MYSQL_DATADIR}/mysql" ]; then
    echo "🛠 Инициализация БД..."
    mysql_install_db --user=$(whoami) --datadir="${MYSQL_DATADIR}" || true
fi

mysqld --skip-grant-tables --skip-networking \
  --user=$(whoami) \
  --datadir="${MYSQL_DATADIR}" \
  --socket="${MYSQL_SOCK}" &

MYSQL_PID=$!
sleep 6

mariadb -u root --socket="${MYSQL_SOCK}" <<EOF
UPDATE mysql.global_priv
SET Priv = JSON_SET(
    Priv,
    '$.authentication_string', '',
    '$.plugin', 'mysql_native_password'
)
WHERE User='root' AND Host='localhost';

FLUSH PRIVILEGES;
EOF

kill $MYSQL_PID 2>/dev/null || true
pkill -9 mysqld 2>/dev/null || true
sleep 3

mysqld_safe --user=$(whoami) --datadir="${MYSQL_DATADIR}" &
sleep 6

echo "✅ MariaDB готова"

# ================= DATABASE =================

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

echo "✅ База создана"

# ================= PROJECT =================

echo "📁 Копирование сайта..."

rm -rf "$TARGET_DIR"
mkdir -p "$TARGET_DIR"

if [ -d "$SITE_SRC" ]; then
    cp -a "$SITE_SRC"/. "$TARGET_DIR"/
else
    echo "❌ Папка сайта не найдена: $SITE_SRC"
    exit 1
fi

echo "🔧 Права..."
chown -R $(whoami) "$TARGET_DIR"
chmod -R 755 "$TARGET_DIR"
find "$TARGET_DIR" -type f -exec chmod 644 {} \;

# ================= NGINX =================

echo "🌐 Настройка Nginx..."

mkdir -p "${PREFIX}/etc/nginx/sites-available"
mkdir -p "${PREFIX}/etc/nginx/sites-enabled"
mkdir -p "${PREFIX}/etc/nginx/snippets"

# FastCGI config
tee "${PREFIX}/etc/nginx/snippets/fastcgi-php.conf" > /dev/null <<'EOF'
fastcgi_split_path_info ^(.+\.php)(/.+)$;
try_files $fastcgi_script_name =404;
include fastcgi_params;
fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
EOF

# Site config
tee "${PREFIX}/etc/nginx/sites-available/webasyst" > /dev/null <<EOF
server {
    listen ${PORT};
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

ln -sf "${PREFIX}/etc/nginx/sites-available/webasyst" \
       "${PREFIX}/etc/nginx/sites-enabled/default"

# подключение sites-enabled
if ! grep -q "sites-enabled" "${PREFIX}/etc/nginx/nginx.conf"; then
    sed -i '/http {/a \    include sites-enabled/*;' "${PREFIX}/etc/nginx/nginx.conf"
fi

# ⚠️ авто-исправление listen 8080 в nginx.conf
sed -i "s/listen       8080;/listen       ${PORT};/g" "${PREFIX}/etc/nginx/nginx.conf"

echo "🔍 Проверка nginx..."
nginx -t

# ================= START =================

echo "▶️ Запуск сервисов..."

php-fpm -D
sleep 2
nginx

echo "✅ Готово!"

IP=$(curl -4 -s ifconfig.me 2>/dev/null || echo "127.0.0.1")

echo ""
echo "🌍 Сайт: http://$IP:$PORT"
echo ""
echo "DB:"
echo "User: $DB_USER"
echo "Pass: $DB_PASS"
echo "DB:   $DB_NAME"
