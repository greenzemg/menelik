<?php


// Home
Route::get('/', [
	'uses' => 'HomeController@index', 
	'as' => 'home'
]);

// Auth
Route::controller('auth', 'Auth\AuthController', [
		'getLogin' => 'get.login',
		'getLogout' => 'get.logout',
]);

// Auth
Route::controller('password', 'Auth\PasswordController');

// DashBoard
Route::controller('dashboard', 'Dash\DashBoardController', [
	'getIndex' => 'dash.index',
	'getThem' => 'dash.them',
]);