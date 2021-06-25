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
  font-size: 80%;
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
	font-size: 1.2rem;
	font-weight: 600;
	color: white;
	border: none;
	outline: none;
	cursor: pointer;
	padding: 25px 20px;
	border-bottom: 1px solid rgba(255, 255, 255, 0.5);
}
.content {
	background: rgba(255, 255, 255, 0.2);
	font-size: 1rem;
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
      <a href="{{ url()->previous() }}" class="m-2 btn btn-outline-primary" style="font-size:150%; color: #fff;"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i> Back</a>

      <a href="{{route('login')}}" class="btn" style="background-image: url({{asset('concept/images/galaxy/button_submit.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover; font-size: 20px; width: 10%; color: #fff">Login</a>

      <a href="{{route('register')}}" class="btn" style="background-image: url({{asset('concept/images/galaxy/button_submit.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover; font-size: 20px; width: 10%; color: #fff">Register</a>

    </div>
  </div>
<div class="row">
  <div class="col-md" style="text-align: center">
    <img src="{{ asset('concept/images/StudentDashboard/Logo.png') }}" alt="bran_name" class="brand-img" style="width: 250px; height: auto;">
  </div>
</div>
  <div class="row" style="padding: 8%;color: #fff;margin-top: -10%;">
    <div class="col-md">


		<div class="wrapper">
			<button class="toggle">Privacy Policy<i class="fas fa-plus icon"></i></button>
			<div class="content">
				<p class="contentText">
          <p style="padding:1%; color: red;">Your Privacy</p>
          <li style="padding:1%">This page explains our privacy policy which encompasses the use and protection of information submitted by our visitors. If you make a transaction or send e-mail containing personal information, this information may be shared with other public agencies so as to provide more efficient and effective services, for example, in resolving a complaint which requires feedback from other agencies.</li>
          <p style="padding:1%; color: red;">Information Collected</p>
          <li style="padding:1%">No personal information will be collected when you surf this website except for information submitted by you via e-mail.</li>
          <p style="padding:1%; color: red;">What will happen if I link to other websites?</p>
          <li style="padding:1%">This portal contains links to other websites. This privacy policy applies only to this portal. Please note that other sites linked by this portal may have different privacy policies and visitors are advised to examine and understand the privacy policy for each website visited.</li>
          <p style="padding:1%; color: red;">Changes to Policy</p>
          <li style="padding:1%">If this privacy policy is changed, the changes will be updated on this page. By regularly browsing this page, you will be updated on the information collected, how it is used and, under certain circumstances, how it is shared with other parties.</li>

        </p>
			</div>
		</div>
		<div class="wrapper">
			<button class="toggle">Submission of Information<i class="fas fa-plus icon"></i></button>
			<div class="content">
        <li style="padding:1%">Whilst any personally identifiable information would be protected under our privacy provisions herein, any other information which you send and provide to us through this website will be deemed to be information which is non-confidential and that we are granted a royalty-free, unrestricted and irrevocable licence to use for any purpose as we see fit.</li>
        <li style="padding:1%">You are strictly prohibited from posting or transmitting to or from this website any information which is unlawful, defamatory, threatening, obscene, pornographic or profane in nature or that which may give rise to any criminal or civil liability.</li>
			</div>
		</div>
		<div class="wrapper">
			<button class="toggle">Governing Law<i class="fas fa-plus icon"></i></button>
			<div class="content">
        <li style="padding:1%">Your use of this website and the operation of the terms and conditions contained herein shall be governed in accordance with the laws of Malaysia. Any dispute arising out of or in relation to this website, including the terms and conditions shall be subject to the exclusive jurisdiction of Malaysian courts.</li>
			</div>
		</div>
    <div class="wrapper">
      <button class="toggle">Cookies<i class="fas fa-plus icon"></i></button>
      <div class="content">
        <li style="padding:1%">At this time, Cookies are not used. However it may be used in future.</li>
      </div>
    </div>
    <div class="wrapper">
      <button class="toggle">Policy Amendments<i class="fas fa-plus icon"></i></button>
      <div class="content">
        <li style="padding:1%">If this privacy policy is amended, amendments will be updated in this site.</li>
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
