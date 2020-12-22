<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Leaderboard extends Model
{
    use HasFactory;

    protected $table = 'leaderboards';

    protected $fillable = [
      'student_id',
      'game_id',
      'student_games_id'
    ];

    public function student(){
      return $this->belongsTo('App\Models\Student', 'id', 'student_id'); //return $this->hasMany('Model', 'foreign_key', 'local_key');
    }

    public function game(){
      return $this->belongsTo('App\Models\Game', 'id', 'game_id'); //return $this->hasMany('Model', 'foreign_key', 'local_key');
    }

    public function student_game(){
      return $this->belongsTo('App\Models\Student_Game', 'id', 'student_games_id'); //return $this->hasMany('Model', 'foreign_key', 'local_key');
    }
}
