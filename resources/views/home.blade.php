@extends('layouts.app-student')

@section('content')

<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Pencapaian, Statistik, Informasi, Notis, mesej​">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>ACES IR 4.0</title>
    <link rel="stylesheet" href="{{ asset('css/StudentDashboard.css') }}" media="screen">
<link rel="stylesheet" href="{{ asset('css/StudentDashboard.css') }}" media="screen">
    <script class="u-script" type="text/javascript" src="{{ asset('css/StudentDashboard/jquery.js') }}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{ asset('css/StudentDashboard/nicepage.js') }}" defer=""></script>
    <meta name="generator" content="Nicepage 3.2.5, nicepage.com">

    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700|Alegreya+Sans+SC:100,100i,300,300i,400,400i,500,500i,700,700i,800,800i,900,900i">



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
    <meta property="og:url" content="index.html">
		<link rel="stylesheet" href="{{ asset('css/StudentDashboard.css') }} ">

  </head>
  <body data-home-page="Page-1.html" data-home-page-title="Page 1" class="u-body">
    <section class="u-clearfix u-image u-shading u-section-1" id="sec-ccb0" data-image-width="1200" data-image-height="1000">
      <div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-custom-font u-font-oswald u-text u-text-body-alt-color u-text-1">ACES <span class="u-text-custom-color-3">
            <span class="u-text-custom-color-1">IR 4.0</span>
          </span>
        </p>
        <p class="u-custom-font u-font-oswald u-text u-text-body-alt-color u-text-2">Maklimat Terperinci</p>
        <img src="{{asset('concept/images/StudentDashboard/profile.jpg')}}" alt="" class="u-image u-image-circle u-image-1" data-image-width="905" data-image-height="1280">
        <p class="u-text u-text-default u-text-3">{{Auth::user()->name}}</p>
        <h1 class="u-custom-font u-text u-text-default u-title u-text-4">Pencapaian</h1>
        <h1 class="u-custom-font u-text u-text-default u-title u-text-5"><a href="{{route('user.student.statistik')}}">Statistik</a></h1>
        <h1 class="u-custom-font u-text u-text-default u-title u-text-6"><a href="https://aces.ecerdc.com.my/aces2/">Tentang ACES</a></h1>
      </div>
    </section>
    <section class="u-clearfix u-gradient u-section-2" id="sec-2729">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-custom-font u-text u-text-body-alt-color u-text-default u-title u-text-1">Notis</h1>
        <h1 class="u-custom-font u-text u-text-body-alt-color u-text-default u-title u-text-2">mesej </h1>
        <div class="u-container-style u-gradient u-group u-group-1">
          <div class="u-container-layout u-valign-top u-container-layout-1">
            <img src="{{asset('concept/images/StudentDashboard/ps4.jpg')}}" alt="" class="u-expanded-width u-image u-image-default u-image-1" data-image-width="1600" data-image-height="1000">
          </div>
        </div>
        <div class="u-container-style u-custom-color-7 u-group u-group-2">
          <div class="u-container-layout u-container-layout-2">
            <img src="{{asset('concept/images/StudentDashboard/mesej.png')}}" alt="" class="u-image u-image-default u-image-2" data-image-width="666" data-image-height="374">
          </div>
        </div>
      </div>
    </section>




  </body>
</html>

@endsection
