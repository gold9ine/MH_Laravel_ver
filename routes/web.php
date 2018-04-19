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

// Route::get('/home', 'HomeController@index');
Route::get('/home', 'HomeController@index')->name('home');

Route::resource('projects', 'ProjectsController');

// go main home
Route::get('/mainHome', function () {
	return view('home.homeContent');

});

// seesion paly add
Route::post('/session_play_add', function () {
	return view('partials.session_play_add');
});

// seesion paly delete
Route::get('/session_play_delete', function () {
	return view('partials.session_play_delete');
});


// DB::listen(function ($query){
// 	// var_dump($query->sql);
// 		dump($query->sql);
//  // dump($query);
// });


Route::get('/test', function () {
	return view('test');
});

