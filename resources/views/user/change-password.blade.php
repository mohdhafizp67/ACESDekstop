@extends('layouts.app-student-qbadminui')

@section('content')
<!DOCTYPE html>
<html lang="en" style="background-color: #000a11 !important;">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ACES I 4.0</title>



    <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- <link href="css/style.css" rel="stylesheet"> -->
    <style media="screen">
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
    </style>
  </head>
  <body>

<div id="wrapper">
    <div class="container-fluid">
    	<div class="row">
    		<div class="col-md-12">

          <div style="padding: 4%;"></div>

          <div class="row">
            <div class="col-md-2">

            </div>
            <div class="col-md" style="padding: 5%;">

              @if ($message = Session::get('success'))
              <div id=alert>
                  <div class="alert alert-card  alert-success" role="alert">
                      <strong>Operation Succesful! </strong>
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


              <div class="card border-dark" style="background-color: transparent !important; border: transparent; background-image: url({{asset('concept/images/galaxy/cards2.png')}}); background-repeat: no-repeat;background-size: 100% 100%;">
                <div class="card-header" style="padding-bottom: 6px; border: transparent !important; padding-top: 4%; font-size: 200%; color: white; text-align: center;">CHANGE PASSWORD</div>
                <!-- <hr style="width: 70%; margin: 0 auto; "> -->
                <form action="{{route('user.change-password.save')}}" method="POST">
                  @csrf
                <div class="card-body" style="padding-top: 10px;">
                  <div class="row">
                    <div class="col-md-1">

                    </div>
                    <div class="col-md">
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
                    <div class="col-md-1">

                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-1">

                    </div>
                    <div class="col-md">
                      <div class="input-group mb-3" style="color: white !important;">
                          <input type="password"
                                 id="new_password"
                                 name="new_password"
                                 class="form-control {{ $errors->has('new_password') ? 'is-invalid' : '' }}"
                                 placeholder="New Password"
                                 required>
                          <div class="input-group-append">
                              <div class="input-group-text">
                                <a onclick="visiblenNewPass()">
                                  <span id="icon_eye_new" class="fa fa-eye" style="color: grey;"></span>
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

                    <div class="col-md-1">

                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-1">

                    </div>
                    <div class="col-md">
                      <div class="input-group mb-3">
                          <input type="password"
                                 id="password_confirmation"
                                 name="password_confirmation"
                                 class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"
                                 placeholder="Confirm New Password"
                                 required>

                          <div class="input-group-append">

                              <div class="input-group-text">
                                <a onclick="visiblePassConfirm()">

                                  <span id="icon_eye_confirm" class="fa fa-eye" style="color: grey;"></span>
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

                    <div class="col-md-1">

                    </div>
                  </div>





                  <div class="row" style="padding: 3%;">
                    <div class="col-md-3">

                    </div>
                    <div class="col-md-6 text-center">
                        <button type="button" class="btn" name="button" data-toggle="modal" data-target="#exampleModal" style="padding: 9%;background-image: url({{asset('concept/images/galaxy/button_submit.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover;width: 80%;">
                            CHANGE PASSWORD
                        </button>
                    </div>
                    <div class="col-md-3">

                    </div>
                  </div>

                  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                      <div class="modal-dialog modal-dialog-centered" role="document">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel" style="font-size: 200%;">CONFIRMATION</h5>
                                  <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                          </a>
                              </div>
                              <div class="modal-body">
                                  <p style="font-size: 150%;">DO YOU WANT TO CHANGE THIS PASSWORD?</p>
                              </div>
                              <div class="modal-footer">
                                  <a href="#" class="btn" data-dismiss="modal" style="background-image: url({{asset('concept/images/galaxy/button_submit.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover; width: 22%;">CANCEL</a>
                                  <!-- <a href="#" class="btn btn-primary">Yes</a> -->
                                  <button type="submit" name="button" class="btn" style="background-image: url({{asset('concept/images/galaxy/button_submit.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover; width: 35%;">CHANGE PASSWORD</button>
                              </div>
                          </div>
                      </div>
                  </div>

                </div>
              </form>
              </div>
            </div>
            <div class="col-md-2">

            </div>
          </div>
          <div style="padding: 6%;"></div>

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

    <!-- <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script> -->
  </body>
</html>

<script type="text/javascript">
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

function visiblenNewPass() {
  var x = document.getElementById("new_password");
  if (x.type === "password") {
    x.type = "text";
    document.getElementById("icon_eye_new").style.color = "#007bff";
  } else {
    x.type = "password";
    document.getElementById("icon_eye_new").style.color = "grey";

  }
}

function visiblePassConfirm() {
  var x = document.getElementById("password_confirmation");
  if (x.type === "password") {
    x.type = "text";
    document.getElementById("icon_eye_confirm").style.color = "#007bff";
  } else {
    x.type = "password";
    document.getElementById("icon_eye_confirm").style.color = "grey";

  }
}
</script>

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>

<script type="text/javascript">
$("document").ready(function(){
  setTimeout(function(){
     $("div.alert").remove();
  }, 5000 ); // 5 secs

});
</script>
@endsection
