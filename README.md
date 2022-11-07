# Инструкция по локальному разворачиванию проекта у себя на компьютере:

1. Скачайте и установите xampp https://www.apachefriends.org/xampp-files/8.1.6/xampp-windows-x64-8.1.6-0-VS16-installer.exe
2. После установки запустите mysql и apache
3. Нажмите admin напротив mysql, откроется phpmyadmin
4. Создайте базу данных projectfair
5. Скачайте composer https://getcomposer.org/Composer-Setup.exe
6. В установщике укажите путь до php.exe в папке xampp/php
7. Склонируйте проект https://github.com/CoolSheff131/projectfair
8. Поместите файл .env в папку проекта
9. запустите команду composer install для загрузки зависимостей
10. запустите команду php artisan migrate для создания таблиц БД
11. запустите команду php artisan db:seed для заполнения БД
12. запустите команду php artisan serve для запуска сервера
13. Перейдите по адресу 127.0.0.1:8000
