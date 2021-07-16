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
    <div class="col-md" style="padding-top: 25px;">


		<div class="wrapper">
			<button class="toggle">Warranties and Exclusion of Liability<i class="fas fa-plus icon"></i></button>
			<div class="content" style="font-size: 50%">
				<p class="contentText">
          <li style="padding:1%">The information on this website is provided by the East Coast Economic Region Development Council (ECERDC) as a service to the public and is intended merely to give a general overview of the East Coast Economic Region (ECER). The information is provided on an “as is” basis and all statements and representations (other than fraudulent misrepresentation) warranties, terms, limitations, including any implied by statute, consumer law or otherwise, are hereby excluded to the maximum extent permissible by the Law of Malaysia. Accordingly, you should neither rely nor act upon any of the information contained in these pages and, if you choose to do so, it will be entirely at your own risk.</li>
          <li style="padding:1%">While care has been taken in ensuring the correctness of information, statements, text, articles, data, images, screens, web pages and other materials contained and appearing on this website (hereinafter referred to as “the MATERIALS”), ECERDC and its Council members, officers and employees (hereinafter referred to as “We”) make no representations, guarantees or warranties as to the accuracy, reliability, quality, truth, suitability and completeness of the said MATERIALS. We reserve the right to add, delete or make any changes to the MATERIALS without prior notice.</li>
          <li style="padding:1%">We shall not accept any liability for inaccuracies or omissions on this website. We further disclaim all liabilities whatsoever for any direct, indirect, special or consequential loss or damages howsoever resulting directly or indirectly from the access to or the use of this website and the reliance on the MATERIALS contained herein.</li>
          <li style="padding:1%">This website may also contain information provided by third parties and we make no representation or warranty regarding the said third parties’ information.</li>
          <li style="padding:1%">Any decisions made by you based on the MATERIALS contained on this website are your sole responsibility.</li>
          <li style="padding:1%">While we make every reasonable effort to ensure that the information contained within this website is correct, you should be aware that the information may be incomplete, inaccurate or may have become out of date and cannot be guaranteed or warranted.</li>
        </p>
			</div>
		</div>
		<div class="wrapper">
			<button class="toggle">Forward Looking Statement and Associated Risk<i class="fas fa-plus icon"></i></button>
			<div class="content" style="font-size: 50%">
        <li style="padding:1%">Statements in this website may contain certain risks and uncertainties, including statements regarding the intent, belief or current expectations pertaining to the East Coast Economic Region. The statements that contain words such as “believe”, “plan”, “expect” and “anticipate” and similar expressions thereof may constitute forward looking statements.</li>
        <li style="padding:1%">Such statements are subject to certain risks and uncertainties such as the economic situation, increases in regulatory burdens and changes in import control or import duties, levies or taxes. Such forward looking statements are also subject to the risks of increased costs in related technologies and such technologies producing expected results, and performance by third parties in accordance with contractual terms and specifications.</li>
        <li style="padding:1%">Should one or more of these uncertainties or risks, amongst others, materialise, actual results may vary materially from those estimated, anticipated or projected. Specifically, but without limitation, capital costs could increase, projects could be delayed, and anticipated improvements in capacity or performance may not be fully realised. Although we believe that the expectations of our management as reflected by such forward looking statements are reasonable based on information currently available, no assurances can be given that such expectations will prove to have been correct.</li>
        <li style="padding:1%">Accordingly, you are cautioned not to place undue reliance on the forward looking statements. We undertake no obligation to update or revise any of them, whether as a result of new information, future events or otherwise.</li>
			</div>
		</div>
		<div class="wrapper">
			<button class="toggle">Restriction on Use<i class="fas fa-plus icon"></i></button>
			<div class="content" style="font-size: 50%">
        <li style="padding:1%">The contents of this website are © 2007 East Coast Economic Region Development Council (ECERDC). All rights reserved. You may not reproduce in any form all or any part of this website other than extracts which you may print or download to a local hard disk for your personal use only. You may not recopy any of the materials you have printed or downloaded nor give it nor copy it to anyone else.</li>
        <li style="padding:1%">The MATERIALS contained in this website are protected by Laws of Malaysia related to the trademark, patent, copyright, international treaties and other applicable intellectual property laws. Unless otherwise noted, the MATERIALS appearing on this website are the exclusive property of ECERDC. You are permitted to access this website and copy information as is reasonable from this website for personal, non-commercial use, nonprofit or educational use only, provided that each page includes any copyright or trade mark notice or attribution as they appear on the pages copied. No part of this website may be copied, republished, performed in public, broadcast, uploaded, transmitted, distributed, modified or dealt with in any manner at all, without our prior written permission, and, then, only in such a way that the source and intellectual property rights are acknowledged.</li>
			</div>
		</div>
    <div class="wrapper">
      <button class="toggle">Trademark<i class="fas fa-plus icon"></i></button>
      <div class="content" style="font-size: 50%">
        <li style="padding:1%">The trademarks, names, images, symbols and pictures identifying the East Coast Economic Region and all web site design, text and graphics are proprietary to ECERDC.</li>
      </div>
    </div>
    <div class="wrapper">
      <button class="toggle">Viruses and Other Harmful Elements<i class="fas fa-plus icon"></i></button>
      <div class="content" style="font-size: 50%">
        <li style="padding:1%">Whilst we make all reasonable attempts to exclude viruses or other harmful elements from this website, it cannot ensure such exclusion and no liability is accepted for viruses or other harmful elements. Thus, you are recommended to take all appropriate safeguards before downloading information from this website. This applies to the software codes provided in the web pages provided by this website.</li>
      </div>
    </div>
    <div class="wrapper">
      <button class="toggle">Linkage and Framing<i class="fas fa-plus icon"></i></button>
      <div class="content" style="font-size: 50%">
        <li style="padding:1%">This website may contain links to other sites owned by third parties as a convenience to users. We have no control over and are not responsible for the content found on external sites that do not belong to us. You shall be responsible to abide by any privacy statement or any terms and conditions of use of the linked site as a result of viewing the same. The linked sites are provided to you only for convenience and the inclusion of any such site does not necessarily imply our endorsement of the site, the entity operating such site or any product or service of that organization.</li>
        <li style="padding:1%">You may not frame this website nor link to a page other than the home page without obtaining express permission. All requests for permission together with the details of the URL(s) of the web page(s) from which you are proposing to link to this website should be directed to:</li>
        <li style="padding:1%">e-mail: secretariat@ecerdc.com.my</li>
        <li style="padding:1%">We are not obliged to grant you permission and we reserve the right to withdraw our permission for you to link to this website</li>
        <li style="padding:1%">You agree to neither disturb the normal operation of this website nor infringe the integrity of this website by hacking, altering the information contained in this website, prevent or limit access to this website to other users, or otherwise. All visitors’ access activities will be tracked and monitored anyone caught with the illegal activities will be prosecuted to the fullest extent of the law.</li>
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
