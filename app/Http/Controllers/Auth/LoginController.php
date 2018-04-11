<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    	$this->middleware('guest')->except('logout');
    }

    public function index()
    {
    	return view('welcome');
    }

    // login validation
    protected function validateLogin(Request $request)
    {
    	$this->validate($request, [
    		'login_email' => 'required|string',
    		'login_password' => 'required|string',
    	]);
    }

	 // login attempt
    protected function attemptLogin(Request $request)
    {
    	$email = $request->input('login_email');
    	$password = $request->input('login_password');
    	return Auth::attempt([ 'email' => $email, 'password' => $password ]);
    }
}
