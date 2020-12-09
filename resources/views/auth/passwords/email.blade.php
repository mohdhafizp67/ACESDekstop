@extends('layouts.app-login-register')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="splash-container">
              <div class="card">
                  <div class="card-header text-center"><img class="logo-img" src="{{ asset('concept/images/logo.png') }}" alt="logo"><span class="splash-description">Please enter your user information.</span></div>
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
