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


// Route::get('/login', function () {
//     return view('welcome');
// });

// Route::get('/login', function () {
// 	return redirect(route('welcome'));
// });

