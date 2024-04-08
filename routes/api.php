<?php

use App\Http\Middleware\CandidateAuth;
use App\Http\Middleware\CandidateAuthProtected;
use App\Http\Middleware\SupervisorAuthProtected;
use Illuminate\Support\Facades\Route;

Route::get('/campus', App\Http\Controllers\Campus\CampusController::class);

// --------- ADMIN ROUTES ---------

Route::group(['prefix' => 'admin'], function () {
    Route::group(['prefix' => 'harvestSettings'], function () {
        Route::patch('/{harvestSetting}', App\Http\Controllers\Admin\HarvestSetting\UpdateController::class);
        Route::delete('/{harvestSetting}', App\Http\Controllers\Admin\HarvestSetting\DeleteController::class);
        Route::post('/', App\Http\Controllers\Admin\HarvestSetting\StoreController::class);
    });

    Route::group(['prefix' => 'skills'], function () {
        Route::get('/', App\Http\Controllers\Admin\Skill\IndexController::class); // Получение всех скилов
    });

    Route::group(['prefix' => 'skillCategory'], function () {
        Route::get('/', App\Http\Controllers\Admin\SkillCategory\IndexController::class); // Получение всех категорий навыков
        Route::get('/', App\Http\Controllers\Admin\SkillCategory\ShowController::class); // Показать категорию навыков
        Route::patch('/{skillCategory}', App\Http\Controllers\Admin\SkillCategory\UpdateController::class); // Обновление категорию навыков
        Route::delete('/{skillCategory}', App\Http\Controllers\Admin\SkillCategory\DeleteController::class); // Удаление категории навыков
        Route::post('/', App\Http\Controllers\Admin\SkillCategory\StoreController::class); // Создание категорию навыков
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

    Route::group(['prefix' => 'types'], function () {
        Route::delete('/{type}', App\Http\Controllers\Admin\Type\DeleteController::class);
        Route::patch('/{type}', App\Http\Controllers\Admin\Type\UpdateController::class);
        Route::post('/', App\Http\Controllers\Admin\Type\StoreController::class);
    });
});

// --------- CABINET DIRECTOR  ROUTES ---------

Route::group(['prefix' => 'director'], function () {
    Route::patch('/projects/{project}', App\Http\Controllers\Supervisor\Director\Projects\UpdateController::class)->middleware(SupervisorAuthProtected::class);
    Route::get('/projects', App\Http\Controllers\Supervisor\Director\Projects\IndexController::class)->middleware(SupervisorAuthProtected::class);
});

// --------- SUPERVISORS CABINET ROUTES ---------

Route::group(['prefix' => 'supervisor'], function () {
    Route::get('/', App\Http\Controllers\Supervisor\MeController::class)->middleware(SupervisorAuthProtected::class);; // Получить информацию об авторизованном преподе
    Route::post('/projects', App\Http\Controllers\Supervisor\Projects\StoreController::class)->middleware(SupervisorAuthProtected::class);
    Route::get('/projects', App\Http\Controllers\Supervisor\Projects\IndexController::class)->middleware(SupervisorAuthProtected::class);
    Route::patch('/projects/{project}', App\Http\Controllers\Supervisor\Projects\UpdateController::class)->middleware(SupervisorAuthProtected::class);
    Route::delete('/projects/{project}', App\Http\Controllers\Supervisor\Projects\DeleteController::class)->middleware(SupervisorAuthProtected::class);
});

// --------- USER ROUTES ---------

Route::group(['prefix' => 'supervisors'], function () {
    Route::get('/{supervisor}', App\Http\Controllers\Supervisor\ShowController::class); // Получение информации о преподавателе
    Route::get('/', App\Http\Controllers\Supervisor\IndexController::class); // Получение всех преподавателей
});

Route::group(['prefix' => 'departments'], function () {
    Route::get('/{department}', App\Http\Controllers\Department\ShowController::class); // Получение информации о преподавателе
    Route::get('/', App\Http\Controllers\Department\IndexController::class); // Получение всех преподавателей
});


Route::group(['prefix' => 'harvestSettings'], function () {
    Route::get('/active', App\Http\Controllers\HarvestSetting\GetActiveController::class);
    Route::get('/{harvestSetting}', App\Http\Controllers\HarvestSetting\ShowController::class);
    Route::get('/', App\Http\Controllers\HarvestSetting\IndexController::class);
});

Route::group(['prefix' => 'projects'], function () { // Получения информации о проектах
    Route::get('/filter', App\Http\Controllers\Project\FilterController::class)->middleware(CandidateAuth::class); // Получение проектов с фильтрацией. Скрывать данные других институтов если пользователь авторизован
    Route::get('/{project}', App\Http\Controllers\Project\ShowController::class); // Получение информации о проекте
    Route::get('/{project}/participants', App\Http\Controllers\Project\GetParticipantsController::class); // Получение участников на проекте
    Route::get('/{project}/history', App\Http\Controllers\Project\HistoryController::class); // Получение участников на проекте

});

Route::group(['prefix' => 'types'], function () { // Получение типов проекта
    Route::get('/{type}', App\Http\Controllers\Type\ShowController::class); // Получение одного типа проекта
    Route::get('/', App\Http\Controllers\Type\IndexController::class); // Получение всех типов проекта

});

Route::group(['prefix' => 'states'], function () { // Получение состояний проекта
    Route::get('/{state}', App\Http\Controllers\State\ShowController::class); // Получение одного состояния проекта
    Route::get('/', App\Http\Controllers\State\IndexController::class); // Получение всех состояний проекта

});

Route::group(['prefix' => 'projectSupervisorRoles'], function () {
    Route::get('/', App\Http\Controllers\ProjectSupervisorRole\IndexController::class);
});

Route::group(['prefix' => 'specialities'], function () {
    Route::get('/', App\Http\Controllers\Speciality\IndexController::class);
});

Route::group(['prefix' => 'skills'], function () {
    Route::get('/', App\Http\Controllers\Skill\IndexController::class)->middleware(CandidateAuth::class); // Получить данные для фильтрации по навыкам и специальностям. Скрывать данные других институтов если пользователь авторизован
    Route::get('/{skill}', App\Http\Controllers\Skill\ShowController::class); // Получить информацию о навыке
});

Route::group(['prefix' => 'themeSources'], function () {
    Route::get('/', App\Http\Controllers\ThemeSource\IndexController::class);
});

Route::group(['prefix' => 'candidates'], function () {
    Route::get('/{candidate}', App\Http\Controllers\Candidate\ShowController::class); // Получить информацию о студенте
    Route::get('/', App\Http\Controllers\Candidate\IndexController::class); // Получить информацию о всех студентах

});

Route::group(['prefix' => 'institutes'], function () {
    Route::get('/isInSameInstitute/{specialityName1}/{specialityName2}', App\Http\Controllers\Institute\SameInstituteController::class); // Проверка находятся ли две специальности в одном институте
    Route::get('/getBySpecialityName/{specialityName}', App\Http\Controllers\Institute\GetBySpecialityController::class); // Получить институты по названию специльности
    Route::get('/{institute}', App\Http\Controllers\Institute\ShowController::class); // Получить информацию об институте
    Route::get('/', App\Http\Controllers\Institute\IndexController::class); // Получить информацию обо всех институтах
});

Route::group(['prefix' => 'participations'], function () {
    Route::delete('/{participation}', App\Http\Controllers\Participation\DeleteController::class)->middleware(CandidateAuthProtected::class); // Удаление заявки
    Route::patch('/{participation}', App\Http\Controllers\Participation\UpdateController::class)->middleware(CandidateAuthProtected::class); // Изменение заявки
    Route::get('/filter', App\Http\Controllers\Participation\FilterController::class);
});

Route::middleware(['candidateAuthProtected'])->group(function () { // роуты авторизованного студента
    Route::post('/participations/{project}', App\Http\Controllers\Candidate\CreateParticipationController::class); // Создание заявки на проект
    Route::get('/participations', App\Http\Controllers\Candidate\ParticipationsController::class); // Получение заявок кандидата
    Route::get('/candidate/skills', App\Http\Controllers\Candidate\SkillsController::class); // Получение навыков студента
    Route::patch('/candidate', App\Http\Controllers\Candidate\MeUpdateController::class); // Обновить номер телефона, о себе, скиллы студента
    Route::get('/candidate', App\Http\Controllers\Candidate\MeController::class); // Получить информацию об авторизованном студенте
    Route::get('/activeProject', App\Http\Controllers\Candidate\ActiveProjectController::class); // Получение активного проекта студента
    Route::get('/arhiveProjects', App\Http\Controllers\Candidate\ArhiveProjectsController::class); // Получение архивных проектов студента
});



Route::get('/participationsDeadline', App\Http\Controllers\Participation\DeadLineController::class); // Получение дедлайна подачи заявки