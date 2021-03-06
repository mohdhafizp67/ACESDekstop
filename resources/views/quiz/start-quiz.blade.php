@extends('layouts.app-student-qbadminuiquiz')

@section('content')

<!DOCTYPE html>
<html lang="en" style="background-color: #000a11 !important;">

  <head>
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
    font-size: 20px !important;
}
    .label {
    /* background-color: #4CAF50; */
    border: none;
    color: black;
    padding: 5% 15%;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 150%;
    margin: 4px 40px;
    transition-duration: 0.4s;
    cursor: pointer;
    border-radius: 25px;
    width: 240% !important;
    height: auto;

  }

  .label1 {
    background-color: #ffffff00;
    color: white;
    border: 2px solid #007bff;
  }


  .label1:focus {
    background-color: #1a7e8e;
    color: white;
    border: 2px solid #007bff;
  }

  .label1:hover {
    background-color: #1a7e8e;
    color: white;
  }
  :checked + img {
      opacity: 1;
  }

  .nav-pills .nav-link.active,
  .nav-pills .show > .nav-link {
    color: #ffd452 !important;
    font-weight: bold;
    margin-top: -15%;
    font-size: 150%;
    background-color: #007bff00;
    /* font-size: 150%; */
    /* background-image: url({{asset('concept/images/galaxy/btn_prop2.png')}}); */
  }
</style>

</head>
<body>
  <div id="wrapper">
