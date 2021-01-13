<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\User;
use App\Models\QuestionBank;
use App\Models\AnswerBank;
use App\Models\Audit;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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

  public function updatingProfile(){
    // dd(request()->all());
    $this->validator(request()->all())->validate();



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
    $gambar_profile = "";

    if ($files = request()->file('gambar_profile') != null) {
          $gambar_profile = request()->file('gambar_profile')->store('public/uploads/user_pictures');
          $user->profile_picture = $gambar_profile;
    }

    $user->save();

    return redirect()->route('admin.profiles.edit-profile')->with("success","Profil pengguna telah dikemaskini");
  }

  protected function validator(array $data)
  {
      return Validator::make($data, [
        'name' =>['required', 'string'],
        'ic_number' =>['required', 'string'],
        'email' =>['required', 'email'],
        'phone' =>['required', 'string'],
        'address' => ['required', 'string'],
        'postcode' =>['required'],
        'state' =>['required', 'string'],
      ]);
  }

  public function viewChangePassword()
  {
      return view('admin.profiles.change-password');
  }

  public function updatingPassword(Request $request){
    $user_id = Auth::user()->id;
    $user = User::findOrFail($user_id);

    if(!(Hash::check($request->get('password'), Auth::user()->password))){
      return redirect()->back()->with("error","Kata laluan semasa tidak betul");
    }

    if(strcmp($request->get('password'),$request->get('new_password'))== 0){
      return redirect()->back()->with("error","Kata laluan semasa tidak boleh sama dengan kata laluan baru");
    }

    if(strcmp($request->get('new_password'),$request->get('password_confirmation'))== 1){
      return redirect()->back()->with("error","Kata laluan baru tidak sama dengan kata laluan pengesahan");
    }

    $validatedData = $request->validate([
            'password' => 'required',
            'new_password' => 'required|string|min:6',
      ]);

      $hashed_random_password = Hash::make($request->get('new_password'));

      $user->password = $hashed_random_password;

      $user->save();

      return redirect()->route('admin.profiles.change-password')->with("success","Kata laluan berjaya dikemaskini");
  }

  public function viewUserList()
  {
      $user_list = User::get();
      return view('admin.others.user-list.list', compact('user_list'));
  }

  public function editUserList($id)
  {
      $user = User::get();
      $user = User::findOrFail($id);
      // dd($user);
      return view('admin.others.user-list.edit', compact('user'));
  }

  public function updateUserList(Request $request){
    $user = User::findOrFail($request->user_id);
    $user->name = $request->name;
    $user->ic_number = $request->ic_number;
    $user->email = $request->email;
    $user->phone = $request->phone;
    $user->address = $request->address;
    $user->postcode = $request->postcode;
    $user->state = $request->state;

    //updating role
    if($request->role == "Admin" ){
      $user->is_admin = 1;
      $user->is_ecerdb_personnel = 0;
      $user->is_student = 0;
    }elseif ($request->role == "ECERDB") {
      $user->is_admin = 0;
      $user->is_ecerdb_personnel = 1;
      $user->is_student = 0;
    }else {
      $user->is_admin = 0;
      $user->is_ecerdb_personnel = 0;
      $user->is_student = 1;
    }

    $user->save();

    return redirect()->route('admin.others.user-list.list')->with("success","Maklumat pengguna telah dikemaskini");

  }

  public function disableStatus(Request $request)
  {
    $user = User::findOrFail($request->id_disable);
    $user->is_active = 0;
    $user->save();

    return redirect()->route('admin.others.user-list.list')->with("success","Pengguna telah dinyahaktif");
  }

  public function activateStatus(Request $request)
  {
    $user = User::findOrFail($request->id_activate);
    $user->is_active = 1;
    $user->save();

    return redirect()->route('admin.others.user-list.list')->with("success","Pengguna telah diaktifkan");
  }

  public function viewAuditList()
  {
      $data = Audit::get();
      return view('admin.others.audit-trail.audit-trail-log', compact('data'));
  }

  public function viewAuditListFilter(Request $request)
  {
      $tarikh_mula = date($request->tarikh_mula);
      $tarikh_akhir = date($request->tarikh_akhir);

      // $data = Audit::whereBetween('created_at', [$tarikh_mula.' 00:00:00',$tarikh_akhir.' 23:59:59'])
      //             ->where('event', 'Log Masuk')
      //             ->orWhere('event', 'Log Keluar')
      //             ->orderBy('created_at', 'desc')
      //             ->get();


      $data = Audit:: where('updated_at', '>', $tarikh_mula.' 00:00:00')
                  ->where('updated_at', '<', $tarikh_akhir.' 23:59:59')
                  ->orderBy('updated_at', 'asc')
                  ->get();

      return view('admin.others.audit-trail.audit-trail-log-filter', compact('data'));
  }

}
