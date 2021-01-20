<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Districts;

class ApiController extends Controller
{
  public function ajaxDistrict($negeri){
    $daerah = Districts::where('negeri', $negeri)->get();
    echo json_encode($daerah);
    exit;
  }
}
