<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $table = 'students';

    protected $fillable = [
      'user_id',
      'student_lesson_id',
      'student_quiz_id',
      'student_game_id',
      'leaderboard_id',
      // 'message_id',
    ];

    public function student_lesson(){
      return $this->hasMany('App\Models\Student_Lesson', 'student_id', 'student_lesson_id'); //return $this->hasMany('Model', 'foreign_key', 'local_key');
    }

    public function student_game(){
      return $this->hasMany('App\Models\Student_Game', 'student_id', 'student_game_id'); //return $this->hasMany('Model', 'foreign_key', 'local_key');
    }

    public function leaderboard(){
      return $this->hasOne('App\Models\Leaderboard', 'id', 'leaderboard_id')->orderBy('scores');; //return $this->hasMany('Model', 'foreign_key', 'local_key');
    }

    // public function message_id(){
    //   return $this->hasMany('App\Models\Message', 'id', 'message_id'); //return $this->hasMany('Model', 'foreign_key', 'local_key');
    // }

    public function user(){
      return $this->belongsTo('App\Models\User', 'user_id'); //return $this->hasMany('Model', 'foreign_key', 'local_key');
    }

    public function messages(){
      return $this->hasMany('App\Models\Message');
    }
}
