<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student_Game extends Model
{
    use HasFactory;

    protected $table = 'students_games';

    protected $fillable = [
      'game_id',
      'student_id',
      'student_point'
    ];

    public function quiz(){
      return $this->belongsTo('App\Models\Game', 'id', 'game_id'); //return $this->hasMany('Model', 'foreign_key', 'local_key');
    }
    public function student(){
      return $this->belongsTo('App\Models\Student', 'id', 'student_id'); //return $this->hasMany('Model', 'foreign_key', 'local_key');
    }
}
