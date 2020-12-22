<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student_Quiz extends Model
{
    use HasFactory;

    protected $table = 'students_quizes';

    protected $fillable = [
      'quiz_id',
      'student_id',
      'student_result'
    ];

    public function quiz(){
      return $this->belongsTo('App\Models\Quiz', 'id', 'quiz_id'); //return $this->hasMany('Model', 'foreign_key', 'local_key');
    }
    public function student(){
      return $this->belongsTo('App\Models\Student', 'id', 'student_id'); //return $this->hasMany('Model', 'foreign_key', 'local_key');
    }
}
