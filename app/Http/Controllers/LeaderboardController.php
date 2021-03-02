<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Student_Lesson;
use App\Models\Student_Quiz;
use App\Models\Leaderboard;

class LeaderboardController extends Controller
{
  public function viewLeaderboard()
  {
      $student =  Student::whereHas('User', function ($query) {
        return $query->where('is_active','1');
      })->take(10)->get();

      // dd($student);
      foreach ($student as $data) {
        $lesson_progress = Student_Lesson::where('student_id', $data->id)->count();
        $lesson_progress = ($lesson_progress/10) * 100;

        $quiz_progress = Student_Quiz::where('result_status', "Lulus")->where('student_id', $data->id)->distinct('quiz_id')->get();
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
        // dd($total_mark);

        $leaderboard = Leaderboard::where('student_id', $data->id)->first();
        if($leaderboard){
          // dd('update');
          event($leaderboard = $this->update($data, $total_mark));
        }
        else {
          // dd($data);
          event($leaderboard = $this->create($data, $total_mark));
          $data->leaderboard_id = $leaderboard->id;
          $data->save();
        }
      }
      return view('activities.leaderboard', compact('student'));
  }

  public function create($data, $total_mark){
    return Leaderboard::Create([
      'student_id' => $data->id,
      'scores' => $total_mark,
      'game_id' => null,
      'student_games_id' => null,
      ]);
  }

  public function update($data, $total_mark){
    $leaderboard = Leaderboard::findOrFail($data->id);
    $leaderboard->scores = $total_mark;
    $leaderboard->game_id = null;
    $leaderboard->student_games_id = null;
    $leaderboard->save();
    return $leaderboard;
  }
}
