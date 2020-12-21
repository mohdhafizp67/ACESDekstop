@extends('layouts.app-login-register')

@section('content')
<div class="container">
  @if ($message = Session::get('success'))
            <div id=alert>
                <div class="alert alert-card  alert-success" role="alert">
                    <strong>Success! </strong>
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
    <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="splash-container">
              <div class="card ">
                  <div class="card-header text-center"><a href="../index.html"><img class="logo-img" src="https://media-exp1.licdn.com/dms/image/C510BAQEHhJ30BRNxmw/company-logo_200_200/0?e=2159024400&v=beta&t=_oOdHa2dyPnS_HhnYNAtas49fYh2VBeDb0YMQFo1WpU" alt="logo"></a><span class="splash-description">Please enter your user information.</span></div>
                    <div class="card-body">
                      <!-- <form method="POST" action="{{ route('login') }}">
                          @csrf
                            <div class="form-group">
                                <input class="form-control form-control-lg" id="username" type="text" placeholder="Username" autocomplete="off">
                            </div>
                            <div class="form-group">
                                <input class="form-control form-control-lg" id="password" type="password" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label class="custom-control custom-checkbox">
                                    <input class="custom-control-input" type="checkbox"><span class="custom-control-label">Remember Me</span>
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
                        </form> -->
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row">
                                <div class="col-md">
                                    <input id="ic_number" type="text" class="form-control @error('ic_number') is-invalid @enderror" minlength="12" maxlength="12" onkeypress="return onlyNumberKey(event)" name="ic_number" value="{{ old('ic_number') }}" placeholder="IC Number" required autocomplete="ic_number" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md">
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Password" required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <!-- <div class="form-group row">
                                <div class="col-md">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div> -->

                            <div class="form-group row mb-0">

                                <div class="col-md-12">
                                    <button type="submit" class="btn btn-block btn-primary">
                                        {{ __('Login') }}
                                    </button>

                                    <!-- @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif -->
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="card-footer bg-white p-0  ">
                        <div class="card-footer-item card-footer-item-bordered">
                            <a href="{{route('register')}}" class="footer-link">Create An Account</a></div>
                        <div class="card-footer-item card-footer-item-bordered">
                            <a href="{{route('password.request')}}" class="footer-link">Forgot Password</a>
                        </div>
                    </div>
              </div>
          </div>
        </div>
    </div>
</div>

<script type="text/javascript">
function onlyNumberKey(evt) {

      // Only ASCII charactar in that range allowed
      var ASCIICode = (evt.which) ? evt.which : evt.keyCode
      if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
          return false;
      return true;
  }
</script>
@endsection
