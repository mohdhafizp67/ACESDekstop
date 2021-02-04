@extends('layouts.app-student-qbadminui')


@section('content')

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Start Quiz</title>

<style media="screen">
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

<div class="container-fluid" style="background-image: url({{asset('concept/images/galaxy/background_blue.png')}}); background-position: 100% 100%;background-repeat: no-repeat;background-size: cover">


<div class="row">
  <div class="col-md-12">
    <h1 style="text-align: center; color: #fff; font-weight: bold;padding-top: 2%;">START QUIZ</h1>
    <p style="padding-top: 5%;text-align: center; color: #fff;font-size: 150%;">Answer all the question based on lessons</p>
  </div>


</div>
<div class="row" style="padding-bottom: 22%;">
  <div class="col-md-4">

  </div>
  <div class="col-md-4">
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

  </body>

  <script type="text/javascript">
  function pass_quiz_id(id){
   $(".modal-footer #quiz_id").val( id );
  }
  </script>

</html>

@endsection
