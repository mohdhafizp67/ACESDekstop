@extends('layouts.app-student-qbadminui')

@section('content')
<!DOCTYPE html>
<html lang="en" style="background-color: #000a11 !important;">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ACES I 4.0</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
    <link href="css/style.css" rel="stylesheet">
    <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
      <!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script> -->
      <!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
      <style media="screen">
      <link rel="icon" href="{{ asset('concept/images/logo.png') }}" type="image/icon type">


.circle {
width: 100%;
margin: 6px 6px 20px;
display: inline-block;
position: relative;
text-align: center;
line-height: 1.2;
top: 10%;
left: 23%;
}

.circle canvas {
vertical-align: top;
}

.circle strong {
position: absolute;
top: 35%;
left: 1%;
width: 100%;
text-align: center;
line-height: 25px;
font-size: 200%;
color: #f8f9fa;
}

.circle strong i {
font-style: normal;
font-size: 0.6em;
font-weight: normal;
}

.circle span {
display: block;
color: #f8f9fa;
font-size: 100%;
margin-top: 65%;
margin-left: 0%;
}

canvas {
    position: absolute;
    top: 15px;
    left: 0;
    height: 70%;
    margin-left: 23.5%;
}

.list-group-item-action {
    color: #f8f9fa !important;
    font-size: 100%;
    background-color: #003e61 !important;
}

.list-group-item {
    position: relative;
    display: block;
    padding: .75rem 1.25rem;
    margin-bottom: -1px;
    background-color: #003e616b;
    border: 1px solid #17a2b8;
}

.text-muted {
    color: #f8f9fa !important;
}

.button {
  background-color: ##ffffff00;
  border: none;
  /* color: white; */
  /* padding: 16px 32px; */
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  /* margin: 4px 2px; */
  transition-duration: 0.4s;
  cursor: pointer;
}

.buttonsound {
  background-color: #ffffff00;
  color: #fff;
  /* border: 2px solid #4CAF50; */
}

.fontnew{
  @import url('https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@200&display=swap');
  font-family: 'Roboto Mono', monospace;
}

/* .avatar {
  vertical-align: middle;
  width: 70%;
  height: 70%;
  margin-top: -7%;
  border-radius: 50%;

} */

