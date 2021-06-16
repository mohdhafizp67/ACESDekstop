@extends('layouts.app-student')

@section('content')



<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Tukar Kata Laluan</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/kemaskiniprofil.css') }} ">

  </head>
  <body>

    <div class="container-fluid">
  <div class="row">
    <div class="col-md-12" style="padding-top: 10%; padding-bottom: 15%; background-image: url({{asset('concept/images/permainan/drone1.jpg')}}); background-position: 100% 100%;background-repeat: no-repeat;background-size: cover;">
      <h2 style="color: #fff; text-align: justify; font-weight: bold; padding-bottom: 22%;">

        Tukar Kata Laluan
      </h2>

      <div class="row">
        <div class="col-md-2">

        </div>
        <div class="col-md-8">
          <div class="input-group mb-3">
              <input type="password"
                     id="password"
                     name="password"
                     class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"
                     placeholder="Current Password">
              <div class="input-group-append">
                  <div class="input-group-text">
                    <a onclick="visiblePass()">
                      <span id="icon_eye_pass" class="fa fa-eye" ></span>
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

        <div class="col-md-2">

        </div>


      </div>

      <div class="row">
        <div class="col-md-2">

        </div>
        <div class="col-md-8">
          <div class="row">
          <div class="col-md-6">
            <div class="input-group mb-3">
                <input type="password"
                       id="password"
                       name="password"
                       class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"
                       placeholder="New Password">
                <div class="input-group-append">
                    <div class="input-group-text">
                      <a onclick="visiblePass()">
                        <span id="icon_eye_pass" class="fa fa-eye" ></span>
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
          <div class="col-md-6">
            <div class="input-group mb-3">
                <input type="password"
                       id="password"
                       name="password"
                       class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"
                       placeholder="Confirm New Password">
                <div class="input-group-append">
                    <div class="input-group-text">
                      <a onclick="visiblePass()">
                        <span id="icon_eye_pass" class="fa fa-eye" ></span>
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
            </div>
        </div>
        <div class="col-md-2">

        </div>
      </div>



        <div class="u-align-center u-form-group u-form-submit" style="padding-top: 5%;">
          <button class="btn btn-success" type="submit">Tukar Kata Laluan</button>
        </div>

        <div style="padding: 40px;"></div>

    </div>
  </div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>
@endsection
