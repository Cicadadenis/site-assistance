#!/bin/bash

# ------------------------------
# DuckDNS auto-install script
# ------------------------------

echo "==========================================="
echo " DuckDNS Installer"
echo "==========================================="
echo ""
echo "1️⃣ Перейдите на сайт DuckDNS: https://www.duckdns.org"
echo "2️⃣ Зарегистрируйтесь (через GitHub, Google или Twitter)"
echo "3️⃣ Создайте поддомен (например: satana3301)"
echo "4️⃣ Скопируйте свой токен (Token)"
echo ""

# Ввод данных пользователем
read -p "Введите ваш поддомен (например satana3301): " DOMAIN
read -p "Введите ваш токен DuckDNS: " TOKEN

# Создаём папку для скрипта
mkdir -p ~/duckdns
cd ~/duckdns || exit

# Создаём скрипт обновления
cat > duck.sh <<EOL
#!/bin/bash
echo url="https://www.duckdns.org/update?domains=${DOMAIN}&token=${TOKEN}&ip=" | curl -k -o ~/duckdns/duck.log -K -
EOL

# Делаем исполняемым
chmod +x duck.sh

# Настраиваем cron для автообновления каждые 5 минут
(crontab -l 2>/dev/null; echo "*/5 * * * * ~/duckdns/duck.sh >/dev/null 2>&1") | crontab -

echo ""
echo "✅ DuckDNS установлен!"
echo "Ваш поддомен: ${DOMAIN}.duckdns.org"
echo "Скрипт обновления: ~/duckdns/duck.sh"
echo "Cron будет запускать обновление каждые 5 минут."
echo "Чтобы проверить работу, выполните: ~/duckdns/duck.sh"
