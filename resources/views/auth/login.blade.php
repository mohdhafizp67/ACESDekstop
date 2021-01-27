@extends('layouts.app-login-register')

@section('content')
<html style="background-color: #232121;">
<head>
  <link rel="stylesheet" href="{{ asset('css/Login.css') }} ">
</head>
<body>
<div class="container-fluid" style="background-image: url({{asset('concept/images/galaxy/background3.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover; background-color: transparent !important;">


<div class="row" style="padding-top: 5%;">
  <div class="col-md-4">

  </div>
  <div class="col-md-3">

  </div>
  <div class="col-md-2">
    <button type="button" class="btn" style="background-image: url({{asset('concept/images/galaxy/button_submit.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover; margin-top: -30%;margin-left: -25%;">
      <a href="#">LANGUAGE</a>
    </button>
  </div>
  <div class="col-md-2">
    <button type="button" class="btn" style="background-image: url({{asset('concept/images/galaxy/button_submit.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover; margin-top: -30%;margin-left: -25%;">
      <a href="{{route('register')}}">CREATE AN ACCOUNT</a>
    </button>
  </div>
  <div class="col-md-1">

  </div>
</div>
  <div class="row">
    <div class="col-md-4">
      <center><img alt="Bootstrap Image Preview" src="{{asset('concept/images/login/Logo.png')}}" style="width: 80%; padding-top: 5%;"/></center>
      <p class="text-center" style="color: #fff; padding-bottom: 27%; padding-top: 20%; text-transform: uppercase; font-size: 100%;">
      Aces I 4.0 is an initiative that adopts elearning and gamification systems to provide interactive knowledge to Form 5 students under ecerdc management.
      </p>
      <p style="color: #fff;">
        HELP
      </p>
      <p style="color: #fff;">
        TERM & CONDITIONS
      </p>
      <p style="color: #fff;">
        PRIVACY
      </p><br>
    </div>
    <div class="col-md-7" style="background-color: transparent !important; border: transparent; background-image: url({{asset('concept/images/galaxy/cards2.png')}}); background-repeat: no-repeat;background-size: 100% 100%">
      <h4 style="color: #fff; font-size: 200%; text-align: center; text-transform: uppercase; font-weight: bold; padding-top: 10%;">
        LOGIN FORM
      </h4>

      <div class="card-body" style="padding: 10%;">
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
      				<div class="form-group">

      					<label for="exampleInputPassword1" style="color: #fff">
      						PASSWORD
      					</label>
      					<input type="password" placeholder="Password" id="password" name="password" class="u-border-1 u-border-grey-80 u-grey-75 u-input u-input-rectangle form-control @error('password') is-invalid @enderror" required autocomplete="current-password"/>
                @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                @enderror
      				</div>


                                <div class="u-align-center u-form-group u-form-submit">
                                  <div class="u-align-center u-form-group u-form-submit" style="text-align: center;">
                                                  <button type="submit" class="btn" style="background-image: url({{asset('concept/images/galaxy/button_submit.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover;">{{ __('LOG MASUK') }}</button>
                                  </div>
                                </div>

      				</button>
      			</form>
          </div>
        </div>

      </div>

    </div>
    <div class="col-md-1">

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
</script>
</html>
@endsection
