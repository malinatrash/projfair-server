# Инструкция по локальному разворачиванию проекта у себя на компьютере:

1.	Скачайте и установите xampp https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/8.1.17/xampp-windows-x64-8.1.17-0-VS16-installer.exe/download?use_mirror=deac-riga&download=&failedmirror=kumisystems.dl.sourceforge.net;
2.	После установки запустите mysql и apache;
3.	Нажмите admin напротив mysql, откроется phpmyadmin;
4.	Создайте базу данных projectfair;
5.	Скачайте composer https://getcomposer.org/Composer-Setup.exe;
6.	В установщике укажите путь до php.exe в папке xampp/php;
7.	Склонируйте проект https://github.com/CoolSheff131/projectfair;
8.	Скопируйте файл .env.example в папку с проектом и переименуйте его в  файл .env;
9.	Запустите команду php artisan key:generate;
10.	Запустите команду composer install для загрузки зависимостей
11.	Запустите команду php artisan migrate для создания таблиц БД
12.	Запустите команду php artisan db:seed для заполнения БД
13.	Запустите команду php artisan serve для запуска сервера
14.	Перейдите по адресу 127.0.0.1:8000 (localhost)
