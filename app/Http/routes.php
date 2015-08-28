<?php

Route::get('/', function () {
    return view('index');
});

Route::get('/configs' , function(){
	return \Response::json(['hello' => 'world']);
});

Route::resource('projects'	, 'ProjectsController'	);
Route::resource('news' 		, 'NewsController'		);

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');