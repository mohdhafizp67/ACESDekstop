<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use App\Models\Student;
use App\Models\Districts;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */

     public function showRegistrationForm()
     {
         $districts = Districts:: get();
         // dd($districts);
         return view('auth.register', compact('districts'));
     }

    protected function validator(array $data)
    {
      return Validator::make($data, [
          'name' => ['required', 'string', 'max:255'],
          'ic_number' => ['required', 'string', 'max:12', 'min:12','unique:users'],
          'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
          'phone' => ['required', 'string', 'max:11', 'min:10'],
          'address' => ['required', 'string'],
          'postcode' => ['required', 'string', 'max:5', 'min:5'],
          'state' => ['required', 'string'],
          'password' => ['required', 'string', 'min:8', 'confirmed'],
      ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'ic_number' => $data['ic_number'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'address' => $data['address'],
            'postcode' => $data['postcode'],
            'state' => $data['state'],
            'password' => Hash::make($data['password']),
            'is_active' => 1,
            'is_student' => 1,
        ]);
    }
}
