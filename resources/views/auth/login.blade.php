@extends('layouts.app-login-register')

@section('content')
<html>
<head>
  <link rel="stylesheet" href="{{ asset('css/Login.css') }} ">

<style>
/* Style the footer */
.footer {
  background-color: #000c15;
  /* padding: 10px; */
  /* text-align: center; */
  font-size: 80%;
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
</style>
</head>
<body>
<div class="container-fluid" style="background-image: url({{asset('concept/images/galaxy/background_blue.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover; background-color: transparent !important;">


<div class="row" style="padding-top: 3%;padding-bottom: 1%;">
  <div class="col-md-7">

  </div>
  <div class="col-md-2">

  </div>
  <div class="col-md-2">
    <button type="button" class="btn" style="width: 100%;background-image: url({{asset('concept/images/galaxy/button_submit.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover;">
      <a href="#">MY/ENG</a>
    </button>
  </div>
  <div class="col-md-1">

  </div>
</div>
  <div class="row" style="padding: 1%;">
    <div class="col-md-4">
      <center><img alt="Bootstrap Image Preview" src="{{asset('concept/images/login/Logo.png')}}" style="width: 80%; margin-top:-25%;"></center>
      <p class="text-center" style="color: #fff; padding-bottom: 5%; padding-top: 10%; text-transform: uppercase; font-size: 80%; text-align: end;">
        ACES will be a regional hub providing wide-ranging Industry 4.0 solutions including advisory, consulting and training services for businesses in Malaysia, ASEAN and ASIA.
      </p>

      <div class="row">
        <div class="col-md-1">

        </div>
        <!-- <div class="col-md-8" style="background-image: url({{asset('concept/images/galaxy/button_submit.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover;color: #fff; text-align: center;padding: 4%;">
          <button type="button" class="btn">
            <a href="#" style="font-size: 80%;">HELP</a>
          </button>
        </div> -->
        <img src="{{asset('concept/images/galaxy/mascot.gif')}}" width="100%" height="auto" style="background-position: 100% 100%;background-repeat: no-repeat;background-size: cover;">

        <button class="button buttonsound" onclick="enableMute()" type="button" style="padding: 1%;margin-left: 20%;width: 25%; height: 15%; background-image: url({{asset('concept/images/galaxy/button_submit.png')}}); background-position: 0% 100%;background-repeat: no-repeat;background-size: cover;"><i class="fas fa-volume-off"></i></button>
        <button class="button buttonsound" onclick="disableMute()" type="button" style="padding: 1%;width: 25%; height: 15%; background-image: url({{asset('concept/images/galaxy/button_submit.png')}}); background-position: 100% 100%;background-repeat: no-repeat;background-size: cover;"><i class="fas fa-volume-up"></i></button>
        <span  onclick="replay()" style="color: #fff; margin-left: 3%;padding: 1%;"><i class="fas fa-undo"></i></span>


        <audio id="myAudio" controls autoplay hidden="true">

          <source src="{{asset('concept/audio/LOGIN.mp3')}}" type="audio/mpeg">
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
            <a href="#" style="font-size: 80%;">T&C</a>
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
            <a href="#" style="font-size: 80%;">PRIVACY</a>
          </button>
        </div> -->
        <div class="col-md-2">

        </div>
      </div>

    </div>

    <div class="col-md-7" style="background-color: transparent !important; border: transparent; background-image: url({{asset('concept/images/galaxy/cards2.png')}}); background-repeat: no-repeat;background-size: 100% 100%;">

      <h4 style="color: #fff; font-size: 200%; text-align: center; text-transform: uppercase; font-weight: bold; padding-top: 10%;">
        LOGIN FORM
      </h4>


      <div class="card-body" style="padding: 10%;margin-top: -10%;margin-bottom: -7%;">

        <div class="row">

          <div class="col-md-12">
            <form action="{{ route('login') }}" method="POST" style="padding: 10px" source="custom" name="form">
              @csrf
      				<div class="form-group">

      					<label for="exampleInputEmail1" style="color: #fff">
      						IC NUMBER
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
      						PASSWORD
      					</label>
                <div class="input-group mb-3" style="color: white !important;">
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
              <span class="psw" style="font-size: 70%;color: #fff;margin-left: 65%;"> <a href="{{route('password.update')}}">Forgot password?</a></span>


                                <div class="u-align-center u-form-group u-form-submit">
                                  <div class="u-align-center u-form-group u-form-submit" style="text-align: center;">
                                                  <button type="submit" class="btn" style="background-image: url({{asset('concept/images/galaxy/button_submit.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover; width: 30%;">{{ __('LOG IN') }}</button>
                                                  <!-- <button type="button" class="btn" style="background-image: url({{asset('concept/images/galaxy/button_submit.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover;">
                                                    <a href="{{route('register')}}">REGISTER</a>
                                                  </button> -->
                                  </div>
                                  <span style="font-size: 80%;margin-left: 20%;"><a href="{{route('register')}}">Don't have account? Register here</a></span>
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
    <span>&copy; Hakcipta Terpelihara 2021</span>&nbsp&nbsp&nbsp&nbsp<span style="margin-left: 53%;"><font color="white">TERMS&CONDITIONS</font></span>&nbsp&nbsp&nbsp&nbsp<span style="text-align: right;"><font color="white">PRIVACY</font></span>
    </div>
  </div>
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
