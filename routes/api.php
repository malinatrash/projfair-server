<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// Route::group(['namespace' => 'Supervisor'], function () {

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
// });

// Route::group(['namespace' => 'Project'], function () {
//     Route::post('/project', 'Api\v1\ProjectController@store'); // Add project
//     Route::get('/supervisorprojects', 'Api\v1\ProjectController@supervisorProjects'); // Get supervisor's project
//     Route::get('/projects', 'Api\v1\ProjectController@index');
//     Route::get('/projects/{id}', 'Api\v1\ProjectController@getById')->where('id', '[0-9]+');
//     Route::get('/projects/filter', 'Api\v1\ProjectController@filter');
//     Route::post('/supervisor/projects', 'Api\v1\ProjectController@create');
//     Route::put('/supervisor/projects/{id}', 'Api\v1\ProjectController@update')->where('id', '[0-9]+');
// });

// Route::group(['namespace' => 'Tag'], function () {
//     Route::get('/tags', 'Api\v1\TagController@index');
// });

// Route::group(['namespace' => 'Type'], function () {
//     Route::get('/types', 'Api\v1\TypeController@index');
// });

// Route::group(['namespace' => 'State'], function () {
//     Route::get('/states', 'Api\v1\StateController@index');
// });

// Route::group(['namespace' => 'Candidate'], function () {
//     Route::get('/candidate', 'Api\v1\CandidateController@index');
//     Route::put('/candidate', 'Api\v1\CandidateController@updateInfo');
//     Route::get('/participations', 'Api\v1\CandidateController@participations');
//     Route::get('/participations/projects', 'Api\v1\CandidateController@getProjects');
//     Route::delete('/participations/{id}', 'Api\v1\CandidateController@deleteParticipations')->where('id', '[0-9]+');
//     Route::post('/participations/{id}', 'Api\v1\CandidateController@createParticipation')->where('id', '[0-9]+');
//     Route::get('/supervisor/student/{id}', 'Api\v1\CandidateController@getById')->where('id', '[0-9]+');
//     Route::get('/candidate/skills', 'Api\v1\CandidateController@getSkills');
// });

// Route::group(['namespace' => 'Review'], function () {
//     Route::get('/supervisor/student/reviews/{id}', 'Api\v1\ReviewController@get')->where('id', '[0-9]+');
// });

// Route::group(['namespace' => 'Skill'], function () {
//     Route::get('/skills', 'Api\v1\SkillsController@index');
// });



// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
