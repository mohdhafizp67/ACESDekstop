<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    // use HasFactory;
    protected $fillable = [
      'lesson_type',
      'lesson_subject',
      'video_link_1',
      'video_link_2',
      'video_link_3',
      'image_1',
      'image_2',
      'image_3',
    ];

    public function quiz(){
      return $this->hasMany('App\Models\Quiz');
    }

    public function question(){
      return $this->hasMany('App\Models\QuestionBank');
    }

}
