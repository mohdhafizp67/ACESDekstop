@extends('layouts.app-student-qbadminuiquiz')

@section('content')


<!DOCTYPE html>
<html lang="en" style="background-color: #000a11 !important;">
  <head>
    <meta charset="utf-8">
    <title>QUIZ RESULT</title>

    <style media="screen">
    #warning-message { display: none; }
     @media only screen and (orientation:portrait){
         #wrapper { display:none; }
         #warning-message {
           display:block;
           background-color: #000c15;
           text-align: center;
           font-size: 150%;
         }
     }
     @media only screen and (orientation:landscape){
         #warning-message { display:none; }
     }

    label {
      font-size: 15px !important;
    }

    .btn {
    font-size: 15px !important;
    color: #fff !important;
}
    </style>
  </head>
  <body>

<div id="wrapper">

<div class="container-fluid">
  <h1 style="padding-top: 5%; text-align: center;font-size: 350%; color: #fff; font-weight: bold;; padding-bottom: 5%;">QUIZ SCORE</h1>

<div class="row" style="padding-bottom: 12%;">
  <div class="col-md-12">

    <div class="row">
      <div class="col-md-2">

      </div>
      <div class="col-md-8">
        <div class="card-body" style="padding: 6%;background-color: transparent !important; border: transparent; background-image: url({{asset('concept/images/galaxy/cards2.png')}}); background-repeat: no-repeat;background-size: 100% 100%">


            <div class="card-body p-0">
              <div style="padding: 0px;"></div>
              <div class="row">
                <div class="col-md-1">

                </div>
                <div class="col-md-4" style="color: #fff;">
                  <label>Lessons :</label>
                </div>
                <div class="col-md-6" style="color: #fff;">
                  <label>{{$student_quiz->quiz->lesson->lesson_type}} | {{$student_quiz->quiz->lesson->lesson_subject}}</label>
                </div>
                <div class="col-md-1">

                </div>
              </div>

              <div class="row">
                <div class="col-md-1">

                </div>
                <div class="col-md-4" style="color: #fff;">
                  <label>Mark :</label>
                </div>
                <div class="col-md-6" style="color: #fff;">
                  <label> {{$student_quiz->result}} / {{$student_quiz->quiz->number_of_question}}</label>
                </div>
                <div class="col-md-1">

                </div>
              </div>

              <div class="row">
                <div class="col-md-1">

                </div>
                <div class="col-md-4" style="color: #fff;">
                  <label>Percentage :</label>
                </div>
                <div class="col-md-6" style="color: #fff;">
                  <label> {{$student_quiz->percentage}} %</label>
                </div>
                <div class="col-md-1">

                </div>
              </div>

              <div class="row">
                <div class="col-md-1">

                </div>
                <div class="col-md-4" style="color: #fff;">
                  <label>Answered questions :</label>
                </div>
                <div class="col-md-6" style="color: #fff;">
                  <label> {{$student_quiz->answered_question}} </label>
                </div>
                <div class="col-md-1">

                </div>
              </div>

              <div class="row">
                <div class="col-md-1">

                </div>
                <div class="col-md-4" style="color: #fff;">
                  <label>Status :</label>
                </div>
                <div class="col-md-6">
                  @if($student_quiz->result_status == "Lulus")
                  <label style="color: #00FF16"> Pass  </label>
                  @else
                  <label style="color: #F8273A"> Fail  </label>
                  @endif
                </div>
                <div class="col-md-1">

                </div>
              </div>

              <div style="padding: 10px;"></div>

              <div class="row">
                <div class="col-md-2">

                </div>
                <div class="col-md" style="text-align: center;">
                  <a href="{{route('quiz.choose-quiz')}}" class="btn" style="background-image: url({{asset('concept/images/galaxy/button_submit.png')}}); background-position: 50% 50%;background-repeat: no-repeat;background-size: cover;">Return to Quiz List</a>
                </div>
                <div class="col-md-2">

                </div>
              </div>
            </div>
        </div>
      </div>
      <div class="col-md-2">

      </div>
    </div>

  </div>
</div>

</div>


</div>
<div id="warning-message">
    <img class="logo-img" src="{{ asset('concept/images/StudentDashboard/Logo.png') }}" alt="logo" style="width: 100%;padding-top: 20%;padding-bottom: 20%;">
    <img src="{{asset('concept/images/galaxy/mascot.gif')}}" width="100%" height="auto" style="margin-top: -10%;background-position: 100% 100%;background-repeat: no-repeat;background-size: cover;">


    <span style="color: #fff;text-transform: uppercase;">Best View is in Landscape Mode</span>
    <br><br>
    <span style="color: #fff;text-transform: uppercase;">Please rotate your device to view ACES WEB APP</span>
</div>

  </body>
</html>

<script type="text/javascript">
function pass_quiz_id(id){
 $(".modal-footer #quiz_id").val( id );
}
</script>

<script>
    window.location.hash = "no-back-button";

    window.location.hash = "Again-No-back-button";

    window.onhashchange = function(){
        window.location.hash = "no-back-button";
    }
</script>

@endsection
