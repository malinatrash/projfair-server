<?php

use App\Http\Middleware\AdminCandidateAuth;
use App\Http\Middleware\CandidateAuth;
use App\Http\Middleware\CandidateAuthProtected;
use Illuminate\Support\Facades\Route;


// --------- ADMIN ROUTES ---------

Route::group(['middleware' => 'adminAuthProtected', 'prefix' => 'admin'], function () {
    Route::get('/skill', App\Http\Controllers\Admin\Skill\IndexController::class);
});

Route::group(['middleware' => 'adminAuthProtected', 'prefix' => 'admin'], function () {
    Route::get('/Institute', App\Http\Controllers\Admin\Institute\IndexController::class);
});


// --------- USER ROUTES ---------


Route::group(['namespace' => 'Supervisor', 'prefix' => 'supervisors'], function () {
    Route::get('/{supervisor}', 'ShowController');
    Route::get('/names', 'NamesController');
    Route::get('/', 'IndexController');
    // Route::post('/', 'StoreController');
    // Route::patch('/{supervisor}', 'UpdateController');
    // Route::delete('/{supervisor}', 'DeleteController');
});

Route::group(['namespace' => 'Project', 'prefix' => 'projects'], function () { // Получения информации о проектах
    Route::get('/filter', 'FilterController')->middleware(CandidateAuth::class); // Получение проектов с фильтрацией. Скрывать данные других институтов если пользователь авторизован
    Route::get('/{project}', 'ShowController'); // Получение информации о проекте
    // Route::delete('/{project}', 'DeleteController');
    // Route::patch('/{project}', 'UpdateController');
    // Route::post('/', 'StoreController');
    // Route::get('/', 'IndexController');
});



Route::group(['namespace' => 'Type', 'prefix' => 'types'], function () { // Получение типов проекта
    Route::get('/{type}', 'ShowController'); // Получение одного типа проекта
    Route::get('/', 'IndexController'); // Получение всех типов проекта
    // Route::delete('/{type}', 'DeleteController');
    // Route::patch('/{type}', 'UpdateController');
    // Route::post('/', 'StoreController');
});

Route::group(['namespace' => 'State', 'prefix' => 'states'], function () { // Получение состояний проекта
    Route::get('/{state}', 'ShowController'); // Получение одного состояния проекта
    Route::get('/', 'IndexController'); // Получение всех состояний проекта
    // Route::delete('/{state}', 'DeleteController');
    // Route::patch('/{state}', 'UpdateController');
    // Route::post('/', 'StoreController');
});

Route::group(['namespace' => 'Skill', 'prefix' => 'skills'], function () {
    Route::get('/', 'IndexController')->middleware(CandidateAuth::class); // Получить данные для фильтрации по навыкам и специальностям. Скрывать данные других институтов если пользователь авторизован
    Route::get('/{skill}', 'ShowController'); // Получить информацию о навыке
    // Route::delete('/{skill}', 'DeleteController');
    // Route::patch('/{skill}', 'UpdateController');
    // Route::post('/', 'StoreController');
});

Route::group(['namespace' => 'Candidate', 'prefix' => 'candidates'], function () {
    Route::get('/{candidate}', 'ShowController'); // Получить информацию о всех студентах
    Route::get('/', 'IndexController'); // Получить информацию о всех студентах
    // Route::delete('/{candidate}', 'DeleteController');
    // Route::patch('/{candidate}', 'UpdateController');
    // Route::post('/', 'StoreController');
});

Route::group(['namespace' => 'Institute', 'prefix' => 'institutes'], function () {
    Route::get('/isInSameInstitute/{specialityName1}/{specialityName2}', 'SameInstituteController'); // Проверка находятся ли две специальности в одном институте
    Route::get('/getBySpecialityName/{specialityName}', 'GetBySpecialityController');  // Получить институты по названию специльности
    Route::get('/{institute}', 'ShowController'); // Получить информацию об институте
    Route::get('/', 'IndexController'); // Получить информацию обо всех институтах
});


// Route::get('/supervisor/projects/{id}/participation', 'Supervisor\\ParticipationsOnProjectController')->where('id', '[0-9]+')->middleware(CandidateAuthProtected::class);
// Route::get('/supervisor/student/{id}', 'Supervisor\\GetCandidateByIdController')->where('id', '[0-9]+')->middleware(CandidateAuthProtected::class);
// Route::put('/supervisor', 'Supervisor\\UpdateController')->middleware(CandidateAuthProtected::class);
// Route::post('/supervisor/projects', 'Supervisor\\CreateProjectController')->middleware(CandidateAuthProtected::class);
// Route::put('/supervisor/projects/{id}', 'Supervisor\\UpdateProjectController')->where('id', '[0-9]+')->middleware(CandidateAuthProtected::class);
// Route::get('/supervisor/projects/{id}', 'Supervisor\\GetProjectByIdController')->middleware(CandidateAuthProtected::class);
// Route::delete('/participations/{id}', 'Candidate\\DeleteParticipationController')->middleware(CandidateAuthProtected::class);

Route::group(['namespace' => 'Participation', 'prefix' => 'participations'], function () {
    Route::delete('/{participation}', 'DeleteController')->middleware(CandidateAuthProtected::class); // Удаление заявки
    Route::patch('/{participation}', 'UpdateController')->middleware(CandidateAuthProtected::class); // Изменение заявки
    // Route::get('/{participation}', 'ShowController');
    // Route::post('/', 'StoreController');
    // Route::get('/', 'IndexController');
});

Route::middleware(['candidateAuthProtected'])->group(function () { // роуты авторизованного студента
    Route::post('/participations/{project}', 'Candidate\\CreateParticipationController'); // Создание заявки на проект
    Route::get('/participations/projects', 'Candidate\\ProjectsController'); // Получение заявок студента
    Route::get('/participations', 'Candidate\\ParticipationsController'); // Получение заявок кандидата
    Route::get('/candidate/skills', 'Candidate\\SkillsController');  // Получение навыков студента
    Route::put('/candidate', 'Candidate\\MeUpdateController'); // Обновить номер телефона, о себе, скиллы студента
    Route::get('/candidate', 'Candidate\\MeController'); // Получить информацию об авторизованном студенте
    // Route::get('/supervisor/participation/{id}', 'Supervisor\\GetParticipationByIdController')->where('id', '[0-9]+'); // DEPRECATED Получение информации о заявке по id
    // Route::get('/supervisor/participation', 'Supervisor\\ParticipationsController');  // DEPRECATED получение информации о заявках руководителя
    // Route::get('/supervisor/projects/names', 'Supervisor\\ProjectNamesController'); // DEPRECATED Получение инормации о проектах руководителя через апи токен
    // Route::get('/supervisor/projects', 'Supervisor\\ProjectsController'); // DEPRECATED Получение информации о проектах
    // Route::get('/supervisor', 'Supervisor\\GetController'); // DEPRECATED получить информацию о преподавателе по токену
});

Route::get('/participations_deadline', 'Participation\\DeadLineController'); // Получение дедлайна подачи заявки
