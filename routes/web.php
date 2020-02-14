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

// Example Routes
Route::view('/', 'landing');
Route::match(['get', 'post'], '/dashboard', function(){
    return view('dashboard');
});

Route::get('/tasks', 'TasksController@index');
Route::get('/create', 'TasksController@create');
Route::post('/store', 'TasksController@store');
Route::get('/edit/{id}', 'TasksController@edit');
Route::post('/update/{id}', 'TasksController@update');
Route::get('/delete/{id}', 'TasksController@delete');
Route::get('/changeStatus/{id}', 'TasksController@changeStatus');