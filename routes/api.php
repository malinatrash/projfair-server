<?php

use App\Http\Middleware\AdminCandidateAuth;
use App\Http\Middleware\CandidateAuth;
use App\Http\Middleware\CandidateAuthProtected;
use Illuminate\Support\Facades\Route;


// --------- ADMIN ROUTES ---------

Route::group(['middleware' => 'adminAuthProtected', 'prefix' => 'admin'], function () {
    Route::get('/skill', App\Http\Controllers\Admin\Skill\IndexController::class); // Получение всех скилов
});

Route::group(['middleware' => 'adminAuthProtected', 'prefix' => 'admin'], function () {
    Route::get('/Institute', App\Http\Controllers\Admin\Institute\IndexController::class); // Получение всех институтов
});


// --------- USER ROUTES ---------


Route::group(['namespace' => 'Supervisor', 'prefix' => 'supervisors'], function () {
    Route::get('/{supervisor}', App\Http\Controllers\Supervisor\ShowController::class); // Получение информации о преподавателе
    Route::get('/names', App\Http\Controllers\Supervisor\NamesController::class); // Получение всех фио преподавателей
    Route::get('/', App\Http\Controllers\Supervisor\IndexController::class); // Получение всех преподавателей
    // Route::post('/', 'StoreController');
    // Route::patch('/{supervisor}', 'UpdateController');
    // Route::delete('/{supervisor}', 'DeleteController');
});

Route::group(['prefix' => 'projects'], function () { // Получения информации о проектах
    Route::get('/filter',  App\Http\Controllers\Project\FilterController::class)->middleware(CandidateAuth::class); // Получение проектов с фильтрацией. Скрывать данные других институтов если пользователь авторизован
    Route::get('/{project}', App\Http\Controllers\Project\ShowController::class); // Получение информации о проекте
    Route::get('/{project}/participants', App\Http\Controllers\Project\GetParticipantsController::class); // Получение участников на проекте

    // Route::delete('/{project}', 'DeleteController');
    // Route::patch('/{project}', 'UpdateController');
    // Route::post('/', 'StoreController');
    // Route::get('/', 'IndexController');
});



Route::group(['namespace' => 'Type', 'prefix' => 'types'], function () { // Получение типов проекта
    Route::get('/{type}', App\Http\Controllers\Type\ShowController::class); // Получение одного типа проекта
    Route::get('/', App\Http\Controllers\Type\IndexController::class); // Получение всех типов проекта
    // Route::delete('/{type}', 'DeleteController');
    // Route::patch('/{type}', 'UpdateController');
    // Route::post('/', 'StoreController');
});

Route::group(['namespace' => 'State', 'prefix' => 'states'], function () { // Получение состояний проекта
    Route::get('/{state}', App\Http\Controllers\State\ShowController::class); // Получение одного состояния проекта
    Route::get('/', App\Http\Controllers\State\IndexController::class); // Получение всех состояний проекта
    // Route::delete('/{state}', 'DeleteController');
    // Route::patch('/{state}', 'UpdateController');
    // Route::post('/', 'StoreController');
});

Route::group(['namespace' => 'Skill', 'prefix' => 'skills'], function () {
    Route::get('/', App\Http\Controllers\Skill\IndexController::class)->middleware(CandidateAuth::class); // Получить данные для фильтрации по навыкам и специальностям. Скрывать данные других институтов если пользователь авторизован
    Route::get('/{skill}', App\Http\Controllers\Skill\ShowController::class); // Получить информацию о навыке
    // Route::delete('/{skill}', 'DeleteController');
    // Route::patch('/{skill}', 'UpdateController');
    // Route::post('/', 'StoreController');
});

Route::group(['namespace' => 'Candidate', 'prefix' => 'candidates'], function () {
    Route::get('/{candidate}', App\Http\Controllers\Candidate\ShowController::class); // Получить информацию о всех студентах
    Route::get('/', App\Http\Controllers\Candidate\IndexController::class); // Получить информацию о всех студентах
    // Route::delete('/{candidate}', 'DeleteController');
    // Route::patch('/{candidate}', 'UpdateController');
    // Route::post('/', 'StoreController');
});

