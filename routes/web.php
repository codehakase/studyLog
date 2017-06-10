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

Route::get('new_log', 'LogsController@newLog');
Route::post('new_log', 'LogsController@storeLog');

Route::get('reports', 'LogsController@reports'); //todo
Route::get('logs/{log}', 'LogsController@showSingle');

Route::get('profile', 'UserController@index');
Route::post('profile/edit', 'UserController@edit');
Route::post('profile/password', 'UserController@password');

Auth::routes();

Route::get('/home', 'LogsController@index');
