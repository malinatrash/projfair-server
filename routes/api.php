<?php

use App\Http\Middleware\ApiAuth;
use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Admin', 'prefix' => 'admin'], function () {
    Route::group(['namespace' => 'Skill', 'prefix' => 'skill'], function () {
        Route::get('/', 'IndexController');
    });
})->middleware(AdminApiAuth::class);

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

Route::group(['namespace' => 'Participation', 'prefix' => 'participations'], function () {
    //Route::post('/', 'StoreController');
    // Route::get('/', 'IndexController');
    //Route::get('/{participation}', 'ShowController');
    Route::patch('/{participation}', 'UpdateController')->middleware(ApiAuth::class); // Изменение заявки
    Route::delete('/{participation}', 'DeleteController')->middleware(ApiAuth::class); // Удаление заявки
});
Route::get('/participations', 'Candidate\\ParticipationsController')->middleware(ApiAuth::class);
//Route::delete('/participations/{id}', 'Candidate\\DeleteParticipationController')->middleware(ApiAuth::class);
Route::post('/participations/{project}', 'Candidate\\CreateParticipationController')->middleware(ApiAuth::class); // Создание заявки
Route::get('/participations_deadline', 'Participation\\DeadLineController'); // Получение дедлайна подачи заявки


//Route::post('/supervisor/projects', 'Supervisor\\CreateProjectController')->middleware(ApiAuth::class);
Route::get('/supervisor/projects', 'Supervisor\\ProjectsController')->middleware(ApiAuth::class);
//Route::put('/supervisor/projects/{id}', 'Supervisor\\UpdateProjectController')->where('id', '[0-9]+')->middleware(ApiAuth::class);
//Route::get('/supervisor/projects/{id}', 'Supervisor\\GetProjectByIdController')->middleware(ApiAuth::class);
Route::get('/supervisor/projects/names', 'Supervisor\\ProjectNamesController')->middleware(ApiAuth::class);
Route::get('/participations/projects', 'Candidate\\ProjectsController')->middleware(ApiAuth::class);
Route::get('/candidate/skills', 'Candidate\\SkillsController')->middleware(ApiAuth::class);



Route::get('/supervisor/participation', 'Supervisor\\ParticipationsController')->middleware(ApiAuth::class);
Route::get('/supervisor/participation/{id}', 'Supervisor\\GetParticipationByIdController')->where('id', '[0-9]+')->middleware(ApiAuth::class);
//Route::get('/supervisor/projects/{id}/participation', 'Supervisor\\ParticipationsOnProjectController')->where('id', '[0-9]+')->middleware(ApiAuth::class);
//Route::get('/supervisor/student/{id}', 'Supervisor\\GetCandidateByIdController')->where('id', '[0-9]+')->middleware(ApiAuth::class);
Route::get('/supervisor', 'Supervisor\\GetController')->middleware(ApiAuth::class);
//Route::put('/supervisor', 'Supervisor\\UpdateController')->middleware(ApiAuth::class);




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
Route::put('/candidate', 'Candidate\\MeUpdateController')->middleware(ApiAuth::class);
Route::get('/candidate', 'Candidate\\MeController')->middleware(ApiAuth::class);
