<?php

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function () {
	//only authorized users can access these routes

	Route::get('/', 'HomeController@index');
	Route::get('/listall', 'SchoolController@index');
	Route::get('/remove/{id}/', 'SchoolController@deleteStudent');

	Route::post('/add/', 'SchoolController@addStudent');
	Route::post('/edit/', 'SchoolController@editStudent');

});

Route::group(['middleware' => ['guest']], function () {
	//only guests can access these routes
});






