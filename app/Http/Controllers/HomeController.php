<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Student;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
      $student = Student::where('user_id', Auth::user()->id)->first();

      if($student){
        return view('home');

      }else {
        $user = Student::create([
          'user_id' => Auth::user()->id,
        ]);
        return view('home');
      }

    }
}
