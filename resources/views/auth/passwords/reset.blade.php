
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


<div class="row" style="padding-top: 5%;padding-bottom: 1%;">
  <div class="col-md-7">

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
  <div class="row" style="padding: 1%; padding-bottom: 6%;">
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
        RESET PASSWORD
      </h4>


      <div class="card-body" style="padding: 10%;margin-top: -10%;margin-bottom: -7%;">

        <div class="row">

          <div class="col-md-12">
            <form method="POST" action="{{ route('password.update') }}">
                @csrf

                <input type="hidden" name="token" value="{{ $token }}">

                <div class="form-group row">
                    <label for="email" class="col-md-4 col-form-label text-md-right" style="color: #fff; font-size: 90%;">{{ __('E-Mail Address') }}</label>

                    <div class="col-md-8" >
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus readonly>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="password" class="col-md-4 col-form-label text-md-right" style="color: #fff; font-size: 90%;">{{ __('Password') }}</label>

                    <div class="col-md-8">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror


                    </div>
                </div>

                <div class="form-group row">
                    <label for="password-confirm" class="col-md-4 col-form-label text-md-right" style="color: #fff; font-size: 90%;">{{ __('Confirm Password') }}</label>


                    <div class="col-md-8">
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                    </div>
                </div>

                <div class="form-group row mb-0">
                    <div class="col-md-6 offset-md-4">
                        <button type="submit" class="btn" style="padding: 10%;background-image: url({{asset('concept/images/galaxy/button_submit.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover; width: 100%;">
                            {{ __('Reset Password') }}
                        </button>
                    </div>
                </div>
            </form>
          </div>
        </div>

      </div>



    </div>
    <!-- <div class="col-md-1">

    </div> -->
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
