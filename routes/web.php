<?php

use App\Http\Middleware\ApiAuth;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Campus'], function () {
    Route::get('/campus_auth', 'LoginController');
    Route::get('/campus_out', 'LogoutController')->middleware(ApiAuth::class);
});

// Route::get('{page}', function () {
//     return view('index');
// })->where('page', '.*');