Route::group(['namespace' => 'Institute', 'prefix' => 'institutes'], function () {
    Route::get('/isInSameInstitute/{specialityName1}/{specialityName2}', App\Http\Controllers\Institute\SameInstituteController::class); // Проверка находятся ли две специальности в одном институте
    Route::get('/getBySpecialityName/{specialityName}', App\Http\Controllers\Institute\GetBySpecialityController::class);  // Получить институты по названию специльности
    Route::get('/{institute}', App\Http\Controllers\Institute\ShowController::class); // Получить информацию об институте
    Route::get('/', App\Http\Controllers\Institute\IndexController::class); // Получить информацию обо всех институтах
});



Route::group(['namespace' => 'Participation', 'prefix' => 'participations'], function () {
    Route::delete('/{participation}', App\Http\Controllers\Participation\DeleteController::class)->middleware(CandidateAuthProtected::class); // Удаление заявки
    Route::patch('/{participation}', App\Http\Controllers\Participation\UpdateController::class)->middleware(CandidateAuthProtected::class); // Изменение заявки
    // Route::get('/{participation}', 'ShowController');
    // Route::post('/', 'StoreController');
    // Route::get('/', 'IndexController');
});

Route::middleware(['candidateAuthProtected'])->group(function () { // роуты авторизованного студента
    Route::post('/participations/{project}', App\Http\Controllers\Candidate\CreateParticipationController::class); // Создание заявки на проект
    Route::get('/participations/projects', App\Http\Controllers\Candidate\ProjectsController::class); // Получение заявок студента
    Route::get('/participations', App\Http\Controllers\Candidate\ParticipationsController::class); // Получение заявок кандидата
    Route::get('/candidate/skills', App\Http\Controllers\Candidate\SkillsController::class);  // Получение навыков студента
    Route::put('/candidate', App\Http\Controllers\Candidate\MeUpdateController::class); // Обновить номер телефона, о себе, скиллы студента
    Route::get('/candidate', App\Http\Controllers\Candidate\MeController::class); // Получить информацию об авторизованном студенте
    Route::get('/activeProject', App\Http\Controllers\Candidate\ActiveProjectController::class); // Получение активного проекта студента
    Route::get('/arhiveProjects', App\Http\Controllers\Candidate\ArhiveProjectsController::class); // Получение архивных проектов студента

    // Route::get('/supervisor/participation/{id}', 'Supervisor\\GetParticipationByIdController')->where('id', '[0-9]+'); // DEPRECATED Получение информации о заявке по id
    // Route::get('/supervisor/participation', 'Supervisor\\ParticipationsController');  // DEPRECATED получение информации о заявках руководителя
    // Route::get('/supervisor/projects/names', 'Supervisor\\ProjectNamesController'); // DEPRECATED Получение инормации о проектах руководителя через апи токен
    // Route::get('/supervisor/projects', 'Supervisor\\ProjectsController'); // DEPRECATED Получение информации о проектах
    // Route::get('/supervisor', 'Supervisor\\GetController'); // DEPRECATED получить информацию о преподавателе по токену
});

Route::get('/participations_deadline', App\Http\Controllers\Participation\DeadLineController::class); // Получение дедлайна подачи заявки


// Route::get('/supervisor/projects/{id}/participation', 'Supervisor\\ParticipationsOnProjectController')->where('id', '[0-9]+')->middleware(CandidateAuthProtected::class);
// Route::get('/supervisor/student/{id}', 'Supervisor\\GetCandidateByIdController')->where('id', '[0-9]+')->middleware(CandidateAuthProtected::class);
// Route::put('/supervisor', 'Supervisor\\UpdateController')->middleware(CandidateAuthProtected::class);
// Route::post('/supervisor/projects', 'Supervisor\\CreateProjectController')->middleware(CandidateAuthProtected::class);
// Route::put('/supervisor/projects/{id}', 'Supervisor\\UpdateProjectController')->where('id', '[0-9]+')->middleware(CandidateAuthProtected::class);
// Route::get('/supervisor/projects/{id}', 'Supervisor\\GetProjectByIdController')->middleware(CandidateAuthProtected::class);
// Route::delete('/participations/{id}', 'Candidate\\DeleteParticipationController')->middleware(CandidateAuthProtected::class);
