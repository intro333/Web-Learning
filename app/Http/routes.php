<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


    Route::auth();
    Route::get('/', 'LessonsController@index');
    Route::get('/startLesson/testLesson', 'LessonsController@testLesson');
    Route::get('/lessons/{part}/{lesson}', 'LessonsController@startLesson');
    Route::post('/lessons/getDescription', 'LessonsController@showDescription');

    Route::post('/lesson/get_image', 'API\FilesController@getDiagramImage');


//Route::group(['middleware' => ['admin']], function () {
//
//});

/*
 * Админка
*/
Route::get('admin/login', 'Admin\AuthController@showLoginForm');
Route::post('admin/login', 'Admin\AuthController@login');
Route::get('admin/logout', 'Admin\AuthController@logout');
Route::get('admin/panel', 'Admin\AdminController@index');
//Добавление лекций
Route::get('admin/addLesson', 'Admin\AdminController@showAddLesson');
Route::post('admin/addLesson', 'Admin\AdminController@addLesson');
//Редактирование лекций
Route::get('admin/editLessons', 'Admin\AdminController@showEditLessons');//показать все лекции
Route::get('admin/editLessons/{part}/{lesson}', 'Admin\AdminController@showEditLesson');//показать одну лекцию
Route::post('admin/editLessons/{part}/{lesson}', 'Admin\AdminController@showEditLesson');//POST запрос.показать одну лекцию
Route::post('admin/editLesson/{part}/{lesson}', 'Admin\AdminController@editLesson');//POST запрос на update лекции в базе данных
//Удаление лекций
Route::get('admin/removeLesson', 'Admin\AdminController@showRemoveLesson');
Route::post('admin/removeLesson', 'Admin\AdminController@removeLesson');

//Добавление описаний к блокам
Route::get('admin/addDescription', 'Admin\AdminController@showAddDescription');
Route::post('admin/addDescription', 'Admin\AdminController@addDescription');
//Редактирование описаний
Route::get('admin/editDescriptions', 'Admin\AdminController@showDescriptions');//показать все описания
Route::get('admin/editDescriptions/{part}/{lesson}', 'Admin\AdminController@showDescription');//показать одно описание
Route::post('admin/editDescriptions/{part}/{lesson}', 'Admin\AdminController@showDescription');//POST запрос.показать одно описание
Route::post('admin/editDescription/{part}/{lesson}', 'Admin\AdminController@editDescription');//POST запрос на update описания в базе данных

/*!!!Регистрацию для админа включать только, чтобы добавить пользователя!!!*/
//Route::get('admin/register', 'Admin\AuthController@showRegistrationForm');
//Route::post('admin/register', 'Admin\AuthController@register');