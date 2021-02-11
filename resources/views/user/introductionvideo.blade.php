@extends('layouts.app-login-register')

@section('content')
<html style="background-color: #130e29 !important;">
<head>
  <link rel="stylesheet" href="{{ asset('css/Login.css') }} ">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

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

a {
    color: #fff;
    text-decoration: none;
    background-color: transparent;
}
</style>
</head>
<body>
<div class="container-fluid" style="background-image: url({{asset('concept/images/galaxy/background_blue.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover; background-color: transparent !important;">


  <div class="row" style="padding-top: 3%;">
    <div class="col-md-1">

    </div>
    <div class="col-md-10" style="padding: 1%;background-image: url({{asset('concept/images/galaxy/panel.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover;">
      <iframe class="embed-responsive-item" style="padding: 5%;" width="100%" height="400px" src="https://www.youtube.com/embed/fuTtS4fLvx0?autoplay=1&controls=0&disablekb=1&rel=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>
    <div class="col-md-1">

    </div>
  </div>
  <div class="row" style="padding-top: 3%; padding-bottom: 3%;">
    <div class="col-md-4">

    </div>
    <div class="col-md-4">
    </div>
    <div class="col-md-4">
      <a href="{{route('login')}}"><button type="submit" class="btn" style="background-image: url({{asset('concept/images/galaxy/button_submit.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover; width: 50%; color:#fff;">LOG IN</button></a>
    </div>
  </div>

  <!-- <div class="row">
    <div class="footer">
    <span>&copy; Hakcipta Terpelihara 2021</span>&nbsp&nbsp&nbsp&nbsp<span style="margin-left: 53%;"><font color="white">TERMS&CONDITIONS</font></span>&nbsp&nbsp&nbsp&nbsp<span style="text-align: right;"><font color="white">PRIVACY</font></span>
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
