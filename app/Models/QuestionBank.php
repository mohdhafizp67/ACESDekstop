<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class QuestionBank extends Model
{
    // use HasFactory;
    protected $fillable = [
      'chapter',
      'question',
      'status'
    ];

    public function answer(){
      return $this->hasMany('App\Models\AnswerBank');
    }
}
