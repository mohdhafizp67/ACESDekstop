<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Student_Game;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use stdClass;
use Throwable;

class StudentGameController extends Controller
{
    public function create(Request $request)
    {

        $user_ic =  base64_decode($request->encoded_ic);

        $response = new stdClass();

        try {
            $student = DB::table('students')
                ->join('users', 'users.id', '=', 'students.user_id')
                ->select('students.id')
                ->where("users.ic_number", "=", $user_ic)
                ->get();

            if (count($student) > 1) {
                $response->success = false;
                $response->message = "";
                return response()->json($response);
            }

            $student_game_search = DB::table('students_games')
                ->where("student_id", "=", $student[0]->id)
                ->where("game_id", "=", $request->game_id)
                ->get();

            if (count($student_game_search) == 0) {
                $student_game = new Student_Game();
            }

            if (count($student_game_search) == 1) {
                $student_game = Student_Game::find($student_game_search[0]->id);
            }

            $student_id = Auth::user()->student->id;

            $check_student_game = Student_Game::where('student_id',  $student_id)->where('game_id',$request->$game_id)->count();

            if($check_student_game == 0){

              $student_game = Student_Game::Create([

                'student_point' => $student_point,
                'game_id' => $request->game_id,
                'student_id' => $student_id,
                ]);


                $leaderboard = Leaderboard::where('student_id', $student_id)->first();

                $leaderboard->scores = $leaderboard->scores + $student_point;
                $leaderboard->save();
            }else {
              $student_game = Student_Game::where('student_id', $student_id)->where('game_id', $request->game_id)->first();

                  if($student_point > $game_student->student_point){

                    $leaderboard = Leaderboard::where('student_id', $student_id)->first();
                    $leaderboard->scores = ($leaderboard->scores - $student_game->student_point) + $student_point;
                    $leaderboard->save();

                    $student_game->student_point;
                    $student_game->game_id = $request->game_id;
                    $student_game->student_id = $student_id;
                    $student_game->save();
                    $response->success = true;
                    $response->message = "Score saved";
                  }

                  else {
                    $student_game->student_point;
                    $student_game->game_id = $request->game_id;
                    $student_game->student_id = $student_id;
                    $student_game->save();
                    $response->success = true;
                    $response->message = "Score saved";
                  }

            }


            // $student_game->student_point = $request->student_point;
            // $student_game->game_id = $request->game_id;
            // $student_game->student_id = $student[0]->id;
            // $student_game->save();


        } catch (Throwable $e) {
            $response->success = false;
            $response->message = $e;
        }

        return response()->json($response);
    }

}
