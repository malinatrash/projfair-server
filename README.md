# Инструкция по локальному разворачиванию проекта у себя на компьютере:
1 Скачайте и установите xampp https://www.apachefriends.org/xampp-files/8.1.6/xampp-windows-x64-8.1.6-0-VS16-installer.exe
1.1 После установки запустите mysql и apache
1.2 Нажмите admin напротив mysql, откроется phpmyadmin
1.3 Создайте базу данных projectfair
2 Скачайте composer https://getcomposer.org/Composer-Setup.exe
2.1 В установщике укажите путь до php.exe в папке xampp/php
3 Склонируйте проект https://github.com/CoolSheff131/projectfair
3.1 Поместите файл .env в папку проекта
3.2 запустите команду composer install для загрузки зависимостей
3.3 запустите команду php artisan migrate для создания таблиц БД
3.4 запустите команду php artisan db:seed для заполнения БД
3.5 запустите команду php artisan serve для запуска сервера
4 Перейдите по адресу 127.0.0.1:8000