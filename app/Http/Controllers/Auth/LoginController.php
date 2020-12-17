<?php

namespace App\Http\Controllers\Auth;

use Auth;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

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
    protected $redirectTo = RouteServiceProvider::HOME;
    public function redirectTo()
   {
     if(Auth::user()->is_admin == 1 && Auth::user()->is_active == 1){
       $this->redirectTo = '/home-admin';
       return $this->redirectTo;
     }elseif (Auth::user()->is_ecerdb_personnel == 1 && Auth::user()->is_active == 1) {
       $this->redirectTo = '/home-admin';
       return $this->redirectTo;
     }elseif (Auth::user()->is_student == 1 && Auth::user()->is_active == 1) {
       $this->redirectTo = '/home';
       return $this->redirectTo;
     }else {
       $this->redirectTo = '/';
       return $this->redirectTo;
     }
   }
    /**
     * Create a new controller instance.
     *
     * @return void
     */

     public function username()
     {
         return 'ic_number';
     }

    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
