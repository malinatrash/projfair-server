<?php

use App\Http\Middleware\ApiAuth;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Supervisor', 'prefix' => 'supervisors'], function () {
    Route::post('/', 'StoreController');
    Route::get('/', 'IndexController');
    Route::get('/{supervisor}', 'ShowController');
    Route::patch('/{supervisor}', 'UpdateController');
    Route::delete('/{supervisor}', 'DeleteController');

    //     Route::post('/register', 'RegisterController'); // Register Supervisor
    //     Route::post('/login', 'LoginController'); // Login Supervisor

    //     Route::get('/supervisor/projects', 'Api\v1\SupervisorController@getProjects');
    //     Route::get('/supervisor/projects/{id}', 'Api\v1\SupervisorController@getProjectById');
    //     Route::get('/supervisor/projects/names', 'Api\v1\SupervisorController@getNames');
    //     Route::get('/supervisor/participation', 'Api\v1\SupervisorController@getParticipations');
    //     Route::get('/supervisor/participation/{id}', 'Api\v1\SupervisorController@getPaticipate')->where('id', '[0-9]+');
    //     Route::delete('/supervisor/participation/{id}', 'Api\v1\SupervisorController@removeParticipate')->where('id', '[0-9]+');
    //     Route::get('/supervisor/projects/{id}/participation', 'Api\v1\SupervisorController@getParicipateProject')->where('id', '[0-9]+');
    //     Route::get('/supervisor', 'Api\v1\SupervisorController@get');
    //     Route::put('/supervisor', 'Api\v1\SupervisorController@updateAbout');
    //     Route::get('/supervisors/names', 'Api\v1\SupervisorController@names');
});

Route::group(['namespace' => 'Project', 'prefix' => 'projects'], function () {
    Route::post('/', 'StoreController');
    Route::get('/', 'IndexController');
    Route::get('/filter', 'FilterController');
    Route::get('/{project}', 'ShowController');
    Route::patch('/{project}', 'UpdateController');
    Route::delete('/{project}', 'DeleteController');

    // Route::post('/project', 'Api\v1\ProjectController@store'); // Add project
    // Route::get('/supervisorprojects', 'Api\v1\ProjectController@supervisorProjects'); // Get supervisor's project
    // Route::post('/supervisor/projects', 'Api\v1\ProjectController@create');
    // Route::put('/supervisor/projects/{id}', 'Api\v1\ProjectController@update')->where('id', '[0-9]+');
});



Route::group(['namespace' => 'Type', 'prefix' => 'types'], function () {
    Route::post('/', 'StoreController');
    Route::get('/', 'IndexController');
    Route::get('/{type}', 'ShowController');
    Route::patch('/{type}', 'UpdateController');
    Route::delete('/{type}', 'DeleteController');
});

Route::group(['namespace' => 'State', 'prefix' => 'states'], function () {
    Route::post('/', 'StoreController');
    Route::get('/', 'IndexController');
    Route::get('/{state}', 'ShowController');
    Route::patch('/{state}', 'UpdateController');
    Route::delete('/{state}', 'DeleteController');
});

Route::group(['namespace' => 'Skill', 'prefix' => 'skills'], function () {
    Route::post('/', 'StoreController');
    Route::get('/', 'IndexController');
    Route::get('/{skill}', 'ShowController');
    Route::patch('/{skill}', 'UpdateController');
    Route::delete('/{skill}', 'DeleteController');
});

Route::group(['namespace' => 'Participation', 'prefix' => 'participations'], function () {
    Route::post('/', 'StoreController');
    // Route::get('/', 'IndexController');
    Route::get('/{participation}', 'ShowController');
    Route::patch('/{participation}', 'UpdateController');
    Route::delete('/{participation}', 'DeleteController');
});



Route::get('/candidate', 'Candidate\\MeController')->middleware(ApiAuth::class); //Получить инфу о себе студенте
Route::put('/candidate', 'Candidate\\MeController')->middleware(ApiAuth::class); //Получить инфу о себе студенте
Route::get('/candidate/skills', 'Candidate\\SkillsController')->middleware(ApiAuth::class); //Получить инфу о себе студенте
Route::get('/participations', 'Candidate\\ParticipationsController')->middleware(ApiAuth::class); //Получить инфу о себе студенте
Route::get('/participations/projects', 'Candidate\\ProjectsController')->middleware(ApiAuth::class); //Получить инфу о себе студенте

Route::group(['namespace' => 'Candidate', 'prefix' => 'candidates'], function () {
    Route::post('/', 'StoreController');
    Route::get('/', 'IndexController');
    Route::get('/{candidate}', 'ShowController');
    Route::patch('/{candidate}', 'UpdateController');
    Route::delete('/{candidate}', 'DeleteController');

    // Route::get('/candidate', 'Api\v1\CandidateController@index');
    // Route::put('/candidate', 'Api\v1\CandidateController@updateInfo');
    // Route::get('/participations', 'Api\v1\CandidateController@participations');
    // Route::get('/participations/projects', 'Api\v1\CandidateController@getProjects');
    // Route::delete('/participations/{id}', 'Api\v1\CandidateController@deleteParticipations')->where('id', '[0-9]+');
    // Route::post('/participations/{id}', 'Api\v1\CandidateController@createParticipation')->where('id', '[0-9]+');
    // Route::get('/supervisor/student/{id}', 'Api\v1\CandidateController@getById')->where('id', '[0-9]+');
    // Route::get('/candidate/skills', 'Api\v1\CandidateController@getSkills');
});

// Route::group(['namespace' => 'Review'], function () {
//     Route::get('/supervisor/student/reviews/{id}', 'Api\v1\ReviewController@get')->where('id', '[0-9]+');
// });





// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
