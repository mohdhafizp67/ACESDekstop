<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnswerBank extends Model
{
  protected $fillable = [
    'question_id',
    'answer',
    'status'
    'language',
    
  ];

  public function question(){
      return $this->belongsTo('\App\Models\QuestionBank', 'question_id');
  }
}
