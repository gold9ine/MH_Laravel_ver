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

// base
Route::get('/', 'WelcomeController@index');

// home
Route::get('auth/login', function () {
	$credentials = [
		'email' => 'John@example.com',
		'password' => 'password'
	];

	if (! auth()->attempt($credentials, true)) {
		return '로그인 정보가 정확하지 않습니다.';
	}

	return redirect('protected');
});

Route::get('protected', ['middleware' => 'auth', function () {
// Route::get('protected', function () {
	dump(session()->all());
	
	// if (! auth()->check()) {
	// 	return 'who are you?';
	// }

	return 'welcome ' . auth()->user()->name;
// });
}]);

Route::get('auth/logout', function () {
	auth()->logout();

	return 'see you again!!';
});

// Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');