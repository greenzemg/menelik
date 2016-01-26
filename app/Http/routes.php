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
		'getRegister'=> 'get.register',
]);

// Password Recover controller
Route::controller('password', 'Auth\PasswordController', [
	'getEmail' => 'get.password.email',
	'getReset' => 'get.password.reset'
]);

// Backend
Route::controller('backend/bashboard', 'Backend\DashBoardController', [
		'getIndex' => 'backend.dashboard.index',
]);

Route::get('backend/users/{users}/confirm', ['as' => 'backend.users.confirm', 'uses' => 'Backend\UsersController@confirm']);
Route::resource('backend/users', 'Backend\UsersController');

// DashBoard
Route::controller('user/dashboard', 'User\DashBoardController', [
	'getIndex' => 'user.dashboard.index',
]);

// Profile
Route::resource('user/profile', 'User\ProfileController');

// National Exam controller
Route::controller('nationalexam', 'NationalExam\NationalExamController', [
	'getIndex' => 'nationalexam.index',
	'getSelect' => 'nationalexam.select',
	'postSelect' => 'nationalexam.select.post'
]);
Route::get('nationalexam/show/{year}/{grade}/{subject}', 
	[	'as' => 'nationalexam.show', 
		'uses' =>'NationalExam\NationalExamController@getShow'
	]);
Route::get('nationalexam/instruction/{year}/{grade}/{subject}', 
	[	'as' => 'nationalexam.instruction', 
		'uses' =>'NationalExam\NationalExamController@getInstruction'
	]);


