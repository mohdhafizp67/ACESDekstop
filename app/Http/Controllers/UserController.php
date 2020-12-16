<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;
use Illuminate\Support\Facades\Validator;

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
      'alamat' => ['nullable', 'string'],
      'poskod' =>['nullable', 'string'],
      'negeri' =>['nullable', 'string'],
      'ic_number' =>['nullable', 'string'],
    ]);
}

  public function updateprofil(Request $request,$id){
    $this->validator(request()->all())->validate();
    $user = User::find($id);
    $this->update($id);
    return redirect()->route('home');
  }


  public function feedback()
  {

    return view('others.feedback');

  }

  public function viewChangePassword()
  {
      return view('user.change-password');

  }
  public function statistik()
  {

    return view('user.student.statistik');

  }
}
