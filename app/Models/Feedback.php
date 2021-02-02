<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    // use HasFactory;
    protected $table = 'feedbacks';
    protected $fillable = [
      'subject',
      'feedback',
      'status',
      'user_id',

    ];

    public function user(){
        return $this->belongsTo('\App\Models\User', 'user_id');
    }
}
