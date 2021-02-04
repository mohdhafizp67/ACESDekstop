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

  public function vrlessons()
  {
      return view('lesson.vrlessons');
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
