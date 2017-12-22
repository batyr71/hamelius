<?php


Route::get('/', function(){return view('main');})->name('main');

Route::get('/userboard', 'TasksController@userboard')->name('userboard');
Route::get('/createtask', 'TasksController@createtask')->name('createtask');

Route::resource('tasks', 'TasksController')->middleware('admin');

Route::resource('mebel', 'MebelController')->middleware('admin');

Auth::routes();


