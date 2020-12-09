<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeaderboardController extends Controller
{
  public function viewLeaderboard()
  {
      return view('activities.leaderboard');
  }
}
