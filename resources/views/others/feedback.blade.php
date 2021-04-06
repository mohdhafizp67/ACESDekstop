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

    <style>

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

     .btn:hover {
    background-color: #f4433600;
    }

    label {
    font-size: 100% !important;
    }
    </style>
  </head>
  <body>

  <div id="wrapper">
    <div class="container-fluid">
    	<div class="row">
    		<div class="col-md-12" style=" background-color: transparent !important; background-image: url({{asset('concept/images/galaxy/background_blue.png')}}); background-repeat: no-repeat;background-size: cover;padding: 0%;">

          <!-- <div style="padding: 30px;"></div> -->

          <div class="row" style="padding-bottom: 8%;">
            <!-- <div class="col-md-4">
              <img src="{{asset('concept/images/galaxy/mascot.gif')}}" width="80%" style="margin-top: 60%;background-position: 100% 100%;background-repeat: no-repeat;background-size: cover;">

              <button class="button buttonsound" onclick="enableMute()" type="button" style="margin-left: 0%;width: 25%; height: 10%; background-image: url({{asset('concept/images/galaxy/button_submit.png')}}); background-position: 0% 00%;background-repeat: no-repeat;background-size: cover;"><i class="fas fa-volume-mute"></i></button>
              <button class="button buttonsound" onclick="disableMute()" type="button" style="width: 25%; height: 10%; background-image: url({{asset('concept/images/galaxy/button_submit.png')}}); background-position: 100% 100%;background-repeat: no-repeat;background-size: cover;"><i class="fas fa-volume-up"></i></button>
              <span  onclick="replay()" style="color: #fff; margin-left: 3%;"><i class="fas fa-undo"></i></span>

              <audio id="myAudio" controls autoplay hidden="true">
              <source src="{{asset('concept/audio/.ogg')}}" type="audio/ogg">
              <source src="{{asset('concept/audio/.mp3')}}" type="audio/mpeg">
              </audio>

              <script>
              var aud = document.getElementById("myAudio");

              function enableMute() {
                console.log('mute');
                aud.muted = true;
              }

              function disableMute() {
                console.log('unmute');
                aud.muted = false;
              }

              function checkMute() {
                console.log('check');
                alert(aud.muted);
              }
              function replay(){
                aud.currentTime=0;
                aud.play();
              }
              </script>
            </div> -->
            <div class="col-md-4">

            </div>
            <div class="col-md-8" style="padding-top: 5%; margin-left: 20%;">

              @if ($message = Session::get('success'))
              <div id=alert>
                  <div class="alert alert-card  alert-success" role="alert">
                      <strong>Operation Successful! </strong>
                      {{$message}}
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
              </div>
              @elseif ($message = Session::get('error'))
              <div id="alert">
                <div class="alert alert-card  alert-danger" role="alert">
                    <strong>Error! </strong>
                    {{$message}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
              </div>
              @endif


              <div class="card border-dark" style="background-color: transparent !important; border: transparent; background-image: url({{asset('concept/images/galaxy/cards2.png')}}); background-repeat: no-repeat;background-size: 100% 100%">
                <div class="card-header" style="padding-bottom: 1px; border: transparent !important; padding-top: 5%; font-size: 200%; color: white;">FEEDBACK</div>
                <hr style="width: 70%; margin: 0 auto; ">
                <form action="{{route('others.feedback.save')}}" method="POST">
                  @csrf
                <div class="card-body" style="padding-top: 5%;">
                  <div class="row">
                    <div class="col-md-1">

                    </div>
                    <div class="col-md-5">
                      <div class="form-group" style="color: white !important;">
                        <label class="col-form-label">NAME</label>
                        <input id="name" type="text"name="name" value="{{Auth::user()->name}}" class="form-control" style="font-size: 100%;" disabled>
                      </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group" style="color: white !important;">
                          <label class="col-form-label">EMAIL</label>
                          <input id="email" type="text"name="email" value="{{Auth::user()->email}}" class="form-control" style="font-size: 100%;" disabled>
                        </div>
                    </div>
                    <div class="col-md-1">

                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-1">

                    </div>
                    <div class="col-md-10">
                      <div class="form-group" style="color: white !important;">
                        <label class="col-form-label">SUBJECT</label>
                        <input id="subject" type="text"name="subject" class="form-control" style="font-size: 100%;" required>
                      </div>
                    </div>
                    <div class="col-md-1">

                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-1">

                    </div>
                    <div class="col-md-10">
                      <div class="form-group" style="color: white !important;">
                        <label class="col-form-label">COMMENT</label>
                        <textarea class="form-control" id="feedback" name="feedback" rows="3" style="font-size: 100%;" required></textarea>
                      </div>
                    </div>
                    <div class="col-md-1">

                    </div>
                  </div>

                  <div class="row" style="padding-bottom:3%;">
                    <div class="col-md-4">

                    </div>
                    <div class="col-md-4" >
                        <button class="btn" type="submit" style="background-image: url({{asset('concept/images/galaxy/button_submit.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover;padding: 8%;width: 100%;font-size: 150%;">
                          SUBMIT
                        </button>


                    </div>
                    <div class="col-md-4">

                    </div>
                  </div>
                  <!-- <div style="padding: 10px;"></div> -->

                </div>
              </form>
              </div>
            </div>

            <div class="col-md-4">

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
    <!-- <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script> -->

    <script>
    function myFunction() {
      console.log('auto');
      document.getElementById("myAudio").autoplay;
    }
    </script>
  </body>
</html>
@endsection
