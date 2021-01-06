@extends('layouts.app-student')

@section('content')

<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="maklum balas pengguna​">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Page 1</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Page-1.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.3.3, nicepage.com">

    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">


    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"url": "index.html"
}</script>
    <meta property="og:title" content="Page 1">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#478ac9">
    <link rel="canonical" href="index.html">
    <link rel="stylesheet" href="{{ asset('css/profile.css') }} ">

    <meta property="og:url" content="index.html">
  </head>
  <body data-home-page="Page-1.html" data-home-page-title="Page 1" class="u-body">
    <section class="u-black u-clearfix u-section-1" id="sec-ca44">
      <div class="u-container-style u-expanded-width u-group u-image u-image-1" data-image-width="1080" data-image-height="607">
        <div class="u-container-layout u-container-layout-1">
          <img src="{{asset('concept/images/profile/FaceIcon.png')}}" alt="" class="u-image u-image-circle u-preserve-proportions u-image-2" data-image-width="320" data-image-height="320">

          <h1 class="u-align-center u-text u-text-body-alt-color u-text-default u-text-1">
            <span class="u-text-grey-60" style="">ACES&nbsp;</span>
            <span style="font-weight: 700;">IR 4.0</span>
          </h1>
          <img src="{{asset('concept/images/profile/FaceIcon.png')}}" alt="" class="u-image u-image-circle u-preserve-proportions u-image-3" data-image-width="320" data-image-height="320">
          <p class="u-align-center u-text u-text-body-alt-color u-text-default u-text-2">{{Auth::user()->name}}</p>
          <p class="u-align-left u-text u-text-body-alt-color u-text-3">Sekolah Menengah Kebangsaan Kota Bahru</p>
          <p class="u-align-center u-text u-text-body-alt-color u-text-default u-text-4"><a href="{{route('user.student.statistik')}}">Statistik</a></p>
          <p class="u-align-left u-text u-text-body-alt-color u-text-default u-text-5"><a href="https://aces.ecerdc.com.my/aces2/">Tentang ACES</a></p>
          <p class="u-align-center u-text u-text-body-alt-color u-text-default u-text-6">Pencapaian</p>
          <div class="u-align-right u-social-icons u-spacing-10 u-text-grey-40 u-social-icons-1">
            <a class="u-social-url" target="_blank" href=""><span class="u-icon u-icon-circle u-social-facebook u-social-type-logo u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-8e98"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 112 112" x="0px" y="0px" id="svg-8e98"><path d="M75.5,28.8H65.4c-1.5,0-4,0.9-4,4.3v9.4h13.9l-1.5,15.8H61.4v45.1H42.8V58.3h-8.8V42.4h8.8V32.2 c0-7.4,3.4-18.8,18.8-18.8h13.8v15.4H75.5z"></path></svg></span>
            </a>
            <a class="u-social-url" target="_blank" href=""><span class="u-icon u-icon-circle u-social-twitter u-social-type-logo u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-e815"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 112 112" x="0px" y="0px" id="svg-e815"><path d="M92.2,38.2c0,0.8,0,1.6,0,2.3c0,24.3-18.6,52.4-52.6,52.4c-10.6,0.1-20.2-2.9-28.5-8.2 c1.4,0.2,2.9,0.2,4.4,0.2c8.7,0,16.7-2.9,23-7.9c-8.1-0.2-14.9-5.5-17.3-12.8c1.1,0.2,2.4,0.2,3.4,0.2c1.6,0,3.3-0.2,4.8-0.7 c-8.4-1.6-14.9-9.2-14.9-18c0-0.2,0-0.2,0-0.2c2.5,1.4,5.4,2.2,8.4,2.3c-5-3.3-8.3-8.9-8.3-15.4c0-3.4,1-6.5,2.5-9.2 c9.1,11.1,22.7,18.5,38,19.2c-0.2-1.4-0.4-2.8-0.4-4.3c0.1-10,8.3-18.2,18.5-18.2c5.4,0,10.1,2.2,13.5,5.7c4.3-0.8,8.1-2.3,11.7-4.5 c-1.4,4.3-4.3,7.9-8.1,10.1c3.7-0.4,7.3-1.4,10.6-2.9C98.9,32.3,95.7,35.5,92.2,38.2z"></path></svg></span>
            </a>
            <a class="u-social-url" target="_blank" href=""><span class="u-icon u-icon-circle u-social-instagram u-social-type-logo u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-a28f"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 112 112" x="0px" y="0px" id="svg-a28f"><path d="M55.9,32.9c-12.8,0-23.2,10.4-23.2,23.2s10.4,23.2,23.2,23.2s23.2-10.4,23.2-23.2S68.7,32.9,55.9,32.9z M55.9,69.4c-7.4,0-13.3-6-13.3-13.3c-0.1-7.4,6-13.3,13.3-13.3s13.3,6,13.3,13.3C69.3,63.5,63.3,69.4,55.9,69.4z"></path><path d="M79.7,26.8c-3,0-5.4,2.5-5.4,5.4s2.5,5.4,5.4,5.4c3,0,5.4-2.5,5.4-5.4S82.7,26.8,79.7,26.8z"></path><path d="M78.2,11H33.5C21,11,10.8,21.3,10.8,33.7v44.7c0,12.6,10.2,22.8,22.7,22.8h44.7c12.6,0,22.7-10.2,22.7-22.7 V33.7C100.8,21.1,90.6,11,78.2,11z M91,78.4c0,7.1-5.8,12.8-12.8,12.8H33.5c-7.1,0-12.8-5.8-12.8-12.8V33.7 c0-7.1,5.8-12.8,12.8-12.8h44.7c7.1,0,12.8,5.8,12.8,12.8V78.4z"></path></svg></span>
            </a>
            <a class="u-social-url" target="_blank" href="#"><span class="u-icon u-icon-circle u-social-type-logo u-social-youtube u-icon-4"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-9b4f"></use></svg><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 112 112" x="0px" y="0px" id="svg-9b4f"><path d="M82.3,24H29.7C19.3,24,11,32.5,11,43v26.7c0,10.5,8.3,19,18.7,19h52.5c10.3,0,18.7-8.5,18.7-19V43 C101,32.5,92.7,24,82.3,24L82.3,24z M69.7,57.6L45.1,69.5c-0.7,0.2-1.4-0.2-1.4-0.8V44.1c0-0.7,0.8-1.3,1.4-0.8l24.6,12.6 C70.4,56.2,70.4,57.3,69.7,57.6L69.7,57.6z"></path></svg></span>
            </a>
          </div>
        </div>
      </div>
      <div class="u-container-style u-grey-80 u-group u-group-2">
        <div class="u-container-layout u-container-layout-2">
          <h1 class="u-heading-font u-text u-text-default u-title u-text-7">Notis</h1>
        </div>
      </div>
      <div class="u-container-style u-grey-80 u-group u-group-3">
        <div class="u-container-layout u-container-layout-3">
          <h1 class="u-heading-font u-text u-text-default u-title u-text-8">Mesej</h1>
          <img src="{{asset('concept/images/profile/mesej.png')}}" alt="" class="u-align-center u-expanded-width-xs u-image u-image-contain u-image-default u-image-4" data-image-width="666" data-image-height="374">
        </div>
      </div>
      <div class="u-list u-repeater u-list-1">
        <div class="u-container-style u-list-item u-repeater-item u-white u-list-item-1">
          <div class="u-container-layout u-similar-container u-valign-top-xl u-container-layout-4">
            <p class="u-text u-text-9">Sample text. Click to select the text box. Click again or double click to start editing the text.&nbsp;Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
          </div>
        </div>
        <div class="u-container-style u-list-item u-repeater-item u-white u-list-item-2">
          <div class="u-container-layout u-similar-container u-valign-top-xl u-container-layout-5">
            <p class="u-align-center-xs u-text u-text-10">Sample text. Click to select the text box. Click again or double click to start editing the text.&nbsp;Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. </p>
          </div>
        </div>
      </div>
    </section>

  </body>
</html>
@endsection
