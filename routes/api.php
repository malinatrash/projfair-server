<?php

use App\Http\Middleware\CandidateAuth;
use App\Http\Middleware\CandidateAuthProtected;
use Illuminate\Support\Facades\Route;

// --------- ADMIN ROUTES ---------

Route::group(['prefix' => 'admin'], function () {
    Route::group(['prefix' => 'skill'], function () {
        Route::get('/', App\Http\Controllers\Admin\Skill\IndexController::class); // Получение всех скилов
    });

    Route::group(['prefix' => 'Institute'], function () {
        Route::get('/', App\Http\Controllers\Admin\Institute\IndexController::class); // Получение всех институтов
    });

    Route::group(['prefix' => 'participations'], function () {
        Route::get('/{participation}', App\Http\Controllers\Admin\Participation\ShowController::class);
        Route::patch('/{participation}', App\Http\Controllers\Admin\Participation\UpdateController::class);
        Route::delete('/{participation}', App\Http\Controllers\Admin\Participation\DeleteController::class);
        Route::post('/', App\Http\Controllers\Admin\Participation\StoreController::class);
        Route::get('/', App\Http\Controllers\Admin\Participation\IndexController::class);
    });

    Route::group(['prefix' => 'projects'], function () {
        Route::delete('/{project}', App\Http\Controllers\Admin\Project\DeleteController::class);
        Route::patch('/{project}', App\Http\Controllers\Admin\Project\UpdateController::class);
        Route::post('/', App\Http\Controllers\Admin\Project\StoreController::class);
        Route::get('/', App\Http\Controllers\Admin\Project\IndexController::class);
    });

    Route::group(['prefix' => 'candidates'], function () {
        Route::delete('/{candidate}', App\Http\Controllers\Admin\Candidate\DeleteController::class);
        Route::patch('/{candidate}', App\Http\Controllers\Admin\Candidate\UpdateController::class);
        Route::post('/', App\Http\Controllers\Admin\Candidate\StoreController::class);
    });
    Route::group(['prefix' => 'supervisors'], function () {
        Route::post('/', App\Http\Controllers\Admin\Supervisor\StoreController::class);
        Route::patch('/{supervisor}', App\Http\Controllers\Admin\Supervisor\UpdateController::class);
        Route::delete('/{supervisor}', App\Http\Controllers\Admin\Supervisor\DeleteController::class);
    });
    Route::group(['prefix' => 'states'], function () {
        Route::delete('/{state}', App\Http\Controllers\Admin\State\DeleteController::class);
        Route::patch('/{state}', App\Http\Controllers\Admin\State\UpdateController::class);
        Route::post('/', App\Http\Controllers\Admin\State\StoreController::class);
    });
    Route::group(['prefix' => 'types'], function () {
        Route::delete('/{type}', App\Http\Controllers\Admin\Type\DeleteController::class);
        Route::patch('/{type}', App\Http\Controllers\Admin\Type\UpdateController::class);
        Route::post('/', App\Http\Controllers\Admin\Type\StoreController::class);
    });

});

// --------- USER ROUTES ---------

Route::group(['namespace' => 'Supervisor', 'prefix' => 'supervisors'], function () {
    Route::get('/{supervisor}', App\Http\Controllers\Supervisor\ShowController::class); // Получение информации о преподавателе
    Route::get('/', App\Http\Controllers\Supervisor\IndexController::class); // Получение всех преподавателей
});

Route::group(['prefix' => 'projects'], function () { // Получения информации о проектах
    Route::get('/filter', App\Http\Controllers\Project\FilterController::class)->middleware(CandidateAuth::class); // Получение проектов с фильтрацией. Скрывать данные других институтов если пользователь авторизован
    Route::get('/{project}', App\Http\Controllers\Project\ShowController::class); // Получение информации о проекте
    Route::get('/{project}/participants', App\Http\Controllers\Project\GetParticipantsController::class); // Получение участников на проекте

});

Route::group(['namespace' => 'Type', 'prefix' => 'types'], function () { // Получение типов проекта
    Route::get('/{type}', App\Http\Controllers\Type\ShowController::class); // Получение одного типа проекта
    Route::get('/', App\Http\Controllers\Type\IndexController::class); // Получение всех типов проекта

});

