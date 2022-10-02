<?php

use App\Http\Middleware\AdminApiAuth;
use App\Http\Middleware\ApiAuth;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => 'admin', 'prefix' => 'admin'], function () {
    Route::get('/skill', App\Http\Controllers\Admin\Skill\IndexController::class);
});

Route::group(['middleware' => 'admin', 'prefix' => 'admin'], function () {
    Route::get('/Institute', App\Http\Controllers\Admin\Institute\IndexController::class);
});

Route::group(['namespace' => 'Supervisor', 'prefix' => 'supervisors'], function () {
    //Route::post('/', 'StoreController');
    Route::get('/', 'IndexController');
    Route::get('/names', 'NamesController');
    Route::get('/{supervisor}', 'ShowController');
    //Route::patch('/{supervisor}', 'UpdateController');
    //Route::delete('/{supervisor}', 'DeleteController');
});

Route::group(['namespace' => 'Project', 'prefix' => 'projects'], function () {
    // Route::post('/', 'StoreController');
    Route::get('/', 'IndexController');
    Route::get('/filter', 'FilterController');
    Route::get('/{project}', 'ShowController');
    // Route::patch('/{project}', 'UpdateController');
    // Route::delete('/{project}', 'DeleteController');
});



Route::group(['namespace' => 'Type', 'prefix' => 'types'], function () {
    // Route::post('/', 'StoreController');
    Route::get('/', 'IndexController');
    Route::get('/{type}', 'ShowController');
    // Route::patch('/{type}', 'UpdateController');
    // Route::delete('/{type}', 'DeleteController');
});

Route::group(['namespace' => 'State', 'prefix' => 'states'], function () {
    // Route::post('/', 'StoreController');
    Route::get('/', 'IndexController');
    Route::get('/{state}', 'ShowController');
    // Route::patch('/{state}', 'UpdateController');
    // Route::delete('/{state}', 'DeleteController');
});

Route::group(['namespace' => 'Skill', 'prefix' => 'skills'], function () {
    // Route::post('/', 'StoreController');
    Route::get('/', 'IndexController');
    Route::get('/{skill}', 'ShowController');
    // Route::patch('/{skill}', 'UpdateController');
    // Route::delete('/{skill}', 'DeleteController');
});

//Route::get('/supervisor/projects/{id}/participation', 'Supervisor\\ParticipationsOnProjectController')->where('id', '[0-9]+')->middleware(ApiAuth::class);
//Route::get('/supervisor/student/{id}', 'Supervisor\\GetCandidateByIdController')->where('id', '[0-9]+')->middleware(ApiAuth::class);
//Route::put('/supervisor', 'Supervisor\\UpdateController')->middleware(ApiAuth::class);
//Route::post('/supervisor/projects', 'Supervisor\\CreateProjectController')->middleware(ApiAuth::class);
//Route::put('/supervisor/projects/{id}', 'Supervisor\\UpdateProjectController')->where('id', '[0-9]+')->middleware(ApiAuth::class);
//Route::get('/supervisor/projects/{id}', 'Supervisor\\GetProjectByIdController')->middleware(ApiAuth::class);
//Route::delete('/participations/{id}', 'Candidate\\DeleteParticipationController')->middleware(ApiAuth::class);

Route::group(['namespace' => 'Participation', 'prefix' => 'participations'], function () {
    //Route::post('/', 'StoreController');
    // Route::get('/', 'IndexController');
    //Route::get('/{participation}', 'ShowController');
    Route::patch('/{participation}', 'UpdateController')->middleware(ApiAuth::class); // Изменение заявки
    Route::delete('/{participation}', 'DeleteController')->middleware(ApiAuth::class); // Удаление заявки
});

Route::middleware(['apiAuth'])->group(function () {
    Route::get('/participations', 'Candidate\\ParticipationsController');
    Route::post('/participations/{project}', 'Candidate\\CreateParticipationController'); // Создание заявки
    Route::get('/participations_deadline', 'Participation\\DeadLineController'); // Получение дедлайна подачи заявки
    Route::get('/supervisor/projects', 'Supervisor\\ProjectsController');
    Route::get('/supervisor/projects/names', 'Supervisor\\ProjectNamesController');
    Route::get('/participations/projects', 'Candidate\\ProjectsController');
    Route::get('/candidate/skills', 'Candidate\\SkillsController');
    Route::get('/supervisor/participation', 'Supervisor\\ParticipationsController');
    Route::get('/supervisor/participation/{id}', 'Supervisor\\GetParticipationByIdController')->where('id', '[0-9]+');
    Route::get('/supervisor', 'Supervisor\\GetController');
    Route::put('/candidate', 'Candidate\\MeUpdateController');
    Route::get('/candidate', 'Candidate\\MeController');
});





Route::group(['namespace' => 'Candidate', 'prefix' => 'candidates'], function () {
    //Route::post('/', 'StoreController');
    Route::get('/', 'IndexController');
    Route::get('/{candidate}', 'ShowController');
    //Route::patch('/{candidate}', 'UpdateController');
    //Route::delete('/{candidate}', 'DeleteController');
});

Route::group(['namespace' => 'Institute', 'prefix' => 'institutes'], function () {
    Route::get('/', 'IndexController');
    Route::get('/getBySpecialityName/{specialityName}', 'GetBySpecialityController');
    Route::get('/isInSameInstitute/{specialityName1}/{specialityName2}', 'SameInstituteController');
    Route::get('/{institute}', 'ShowController');;
});
