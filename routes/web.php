<?php


Route::get('/', 'SchoolController@index');
Route::get('/remove/{id}/', 'SchoolController@deleteStudent');

Route::post('/edit/', 'SchoolController@editStudent');

Route::post('/add/', 'SchoolController@addStudent');