<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;
use App\Models\Student_Game;
use App\Models\Game;


class GameController extends Controller
{
  public function tutorial()
  {
    return view('game.tutorial.index');
  }

  public function test()
  {

    return view('game.demo.gameUnity');

  }

  // public function update_game($game_id){
  //   $student_id = Auth::user()->student->id;
  //
  //   $check_game_student = Student_Game::where('student_id',  $student_id)->where('game_id', $game_id)->count();
  //   if($check_game_student == 0){
  //     event($game_student_id = $this->create_game_student($game_id));
  //   }
  //   exit;
  // }

// update game point
  public function update_game($game_id){
    $student_id = Auth::user()->student->id;

    $check_game_student = Student_Game::where('student_id',  $student_id)->where('game_id', $game_id)->count();
    if($check_game_student == 0){
      event($game_student_id = $this->create_game_student($game_id));

      $leaderboard = Leaderboard::where('student_id', $student_id)->first();
      if(!$leaderboard){
        $leaderboard = new Leaderboard();
        $leaderboard->student_id = $student_id;
        $leaderboard->scores = ($leaderboard->scores - $game_id->student_point) + $student_point;
        $leaderboard->save();

        $response->success = true;
        $response->message = "Student marks updated";
      }else {
        // $leaderboard = new Leaderboard();
        $leaderboard->student_id = $student_id;
        $leaderboard->scores = $leaderboard->scores + $game_id->student_point;
        $leaderboard->save();

        $response->success = true;
        $response->message = "Student point updated";
      }
    }else {
      $response->success = false;
      $response->message = "Student exist";
    }
    return response()->json($response);
  }

  public function create_game_student($game_id)
  {

    $student_id = Auth::user()->student->id;
    $student_point = 0;

    return Student_Game::create([
      'student_point' => $student_point,
      'student_id' => $student_id,
      'game_id' => $game_id,
    ]);
  }

}