<div class="container-fluid">
  <h1 style="padding-top: 1%; text-align: center; color: #fff; font-weight: bold;">QUIZ</h1>
  <h1 class="blinking" style="font-size: 150%; text-align: center; padding-bottom: 0%; color: #fff;">Please answer all the question</h1>

  <div class="row">
    <div class="col-md-12">
      <div class="card-body">

        <div class="row">
          <div class="col-md-2">

          </div>
          <div class="col-md-7">
          </div>
          <div class="col-md-3" style="text-align: center;">
            <button type="button" class="btn" style="background-image: url({{asset('concept/images/galaxy/button_submit.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover; margin-top: -30%;margin-left: -25%;">
              <div style="color: red !important; font-align: center !important; font-size: 150%;"><span id="time"></span> minutes!</div>
            </button>
          </div>
        </div>


        <form id="submit_quiz" name="submit_quiz" action="{{route('quiz.submit-result')}}" method="post">

          @csrf
          <input type="hidden" name="quiz_id" value="{{$quiz->id}}">
        <div class="pills-regular">
            <ul class="m-1 nav nav-pills" id="pills-tab" role="tablist" style="padding-bottom: 3%; padding-left: 15%;">

                @foreach($question as $data)
                  @if ($loop->first)
                    <li class="nav-item" style="background-image: url({{asset('concept/images/galaxy/Btn_Prop.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover; margin-left: 2%; font-size: 130%; width: 50px; height: 50px;">
                        <a class="nav-link active" id="pills-{{$loop->iteration}}-tab" data-toggle="pill" href="#pills-{{$loop->iteration}}" role="tab" aria-controls="{{$loop->iteration}}" aria-selected="true" style="text-align: center; padding-top: 25%;">{{$loop->iteration}}</a>
                    </li>
                  @else
                      @if($loop->iteration > 9)
                      <li class="nav-item" style="background-image: url({{asset('concept/images/galaxy/Btn_Prop.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover; margin-left: 2%;font-size: 130%; width: 50px; height: 50px;">
                          <a class="nav-link" id="pills-{{$loop->iteration}}-tab" data-toggle="pill" href="#pills-{{$loop->iteration}}" role="tab" aria-controls="{{$loop->iteration}}" aria-selected="false" style="text-align: center; padding-top: 25%;">{{$loop->iteration}}</a>
                      </li>
                      @else
                      <li class="nav-item" style="background-image: url({{asset('concept/images/galaxy/Btn_Prop.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover; margin-left: 2%;font-size: 130%; width: 50px; height: 50px;">
                          <a class="nav-link" id="pills-{{$loop->iteration}}-tab" data-toggle="pill" href="#pills-{{$loop->iteration}}" role="tab" aria-controls="{{$loop->iteration}}" aria-selected="false" style="text-align: center; padding-top: 25%;">{{$loop->iteration}}</a>
                      </li>
                      @endif
                  @endif
                @endforeach
            </ul>
            <div class="tab-content" id="pills-tabContent">
              @foreach($question as $data)


                @if ($loop->first)
                <div class="tab-pane fade show active" id="pills-{{$loop->iteration}}" role="tabpanel" aria-labelledby="pills-{{$loop->iteration}}-tab">

                  <div class="row">
                    <div class="col-md-2">

                    </div>
                    <div class="col-md-8">
                      <!-- <h3>Soalan {{$loop->iteration}}</h3> -->

                    </div>
                    <div class="col-md-2">

                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-2">

                    </div>
                    <div class="col-md-8">

                      <div class="form-group" style="color: #fff; font-size: 200%;">
                         <label>{{$data->question}}</label>
                      </div>
                    </div>
                    <div class="col-md-2">

                    </div>
                  </div>

                  @foreach($answer as $ans)

                    <!-- <div class="col-md-2">

                    </div> -->
                    @for($i=0;$i<count($ans);$i++)
                      @if($ans[$i]->question_id == $data->id)
                      <div class="col-md-4" style="margin-left: 10%;">
                        <label class="label label1 custom-control custom-radio custom-control-inline">
                            <input type="radio" name="answer[{{$loop->iteration}}]" value="{{$ans[$i]->id}}" class="custom-control-input"><span class="">{{$ans[$i]->answer}}</span>
                        </label>
                      </div>
                      <div class="col-md-2">

                      </div>
                      @endif

                      <div class="row">
                      @if($i > 3)
                      <div class="col-md-6">
                        <label class="label label1 custom-control custom-radio custom-control-inline">
                            <input type="radio" name="answer[{{$loop->iteration}}]" value="{{$ans[$i]->id}}"  class="custom-control-input"><span class="">{{$ans[$i]->answer}}</span>
                        </label>
                      </div>
                    @endif
                  </div>
                    @endfor
                    <!-- <div class="col-md-2">

                    </div> -->

                  @endforeach


                  <div class="row">
                    <div class="col-md-8">

                    </div>
                    <div class="col-md-2">

                    </div>
                    <div class="col-md-2">
                      <button class="btn btnNext" type="button" style="background-image: url({{asset('concept/images/galaxy/button_submit.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover; text-align: center; width: 100%;padding:5%;">NEXT</button>
                    </div>
                  </div>


                </div>


                @else

                  <div class="tab-pane fade" id="pills-{{$loop->iteration}}" role="tabpanel" aria-labelledby="pills-{{$loop->iteration}}-tab">
                    <div class="row">
                      <div class="col-md-2">

                      </div>
                      <div class="col-md-8">
                        <!-- <h3>Soalan {{$loop->iteration}}</h3> -->

                      </div>
                      <div class="col-md-2">

                      </div>
                    </div>

                    <div class="row">
                      <div class="col-md-2">

                      </div>
                      <div class="col-md-8">

                        <div class="form-group" style="color: #fff; font-size: 150%;">
                           <label>{{$data->question}}</label>
                        </div>
                      </div>
                      <div class="col-md-2">

                      </div>
                    </div>
                    @foreach($answer as $ans)

                      <!-- <div class="col-md-2">

                      </div> -->
                      @for($i=0;$i<count($ans);$i++)
                        @if($ans[$i]->question_id == $data->id)
                        <div class="col-md-4" style="margin-left: 10%;">
                          <label class="label label1 custom-control custom-radio custom-control-inline">
                              <input type="radio" name="answer[{{$loop->iteration}}]" value="{{$ans[$i]->id}}"  class="custom-control-input"><span class="">{{$ans[$i]->answer}}</span>
                          </label>
                        </div>
                        <div class="col-md-2">

                        </div>
                        @endif

                        <div class="row">
                        @if($i > 3)
                        <div class="col-md-6">
                          <label class="label label1 custom-control custom-radio custom-control-inline">
                              <input type="radio" name="answer[{{$loop->iteration}}]" value="{{$ans[$i]->id}}"  class="custom-control-input"><span class="">{{$ans[$i]->answer}}</span>
                          </label>
                        </div>
                      @endif
                    </div>
                      @endfor
                      <!-- <div class="col-md-2">

                      </div> -->

                    @endforeach



                    @if ($loop->last)

                    <div class="row">
                      <div class="col-md-8">

                      </div>
                      <div class="col-md-2" >
                        <button class="btn btnPrevious" type="button" style="background-image: url({{asset('concept/images/galaxy/button_submit.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover; text-align: center; width: 100%;padding: 5%;">PREVIOUS</button>

                      </div>
                      <div class="col-md-2">
                          <button class="btn" type="button" data-toggle="modal" data-target="#exampleModal" style="background-image: url({{asset('concept/images/galaxy/button_submit.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover; text-align: center; width: 100%;padding: 5%;">SUBMIT</button>
                      </div>
                    </div>

                    @else

                    <div class="row" style="margin-top: 3%;">
                      <div class="col-md-8">

                      </div>
                      <div class="col-md-2" >

                        <button class="btn btnPrevious" type="button" style="background-image: url({{asset('concept/images/galaxy/button_submit.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover; text-align: center; width: 100%;padding: 5%;">PREVIOUS</button>
                      </div>
                      <div class="col-md-2" >
                        <button class="btn btnNext" type="button" style="background-image: url({{asset('concept/images/galaxy/button_submit.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover; text-align: center; width: 100%;padding: 5%;">NEXT</button>
                      </div>
                    </div>

                    @endif


                    <!-- <div class="row">
                      <div class="col-md-2">

                      </div>
                      <div class="col-md-4">
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" name="answer[{{$loop->iteration}}]"  class="custom-control-input"><span class="custom-control-label">Option 1</span>
                        </label>
                        <br>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" name="answer[{{$loop->iteration}}]" class="custom-control-input"><span class="custom-control-label">Option 2</span>
                        </label>


                      </div>
                      <div class="col-md-4">
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" name="answer[{{$loop->iteration}}]" class="custom-control-input"><span class="custom-control-label">Option 3</span>
                        </label>
                        <br>
                        <label class="custom-control custom-radio custom-control-inline">
                            <input type="radio" name="answer[{{$loop->iteration}}]" class="custom-control-input"><span class="custom-control-label">Option 4</span>
                        </label>
                      </div>
                      <div class="col-md-2">

                      </div>
                    </div> -->
                  </div>

                @endif
              @endforeach


            </div>
        </div>

        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">CONFIRMATION</h5>
                        <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </a>
                    </div>
                    <div class="modal-body">
                        <p style="font-size: 150%;">Are you sure you want to submit this quiz?</p>
                    </div>
                    <div class="modal-footer">
                        <a href="#" class="btn" data-dismiss="modal" style="background-image: url({{asset('concept/images/galaxy/submit.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover; width: 28%;">CANCEL</a>
                        <form action="{{route('quiz.start-quiz')}}" method="post">
                        @csrf
                        <button type="submit" name="button" class="btn" style="background-image: url({{asset('concept/images/galaxy/submit.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover; width: 28%;">SUBMIT</button>
                      </form>
                    </div>
                </div>
            </div>
        </div>

          </form>
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

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>


