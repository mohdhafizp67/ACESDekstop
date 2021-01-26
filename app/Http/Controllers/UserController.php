<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Storage;

class UserController extends Controller
{
  public function editProfile()
  {
    $user_id = Auth::user()->id;
    $user = User:: findorFail($user_id);

    return view('user.profile.edit', compact('user'));
  }

  public function update($id)
  {
    $user = User:: findorFail($id);
    $user->name = request()->name;
    $user->email = request()->email;
    $user->alamat = request()->alamat;
    $user->poskod = request()->poskod;
    $user->negeri = request()->negeri;
    $user->ic_number = request()->ic_number;
    $user->save();
  }

  protected function validator(array $data)
{
    return Validator::make($data, [
      'name' =>['nullable', 'string'],
      'email' =>['nullable', 'email'],
      'addre' => ['nullable', 'string'],
      'poskod' =>['nullable', 'string'],
      'negeri' =>['nullable', 'string'],
      'ic_number' =>['nullable', 'string'],
    ]);
}

  public function updateprofil(Request $request){
    // dd($request->all());


    // $this->validatorProfile(request()->all())->validate();



    $user_id = Auth::user()->id;
    $user = User::findOrFail($user_id);

    $user->name = request()->name;
    $user->ic_number = request()->ic_number;
    $user->email = request()->email;
    $user->phone = request()->phone;
    $user->address = request()->address;
    $user->postcode = request()->postcode;
    $user->state = request()->state;

    //upload profile picture
    // $upload = $request->file('gambar')->store('public/uploads');
    // $path = Storage::url($upload);
    // $gambar_profile = $path;

    if ($files = request()->file('gambar_profile') != null) {
          $gambar_profile = request()->file('gambar_profile')->store('public/uploads/user_pictures');
          $path = Storage::url($gambar_profile);
          $user->profile_picture = $path;
    }

    $user->save();

    return redirect()->route('user.profile.edit')->with("success","Profil pengguna telah dikemaskini");
  }

  protected function validatorProfile(array $data)
  {
      return Validator::make($data, [
        'name' =>['required', 'string'],
        'ic_number' =>['required', 'string'],
        'email' =>['required', 'email'],
        // 'phone' =>['required', 'string'],
        'alamat' => ['required', 'string'],
        'poskod' =>['required'],
        'negeri' =>['required', 'string'],
      ]);
  }


  public function feedback()
  {
    return view('others.feedback');
  }

  public function feedbackSave(Request $request)
  {
    return redirect()->route('others.feedback')->with("success","Maklum balas telah dihantar.");
  }

  public function viewChangePassword()
  {
      return view('user.change-password');

  }

  public function profil()
  {

    return view('user.student.profile');

  }

  public function statistik()
  {

    return view('user.student.statistik');

  }


  public function gameDemo()
  {

    return view('game.demo.game');

  }

  public function gameDemoDrone()
  {

    return view('game.demo.drone');

  }



}
