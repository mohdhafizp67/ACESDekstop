<?php

namespace App\Http\Controllers;

use Auth;
use App\Models\User;
use App\Models\QuestionBank;
use App\Models\AnswerBank;
use App\Models\Lesson;
use App\Models\Student_Lesson;


use Illuminate\Http\Request;

class LessonController extends Controller
{
  public function courses()
  {
      return view('lesson.courses');
  }

  public function additivelessons()
  {

    $student_id = Auth::user()->student->id;
    $lesson_id = "3";

    $check_lesson_student = Student_Lesson::where('student_id',  $student_id)->where('lesson_id', $lesson_id)->count();
    if($check_lesson_student == 0){
      event($lesson_student_id = $this->create_lesson_student_3());
    }

      return view('lesson.additivelessons');
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
    $student_id = Auth::user()->student->id;
    $lesson_id = "9";

    $check_lesson_student = Student_Lesson::where('student_id',  $student_id)->where('lesson_id', $lesson_id)->count();
    if($check_lesson_student == 0){
      event($lesson_student_id = $this->create_lesson_student_9());
    }

      return view('lesson.advancedlessons');
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
    $student_id = Auth::user()->student->id;
    $lesson_id = "10";

    $check_lesson_student = Student_Lesson::where('student_id',  $student_id)->where('lesson_id', $lesson_id)->count();
    if($check_lesson_student == 0){
      event($lesson_student_id = $this->create_lesson_student_10());
    }

      return view('lesson.autolessons');
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
    $student_id = Auth::user()->student->id;
    $lesson_id = "5";

    $check_lesson_student = Student_Lesson::where('student_id',  $student_id)->where('lesson_id', $lesson_id)->count();
    if($check_lesson_student == 0){
      event($lesson_student_id = $this->create_lesson_student_5());
    }

      return view('lesson.bigdatalessons');
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
    $student_id = Auth::user()->student->id;
    $lesson_id = "6";

    $check_lesson_student = Student_Lesson::where('student_id',  $student_id)->where('lesson_id', $lesson_id)->count();
    if($check_lesson_student == 0){
      event($lesson_student_id = $this->create_lesson_student_6());
    }

      return view('lesson.cloudlessons');
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
    $student_id = Auth::user()->student->id;
    $lesson_id = "7";

    $check_lesson_student = Student_Lesson::where('student_id',  $student_id)->where('lesson_id', $lesson_id)->count();
    if($check_lesson_student == 0){
      event($lesson_student_id = $this->create_lesson_student_7());
    }

      return view('lesson.cyberlessons');
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

    $student_id = Auth::user()->student->id;
    $lesson_id = "4";

    $check_lesson_student = Student_Lesson::where('student_id',  $student_id)->where('lesson_id', $lesson_id)->count();
    if($check_lesson_student == 0){
      event($lesson_student_id = $this->create_lesson_student_4());
    }

      return view('lesson.iotlessons');
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
    $student_id = Auth::user()->student->id;
    $lesson_id = "8";

    $check_lesson_student = Student_Lesson::where('student_id',  $student_id)->where('lesson_id', $lesson_id)->count();
    if($check_lesson_student == 0){
      event($lesson_student_id = $this->create_lesson_student_8());
    }

      return view('lesson.universallessons');
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


    $student_id = Auth::user()->student->id;
    $lesson_id = "2";

    $check_lesson_student = Student_Lesson::where('student_id',  $student_id)->where('lesson_id', $lesson_id)->count();
    if($check_lesson_student == 0){
      event($lesson_student_id = $this->create_lesson_student_2());
    }

      return view('lesson.vrlessons');

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
    $student_id = Auth::user()->student->id;
    $lesson_id = "1";

    $check_lesson_student = Student_Lesson::where('student_id',  $student_id)->where('lesson_id', $lesson_id)->count();
    if($check_lesson_student == 0){
      event($lesson_student_id = $this->create_lesson_student_1());
    }
      return view('lesson.introduction');
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

    return redirect()->route('admin.activities.lesson.list')->with("success","Pautan video telah dikemaskini!");
  }

  public function addLesson()
  {
      return view('admin.activities.lesson.add');
  }

  public function saveLesson(Request $request){
    // dd($request->all());
    event($lesson_id = $this->createLesson($request->all()));
    return redirect()->route('admin.activities.lesson.add')->with("success","Pelajaran baru telah disimpan");
  }

  public function createLesson(array $data){

    return Lesson::Create([
      'lesson_type' => $data['lesson_type'],
      'lesson_subject' => $data['lesson_subject'],
      ]);
  }
}