<script type="text/javascript">
$('.btnNext').click(function() {
  $('.nav-pills .active').parent().next('li').find('a').trigger('click');
});

$('.btnPrevious').click(function() {
  $('.nav-pills .active').parent().prev('li').find('a').trigger('click');
});

$('.label1').click(function() {
  $("input[type=radio]").parent("label").css("background-color", "#ffffff00");
  $("input[type=radio]:checked").parent("label").css("background-color", "#1a7e8e");
});
</script>

<!-- <script>
$('#label_1_color').click(function() {
  console.log("masuk1");
  $("#label_1_color_radio").parent("label").css("background-color", "#1a7e8e");
  $("#label_2_color_radio").parent("label").css("background-color", "#ffffff00");
  $("#label_3_color_radio").parent("label").css("background-color", "#ffffff00");
  $("#label_4_color_radio").parent("label").css("background-color", "#ffffff00");
});


$('#label_2_color').click(function() {
  console.log("masuk2");
  $("#label_1_color_radio").parent("label").css("background-color", "#ffffff00");
  $("#label_2_color_radio").parent("label").css("background-color", "#1a7e8e");
  $("#label_3_color_radio").parent("label").css("background-color", "#ffffff00");
  $("#label_4_color_radio").parent("label").css("background-color", "#ffffff00");
});


