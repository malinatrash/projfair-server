<?php

use App\Http\Middleware\ApiAuth;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Campus'], function () {
    Route::get('/campus_auth', 'LoginController'); // Авторизация через кампус
    Route::get('/campus_out', 'LogoutController'); // Выход из аккаунта
});

Route::get('{page}', function () {
    return view('index');
})->where('page', '.*');
