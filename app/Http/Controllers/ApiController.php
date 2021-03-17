<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Districts;
use App\Models\School;
use App\Models\User;
use stdClass;
use Throwable;
use Intervention\Image\ImageManager as Image;

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

  public function ajaxUploadImage(Request $request){
    // dd($request->image);
    $image = $request->image;
    // $image = str_replace('data:image/png;base64,', '', $image);
    // // $image = str_replace(' ', '+', $image);
    // $screenshot = base64_decode($image);

    $imageDecoded = base64_decode($image);
    // echo json_encode($imageDecoded);
    //
    // exit;
    $user_id = auth()->user()->id;
    $user = User::findOrFail($user_id);
    $response = new stdClass();

    // try {
        // $gambar_screenshot = print_r($imageDecoded)->store('public/uploads/screenshot');
        // $path = Storage::url($gambar_screenshot);
        $path = 'uploads/screenshot_'.$user_id.'.png';
        file_put_contents($path, $imageDecoded);
        $user->screenshots = $path;
        $user->save();
        // $response->success = true;
        // $response->message = "Upload Success";
    // }catch (Throwable $e) {
    //     $response->success = false;
    //     $response->message = $e;
    // }
    // dd($screenshot);
    return response()->json($response);
  }
}
