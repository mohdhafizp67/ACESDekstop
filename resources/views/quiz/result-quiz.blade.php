@extends('layouts.app-student-qbadminui')

@section('content')


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>QUIZ RESULT</title>
  </head>
  <body>

<div class="container-fluid" style="background-image: url({{asset('concept/images/galaxy/background_blue.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover;">
  <h1 style="padding-top: 3%; text-align: center; color: #fff; font-weight: bold;">QUIZ SCORE</h1>

<div class="row" style="padding-top: 5%; padding-bottom: 8%;">
  <div class="col-md-12">

    <div class="row">
      <div class="col-md-2">

      </div>
      <div class="col-md-8">
        <div class="card-body" style="padding: 10%;background-color: transparent !important; border: transparent; background-image: url({{asset('concept/images/galaxy/cards2.png')}}); background-repeat: no-repeat;background-size: 100% 100%">


            <div class="card-body p-0">
              <div style="padding: 0px;"></div>
              <div class="row">
                <div class="col-md-1">

                </div>
                <div class="col-md-4" style="font-size: 200%; color: #fff;">
                  <label>Pelajaran :</label>
                </div>
                <div class="col-md-6" style="font-size: 200%; color: #fff;">
                  <label>{{$student_quiz->quiz->lesson->lesson_type}} | {{$student_quiz->quiz->lesson->lesson_subject}}</label>
                </div>
                <div class="col-md-1">

                </div>
              </div>

              <div class="row">
                <div class="col-md-1">

                </div>
                <div class="col-md-4" style="font-size: 200%; color: #fff;">
                  <label>Markah :</label>
                </div>
                <div class="col-md-6" style="font-size: 200%; color: #fff;">
                  <label> {{$student_quiz->result}} / {{$student_quiz->quiz->number_of_question}}</label>
                </div>
                <div class="col-md-1">

                </div>
              </div>

              <div class="row">
                <div class="col-md-1">

                </div>
                <div class="col-md-4" style="font-size: 200%; color: #fff;">
                  <label>Peratusan :</label>
                </div>
                <div class="col-md-6" style="font-size: 200%; color: #fff;">
                  <label> {{$student_quiz->percentage}} %</label>
                </div>
                <div class="col-md-1">

                </div>
              </div>

              <div class="row">
                <div class="col-md-1">

                </div>
                <div class="col-md-4" style="font-size: 200%; color: #fff;">
                  <label>Soalan yang telah dijawab :</label>
                </div>
                <div class="col-md-6" style="font-size: 200%; color: #fff;">
                  <label> {{$student_quiz->answered_question}} </label>
                </div>
                <div class="col-md-1">

                </div>
              </div>

              <div class="row">
                <div class="col-md-1">

                </div>
                <div class="col-md-4" style="font-size: 200%; color: #fff;">
                  <label>Status :</label>
                </div>
                <div class="col-md-6" style="font-size: 200%; color: #fff;">
                  <label> {{$student_quiz->result_status}}  </label>
                </div>
                <div class="col-md-1">

                </div>
              </div>

              <div style="padding: 10px;"></div>

              <div class="row">
                <div class="col-md-2">

                </div>
                <div class="col-md" style="text-align: center;">
                  <a href="{{route('quiz.choose-quiz')}}" class="btn" style="background-image: url({{asset('concept/images/galaxy/button_submit.png')}}); background-position: 50% 50%;background-repeat: no-repeat;background-size: cover;padding: 5%;">Kembali Ke Senarai Quiz</a>
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
