Краткая инструкция для разработчиков: как развернуть, настроить и запустить проект за минуты.

1) Требования:
PHP >= 8.1 (расширения: pdo, pdo_mysql, mbstring, json, curl)
Composer >= 2.x
MySQL/MariaDB


2) Установка
git clone https://github.com/<ORG>/<REPO>.git
cd app
composer install

3) Настройка окружения:

Скопируйте пример конфигурации и заполните переменные:

cp .env.example .env

4) Инициализация БД

docker exec -it mysql-db mysql -uroot -prootpass -e "CREATE DATABASE IF NOT EXISTS appdb CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;"
[ -f database/schema.sql ] && docker exec -i mysql-db mysql -uappuser -papppass appdb < database/schema.sql
[ -f database/seed.sql ]   && docker exec -i mysql-db mysql -uappuser -papppass appdb < database/seed.sql

5) Запуск в Docker

docker compose up -d


6) Проверка работоспособности
Docker: http://localhost:8000, phpMyAdmin — http://localhost:8080

7) Скрипты разработчика
composer cs       # проверка стиля (phpcs, PSR-12)
composer cs:fix   # автофиксы (phpcbf)
composer stan     # статанализ (phpstan)
