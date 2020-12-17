<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\User;
use App\Models\QuestionBank;
use App\Models\AnswerBank;
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
    $user->save();

    return redirect()->route('admin.profiles.edit-profile')->with("success","Profile has been updated");
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
      return redirect()->back()->with("error","Current password are incorrect!");
    }

    if(strcmp($request->get('password'),$request->get('new_password'))== 0){
      return redirect()->back()->with("error","Current Password cannot be the same as New Password");
    }

    if(strcmp($request->get('new_password'),$request->get('password_confirmation'))== 1){
      return redirect()->back()->with("error","New Password not same as Confirmation Password");
    }

    $validatedData = $request->validate([
            'password' => 'required',
            'new_password' => 'required|string|min:6',
      ]);

      $hashed_random_password = Hash::make($request->get('new_password'));

      $user->password = $hashed_random_password;

      $user->save();

      return redirect()->route('admin.profiles.change-password')->with("success","Password has been changed");
  }

  public function viewQuestionBank()
  {
      $question_list = QuestionBank::where('status','1')->get();
      return view('admin.activities.question-banks.list',compact('question_list'));
  }

  public function addQuestionBank()
  {
      return view('admin.activities.question-banks.add');
  }

  public function saveQuestionBank(Request $request)
  {
      event($question_id = $this->createQuestion($request->all()));

      event($answer_true_id = $this->createAnswerTrue($request->all(), $question_id));

      event($answer_false_id = $this->createAnswerFalse($request->all(), $question_id));

      return redirect()->route('admin.activities.question-banks.list')->with("success","New question has been saved");
  }

  public function createQuestion(array $data){
    $status = "1";

    return QuestionBank::Create([
      'chapter' => $data['chapter'],
      'question' => $data['question'],
      'status' => $status,
      ]);
  }

  public function createAnswerTrue(array $data, $question_id){
    $status = "True";

    return AnswerBank::Create([
      'question_id' => $question_id->id,
      'answer' => $data['answer'],
      'status' => $status,
      ]);
  }

  public function createAnswerFalse(array $data, $question_id){

    $status = "False";

    foreach ($data['option'] as $key => $value) {
      $submit = AnswerBank::Create([
        'question_id' => $question_id->id,
        'answer' => $data['option'][$key],
        'status' => $status,
      ]);
    }
  }

  public function editQuestionBank($id)
  {
      $question = QuestionBank::findOrFail($id);
      $answer = AnswerBank::where('question_id', $id)->where('status', "True")->get();
      $option = AnswerBank::where('question_id', $id)->where('status', "False")->get();

      return view('admin.activities.question-banks.edit', compact('question','answer','option'));
  }

  public function updateQuestionBank(Request $request){
    // dd($request->all());
    // dd($request['option'][0]);


    $question = QuestionBank::findOrFail($request->question_id);
    $question->chapter = $request->chapter;
    $question->question = $request->question;
    $question->save();

    $answer = AnswerBank::findOrFail($request->answer_id);
    $answer->answer = $request->answer;
    $answer->save();

    foreach ($request['option'] as $key => $value){
      $option = AnswerBank::findOrFail($request['option_id'][$key]);
      $option->answer = $request['option'][$key];
      $option->save();
    }

    return redirect()->route('admin.activities.question-banks.list')->with("success","Question has been updated");
  }

  public function removeQuestionBank(Request $request)
  {
      $question = QuestionBank::findOrFail($request->question_id);
      $question->status = "0";
      $question->save();
      return redirect()->route('admin.activities.question-banks.list')->with("success","Question has been deleted");
  }

  public function viewUserList()
  {
      $user_list = User::get();
      return view('admin.others.user-list', compact('user_list'));
  }

  public function disableStatus(Request $request)
  {
    $user = User::findOrFail($request->id_disable);
    $user->is_active = 0;
    $user->save();

    return redirect()->route('admin.others.user-list')->with("success","User has been disabled");
  }

  public function activateStatus(Request $request)
  {
    $user = User::findOrFail($request->id_activate);
    $user->is_active = 1;
    $user->save();

    return redirect()->route('admin.others.user-list')->with("success","User has been activated");
  }

}
