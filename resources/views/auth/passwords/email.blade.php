
@extends('layouts.app-login-register')

@section('content')
<html style="background-color: #000c15 !important;">
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
</style>
</head>
<body>
<div class="container-fluid" style="background-image: url({{asset('concept/images/galaxy/background_blue.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover; background-color: transparent !important;">


<div class="row" style="padding-top: 5%;padding-bottom: 2%;">
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
  <div class="row" style="padding: 3%;">
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
        <img src="{{asset('concept/images/galaxy/mascot.gif')}}" width="80%" height="auto" style="background-position: 100% 100%;background-repeat: no-repeat;background-size: cover;" data-toggle="modal" data-target="#video">

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

      <h4 style="color: #fff; font-size: 150%; text-align: center; text-transform: uppercase; font-weight: bold; padding-top: 10%;">
        RESET PASSWORD
      </h4>


      <div class="card-body" style="padding: 15%;margin-top: -10%;">
        <form action="{{ route('password.email') }}" method="POST">
          @csrf
        <div class="row">

          <div class="col-md-12">
            <div class="form-group">
              <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email">
              @error('email')
              <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror
            </div>
            <div class="form-group pt-1" style="text-align: center;">
              <button type="submit" class="btn" style="padding: 5%;width: 45%;background-image: url({{asset('concept/images/galaxy/button_submit.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover;">Reset Password</button>
              <!-- <div class="form-group pt-1" style="text-align: center;"><a class="btn" href="../index.html" style="padding: 5%;width: 50%;background-image: url({{asset('concept/images/galaxy/button_submit.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover;">Reset Password</a></div> -->
            </div>
            <center>
              <div class="btn">
                  <span style="font-size: 80%;"><a href="{{route('register')}}">Don't have an account? Sign Up</a></span>
              </div>
              <center>
          </div>
        </div>
      </form>

      </div>



    </div>
    <!-- <div class="col-md-1">

    </div> -->
  </div>
  <!-- <div class="row">
    <div class="footer">
    <span>&copy; Hakcipta Terpelihara 2021</span>&nbsp&nbsp&nbsp&nbsp<span style="margin-left: 55%;"><font color="white">TERM&CONDITIONS</font></span>&nbsp&nbsp&nbsp&nbsp<span style="text-align: right;"><font color="white">PRIVACY</font></span>
    </div>
  </div> -->
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
</script>
</html>
@endsection
