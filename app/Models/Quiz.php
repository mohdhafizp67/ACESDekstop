<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{

    // use HasFactory;
    protected $table = 'quizes';
    protected $fillable = [
      'time',
      'number_of_question',
      'percentage_to_pass',
      'status',

      'lesson_id'
    ];

    public function lesson(){

        return $this->belongsTo('\App\Models\Lesson', 'lesson_id');
    }

    public function question(){
      return $this->hasMany('App\Models\QuestionBank');
    }

    public function student_quiz(){
      return $this->hasMany('App\Models\Student_Quiz');
    }
}
