<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
	// protected $redirectTo = '/home';

	// public function __construct()
	// {
	// 	$this->middleware('auth');
	// }

	public function __construct()
    {
    	$this->middleware('guest')->except('logout');
    }

	public function index()
	{
		// dump(session()->all());
		return view('welcome');
	}
}