.img-container {
  width: 75%;
  height: 75%;
  margin-top: -11%;
   border: 0px solid;
   border-radius: 50%;
   position: relative;
   object-fit: cover;
 }
 .img-container img {
   width: 100%;
   height: 200px;
   position: absolute;
   left: 50%;
   top: 50%;
   transform: translate(-50%, -50%);
 }

 img {
   -o-object-fit: contain !important;
      /* object-fit: contain !important; */
   -o-object-position: center !important;
      /* object-position: center !important; */
 }

 .text-block {
  position: absolute;
  /* bottom: 30px;
  right: 15px;
  background-color: black;
  color: white;
  padding-left: 0px;
  padding-right: 0px; */
}
</style>
  </head>
  <body onload="myFunction()">

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12" style="background-image: url({{asset('concept/images/galaxy/background_blue.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover; padding: 5%;">


        <h1 style="text-align: center; font-size: 450%; color: #fff; font-weight:bold; padding-top: 0%; padding-left: 9%;margin-top: -3%; padding-bottom: 5%;">

  				ACES <font color="#ff0000"><span class="fontnew"> I4.0</span></font> <br>
  			</h1>

        <!-- <div style="position: absolute;  top: 70px;  right: 1px;">
          <a href="https://aces.ecerdc.com.my/aces2/">
            <button type="button" class="btn btn-danger" style="margin-top: 30%;margin-left: -25%; border-radius: 5px; font-size: 15px;">
              TENTANG ACES
            </button>
          </a>
        </div> -->
        <div class="row" style="padding-bottom: 5%;">
          <div class="col-md-3" style="margin-top: -3%;background-color: transparent !important; background-image: url({{asset('concept/images/galaxy/profile_frame.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover;">

                <div style="padding: 12%;"></div>
                @if(Auth::user()->profile_picture == null)
                  <img src="{{ asset('https://i.redd.it/z394307odi741.png') }}" alt="profile" class="img-container">
                @else
                <img src="{{ asset( $image_path = str_replace('public', 'storage',  Auth::user()->profile_picture)) }}" onError="this.src='http://161.35.227.188/ACES{{ ( $image_path = str_replace('public', 'storage',  Auth::user()->profile_picture)) }}';" class="img-container">
                @endif


          </div>
          <div class="col-md-3" >
            <div class="card text-white bg-success mb-3" style=" background-color: transparent !important; border: transparent; background-image: url({{asset('concept/images/galaxy/box1.png')}}); background-repeat: no-repeat;background-size: 100% 100%">
              <div class="card-body list-group" style="padding: 5%;">
                <div class="progressbar1">
                <div class="second circle" data-percent="{{$lesson_progress}}">
                  <strong></strong>
                  <span>LESSON</span>
                </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card text-white bg-success mb-3" style=" background-color: transparent !important; border: transparent; background-image: url({{asset('concept/images/galaxy/box1.png')}}); background-repeat: no-repeat;background-size: 100% 100%">
              <div class="card-body list-group" style="padding: 5%;">
                <div class="progressbar1">
                <div class="second circle" data-percent="{{$quiz_progress}}">
                  <strong></strong>
                  <span>QUIZ</span>
                </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card text-white bg-success mb-3" style=" background-color: transparent !important; border: transparent; background-image: url({{asset('concept/images/galaxy/box1.png')}}); background-repeat: no-repeat;background-size: 100% 100%">
              <div class="text-block">
                <img src="{{ asset('concept/images/coming.png') }}" style="width: 170px;">
              </div>
              <div class="card-body list-group" style="padding: 5%;">
                <div class="progressbar1">
                <div class="second circle" data-percent="{{$game_progress}}">
                  <strong></strong>
                  <span>GAME</span>
                </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div></div>

        <div class="row">
      		<div class="col-md-12">
      			<div class="row" style="margin-top: 0%;">
      				<div class="col-md-4" style="margin-left: -5%;">
                <span style="color: #45e9b5; margin-left: 8%;font-size: 150%;">
                  @if(count($splitName) > 2 )
                  {{$splitName[0].' '.$splitName[1]}}
                  @else
                  {{$splitName[0]}}
                  @endif
                </span><br>
                <span style="color: #45e9b5; margin-left: 8%;font-size: 150%;">{{Auth::user()->school}}</span>
                <img src="{{asset('concept/images/galaxy/mascot.gif')}}" width="100%" height="auto" style="margin-top: -10%;margin-left: 3%;background-position: 100% 100%;background-repeat: no-repeat;background-size: cover;">


                <button id="mute_button" class="button buttonsound" onclick="mute()" type="button" style="width: 30%; height: 10%; background-image: url({{asset('concept/images/galaxy/button_submit.png')}}); background-position: 50% 50%;background-repeat: no-repeat;background-size: cover;margin-left:6%;"><i class="fas fa-volume-up"></i></button>
                <button onclick="replay()" class="button buttonsound" type="button" style="color: #fff; width: 30%; height: 10%; background-image: url({{asset('concept/images/galaxy/button_submit.png')}}); background-position: 50%  50%;background-repeat: no-repeat;background-size: cover;"><i class="fas fa-undo"></i></button>

                  <audio id="myAudio" controls autoplay hidden="true">

                    <source src="{{asset('concept/audio/dashboardv1.mp3')}}" type="audio/mpeg">
                  </audio>

      				</div>
              <script>
              var aud = document.getElementById("myAudio");
              @if(Auth::user()->first_time_login == 0)
                aud.muted = true;
              @endif
              function mute() {
                if(aud.muted == true)
                {
                  console.log('unmute');
                  $('#mute_button').html('<i class="fas fa-volume-up"></i>');

                  aud.muted = false;
                }
                else {
                  console.log('mute');
                  aud.muted = true;
                  $('#mute_button').html('<i class="fas fa-volume-mute"></i>');

                }
              }

              // function disableMute() {
              //   console.log('unmute');
              //   aud.muted = false;
              // }

              // function checkMute() {
              //   console.log('check');
              //   alert(aud.muted);
              // }
              function replay(){
                aud.currentTime=0;
                aud.play();
              }
              </script>
      				<!-- <div class="col-md-6">
      					<div class="row">
      						<div class="col-md-6" style="padding: 20%;background-color: transparent !important;background-image: url({{asset('concept/images/galaxy/Btn_Prop.png')}}); background-repeat: no-repeat;background-size: 100% 100%;">
                    <i class="fas fa-sms" style="font-size: 300%;"></i>
      						</div>
                  <div class="col-md-6" style="padding: 20%;background-color: transparent !important;background-image: url({{asset('concept/images/galaxy/Btn_Prop.png')}}); background-repeat: no-repeat;background-size: 100% 100%;">
                    <i class="fas fa-question" style="font-size: 300%;"></i>
      						</div>
      					</div>
      					<div class="row">
                  <div class="col-md-6" style="padding: 20%;background-color: transparent !important;background-image: url({{asset('concept/images/galaxy/Btn_Prop.png')}}); background-repeat: no-repeat;background-size: 100% 100%;">
                    <i class="fas fa-gamepad" style="font-size: 300%;"></i>
      						</div>
                  <div class="col-md-6" style="padding: 20%;background-color: transparent !important;background-image: url({{asset('concept/images/galaxy/Btn_Prop.png')}}); background-repeat: no-repeat;background-size: 100% 100%;">
                    <i class="fas fa-book-reader" style="font-size: 300%;"></i>
      						</div>
      					</div>
      				</div> -->

              <div class="col-md-8" style="margin-left: -3%;">
                <div class="card text-white bg-success mb-3" style=" background-color: transparent !important; border: transparent; background-image: url({{asset('concept/images/galaxy/dashboardv2.png')}}); background-repeat: no-repeat;background-size: 100% 100%; padding: 3%; width: 111%;">
                  <div class="card-header" style="background-color: transparent; border: transparent; font-weight: bold; font-size: 150%;">ANNOUNCEMENT</div>
                  <div class="card-body list-group p-2" style="overflow:auto;height:150px;width:80%; margin: 0 auto; border: transparent;">
                    @foreach($announcement as $data)

                      <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                          <div class="d-flex w-100 justify-content-between">
                              <h5 class="mb-1" style="font-size: 90%">ACES I4.0</h5>
                              <small class="text-muted">{{$data->created_at}}</small>
                          </div>
                          <p class="mb-1">{{$data->user_message}}</p>
                          <!-- <small class="text-muted">Donec id elit non mi porta.</small> -->
                      </a>
                      <div style="padding: 2px;"></div>
                      @endforeach

                  </div>
                  <!-- <div class="card-footer" style="background-color: #130E29 !important; margin: 5px;">
                  </div> -->
                </div>
              </div>

      			</div>
      		</div>

      	</div>


        <div class="row">
          <div class="col-md-3">
          </div>

          <div class="col-md-3">


          </div>

          <div class="col-md-6">

          </div>

        </div>

		</div>
	</div>
</div>

    <!-- <script src="js/jquery.min.js"></script> -->
    <!-- <script src="js/bootstrap.min.js"></script> -->
    <!-- <script src="js/scripts.js"></script> -->
  </body>
</html>
<script src="https://rawgit.com/kottenator/jquery-circle-progress/1.2.2/dist/circle-progress.js"></script>
<script type="text/javascript">
$(document).ready(function ($) {
  function animateElements() {
      $('.progressbar').each(function () {
          var elementPos = $(this).offset().top;
          var topOfWindow = $(window).scrollTop();
          var percent = $(this).find('.circle').attr('data-percent');
          var animate = $(this).data('animate');
          if (elementPos < topOfWindow + $(window).height() - 30 && !animate) {
              $(this).data('animate', true);
              $(this).find('.circle').circleProgress({
                  // startAngle: -Math.PI / 2,
                  value: percent / 100,
                  size : 100,
                  thickness: 8,
                  // fill: {
                  //     color: '#5AAAE7'
                  // }
              }).on('circle-animation-progress', function (event, progress, stepValue) {
                  $(this).find('strong').text((stepValue*100).toFixed(0) + "%");
              }).stop();
          }
      });
  }

  animateElements();
  $(window).scroll(animateElements);
});
</script>

<script type="text/javascript">
$(document).ready(function ($) {
  function animateElements() {
      $('.progressbar1').each(function () {
          var elementPos = $(this).offset().top;
          var topOfWindow = $(window).scrollTop();
          var percent = $(this).find('.circle').attr('data-percent');
          var animate = $(this).data('animate');
          if (elementPos < topOfWindow + $(window).height() - 30 && !animate) {
              $(this).data('animate', true);
              $(this).find('.circle').circleProgress({
                  // startAngle: -Math.PI / 2,
                  value: percent / 100,
                  size : 100,
                  thickness: 8,
                  fill: {
                      gradient: ['#3aeabb', '#fdd250']
                  }
              }).on('circle-animation-progress', function (event, progress, stepValue) {
                  $(this).find('strong').text((stepValue*100).toFixed(0) + "%");
              }).stop();
          }
      });
  }

  animateElements();
  $(window).scroll(animateElements);
});
</script>

<script type="text/javascript">
$(document).ready(function ($) {
  function animateElements() {
      $('.progressbar2').each(function () {
          var elementPos = $(this).offset().top;
          var topOfWindow = $(window).scrollTop();
          var percent = $(this).find('.circle').attr('data-percent');
          var animate = $(this).data('animate');
          if (elementPos < topOfWindow + $(window).height() - 30 && !animate) {
              $(this).data('animate', true);
              $(this).find('.circle').circleProgress({
                  // startAngle: -Math.PI / 2,
                  value: percent / 100,
                  size : 100,
                  thickness: 8,
                  fill: {
                      gradient: ['#3aeabb', '#fdd250']
                  }
              }).on('circle-animation-progress', function (event, progress, stepValue) {
                  $(this).find('strong').text((stepValue*100).toFixed(0) + "%");
              }).stop();
          }
      });
  }

  animateElements();
  $(window).scroll(animateElements);
});
</script>

<script>
function myFunction() {
  console.log('auto');
  document.getElementById("myAudio").autoplay;
}
</script>

@endsection
