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
    <title>Profil</title>
    <link rel="stylesheet" href="{{ asset('css/profile.css') }} " media="screen">
<link rel="stylesheet" href="{{ asset('css/profile.css') }} " media="screen">
    <script class="u-script" type="text/javascript" src="{{ asset('css/profil/jquery.js') }} " defer=""></script>
    <script class="u-script" type="text/javascript" src="{{ asset('css/profil/nicepage.js') }} " defer=""></script>
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
  <body data-home-page="Page-1.html" data-home-page-title="Page 1" class="u-body u-image" style="background-position: 50% 50%; background-image: url(&quot;images/WhatsAppImage2020-12-23at4.30.00PM.jpeg&quot;);">
    <section class="u-clearfix u-white u-section-1" id="sec-8a33">
      <div class="u-container-style u-expanded-width u-group u-image u-image-1" data-image-width="1080" data-image-height="607">
        <div class="u-container-layout u-container-layout-1">
          <h1 class="u-heading-font u-text u-text-body-alt-color u-text-default u-title u-text-1">ACES IR 4.0</h1>
          <img src="{{asset('concept/images/profile/FaceIcon.png')}}" alt="" class="u-image u-image-circle u-preserve-proportions u-image-2" data-image-width="320" data-image-height="320">
          <p class="u-text u-text-body-alt-color u-text-default u-text-2">{{Auth::user()->name}}</p>
          <p class="u-text u-text-body-alt-color u-text-default u-text-3">KEMASKINI PROFIL</p>
          <p class="u-text u-text-body-alt-color u-text-default u-text-4">TUKAR KATA LALUAN</p>
          <p class="u-text u-text-body-alt-color u-text-default u-text-5"><a href="{{route('user.student.statistik')}}">STATISTIK</a></p>
          <p class="u-text u-text-body-alt-color u-text-default u-text-6">PENCAPAIAN</p>
        </div>
      </div><br><br>
      <div class="u-container-layout u-container-layout-1">
        <div class="page">
  <div class="timeline">
    <div class="timeline__group">
      <span class="timeline__year time" aria-hidden="true">Februari</span>
      <div class="timeline__cards">
        <div class="timeline__card card">
          <header class="card__header">
            <time class="time" datetime="2008-02-02">
              <span class="time__day">15</span>
              <span class="time__month">Feb</span>
            </time>
          </header>
          <div class="card__content">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
          </div>
        </div>
        <div class="timeline__card card">
          <header class="card__header">
            <time class="time" datetime="2008-09-01">
              <span class="time__day">25</span>
              <span class="time__month">Feb</span>
            </time>
            <h3 class="card__title r-title">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</h3>
          </header>
          <div class="card__content">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="timeline__group">
      <span class="timeline__year time" aria-hidden="true">Mac</span>
      <div class="timeline__cards">
        <div class="timeline__card card">
          <header class="card__header">
            <time class="time" datetime="2008-07-14">
              <span class="time__day">14</span>
              <span class="time__month">Mac</span>
            </time>
          </header>
          <div class="card__content">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
          </div>
        </div>
      </div>
    </div>
    <div class="timeline__group">
      <span class="timeline__year time" aria-hidden="true">April</span>
      <div class="timeline__cards">
        <div class="timeline__card card">
          <header class="card__header">
            <time class="time" datetime="2008-08-18">
              <span class="time__day">28</span>
              <span class="time__month">April</span>
            </time>
          </header>
          <div class="card__content">
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

      </div>


    </section>




  </body>
</html>

@endsection
