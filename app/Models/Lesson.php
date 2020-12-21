<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    use HasFactory;
    protected $table = 'lessons';

    protected $fillable = [
      'lesson_type',
      'lesson_subject',
      'lesson_id',

      //kiv
      'chapter',
      'question',
      'status'
    ];

    public function lesson(){
      return $this->belongsTo('App\Models\Lesson', 'id', 'lesson_id'); //return $this->hasMany('Model', 'foreign_key', 'local_key');
    }

}
