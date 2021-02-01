<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GameController extends Controller
{
  public function tutorial()
  {
    return view('game.tutorial.index');
  }

  public function test()
  {

    return view('game.demo.gameUnity');

  }

}
