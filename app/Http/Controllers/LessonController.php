<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\QuestionBank;
use App\Models\AnswerBank;
use App\Models\Lesson;

use Illuminate\Http\Request;

class LessonController extends Controller
{
  public function courses()
  {
      return view('lesson.courses');
  }

  public function courseslatest()
  {
      return view('lesson.courses-latest');
  }

  public function listlesson()
  {
      $lesson_list = Lesson::get();
      // dd($lesson_list);
      return view('admin.activities.lesson.list', compact('lesson_list'));
  }

  public function updateLink(Request $request){
    $lesson = Lesson::findorfail($request->lesson_id);
    $lesson->video_link = $request->link;
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
