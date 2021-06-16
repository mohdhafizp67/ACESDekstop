@extends('layouts.app-login-register')

@section('content')
<html style="background-color: #032c41">
<head>

  <link rel="stylesheet" href="{{ asset('css/Login.css') }} ">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="icon" href="{{ asset('concept/images/logo.png') }}" type="image/icon type">

<style>

#warning-message { display: none; }
 @media only screen and (orientation:portrait){
     #wrapper { display:none; }
     #warning-message {
       display:block;
       background-color: #032c41;
       text-align: center;
       font-size: 150%;
     }
 }
 @media only screen and (orientation:landscape){
     #warning-message { display:none; }
 }

:root {
  --overlay-color: #31385C;
}

.showcase {
  position: absolute;
  right: 0;
  width: 100%;
  min-height: 100vh;
  padding: 100px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  background: #111;
  color: #fff;
  transition: 0.5s;
  z-index: 2;

}

.showcase.active {
  right: 300px;
}

.showcase header {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  padding: 40px 100px;
  z-index: 1000;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.logo {
  text-transform: uppercase;
  cursor: pointer;
}

.showcase video {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  min-height: 100vh;
  object-fit: fill;
  opacity: 0.8;
}

/*
.showcase video {
  position: absolute;
  right: -100px;
  bottom: 0;
  min-width: 100%;
  min-height: 100%;
  /* width: 980px;
  height: 500px; */
} */

.overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: var(--overlay-color);
  mix-blend-mode: overlay;
}

.text {
  position: relative;
  z-index: 10;
}

.text h2 {
  font-size: 5em;
  font-weight: 800;
  line-height: 1em;
  text-transform: uppercase;
}

.text h3 {
  font-size: 4em;
  font-weight: 700;
  line-height: 1em;
  text-transform: uppercase;
}

.text p {
  font-size: 1.1em;
  font-weight: 400;
  margin: 20px 0;
  max-width: 700px;
}

.text a {
  display: inline-block;
  font-size: 1em;
  background: #fff;
  padding: 10px 30px;
  text-decoration: none;
  color: #111;
  margin-top: 10px;
  text-transform: uppercase;
  letter-spacing: 2px;
  transition: 0.2s;
}

.text a:hover {
  letter-spacing: 6px;
}

.social {
  position: absolute;
  bottom: 10px;
  z-index: 10;
  display: flex;
  justify-content: center;
  align-items: center;
  padding-left: 65%;
  font-size: 120%;
}

.social li {
  list-style: none;
}

.social li a {
  display: inline-block;
  filter: invert(1);
  margin-right: 20px;
  transform: scale(0.5);
  transition: 0.5s;
}

.social li a:hover {
  transform: scale(0.5) translateY(-15px);
}



@media (max-width: 800px) {
  .showcase,
  .showcase header {
    padding: 40px;
  }

  .text h2 {
    font-size: 3em;
  }

  .text h3 {
    font-size: 2em;
  }
}


.content {
  position: fixed;
  bottom: 0px;
  background: rgba(0, 0, 0, 0.5);
  color: #f1f1f1;
  width: 80%;
  padding: 1%;
}

.modal-body {
  h1 {
    font-weight:900;
    font-size:2.3em;
    text-transform:uppercase;
  }
}



</style>
</head>
<body>
  <div id="wrapper">
      <!-- your html for your website -->

  <!-- <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">

      <div class="modal-content" style="margin-top: 50%; background-color: #013240">
        <div class="modal-header">
          <h5 style="color: #FF0000">Disclaimer</h5>
          <button type="button" class="close" data-dismiss="modal">&times;</button>

        </div>
        <div class="text-center modal-body">

          <span style="font-size: 15px; color: #fff;">It's available for Desktop view only for now.</span>
        </div>

      </div>

    </div>
  </div> -->

  <section class="showcase">
    <header>
      <div class="toggle"></div>
    </header>
    <video id="myVideo" src="{{asset('concept/video/mascotv7.mp4')}}" autoplay type="video/mp4"></video>




<!-- Sample Video provided by DesignSupply https://codepen.io/designsupply/pen/zmEWBm -->
    <!-- Download Video Source and host the file on your own server -->
    <!-- For example: https://www.pexels.com/video/aerial-view-of-beautiful-resort-2169880/ -->
    <div class="overlay"></div>


    <ul class="social content">
      <li>
        <a><span style="color: #000; font-size: 25px">Select the options to proceed:</span></a>
      </li>
      <li>
        <a href="{{route('login')}}" style="font-size: 25px">Login</a>
      </li>
      <li>
        <span>|</span>
      </li>
      <li>
        <a href="{{route('register')}}" style="font-size: 25px"><span>Register</span></a>
      </li>
        <li>
          <a href="#" onclick="pauseVid()"><i class="fas fa-pause"></i></a>
        </li>
        <li>
          <a href="#" onclick="playVid()"><i class="fas fa-play"></i></a>
        </li>



    </ul>

  </section>

</div>
<div id="warning-message">
    <img class="logo-img" src="{{ asset('concept/images/StudentDashboard/Logo.png') }}" alt="logo" style="width: 100%;padding-top: 20%;padding-bottom: 20%;">
    <img src="{{asset('concept/images/galaxy/mascot.gif')}}" width="100%" height="auto" style="margin-top: -10%;background-position: 100% 100%;background-repeat: no-repeat;background-size: cover;">


    <span style="color: #fff;">Best View is in Landscape Mode</span>
    <br><br>
    <span style="color: #fff;">Please rotate your device to view ACES WEB APP</span>
</div>

</body>

<script>
var vid = document.getElementById("myVideo");

function playVid() {
  vid.play();
}

function pauseVid() {
  vid.pause();
}
</script>

<script>
$(document).ready(function(){
 $('#myModal').modal('show');
  });
</script>


</html>
@endsection
