@extends('layouts.app-login-register')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="splash-container">
              <div class="card ">
                  <div class="card-header text-center"><a href="../index.html"><img class="logo-img" src="{{ asset('concept/images/logo.png') }}" alt="logo"></a><span class="splash-description">Please enter your user information.</span></div>
                    <div class="card-body">
                      <form method="POST" action="{{ route('login') }}">
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
@endsection
