<?php

namespace App\Http\Controllers;

use App\Models\Student;
use App\Models\Student_Game;
use App\Models\Leaderboard;
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

            if (count($student_game_search) === 0) {
                $student_game = new Student_Game();
            }

            if (count($student_game_search) === 1) {
                $student_game = Student_Game::find($student_game_search[0]->id);

                $leaderboard = Leaderboard::where('student_id', $student_id)->first();
                if(!$leaderboard){
                  $leaderboard = new Leaderboard();
                  $leaderboard->student_id = $student_id;
                  $leaderboard->scores = $leaderboard->scores + $student_point;
                  $leaderboard->save();

                }else {
                  // $leaderboard = new Leaderboard();
                  $leaderboard->student_id = $student_id;
                  $leaderboard->scores = ($leaderboard->scores - $student_game->student_point) + $student_point;
                  $leaderboard->save();

                }
            }

            $student_game->student_point = $request->student_point;
            $student_game->game_id = $request->game_id;
            $student_game->student_id = $student[0]->id;

            $student_game->save();
            $response->success = true;
            $response->message = "Score saved";
        } catch (Throwable $e) {
            $response->success = false;
            $response->message = $e;
        }

        return response()->json($response);
    }
}
