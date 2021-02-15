<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Districts;
use App\Models\School;

class ApiController extends Controller
{
  public function ajaxDistrict($negeri){
    $daerah = Districts::where('negeri', $negeri)->get();

    echo json_encode($daerah);
    exit;
  }

  public function ajaxSchool($daerah){
    $school = School::where('daerah', $daerah)->get();
    echo json_encode($school);
    exit;
  }
}
