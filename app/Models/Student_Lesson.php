<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student_Lesson extends Model
{
  use HasFactory;
  
  protected $table = 'students_lessons';

  protected $fillable = [
    'lesson_id',
    'student_id',
    'student_completion'
  ];

  public function lesson(){
    return $this->belongsTo('App\Models\Lesson', 'id', 'lesson_id'); //return $this->hasMany('Model', 'foreign_key', 'local_key');
  }
  public function student(){
    return $this->belongsTo('App\Models\Student', 'id', 'student_id'); //return $this->hasMany('Model', 'foreign_key', 'local_key');
  }
}
