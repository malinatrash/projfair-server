<?php

use App\Admin\Controllers\ProjectController;
use App\Admin\Controllers\SkillController;
use App\Admin\Controllers\CandidateController;
use App\Admin\Controllers\SpecialityController;
use App\Admin\Controllers\ProjectParticipationController;
use App\Admin\Controllers\ProjectSupervisorRoleController;
use App\Admin\Controllers\ProjectSupervisorController;
use App\Admin\Controllers\SupervisorController;
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
    $router->resource('/candidate', CandidateController::class);
    $router->resource('/participations', ProjectParticipationController::class);
    $router->resource('/projsupervisors', ProjectSupervisorController::class);
    $router->resource('/roles', ProjectSupervisorRoleController::class);
    $router->resource('/supervisors', SupervisorController::class);
    
});
