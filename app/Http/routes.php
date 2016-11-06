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




/*!!!Регистрацию для админа включать только, чтобы добавить пользователя!!!*/
//Route::get('admin/register', 'Admin\AuthController@showRegistrationForm');
//Route::post('admin/register', 'Admin\AuthController@register');