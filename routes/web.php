<?php
Auth::routes();

Route::get('/', "HomeController@index")->name('main');

Route::get('/user', 'TasksController@userboard')->name('userboard')->middleware('auth');
Route::get('/tasks/create', 'TasksController@createtask')->name('createtask')->middleware('auth');
Route::post('/tasks', 'TasksController@addtask')->name('addtask')->middleware('auth');

Route::put('/tasks/{task}', 'TasksController@update')->middleware('admin')->name('taskupdate');
Route::get('/admin', 'TasksController@index')->middleware('admin');
Route::get('/tasks/{task}/edit', 'TasksController@edit')->middleware('admin');

Route::put('/mebel/{mebel}', 'MebelController@update')->middleware('admin')->name('mebelupdate');
Route::post('/mebel', 'MebelController@store')->middleware('admin');
Route::get('/mebel', 'MebelController@index')->middleware('admin');
Route::get('/mebel/create', 'MebelController@create')->middleware('admin');
Route::get('/mebel/{mebel}/edit', 'MebelController@edit')->middleware('admin');


