<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LessonController extends Controller
{
  public function courses()
  {
      return view('lesson.courses');
  }
}
