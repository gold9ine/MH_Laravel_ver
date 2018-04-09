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
Auth::routes();

Route::get('/', 'WelcomeController@index');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/welcome', 'WelcomeController@index');

// Route::get('login', function() {
// 	return redirect(route('home'));
// });


// // 9-3
// // Route::resource('/', 'ArticlesController@index');
// Route::get('auth/login', function () {
// 	$credentials = [
// 		'email' => 'John@example.com',
// 		'password' => 'password'
// 	];

// 	if (! auth()->attempt($credentials, true)) {
// 		return '로그인 정보가 정확하지 않습니다.';
// 	}

// 	return redirect('protected');
// });
// Route::get('protected', ['middleware' => 'auth', function () {
// 	dump(session()->all());
// 	// if (! auth()->check()) {
// 	// 	return 'who are you?';
// 	// };
// 	return 'welcome ' . auth()->user()->name;
// }]);
// Route::get('auth/logout', function () {
// 	auth()->logout();
// 	return 'see you again!!';
// });


// Route::get('home', [
//     'middleware' => 'auth',
//     function() {
//         return 'Welcome back, ' . Auth::user()->name;
//     }
// ]);

// // Authentication routes...
// Route::get('auth/login', 'Auth\AuthController@getLogin');
// Route::post('auth/login', 'Auth\AuthController@postLogin');
// Route::get('auth/logout', 'Auth\AuthController@getLogout');

// // Registration routes...
// Route::get('auth/register', 'Auth\AuthController@getRegister');
// Route::post('auth/register', 'Auth\AuthController@postRegister');

// Route::get('/login', function () {
//     return view('welcome');
// });

// Route::get('/login', function () {
// 	return redirect(route('welcome'));
// });

