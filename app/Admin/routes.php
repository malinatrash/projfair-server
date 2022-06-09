<?php

use App\Admin\Controllers\ProjectController;
use App\Admin\Controllers\SkillController;
use App\Admin\Controllers\SpecialityController;
use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->resource('/projects', ProjectController::class);
    $router->resource('/specialities', SpecialityController::class);
    $router->resource('/skills', SkillController::class);
});
