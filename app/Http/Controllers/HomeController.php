<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\Student;
use App\Models\Announcement;
use App\Models\User;
use App\Models\Student_Lesson;
use App\Models\Student_Quiz;
use App\Models\Student_Game;






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
      $announcement = Announcement::orderBy('id', 'DESC')->get();
      $name= Auth::user()->name;
      // dd($name);
      $splitName = explode(' ', $name); // Restricts it to only 2 values, for names like Billy Bob Jones

      $first_name = $splitName[0];
      $last_name = !empty($splitName[1]) ? $splitName[1] : ''; // If last name doesn't exist, make it empty

      // dd(count($splitName));



      // create student id
      if($student){
        //track student progress
        $student_id = Auth::user()->student->id;
        $lesson_progress = Student_Lesson::where('student_id', $student_id)->count();
        $lesson_progress = ($lesson_progress/10) * 100;

        $quiz_progress = Student_Quiz::where('result_status', "Lulus")->where('student_id', $student_id)->distinct('quiz_id')->count();
        $quiz_progress = ($quiz_progress/10) * 100;

        // $game_progress = Student_Game::where('game_id', $game_id)->count();
        // $game_progress = ($game_progress/10) * 100;


        return view('home', compact('announcement','lesson_progress','quiz_progress', 'splitName'));
      }else {
        $student_id = Student::create([
          'user_id' => Auth::user()->id,
        ]);

        //track student progress
        $lesson_progress = Student_Lesson::where('student_id', $student_id)->count();
        $lesson_progress = ($lesson_progress/10) * 100;

        $quiz_progress = Student_Quiz::where('result_status', "Lulus")->where('student_id', $student_id)->distinct('quiz_id')->count();
        $quiz_progress = ($quiz_progress/10) * 100;


        return view('home', compact('announcement','lesson_progress','quiz_progress','splitName'));
      }

    }


}
