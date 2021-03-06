<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use App\Models\Leaderboard;
use App\Models\QuestionBank;
use App\Models\AnswerBank;
use App\Models\Lesson;
use App\Models\Student_Lesson;

use stdClass;
use Illuminate\Http\Request;

class LessonController extends Controller
{
  public function courses()
  {
      return view('lesson.courses');
  }

  public function additivelessons()
  {
      return view('lesson.additivelessons');
  }

  public function update_lesson3(){
    $response = new stdClass();

    $student_id = Auth::user()->student->id;
    $lesson_id = "3";

    $check_lesson_student = Student_Lesson::where('student_id',  $student_id)->where('lesson_id', $lesson_id)->count();
    if($check_lesson_student == 0){
      event($lesson_student_id = $this->create_lesson_student_3());

      $leaderboard = Leaderboard::where('student_id', $student_id)->first();
      if(!$leaderboard){
        $leaderboard = new Leaderboard();
        $leaderboard->student_id = $student_id;
        $leaderboard->scores = 10;
        $leaderboard->save();

        $response->success = true;
        $response->message = "Student marks updated";
      }else {
        // $leaderboard = new Leaderboard();
        $leaderboard->student_id = $student_id;
        $leaderboard->scores += 10;
        $leaderboard->save();

        $response->success = true;
        $response->message = "Student marks updated + 10";
      }
    }else {
      $response->success = false;
      $response->message = "Student exist";
    }
    return response()->json($response);
    }
  public function create_lesson_student_3()
  {


    $student_id = Auth::user()->student->id;
    $lesson_id = "3";
    $student_completion = 1;

    return Student_Lesson::create([
        'lesson_id' => $lesson_id,
        'student_id' => $student_id,
        'student_completion' => $student_completion,
    ]);
  }

  public function advancedlessons()
  {
      return view('lesson.advancedlessons');
  }

  public function update_lesson9(){
    $response = new stdClass();

    $student_id = Auth::user()->student->id;
    $lesson_id = "9";

    $check_lesson_student = Student_Lesson::where('student_id',  $student_id)->where('lesson_id', $lesson_id)->count();
    if($check_lesson_student == 0){
      event($lesson_student_id = $this->create_lesson_student_9());

      $leaderboard = Leaderboard::where('student_id', $student_id)->first();
      if(!$leaderboard){
        $leaderboard = new Leaderboard();
        $leaderboard->student_id = $student_id;
        $leaderboard->scores = 10;
        $leaderboard->save();

        $response->success = true;
        $response->message = "Student marks updated";
      }else {
        // $leaderboard = new Leaderboard();
        $leaderboard->student_id = $student_id;
        $leaderboard->scores += 10;
        $leaderboard->save();

        $response->success = true;
        $response->message = "Student marks updated + 10";
      }
    }else {
      $response->success = false;
      $response->message = "Student exist";
    }
    return response()->json($response);
    }

  public function create_lesson_student_9()
  {


    $student_id = Auth::user()->student->id;
    $lesson_id = "9";
    $student_completion = 1;

    return Student_Lesson::create([
        'lesson_id' => $lesson_id,
        'student_id' => $student_id,
        'student_completion' => $student_completion,
    ]);
  }

  public function autolessons()
  {
      return view('lesson.autolessons');
  }

  public function update_lesson10(){
    $response = new stdClass();

    $student_id = Auth::user()->student->id;
    $lesson_id = "10";

    $check_lesson_student = Student_Lesson::where('student_id',  $student_id)->where('lesson_id', $lesson_id)->count();
    if($check_lesson_student == 0){
      event($lesson_student_id = $this->create_lesson_student_10());

      $leaderboard = Leaderboard::where('student_id', $student_id)->first();
      if(!$leaderboard){
        $leaderboard = new Leaderboard();
        $leaderboard->student_id = $student_id;
        $leaderboard->scores = 10;
        $leaderboard->save();

        $response->success = true;
        $response->message = "Student marks updated";
      }else {
        // $leaderboard = new Leaderboard();
        $leaderboard->student_id = $student_id;
        $leaderboard->scores += 10;
        $leaderboard->save();

        $response->success = true;
        $response->message = "Student marks updated + 10";
      }
    }else {
      $response->success = false;
      $response->message = "Student exist";
    }
    return response()->json($response);
  }

