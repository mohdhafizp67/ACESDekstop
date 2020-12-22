<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    use HasFactory;

    protected $table = 'messages';

    protected $fillable = [
      'messages_details',
      'student_id',
    ];

    public function student(){
      return $this->belongsTo('App\Models\Student', 'id', 'student_id'); //return $this->hasMany('Model', 'foreign_key', 'local_key');
    }
}
