@extends('layouts.app-student-qbadminui')

@section('content')



<div class="dashboard-ecommerce">
    <div class="container-fluid dashboard-content ">
        <div class="ecommerce-widget">
          <div class="card" style="padding: 10px; background-color: #9966ff !important;">

            <div style="padding: 5px;"></div>
              <h2 class="card-header" style="text-align: center;"><i class="fa fa-question-circle mr-2" aria-hidden="true"></i>Keputusan</h2>
              <div class="card-body p-0">
                <div style="padding: 10px;"></div>
                <div class="row">
                  <div class="col-md-2">

                  </div>
                  <div class="col-md-3">
                    <label>Pelajaran :</label>
                  </div>
                  <div class="col-md-3">
                    <label>{{$student_quiz->quiz->lesson->lesson_type}} | {{$student_quiz->quiz->lesson->lesson_subject}}</label>
                  </div>
                  <div class="col-md-2">

                  </div>
                </div>

                <div class="row">
                  <div class="col-md-2">

                  </div>
                  <div class="col-md-3">
                    <label>Markah :</label>
                  </div>
                  <div class="col-md-3">
                    <label> {{$student_quiz->result}} / {{$student_quiz->quiz->number_of_question}}</label>
                  </div>
                  <div class="col-md-2">

                  </div>
                </div>

                <div class="row">
                  <div class="col-md-2">

                  </div>
                  <div class="col-md-3">
                    <label>Peratusan :</label>
                  </div>
                  <div class="col-md-3">
                    <label> {{$student_quiz->percentage}} %</label>
                  </div>
                  <div class="col-md-2">

                  </div>
                </div>

                <div class="row">
                  <div class="col-md-2">

                  </div>
                  <div class="col-md-3">
                    <label>Soalan yang telah dijawab :</label>
                  </div>
                  <div class="col-md-3">
                    <label> {{$student_quiz->answered_question}} </label>
                  </div>
                  <div class="col-md-2">

                  </div>
                </div>

                <div class="row">
                  <div class="col-md-2">

                  </div>
                  <div class="col-md-3">
                    <label>Status :</label>
                  </div>
                  <div class="col-md-3">
                    <label> {{$student_quiz->result_status}}  </label>
                  </div>
                  <div class="col-md-2">

                  </div>
                </div>

                <div style="padding: 10px;"></div>

                <div class="row">
                  <div class="col-md-2">

                  </div>
                  <div class="col-md">
                    <a href="{{route('quiz.choose-quiz')}}" class="btn btn-block btn-secondary">Kembali Ke Senarai Quiz</a>
                  </div>
                  <div class="col-md-2">

                  </div>
                </div>
              </div>
          </div>
        </div>
    </div>
</div>
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
