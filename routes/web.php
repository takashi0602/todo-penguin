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

Auth::routes();

Route::get('/tasks', 'TaskController@index');

Route::post('/tasks/create', 'TaskController@create');

Route::post('/tasks/edit/{tasks}', 'TaskController@edit');

Route::post('/tasks/update', 'TaskController@update');

Route::delete('/tasks/delete/{task}', 'TaskController@delete');