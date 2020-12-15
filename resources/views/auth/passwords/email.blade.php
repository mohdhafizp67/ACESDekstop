@extends('layouts.app-login-register')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="splash-container">
              <div class="card">
                  <div class="card-header text-center"><img class="logo-img" src="https://media-exp1.licdn.com/dms/image/C510BAQEHhJ30BRNxmw/company-logo_200_200/0?e=2159024400&v=beta&t=_oOdHa2dyPnS_HhnYNAtas49fYh2VBeDb0YMQFo1WpU" alt="logo"><span class="splash-description">Please enter your user information.</span></div>
                  <div class="card-body">
                      <form>
                          <p>Don't worry, we'll send you an email to reset your password.</p>
                          <div class="form-group">
                              <input class="form-control form-control-lg" type="email" name="email" required="" placeholder="Your Email" autocomplete="off">
                          </div>
                          <div class="form-group pt-1"><a class="btn btn-block btn-primary btn-xl" href="../index.html">Reset Password</a></div>
                      </form>
                  </div>
                  <div class="card-footer text-center">
                      <span>Don't have an account? <a href="{{route('register')}}">Sign Up</a></span>
                  </div>
              </div>
          </div>
        </div>
    </div>
</div>
@endsection
