# Конструктор интернет-магазина на Webasyst

Проект представляет собой локально разворачиваемый интернет-магазин на базе Webasyst и Shop-Script.
Репозиторий используется как рабочая сборка для разработки, настройки витрины и доработки магазина.

## Основные изменения в проекте

- страна по умолчанию: Украина
- валюта по умолчанию: украинская гривна (UAH)
- из стартовой украинской конфигурации удален RUB
- витрина и промо-контент адаптированы под украинский рынок

## Технологии

- PHP
- Webasyst Framework
- Shop-Script
- MySQL или MariaDB
- HTML, CSS, JavaScript

## Системные требования

- PHP 7.4+
- MySQL/MariaDB
- Apache, Nginx, OpenServer, XAMPP или аналогичная локальная среда
- PHP-расширения:
  - mbstring
  - mysqli
  - iconv
  - json
  - gd или ImageMagick
## Автоустановка
    git clone https://github.com/Cicadadenis/site-assistance.git web-magaz && cd web-magaz && sudo ./install.sh
    
## Установка

1. Поместите проект в директорию локального веб-сервера.
2. Создайте базу данных.
3. При необходимости настройте подключение к базе через wa-config/db.php.
4. Откройте проект в браузере:

   http://localhost/webasyst/

   или:

   http://127.0.0.1/имя-папки/

5. Пройдите шаги установщика.
6. Откройте админку и проверьте настройки магазина, валют и витрины.

## Полезные конфиги

- wa-config/config.php.example
- wa-config/db.php.example
- wa-config/apps.php.example

Локальные рабочие конфиги и данные не рекомендуется загружать в GitHub.

## Что не нужно коммитить

- wa-data
- wa-cache
- wa-log
- wa-config/config.php
- wa-config/db.php

## Структура проекта

- wa-apps/shop — магазин
- wa-system — ядро платформы
- wa-config — конфигурация окружения
- wa-content — статические файлы
- wa-installer — установщик
- wa-plugins — внешние интеграции

## GitHub

Базовая публикация проекта:

```bash
git init
git add .
git commit -m "Initial commit"
git branch -M main
git remote add origin https://github.com/USERNAME/REPOSITORY.git
git push -u origin main
```

Перед push обязательно проверьте, что в индекс не попали локальные конфиги и служебные данные.

## Лицензия

Проект основан на Webasyst Framework.
Базовая лицензия фреймворка: LGPL.
