<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use HasFactory;

    protected $table = 'quizes';

    protected $fillable = [
      'quiz_type',
      'quiz_level',
      'lesson_id'
    ];

    public function lesson(){
      return $this->belongsTo('App\Models\Lesson', 'id', 'lesson_id'); //return $this->hasMany('Model', 'foreign_key', 'local_key');
    }
}