  public function create_lesson_student_10()
  {


    $student_id = Auth::user()->student->id;
    $lesson_id = "10";
    $student_completion = 1;

    return Student_Lesson::create([
        'lesson_id' => $lesson_id,
        'student_id' => $student_id,
        'student_completion' => $student_completion,
    ]);
  }

  public function bigdatalessons()
  {
      return view('lesson.bigdatalessons');
  }

  public function update_lesson5(){
    $response = new stdClass();

    $student_id = Auth::user()->student->id;
    $lesson_id = "5";

    $check_lesson_student = Student_Lesson::where('student_id',  $student_id)->where('lesson_id', $lesson_id)->count();
    if($check_lesson_student == 0){
      event($lesson_student_id = $this->create_lesson_student_5());

      $leaderboard = Leaderboard::where('student_id', $student_id)->first();
      if(!$leaderboard){
        $leaderboard = new Leaderboard();
        $leaderboard->student_id = $student_id;
        $leaderboard->scores = 10;
        $leaderboard->save();

        $response->success = true;
        $response->message = "Student marks updated";
      }else {
        // $leaderboard = new Leaderboard();
        $leaderboard->student_id = $student_id;
        $leaderboard->scores += 10;
        $leaderboard->save();

        $response->success = true;
        $response->message = "Student marks updated + 10";
      }
    }else {
      $response->success = false;
      $response->message = "Student exist";
    }
    return response()->json($response);
  }

  public function create_lesson_student_5()
  {
    $student_id = Auth::user()->student->id;
    $lesson_id = "5";
    $student_completion = 1;

    return Student_Lesson::create([
        'lesson_id' => $lesson_id,
        'student_id' => $student_id,
        'student_completion' => $student_completion,
    ]);
  }

  public function cloudlessons()
  {
      return view('lesson.cloudlessons');
  }

  public function update_lesson6(){
    $response = new stdClass();

    $student_id = Auth::user()->student->id;
    $lesson_id = "6";

    $check_lesson_student = Student_Lesson::where('student_id',  $student_id)->where('lesson_id', $lesson_id)->count();
    if($check_lesson_student == 0){
      event($lesson_student_id = $this->create_lesson_student_6());

      $leaderboard = Leaderboard::where('student_id', $student_id)->first();
      if(!$leaderboard){
        $leaderboard = new Leaderboard();
        $leaderboard->student_id = $student_id;
        $leaderboard->scores = 10;
        $leaderboard->save();

        $response->success = true;
        $response->message = "Student marks updated";
      }else {
        // $leaderboard = new Leaderboard();
        $leaderboard->student_id = $student_id;
        $leaderboard->scores += 10;
        $leaderboard->save();

        $response->success = true;
        $response->message = "Student marks updated + 10";
      }
    }else {
      $response->success = false;
      $response->message = "Student exist";
    }
    return response()->json($response);
  }

  public function create_lesson_student_6()
  {


    $student_id = Auth::user()->student->id;
    $lesson_id = "6";
    $student_completion = 1;

    return Student_Lesson::create([
        'lesson_id' => $lesson_id,
        'student_id' => $student_id,
        'student_completion' => $student_completion,
    ]);
  }

  public function cyberlessons()
  {
      return view('lesson.cyberlessons');
  }

