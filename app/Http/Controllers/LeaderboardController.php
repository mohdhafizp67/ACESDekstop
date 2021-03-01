<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Student_Lesson;
use App\Models\Student_Quiz;

class LeaderboardController extends Controller
{
  public function viewLeaderboard()
  {
      $student =  Student::whereHas('User', function ($query) {
        return $query->where('is_active','1');
      })->take(10)->get();

      foreach ($student as $data) {
        $lesson_progress = Student_Lesson::where('student_id', $data->id)->count();
        $lesson_progress = ($lesson_progress/10) * 100;

        $quiz_progress = Student_Quiz::where('result_status', "Lulus")->where('student_id', $data->id)->distinct('quiz_id')->get();
        // dd($quiz_progress);
        $quiz_total_marks = 0;
        if($quiz_progress){
          foreach ($quiz_progress as $data) {
            $quiz_total_marks += $data->percentage;
          }
        }
        else{
          $quiz_total_marks = 0;
        }
        $total_mark = $lesson_progress + $quiz_total_marks;
      }
      // dd($quiz_total_marks);
      // dd($student);
      return view('activities.leaderboard', compact('student', 'total_mark'));
  }
}
