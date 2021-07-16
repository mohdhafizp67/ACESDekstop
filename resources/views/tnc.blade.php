@extends('layouts.app-login-register')

@section('content')
<html style="background-color: #000c15 !important;">
<head>
  <link rel="stylesheet" href="{{ asset('css/Login.css') }} ">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="icon" href="{{ asset('concept/images/logo.png') }}" type="image/icon type">


<style>
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


/* Style the footer */
.footer {
  background-color: #000c15;
  padding: 10px;
  text-align: center;
  font-size: 70%;
  padding: 10px 0px 10px;
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


*,
*:before,
*:after {
	padding: 0;
	-webkit-box-sizing: border-box;
	box-sizing: border-box;
}

.wrapper {
	padding: 0 20px;
	color: #fff;
}
.toggle {
	width: 100%;
	background-color: transparent;
	display: -webkit-box;
	display: -ms-flexbox;
	display: flex;
	-webkit-box-align: center;
	-ms-flex-align: center;
	align-items: center;
	-webkit-box-pack: justify;
	-ms-flex-pack: justify;
	justify-content: space-between;
	font-size: 80%;
	font-weight: normal;
	color: white;
	border: none;
	outline: none;
	cursor: pointer;
	padding: 15px 10px;
	border-bottom: 1px solid rgba(255, 255, 255, 0.5);
}
.content {
	background: rgba(255, 255, 255, 0.2);
	font-size: 50%;
	height: 0;
	overflow: hidden;
	-webkit-transition: all 1s ease;
	-o-transition: all 1s ease;
	transition: all 1s ease;
	border-radius: 0 0 5px 5px;
}
.content p {
	/* padding: 15px 30px; */
}
.fab {
	color: #fff;
}
</style>
</head>
<body>
    <div id="wrapper">


<div class="container-fluid" style="background-image: url({{asset('concept/images/galaxy/background_blue.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover; background-color: transparent !important;">

<div class="row">
  <div class="col-md">
    <a href="{{ url()->previous() }}" class="m-2 btn btn-outline-primary" style="font-size:100%; color: #fff;"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i> Back</a>

    <a href="{{route('login')}}" class="btn" style="background-image: url({{asset('concept/images/galaxy/button_submit.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover; font-size: 100%; width: 12%; color: #fff">Login</a>

    <a href="{{route('register')}}" class="btn" style="background-image: url({{asset('concept/images/galaxy/button_submit.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover; font-size: 100%; width: 12%; color: #fff">Register</a>

  </div>
</div>
<div class="row">
  <div class="col-md" style="text-align: center">
    <img src="{{ asset('concept/images/StudentDashboard/Logo.png') }}" alt="bran_name" class="brand-img" style="width: 20%; height: auto;">
  </div>
</div>
  <div class="row" style="padding: 8%;color: #fff;margin-top: -10%;">
    <div class="col-md" style="padding-top: 60px; padding-bottom: 165px;">

    <div class="wrapper">
      <button class="toggle">Scam Warning<i class="fas fa-plus icon"></i></button>
      <div class="content" style="font-size: 50%;">
        <li style="padding:1%">The trademarks, names, images, symbols and pictures identifying the East Coast Economic Region and all web site design, text and graphics are proprietary to ECERDC.</li>
      </div>
    </div>
    <div class="wrapper">
      <button class="toggle">Confidentiality of Government Information and Warning on Viruses / Emails<i class="fas fa-plus icon"></i></button>
      <div class="content">
        <li style="padding:1%">Whilst every care is taken in the preparation of the information contained in this website, no warranty, express or implied is given by ECERDC or the Government of Malaysia as to the completeness and accuracy of the information given.</li>
        <li style="padding:1%">ECERDC or the Government of Malaysia are not responsible for any errors or omissions which may occur. In no circumstance will ECERDC or the Government of Malaysia be liable or responsible for any damages whatsoever, including without limitation, special, indirect, or consequential arising out of or related to the use or reliance of the information contained in it, whether by action in contract or tort or otherwise howsoever.</li>
      </div>
    </div>



    </div>
  </div>


  <div class="row">
    <div class="footer">
      <span>Copyright © 2021 EAST COAST ECONOMIC REGION DEVELOPMENT COUNCIL (ECERDC). All rights reserved.</span>&nbsp&nbsp&nbsp<a href="{{route('disclaimer')}}">Disclaimer</a>&nbsp&nbsp&nbsp<a href="{{route('tnc')}}">T&C</a>&nbsp&nbsp&nbsp<a href="{{route('privacy')}}">Privacy</a>
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

</body>

<script>
let toggles = document.getElementsByClassName("toggle");
let contentDiv = document.getElementsByClassName("content");
let icons = document.getElementsByClassName("icon");

for (let i = 0; i < toggles.length; i++) {
toggles[i].addEventListener("click", () => {
  if (parseInt(contentDiv[i].style.height) != contentDiv[i].scrollHeight) {
    contentDiv[i].style.height = contentDiv[i].scrollHeight + "px";

    toggles[i].style.color = "#fff";
    icons[i].classList.remove("fa-plus");
    icons[i].classList.add("fa-minus");
  } else {
    contentDiv[i].style.height = "0px";
    toggles[i].style.color = "#fff";
    icons[i].classList.remove("fa-minus");
    icons[i].classList.add("fa-plus");

    contentDiv[i].classList.remove("heightActive");
    contentDiv[i].classList.add("heightActive");
  }

  for (let j = 0; j < contentDiv.length; j++) {
    if (j !== i) {
      contentDiv[j].style.height = 0;
      toggles[j].style.color = "#fff";
      icons[j].classList.remove("fa-minus");
      icons[j].classList.add("fa-plus");
    }
  }
});
}

</script>
</html>
@endsection
