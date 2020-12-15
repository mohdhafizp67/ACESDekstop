<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
  public function index()
  {
      return view('home-admin');
  }

  public function viewEditProfile()
  {
    $user_id = Auth::user()->id;
    $user = User:: findorFail($user_id);

    return view('admin.profiles.edit-profile', compact('user'));
  }

  public function viewChangePassword()
  {
      return view('admin.profiles.change-password');
  }

  public function updatingPassword(Request $request){
    // dd($request->all());

    $user_id = Auth::user()->id;
    $user = User::findOrFail($user_id);

    if(!(Hash::check($request->get('password'), Auth::user()->password))){
      return redirect()->back()->with("error","Current password are incorrect!");
    }

    if(strcmp($request->get('password'),$request->get('new_password'))== 0){
      return redirect()->back()->with("error","Current Password cannot be the same as New Password");
      //dd('password lama sama dgn pass baru');
    }

    if(strcmp($request->get('new_password'),$request->get('password_confirmation'))== 1){
      return redirect()->back()->with("error","New Password not same as Confirmation Password");
      //dd('password baru tak sama');
    }

    $validatedData = $request->validate([
            'password' => 'required',
            'new_password' => 'required|string|min:6',
      ]);

      $hashed_random_password = Hash::make($request->get('new_password'));

      $user->password = $hashed_random_password;

      $user->save();

      return redirect()->route('admin.profiles.change-password')->with("success","Password has been changed");

      // if($request->language == "english"){
      //   return redirect()->route('user.mainMenu_eng')->with("success","Password has been changed");
      // }else {
      //   return redirect()->route('user.mainMenu')->with("success","Kata laluan telah ditukar");
      // }
  }

}
