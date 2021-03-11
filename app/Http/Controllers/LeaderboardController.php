<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Student_Lesson;
use App\Models\Student_Quiz;
use App\Models\Leaderboard;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class LeaderboardController extends Controller
{
  public function viewLeaderboard()
  {
    // $student =  Student::whereHas('User', function ($query) {
    //   return $query->where('is_active','1');
    // })->take(10)->get();

    // // dd($student);
    // foreach ($student as $data) {
    //   $lesson_progress = Student_Lesson::where('student_id', $data->id)->count();
    //   $lesson_progress = ($lesson_progress/10) * 100;

    //   $quiz_progress = Student_Quiz::where('result_status', "Lulus")->where('student_id', $data->id)->distinct('quiz_id')->get();
    //   $quiz_total_marks = 0;
    //   if($quiz_progress){
    //     foreach ($quiz_progress as $data) {
    //       $quiz_total_marks += $data->percentage;
    //     }
    //   }
    //   else{
    //     $quiz_total_marks = 0;
    //   }
    //   $total_mark = $lesson_progress + $quiz_total_marks;
    //   // dd($total_mark);

    //   $leaderboard = Leaderboard::where('student_id', $data->id)->first();
    //   if($leaderboard){
    //     // dd('update');
    //     event($leaderboard = $this->update($data, $total_mark));
    //   }
    //   else {
    //     // dd($data);
    //     event($leaderboard = $this->create($data, $total_mark));
    //     $data->leaderboard_id = $leaderboard->id;
    //     $data->save();
    //   }
    // }
    // return view('activities.leaderboard', compact('student'));


    $student = DB::table('students')->select(DB::raw('students_games.student_point, leaderboards.scores, (IFNULL(students_games.student_point, 0) + IFNULL(leaderboards.scores, 0)) as total_points, students.id as id, users.profile_picture as profile_picture, users.name as name, users.school as school, users.state as state'))
      ->leftJoin("students_games", "students_games.student_id", "=", "students.id")
      // ->leftJoin("students_quizes", "students_quizes.student_id", "=", "students.id")
      ->leftJoin("leaderboards", "leaderboards.student_id", "=", "students.id")

      ->join("users", "users.id", "=", "students.user_id")
      ->groupBy("students.id", "students_games.student_id",  "leaderboards.student_id", "students_games.student_point", "leaderboards.scores")
      ->orderBy("total_points", "DESC")
      ->limit(10)
      ->get();

      // dd($student);
    // $student = DB::table('students')->select(DB::raw('sum(students_games.student_point) as total_points, students.id as id, users.profile_picture as profile_picture, users.name as name, users.school as school, users.state as state'))
    //     ->leftJoin("students_games", "students_games.student_id", "=", "students.id")
    //     ->join("users", "users.id", "=", "students.user_id")
    //     ->groupBy("students.id")
    //     ->orderBy("total_points", "DESC")
    //     ->limit(10)
    //     ->get();

      // dd($student);

      // $all_students =  DB::table('students')->select(DB::raw('sum(students_games.student_point) as total_points, users.id as user_id'))
      //  ->leftJoin("students_games", "students_games.student_id", "=", "students.id")
      //  ->join("users", "users.id", "=", "students.user_id")
      //  ->groupBy("students.id")
      //  ->orderBy("total_points", "DESC")
      //  ->get();

       $all_students =  DB::table('students')->select(DB::raw('students_games.student_point, leaderboards.scores, (IFNULL(students_games.student_point, 0) + IFNULL(leaderboards.scores, 0)) as total_points, users.id as user_id'))
        ->leftJoin("students_games", "students_games.student_id", "=", "students.id")
        // ->leftJoin("students_quizes", "students_quizes.student_id", "=", "students.id")
        ->leftJoin("leaderboards", "leaderboards.student_id", "=", "students.id")
        ->join("users", "users.id", "=", "students.user_id")
        ->groupBy("students.id", "students_games.student_id",  "leaderboards.student_id", "students_games.student_point", "leaderboards.scores")
        ->orderBy("total_points", "DESC")
        ->get();

    $current_user_ranking = 0;

    for ($i = 0; $i < count($all_students); $i++) {
      if ($all_students[$i]->user_id == Auth::user()->id) {
        $current_user_ranking = $i + 1;
      }
    }

    $current_user = DB::table('students')->select(DB::raw('students_games.student_point, leaderboards.scores, (IFNULL(students_games.student_point, 0) + IFNULL(leaderboards.scores, 0)) as total_points, students.id as id, users.profile_picture as profile_picture, users.name as name, users.school as school, users.state as state'))
      ->leftJoin("students_games", "students_games.student_id", "=", "students.id")
      // ->leftJoin("students_quizes", "students_quizes.student_id", "=", "students.id")
      ->leftJoin("leaderboards", "leaderboards.student_id", "=", "students.id")
      ->join("users", "users.id", "=", "students.user_id")
      ->where("users.id", "=", Auth::user()->id)
      ->groupBy("students.id", "students_games.student_id",  "leaderboards.student_id", "students_games.student_point", "leaderboards.scores")
      ->get();

    $current_user_marks = $current_user[0]->total_points;

    return view('activities.leaderboard', compact('student', 'current_user_marks', 'current_user_ranking'));
  }
}