  public function update_lesson7(){
    $response = new stdClass();

    $student_id = Auth::user()->student->id;
    $lesson_id = "7";

    $check_lesson_student = Student_Lesson::where('student_id',  $student_id)->where('lesson_id', $lesson_id)->count();
    if($check_lesson_student == 0){
      event($lesson_student_id = $this->create_lesson_student_7());

      $leaderboard = Leaderboard::where('student_id', $student_id)->first();
      if(!$leaderboard){
        $leaderboard = new Leaderboard();
        $leaderboard->student_id = $student_id;
        $leaderboard->scores = 10;
        $leaderboard->save();

        $response->success = true;
        $response->message = "Student marks updated";
      }else {
        // $leaderboard = new Leaderboard();
        $leaderboard->student_id = $student_id;
        $leaderboard->scores += 10;
        $leaderboard->save();

        $response->success = true;
        $response->message = "Student marks updated + 10";
      }
    }else {
      $response->success = false;
      $response->message = "Student exist";
    }
    return response()->json($response);
  }

  public function create_lesson_student_7()
  {


    $student_id = Auth::user()->student->id;
    $lesson_id = "7";
    $student_completion = 1;

    return Student_Lesson::create([
        'lesson_id' => $lesson_id,
        'student_id' => $student_id,
        'student_completion' => $student_completion,
    ]);
  }


  public function iotlessons()
  {
      return view('lesson.iotlessons');
  }

  public function update_lesson4(){
    $response = new stdClass();

    $student_id = Auth::user()->student->id;
    $lesson_id = "4";

    $check_lesson_student = Student_Lesson::where('student_id',  $student_id)->where('lesson_id', $lesson_id)->count();
    if($check_lesson_student == 0){
      event($lesson_student_id = $this->create_lesson_student_4());

      $leaderboard = Leaderboard::where('student_id', $student_id)->first();
      if(!$leaderboard){
        $leaderboard = new Leaderboard();
        $leaderboard->student_id = $student_id;
        $leaderboard->scores = 10;
        $leaderboard->save();

        $response->success = true;
        $response->message = "Student marks updated";
      }else {
        // $leaderboard = new Leaderboard();
        $leaderboard->student_id = $student_id;
        $leaderboard->scores += 10;
        $leaderboard->save();

        $response->success = true;
        $response->message = "Student marks updated + 10";
      }
    }else {
      $response->success = false;
      $response->message = "Student exist";
    }
    return response()->json($response);
  }

  public function create_lesson_student_4()
  {


    $student_id = Auth::user()->student->id;
    $lesson_id = "4";
    $student_completion = 1;

    return Student_Lesson::create([
        'lesson_id' => $lesson_id,
        'student_id' => $student_id,
        'student_completion' => $student_completion,
    ]);
  }

  public function universallessons()
  {
      return view('lesson.universallessons');
  }

  public function update_lesson8(){
    $response = new stdClass();

    $student_id = Auth::user()->student->id;
    $lesson_id = "8";

    $check_lesson_student = Student_Lesson::where('student_id',  $student_id)->where('lesson_id', $lesson_id)->count();
    if($check_lesson_student == 0){
      event($lesson_student_id = $this->create_lesson_student_8());

      $leaderboard = Leaderboard::where('student_id', $student_id)->first();
      if(!$leaderboard){
        $leaderboard = new Leaderboard();
        $leaderboard->student_id = $student_id;
        $leaderboard->scores = 10;
        $leaderboard->save();

        $response->success = true;
        $response->message = "Student marks updated";
      }else {
        // $leaderboard = new Leaderboard();
        $leaderboard->student_id = $student_id;
        $leaderboard->scores += 10;
        $leaderboard->save();

        $response->success = true;
        $response->message = "Student marks updated + 10";
      }
    }else {
      $response->success = false;
      $response->message = "Student exist";
    }
    return response()->json($response);
  }


  public function create_lesson_student_8()
  {


    $student_id = Auth::user()->student->id;
    $lesson_id = "8";
    $student_completion = 1;

    return Student_Lesson::create([
        'lesson_id' => $lesson_id,
        'student_id' => $student_id,
        'student_completion' => $student_completion,
    ]);
  }


  public function vrlessons()
  {
      return view('lesson.vrlessons');
  }

