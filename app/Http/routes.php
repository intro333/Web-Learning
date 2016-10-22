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
    Route::get('/startLesson/{part}/{lesson}', 'LessonsController@startLesson');


//Route::group(['middleware' => ['admin']], function () {
//
//});

/*Админка*/
Route::get('admin/login', 'Admin\AuthController@showLoginForm');
Route::post('admin/login', 'Admin\AuthController@login');
Route::get('admin/logout', 'Admin\AuthController@logout');
Route::get('/panel', 'HomeController@index');
/*!!!Регистрацию для админа включать только, чтобы добавить пользователя!!!*/
//Route::get('admin/register', 'Admin\AuthController@showRegistrationForm');
//Route::post('admin/register', 'Admin\AuthController@register');