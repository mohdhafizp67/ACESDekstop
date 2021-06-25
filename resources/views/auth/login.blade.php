@extends('layouts.app-login-register')

@section('content')
<html style="background-color: #000c15 !important;">
<head>
  <link rel="stylesheet" href="{{ asset('css/Login.css') }} ">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="icon" href="{{ asset('concept/images/logo.png') }}" type="image/icon type">

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


/* Style the footer */
.footer {
  background-color: #000c15;
  padding: 10px;
  text-align: center;
  font-size: 80%;
  padding: 10px 0px 10px;
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

a {
    color: #fff;
    text-decoration: none;
    background-color: transparent;
}
</style>
</head>
<body>
    <div id="wrapper">


<div class="container-fluid" style="background-image: url({{asset('concept/images/galaxy/background_blue.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover; background-color: transparent !important;">

<!-- Modal -->
<!-- <div id="myModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
              <iframe class="embed-responsive-item" width="100%" height="400px" src="https://www.youtube.com/embed/FnY9Re8wreY?autoplay=1&controls=0&disablekb=1&rel=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</div>
<script>
	$(document).ready(function(){
		$("#myModal").modal('show');
	});
</script> -->
<!-- Modal -->

<div class="row" style="padding-top: 2%;">
  <div class="col-md-4">
    <center><img alt="Bootstrap Image Preview" src="{{asset('concept/images/login/Logo.png')}}" style="width: 80%;"></center>
  </div>
  <div class="col-md-2">

  </div>
  <div class="col-md-5" style="text-align: center;padding-top: 4%;padding-left: 10%;">
    <!-- <button type="submit" class="btn" style="background-image: url({{asset('concept/images/galaxy/button_submit.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover; color: #fff;width: 40%;padding: 3%"><a href="{{-- route('locale.setting', 'en') --}}">ENG</a></button> -->

    <!-- <button type="submit" class="btn" style="background-image: url({{asset('concept/images/galaxy/button_submit.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover; color: #fff;width: 40%;padding: 3%"><a href="{{-- route('locale.setting', 'my') --}}">BM</a></button> -->

  </div>
  <div class="col-md-1">

  </div>


</div>
  <div class="row" style="padding-bottom: 0%;">
    <div class="col-md-4" style="padding:5%;">
      <p class="text-center" style="color: #fff; padding-bottom: 5%; padding-top: 10%; text-transform: uppercase; font-size: 80%; text-align: end;">
        {{ __('landing_page.description') }}
      </p>

      <div class="row">
        <div class="col-md-1">

        </div>
        <!-- <div class="col-md-8" style="background-image: url({{asset('concept/images/galaxy/button_submit.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover;color: #fff; text-align: center;padding: 4%;">
          <button type="button" class="btn">
            <a href="#" style="font-size: 80%;">{{ __('landing_page.help') }}</a>
          </button>
        </div> -->
        <img src="{{asset('concept/images/galaxy/mascot.gif')}}" width="100%" height="auto" style="background-position: 100% 100%;background-repeat: no-repeat;background-size: cover;">

        <button id="mute_button" class="button buttonsound" onclick="mute()" type="button" style="margin-left: 20%;width: 32%; height: 10%; background-image: url({{asset('concept/images/galaxy/button_submit.png')}}); background-position: 50% 50%;background-repeat: no-repeat;background-size: cover;"><i class="fas fa-volume-up"></i></button>
        <button onclick="replay()" class="button buttonsound" type="button" style="color: #fff; width: 32%; height: 10%; background-image: url({{asset('concept/images/galaxy/button_submit.png')}}); background-position: 50% 50%;background-repeat: no-repeat;background-size: cover;"><i class="fas fa-undo"></i></button>


        <audio id="myAudio" controls autoplay hidden="true">

          <source src="{{asset('concept/audio/loginv1.mp3')}}" type="audio/mpeg">
        </audio>

        <script>
        var aud = document.getElementById("myAudio");

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
            $('#mute_button').html('<i class="fas fa-volume-off"></i>');

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
        var audio = document.getElementById("myaudio");
        aud.volume = 0.2;
        </script>
        <!-- <div class="modal fade" id="video" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">

                <div class="modal-body">
                  <div class="w3-content w3-display-container">
                    <iframe width="100%" height="300px" src="https://www.youtube.com/embed/b9mJrzdlfR8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                  </div>
                </div>

            </div>
            </div>
        </div> -->


        <div class="col-md-2">

        </div>
      </div>

      <div class="row">
        <div class="col-md-1">

        </div>
        <!-- <div class="col-md-8" style="background-image: url({{asset('concept/images/galaxy/button_submit.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover;color: #fff; text-align: center;padding: 4%;">
          <button type="button" class="btn">
            <a href="#" style="font-size: 80%;">{{ __('landing_page.tnc') }}</a>
          </button>
        </div> -->
        <div class="col-md-2">

        </div>
      </div>

      <div class="row">
        <div class="col-md-1">

        </div>
        <!-- <div class="col-md-8" style="background-image: url({{asset('concept/images/galaxy/button_submit.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover;color: #fff; text-align: center;padding: 4%;">
          <button type="button" class="btn">
            <a href="#" style="font-size: 80%;">{{ __('landing_page.privacy') }}</a>
          </button>
        </div> -->
        <div class="col-md-2">

        </div>
      </div>

    </div>

    <div class="col-md-7" style="background-color: transparent !important; border: transparent; background-image: url({{asset('concept/images/galaxy/cards2.png')}}); background-repeat: no-repeat;background-size: 95% 90%;">

      <h4 style="color: #fff; font-size: 200%; text-align: center; text-transform: uppercase; font-weight: bold; padding-top: 5%;">
        {{ __('landing_page.login.title') }}
      </h4>


      <div class="card-body" style="padding: 10%;margin-top: -10%;margin-bottom: -7%;">

        <div class="row">

          <div class="col-md-12">
            <form action="{{ route('login') }}" method="POST" style="padding: 10px" source="custom" name="form">
              @csrf
                    @if ($message = Session::get('error'))
                        <div id=alert>
                            <div class="alert alert-card alert-danger" role="alert">
                                {{ $message }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        </div>
                    @endif
      				<div class="form-group">

      					<label for="exampleInputEmail1" style="color: #fff">
      						{{ __('landing_page.login.ic_number') }}
      					</label>
      					<input type="text" placeholder="IC Number" id="ic_number" name="ic_number" class="u-border-1 u-border-grey-80 u-grey-75 u-input u-input-rectangle form-control @error('ic_number') is-invalid @enderror" minlength="12" maxlength="12" onkeypress="return onlyNumberKey(event)" value="{{ old('ic_number') }}" required autocomplete="ic_number" autofocus/>
                        @error('ic_number')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                        @enderror
      				</div>
      				<div class="form-group" style="margin-bottom: 1%;">

      					<label for="exampleInputPassword1" style="color: #fff">
                  {{ __('landing_page.login.password') }}
      					</label>
                <div class="mb-3 input-group" style="color: white !important;">
                    <input type="password"
                           id="password"
                           name="password"
                           class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"
                           placeholder="Current Password"
                           required>
                    <div class="input-group-append">
                        <div class="input-group-text">
                          <a onclick="visiblePass()">
                            <span id="icon_eye_pass" class="fa fa-eye" style="color: grey;"></span>
                          </a>
                        </div>
                    </div>
                    @if($errors->has('password'))
                        <div class="invalid-feedback">
                            <strong>{{ $errors->first('password') }}</strong>
                        </div>
                    @endif
                </div>
      				</div>
              <span class="psw" style="font-size: 70%;color: #fff;"> <a href="{{route('password.update')}}">{{ strtoupper(__('landing_page.login.forgot_password')) }}</a></span>


                                <div class="u-align-center u-form-group u-form-submit" style="text-align: center;">
                                  <div class="u-align-center u-form-group u-form-submit" style="text-align: center;">
                                                  <button type="submit" class="btn" style="background-image: url({{asset('concept/images/galaxy/button_submit.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover; width: 30%; color: #fff;padding: 2%;">{{ strtoupper(__('landing_page.login.button')) }}</button>
                                  </div>
                                  <span style="font-size: 80%;"><a href="{{route('register')}}">{{ __('landing_page.login.register_here') }}</a></span>
                                </div>

      				</button>
      			</form>
          </div>
        </div>

      </div>



    </div>
    <!-- <div class="col-md-1">

    </div> -->
  </div>
  <div class="row">
    <div class="footer">
      <span>Copyright © 2021 EAST COAST ECONOMIC REGION DEVELOPMENT COUNCIL (ECERDC). All rights reserved.</span>&nbsp&nbsp&nbsp<a href="{{route('disclaimer')}}">Disclaimer</a>&nbsp&nbsp&nbsp<a href="{{route('tnc')}}">T&C</a>&nbsp&nbsp&nbsp<a href="{{route('privacy')}}">Privacy</a>
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
function onlyNumberKey(evt) {

      // Only ASCII charactar in that range allowed
      var ASCIICode = (evt.which) ? evt.which : evt.keyCode
      if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
          return false;
      return true;
  }

  function visiblePass() {
    var x = document.getElementById("password");
    if (x.type === "password") {
      x.type = "text";
      document.getElementById("icon_eye_pass").style.color = "#007bff";
    } else {
      x.type = "password";
      document.getElementById("icon_eye_pass").style.color = "grey";

    }
  }
</script>

<script>
function myFunction() {
  console.log('auto');
  document.getElementById("myAudio").autoplay;
}
</script>
</html>
@endsection
