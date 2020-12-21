<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasFactory;

    protected $table = 'games';

    protected $fillable = [
      'game_level',
      'game_type',
      'lesson_id'
    ];

    public function lesson(){
      return $this->hasMany('App\Models\Student_Lesson', 'lesson_id', 'id'); //return $this->hasMany('Model', 'foreign_key', 'local_key');
    }
}
