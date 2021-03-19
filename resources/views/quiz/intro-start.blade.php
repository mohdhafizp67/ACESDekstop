@extends('layouts.app-student-qbadminui')


@section('content')

<!DOCTYPE html>
<html lang="en" style="background-color: #000a11 !important;">
  <head>
    <meta charset="utf-8">
    <title>Start Quiz</title>

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

.blinking{
  animation:blinkingText 1.0s infinite;
}
@keyframes blinkingText{
  0%{		color: #ffffff;	}
  49%{	color: transparent;	}
  50%{	color: transparent;	}
  99%{	color:transparent;	}
  100%{	color: #ffffff;	}
}
</style>
  </head>
  <body>

<div id="wrapper">
<div class="container-fluid" style="background-image: url({{asset('concept/images/galaxy/background_blue.png')}}); background-position: 100% 100%;background-repeat: no-repeat;background-size: cover;padding: 7%;">


<div class="row">
  <div class="col-md-12">
    <h1 style="text-align: center; color: #fff; font-weight: bold;padding-top: 3%;margin-top: -3%;font-size: 450%;">START QUIZ</h1>
    <p style="padding-top: 0%;text-align: center; color: #fff;font-size: 200%;">Answer all the question based on lessons</p>
  </div>


</div>
<div class="row" style="padding-bottom: 22%;">
  <div class="col-md-4">

  </div>
  <div class="col-md-4" style="padding: 1.5%;">
    <!-- <button class="btn blinking" style="color: #fff; font-size: 100%;" onclick="pass_quiz_id(1)"> START </button> -->
    <form action="{{route('quiz.start-quiz')}}" method="post" style="margin: 12%;text-align: center;">
    @csrf
    <button type="submit" name="button" class="btn"  style="background-image: url({{asset('concept/images/galaxy/button.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover; width: 100%; padding: 8%;"><span style="font-size: 150%;">START</span></button>
    <input type="hidden" id="quiz_id" name="quiz_id" value="{{$id}}">
  </form>
  </div>
  <div class="col-md-4">

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

  <script type="text/javascript">
  function pass_quiz_id(id){
   $(".modal-footer #quiz_id").val( id );
  }
  </script>

</html>

@endsection
