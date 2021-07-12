<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student_Quiz extends Model
{
    use HasFactory;

    protected $table = 'students_quizes';

    protected $fillable = [
      'result',
      'answered_question',
      'percentage',
      'result_status',
      'quiz_id',
      'student_id',
    ];

    public function quiz(){
      return $this->belongsTo('App\Models\Quiz', 'quiz_id', 'id'); //return $this->hasMany('Model', 'foreign_key', 'local_key');
    }
    public function student(){
      return $this->belongsTo('App\Models\Student', 'student_id'); //return $this->hasMany('Model', 'foreign_key', 'local_key');
    }
    public function calculateQuizProgress()
    {
        dd('test');
        $quiz_progress = $this->where('result_status', "Lulus")->distinct('quiz_id')->count();
        return ($quiz_progress / 10) * 100;
    }
}
