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

Route::get('/welcome', 'WelcomeController@index');

// Route::get('/home', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index');

Route::resource('projects', 'HomeController');

// go main home
Route::get('/mainHome', function () {
	return view('home.homeContent');

});



// DB::listen(function ($query){
// 	// var_dump($query->sql);
// 		dump($query->sql);
//  	// dump($query);
// });


// Route::get('/test', function () {
// 	return view('test');
// });