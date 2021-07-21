<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', 'ScheduleController@about');
Route::get('/arrive', 'ScheduleController@arrive');
Route::get('/leave', 'ScheduleController@leave');

Route::get('/user', 'UserController@index');
Route::get('/create', 'UserController@create');
Route::post('/form', 'UserController@form');
Route::post('/show', 'UserController@show');
Route::post('/job', 'UserController@job');
Route::post('/career', 'UserController@career');
Route::post('/entry', 'UserController@entry');
Route::post('/exp', 'UserController@exp');
Route::post('/skill', 'UserController@skill');
Route::get('/search', 'UserController@search');

Route::get('/sample','SampleController@index');
Route::get('/sample/{id}','SampleController@show')->where('id', '[0-9]+');
