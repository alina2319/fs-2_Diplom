## Дипломная работа по профессии "Веб-разработчик"
## Создание «информационной системы для администрирования залов, сеансов и предварительного бронирования билетов»
## 1. Технические характеристики
Версия php - 8.3 <br />
Версия Laravel Framework 10.x <br />
База данных - SQLite <br />

## 2. Для запуска необходимо выполнить:
1. Склонировать репозиторий командой git clone.
2. В папке с проектом запустить команду composer install.
3. В папке с проектом запустить команду npm install.
4. Переименовать файл .env.example в .env.
5. Создать файл database.sqlite в папке database
6. Выполнить php artisan migrate
7. Выполнить php artisan key:generate
8. Выполнить php artisan migrate:fresh --seed для заполнения базы данными.
9. Запустить сервер php artisan serve

## 3. Клиентская часть
localhost

## 4. Админская часть
localhost/admin <br />
Логин: admin@mail.ru <br />
Пароль: admin <br />