$('#label_3_color').click(function() {
  console.log("masuk3");
  $("#label_1_color_radio").parent("label").css("background-color", "#ffffff00");
  $("#label_2_color_radio").parent("label").css("background-color", "#ffffff00");
  $("#label_3_color_radio").parent("label").css("background-color", "#1a7e8e");
  $("#label_4_color_radio").parent("label").css("background-color", "#ffffff00");
});

$('#label_4_color').click(function() {
  console.log("masuk4");
  $("#label_1_color_radio").parent("label").css("background-color", "#ffffff00");
  $("#label_2_color_radio").parent("label").css("background-color", "#ffffff00");
  $("#label_3_color_radio").parent("label").css("background-color", "#ffffff00");
  $("#label_4_color_radio").parent("label").css("background-color", "#1a7e8e");
});
</script> -->

<!-- quiz display timer -->
<script type="text/javascript">
function startTimer(duration, display) {
  var timer = duration, minutes, seconds;
  setInterval(function () {
      minutes = parseInt(timer / 60, 10);
      seconds = parseInt(timer % 60, 10);

      minutes = minutes < 10 ? "0" + minutes : minutes;
      seconds = seconds < 10 ? "0" + seconds : seconds;

      display.textContent = minutes + ":" + seconds;

      if (--timer < 0) {
          timer = duration;
      }
  }, 1000);
}

window.onload = function () {
  //display timer
  var fiveMinutes = 60 * {{$quiz->time}},
      display = document.querySelector('#time');
  startTimer(fiveMinutes, display);

  //timer for auto submit form/quiz
  var setTimer = ({{$quiz->time}} * 60) * 1000;
  // var setTimer = 5000;
  window.setTimeout(function() { document.submit_quiz.submit(); }, setTimer);
};


// window.onbeforeunload = function() { return "Your examination will be lost."; };
// window.onbeforeunload = function() {
//         return "Dude, are you sure you want to leave? Think of the kittens!";
//     }
</script>

<!-- disable back button during quiz -->
<!-- <script>
    window.location.hash = "no-back-button";

    window.location.hash = "Again-No-back-button";

    window.onhashchange = function(){
        window.location.hash = "no-back-button";
    }
</script> -->
<script type="text/javascript">
history.pushState(null, null, document.title);
window.addEventListener('popstate', function () {
  history.pushState(null, null, document.title);
});
</script>
<!-- <script>
(function (global) {

  if(typeof (global) === "undefined") {
      throw new Error("window is undefined");
  }

  var _hash = "!";
  var noBackPlease = function () {
      global.location.href += "#";

      // Making sure we have the fruit available for juice (^__^)
      global.setTimeout(function () {
          global.location.href += "!";
      }, 50);
  };

  global.onhashchange = function () {
      if (global.location.hash !== _hash) {
          global.location.hash = _hash;
      }
  };

  global.onload = function () {
      noBackPlease();

      // Disables backspace on page except on input fields and textarea..
      document.body.onkeydown = function (e) {
          var elm = e.target.nodeName.toLowerCase();
          if (e.which === 8 && (elm !== 'input' && elm  !== 'textarea')) {
              e.preventDefault();
          }
          // Stopping the event bubbling up the DOM tree...
          e.stopPropagation();
      };
  }
})(window);
</script> -->

<!-- disable F5 button for refresh -->
<script type="text/javascript">
function disableF5(e) { if ((e.which || e.keyCode) == 116 || (e.which || e.keyCode) == 82) e.preventDefault(); };

$(document).ready(function(){
     $(document).on("keydown", disableF5);
});
</script>


</html>

@endsection
