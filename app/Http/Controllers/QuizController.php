<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

use App\Models\User;
use App\Models\Student;
use App\Models\Student_Quiz;
use App\Models\Quiz;
use App\Models\Leaderboard;

use App\Models\Lesson;
use App\Models\QuestionBank;
use App\Models\AnswerBank;



class QuizController extends Controller
{

  public function introquiz($id)
  {
      return view('quiz.intro-start', compact('id'));
  }

  public function viewQuizList()
  {
      $quiz_list = Quiz::where('status', '1')->get();

      return view('admin.activities.quiz.list', compact('quiz_list'));
  }

  public function addQuiz()
  {
      $lesson = Lesson::get();
      return view('admin.activities.quiz.add', compact('lesson'));
  }

  public function saveQuiz(Request $request)
  {
    // dd($request->all());
      event($lesson_id = $this->createQuiz($request->all()));
      return redirect()->route('admin.activities.quiz.list')->with("success","Tetapan quiz baru telah disimpan");
  }

  public function createQuiz(array $data){
    $status = "1";
    return Quiz::Create([
      'lesson_id' => $data['lesson_id'],
      'time' => $data['time'],
      'number_of_question' => $data['number_of_question'],
      'percentage_to_pass' => $data['percentage_to_pass'],
      'status' => $status
      ]);
  }

  public function editQuiz($quiz_id)
  {
      $quiz = Quiz::findOrFail($quiz_id);
      $lesson = Lesson::findOrFail($quiz->lesson_id);
      return view('admin.activities.quiz.edit', compact('quiz','lesson'));
  }

  public function updatingQuiz(Request $request, $quiz_id){

    $quiz = Quiz::findOrFail($quiz_id);
    $quiz->time = $request->time;
    $quiz->number_of_question = $request->number_of_question;
    $quiz->percentage_to_pass = $request->percentage_to_pass;
    $quiz->save();

    return redirect()->route('admin.activities.quiz.list')->with("success","Tetapan kuiz telah dikemaskini");
  }

  public function removeQuiz(Request $request){
    $quiz = Quiz::findOrFail($request->quiz_id);
    $quiz->status = "0";
    $quiz->save();
    return redirect()->route('admin.activities.quiz.list')->with("success","Quiz telah dipadam");
  }

  public function viewQuestionBank($lesson_id)
  {
      $question_list = QuestionBank::where('status','1')->where('lesson_id', $lesson_id)->get();
      return view('admin.activities.quiz.question-banks.list',compact('question_list','lesson_id'));
  }

  public function addQuestionBank($lesson_id)
  {
      $lesson = Lesson::findorfail($lesson_id);
      return view('admin.activities.quiz.question-banks.add', compact('lesson'));
  }

  public function saveQuestionBank(Request $request)
  {
      event($question_id = $this->createQuestion($request->all()));

      event($answer_true_id = $this->createAnswerTrue($request->all(), $question_id));

      event($answer_false_id = $this->createAnswerFalse($request->all(), $question_id));

      return redirect()->route('admin.activities.quiz.question-banks.list', $request->lesson_id)->with("success","Soalan anda telah disimpan");
  }

