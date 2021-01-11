<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionBank extends Model
{
    // use HasFactory;
    protected $fillable = [
      'question',
      'status',
      'language',
      'lesson_id'

    ];

    public function answer(){
      return $this->hasMany('App\Models\AnswerBank');
    }

    public function lesson(){
        return $this->belongsTo('\App\Models\Lesson', 'lesson_id');
    }
}