Route::group(['namespace' => 'State', 'prefix' => 'states'], function () { // Получение состояний проекта
    Route::get('/{state}', App\Http\Controllers\State\ShowController::class); // Получение одного состояния проекта
    Route::get('/', App\Http\Controllers\State\IndexController::class); // Получение всех состояний проекта

});

Route::group(['namespace' => 'Skill', 'prefix' => 'skills'], function () {
    Route::get('/', App\Http\Controllers\Skill\IndexController::class)->middleware(CandidateAuth::class); // Получить данные для фильтрации по навыкам и специальностям. Скрывать данные других институтов если пользователь авторизован
    Route::get('/{skill}', App\Http\Controllers\Skill\ShowController::class); // Получить информацию о навыке
    // Route::delete('/{skill}', 'DeleteController');
    // Route::patch('/{skill}', 'UpdateController');
    // Route::post('/', 'StoreController');
});

Route::group(['namespace' => 'Candidate', 'prefix' => 'candidates'], function () {
    Route::get('/{candidate}', App\Http\Controllers\Candidate\ShowController::class); // Получить информацию о студенте
    Route::get('/', App\Http\Controllers\Candidate\IndexController::class); // Получить информацию о всех студентах

});

Route::group(['namespace' => 'Institute', 'prefix' => 'institutes'], function () {
    Route::get('/isInSameInstitute/{specialityName1}/{specialityName2}', App\Http\Controllers\Institute\SameInstituteController::class); // Проверка находятся ли две специальности в одном институте
    Route::get('/getBySpecialityName/{specialityName}', App\Http\Controllers\Institute\GetBySpecialityController::class); // Получить институты по названию специльности
    Route::get('/{institute}', App\Http\Controllers\Institute\ShowController::class); // Получить информацию об институте
    Route::get('/', App\Http\Controllers\Institute\IndexController::class); // Получить информацию обо всех институтах
});

Route::group(['namespace' => 'Participation', 'prefix' => 'participations'], function () {
    Route::delete('/{participation}', App\Http\Controllers\Participation\DeleteController::class)->middleware(CandidateAuthProtected::class); // Удаление заявки
    Route::patch('/{participation}', App\Http\Controllers\Participation\UpdateController::class)->middleware(CandidateAuthProtected::class); // Изменение заявки

});

Route::middleware(['candidateAuthProtected'])->group(function () { // роуты авторизованного студента
    Route::post('/participations/{project}', App\Http\Controllers\Candidate\CreateParticipationController::class); // Создание заявки на проект
    Route::get('/participations', App\Http\Controllers\Candidate\ParticipationsController::class); // Получение заявок кандидата
    Route::get('/candidate/skills', App\Http\Controllers\Candidate\SkillsController::class); // Получение навыков студента
    Route::put('/candidate', App\Http\Controllers\Candidate\MeUpdateController::class); // Обновить номер телефона, о себе, скиллы студента
    Route::get('/candidate', App\Http\Controllers\Candidate\MeController::class); // Получить информацию об авторизованном студенте
    Route::get('/activeProject', App\Http\Controllers\Candidate\ActiveProjectController::class); // Получение активного проекта студента
    Route::get('/arhiveProjects', App\Http\Controllers\Candidate\ArhiveProjectsController::class); // Получение архивных проектов студента
});

Route::get('/participations_deadline', App\Http\Controllers\Participation\DeadLineController::class); // Получение дедлайна подачи заявки

// Route::get('/supervisor/participation', 'Supervisor\\ParticipationsController');  // DEPRECATED получение информации о заявках руководителя
// Route::get('/supervisor/projects', 'Supervisor\\ProjectsController'); // DEPRECATED Получение информации о проектах руководителя через апи токен

// Route::get('/supervisor/projects/{id}/participation', 'Supervisor\\ParticipationsOnProjectController')->where('id', '[0-9]+')->middleware(CandidateAuthProtected::class);
// Route::put('/supervisor', 'Supervisor\\UpdateController')->middleware(CandidateAuthProtected::class);
// Route::post('/supervisor/projects', 'Supervisor\\CreateProjectController')->middleware(CandidateAuthProtected::class);
// Route::put('/supervisor/projects/{id}', 'Supervisor\\UpdateProjectController')->where('id', '[0-9]+')->middleware(CandidateAuthProtected::class);