  public function createQuestion(array $data){
    $status = "1";

    return QuestionBank::Create([
      'question' => $data['question'],
      'status' => $status,
      'lesson_id' => $data['lesson_id'],
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
      $option = AnswerBank::where('question_id', $id)->where('status', "False")->get()->shuffle();

      return view('admin.activities.quiz.question-banks.edit', compact('question','answer','option'));
  }

  public function updateQuestionBank(Request $request){

    $question = QuestionBank::findOrFail($request->question_id);
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

    return redirect()->route('admin.activities.quiz.question-banks.list', $request->lesson_id)->with("success","Soalan telah dikemaskini");
  }

  public function removeQuestionBank(Request $request)
  {

      $question = QuestionBank::findOrFail($request->question_id);
      $question->status = "0";
      $question->save();
      // dd($question);

      return redirect()->route('admin.activities.quiz.question-banks.list', $question->lesson_id)->with("success","Soalan telah dipadam");
  }

  public function chooseQuiz()
  {
      $quiz_list = Quiz::where('status', '1')->get();
      return view('quiz.choose-quiz', compact('quiz_list'));
  }

  public function startQuiz(Request $request)
  {
    //   dd($request->all());
      $quiz = Quiz::findOrFail($request->quiz_id);
    //   dd($quiz);
      $question = QuestionBank::where('lesson_id', $quiz->lesson->id)->where('language', 'en' )->get()->random($quiz->number_of_question)->shuffle();
      // $question = $question->random($quiz->number_of_question);
      // $question = $question->shuffle();
      foreach ($question as $key => $value) {
        $answer[] = AnswerBank::where('question_id', $value->id)->where('language', 'en' )->get()->shuffle();
      }

      foreach ($answer as $answers) {
        $answers->shuffle()->all();
      }
      // dd($answers);

      // foreach ($answer as $key => $value) {
      //   $answer[] = $answer[$key][$key]->shuffle();
      // }
      // $answer = $answer->shuffle()->all();

      // dd($answer);

      return view('quiz.start-quiz', compact('quiz', 'question','answer'));
  }

  public function submitQuiz(Request $request){
    // dd($request->all());


    if($request->has('answer')){
      foreach ($request->answer as $data) {
        $quiz_answer[] = $data;
      }

      $mark = 0;
      $answer_bank = AnswerBank::get();
      $quiz = Quiz::findOrFail($request->quiz_id);
      // dd($answer_bank[5]->id);
      // dd($request->answer[1]);
      // dd($quiz);

      for($i = 0; $i < count($quiz_answer); $i ++){
        for($x = 0; $x < count($answer_bank); $x ++){
          if($quiz_answer[$i] == $answer_bank[$x]->id)
            if($answer_bank[$x]->status == "True"){
              $mark ++; // total true answer
            }
        }
      }

      // dd($mark);
      $answered_question = count($quiz_answer); //total question answered
      $percentage = ($mark / $quiz->number_of_question) * 100; //percentage

      if($percentage > $quiz->percentage_to_pass || $percentage == $quiz->percentage_to_pass){
        $status = "Lulus";
      }else {
        $status = "Gagal";
      }

      //save data into student db
      $student_id = Auth::user()->id;
    }else {

      $mark = 0;
      $answered_question = 0;
      $percentage = 0;
      $status = "Gagal";

    }

    //add list into data

    $student_id = Auth::user()->student->id;

    $check_student_quiz = Student_quiz::where('student_id', $student_id)->where('quiz_id', $request->quiz_id)->count();
    // dd($check_student_quiz);

    if($check_student_quiz == 0){
      $quiz = Student_Quiz::Create([

        'result' => $mark,
        'answered_question' => $answered_question,
        'percentage' => $percentage,
        'result_status' => $status,
        'quiz_id' => $request->quiz_id,
        'student_id' => $student_id,
        ]);

        //update leaderboards
        // dd($student_quiz);
        $leaderboard = Leaderboard::where('student_id', $student_id)->first();
        // dd($leaderboard);
        $leaderboard->scores = $leaderboard->scores + $percentage;
        $leaderboard->save();
    }else {
      $quiz = Student_quiz::where('student_id', $student_id)->where('quiz_id', $request->quiz_id)->first();

        if($status == "Lulus"){
          if($mark > $quiz->result){
            //update leaderboard
            $leaderboard = Leaderboard::where('student_id', $student_id)->first();
            $leaderboard->scores = ($leaderboard->scores - $quiz->percentage) + $percentage;
            $leaderboard->save();

            $quiz->result = $mark;
            $quiz->answered_question = $answered_question;
            $quiz->percentage = $percentage;
            $quiz->result_status = $status;
            $quiz->quiz_id = $request->quiz_id;
            $quiz->student_id = $student_id;
            $quiz->save();
          }
        }
        else {
          $quiz->result = $mark;
          $quiz->answered_question = $answered_question;
          $quiz->percentage = $percentage;
          $quiz->result_status = $status;
          $quiz->quiz_id = $request->quiz_id;
          $quiz->student_id = $student_id;
          $quiz->save();
        }
    }


    // $student_id = Auth::user()->student->id;
    //
    // $student_quiz = Student_Quiz::where('student_id', $student_id)->first();
    //
    // if($status == "Lulus"){
    //
    //   if(!$student_quiz){
    //     $student_quiz = Student_Quiz::Create([
    //
    //       'result' => $mark,
    //       'answered_question' => $answered_question,
    //       'percentage' => $percentage,
    //       'result_status' => $status,
    //       'quiz_id' => $request->quiz_id,
    //       'student_id' => $student_id,
    //       ]);
    //   }else {
    //     // $leaderboard = new Leaderboard();
    //     $student_quiz->result = $mark;
    //     $student_quiz->answered_question = $answered_question;
    //     $student_quiz->percentage += $percentage;
    //     $student_quiz->result_status = $status;
    //     $student_quiz->quiz_id = $request->quiz_id;
    //     $student_quiz->student_id = $student_id;
    //
    //     $student_quiz->save();
    //   }


    // }

    return redirect()->route('quiz.result-quiz', $quiz->id);
  }

  public function resultQuiz($id)
  {
      $student_quiz = Student_Quiz::findOrFail($id);
      return view('quiz.result-quiz', compact('student_quiz'));

  }


}