  public function update_lesson2(){
    $response = new stdClass();

    $student_id = Auth::user()->student->id;
    $lesson_id = "2";

    $check_lesson_student = Student_Lesson::where('student_id',  $student_id)->where('lesson_id', $lesson_id)->count();
    if($check_lesson_student == 0){
      event($lesson_student_id = $this->create_lesson_student_2());

      $leaderboard = Leaderboard::where('student_id', $student_id)->first();
      if(!$leaderboard){
        $leaderboard = new Leaderboard();
        $leaderboard->student_id = $student_id;
        $leaderboard->scores = 10;
        $leaderboard->save();

        $response->success = true;
        $response->message = "Student marks updated";
      }else {
        // $leaderboard = new Leaderboard();
        $leaderboard->student_id = $student_id;
        $leaderboard->scores += 10;
        $leaderboard->save();

        $response->success = true;
        $response->message = "Student marks updated + 10";
      }
    }else {
      $response->success = false;
      $response->message = "Student exist";
    }
    return response()->json($response);
  }

  public function create_lesson_student_2()
  {


    $student_id = Auth::user()->student->id;
    $lesson_id = "2";
    $student_completion = 1;

    return Student_Lesson::create([
        'lesson_id' => $lesson_id,
        'student_id' => $student_id,
        'student_completion' => $student_completion,
    ]);
  }
  public function introduction()
  {
      return view('lesson.introduction');
  }

  public function update_lesson1(){
    $response = new stdClass();

    $student_id = Auth::user()->student->id;
    // dd($student_id);
    $lesson_id = "1";
    $check_lesson_student = Student_Lesson::where('student_id',  $student_id)->where('lesson_id', $lesson_id)->count();
    if($check_lesson_student == 0){ //kalau first time
      event($lesson_student_id = $this->create_lesson_student_1());

      $leaderboard = Leaderboard::where('student_id', $student_id)->first();
      if(!$leaderboard){
        $leaderboard = new Leaderboard();
        $leaderboard->student_id = $student_id;
        $leaderboard->scores = 10;
        $leaderboard->save();

        $response->success = true;
        $response->message = "Student marks updated";
      }else {
        // $leaderboard = new Leaderboard();
        $leaderboard->student_id = $student_id;
        $leaderboard->scores += 10;
        $leaderboard->save();

        $response->success = true;
        $response->message = "Student marks updated + 10";
      }
    }else {
      $response->success = false;
      $response->message = "Student exist";
    }
    return response()->json($response);
  }

  public function create_lesson_student_1(){
    $student_id = Auth::user()->student->id;
    $lesson_id = "1";
    $student_completion = 1;

    return Student_Lesson::create([
        'lesson_id' => $lesson_id,
        'student_id' => $student_id,
        'student_completion' => $student_completion,
    ]);
  }

  public function lokasivr()
  {
      return view('lesson.lokasivr');
  }

  // Game

  public function karakter()
  {
      return view('lesson.karakter');
  }
  public function videogame()
  {
      return view('lesson.videogame');
  }

  // Game

  public function listlesson()
  {
      $lesson_list = Lesson::get();
      // dd($lesson_list);
      return view('admin.activities.lesson.list', compact('lesson_list'));
  }

  public function updateLink(Request $request){
    $lesson = Lesson::findorfail($request->lesson_id);
    $lesson->video_link_1 = $request->link1;
    $lesson->video_link_2 = $request->link2;
    $lesson->video_link_3 = $request->link3;
    $lesson->save();

    return redirect()->route('admin.activities.lesson.list')->with("success","Video link has been updated!");
  }

  public function addLesson()
  {
      return view('admin.activities.lesson.add');
  }

  public function saveLesson(Request $request){
    // dd($request->all());
    event($lesson_id = $this->createLesson($request->all()));
    return redirect()->route('admin.activities.lesson.add')->with("success","New lessons have been saved");
  }

  public function createLesson(array $data){

    return Lesson::Create([
      'lesson_type' => $data['lesson_type'],
      'lesson_subject' => $data['lesson_subject'],
      ]);
  }
}
