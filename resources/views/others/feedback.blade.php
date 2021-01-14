@extends('layouts.app-student')
@section('content')
           <!--Page Body part -->
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
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alegreya+Sans+SC:100,100i,300,300i,400,400i,500,500i,700,700i,800,800i,900,900i">


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
    <link rel="stylesheet" href="{{ asset('css/feedback.css') }} ">

    <meta property="og:url" content="index.html">
  </head>
  <body data-home-page="Page-1.html" data-home-page-title="Page 1" class="u-body">
    <section class="u-clearfix u-image u-section-1" id="sec-3c4f" data-image-width="1080" data-image-height="607">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-custom-font u-text u-text-body-alt-color u-title u-text-1">
          <span style="font-size: 3rem;">maklum balas pengguna</span>
        </h1>
        <div class="u-form u-form-1">
          @if ($message = Session::get('success'))
          <div id=alert>
              <div class="alert alert-card  alert-success" role="alert">
                  <strong>Operasi Berjaya! </strong>
                  {{$message}}
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
              </div>
          </div>
          @elseif ($message = Session::get('error'))
          <div id="alert">
            <div class="alert alert-card  alert-danger" role="alert">
                <strong>Ralat! </strong>
                {{$message}}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
          </div>
          @endif

          <form action="{{route('others.feedback.save')}}" method="POST"  style="padding: 10px" source="custom" name="form">
            @csrf
            <div class="u-form-email u-form-group">
              <label for="email-3b9a" class="u-label u-text-body-alt-color">Nama</label>
              <input type="email" placeholder="" value="{{Auth::user()->name}}" id="email-3b9a" name="text" class="u-input u-input-rectangle u-white" disabled>
            </div>
            <div class="u-form-group u-form-name">
              <label for="name-3b9a" class="u-label u-text-body-alt-color">Emel</label>
              <input type="text" placeholder="Emel" id="name-3b9a" name="email" value="{{Auth::user()->email}}" class="u-input u-input-rectangle u-white" disabled>
            </div>
            <div class="u-form-group u-form-group-3">
              <label for="text-719d" class="u-label u-text-body-alt-color">Subjek</label>
              <input type="text" placeholder="Subjek" id="text-719d" name="text-1" class="u-input u-input-rectangle u-white" required>
            </div>
            <div class="u-form-group u-form-message">
              <label for="message-3b9a" class="u-label u-text-body-alt-color">Maklum Balas</label>
              <textarea placeholder="Mesej" rows="4" cols="50" id="message-3b9a" name="message" class="u-input u-input-rectangle u-white" autofocus="autofocus" required></textarea>
            </div>
            <div class="u-align-center u-form-group u-form-submit">
              <!-- <a href="#" class="u-btn u-btn-submit u-button-style u-custom-color-1 u-hover-custom-color-3 u-btn-1">Hantar</a> -->
              <button type="submit" class="u-btn u-btn-submit u-button-style u-custom-color-1 u-hover-custom-color-3 u-btn-1" name="button">Hantar Maklum Balas</button>
              <!-- <input type="submit" value="submit" class="u-form-control-hidden"> -->
            </div>
            <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
            <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then try again. </div>
            <input type="hidden" value="" name="recaptchaResponse">
          </form>
        </div>
      </div>
    </section>

  </body>
</html>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>

<script type="text/javascript">
$("document").ready(function(){
  setTimeout(function(){
     $("div.alert").remove();
  }, 5000 ); // 5 secs

});
</script>
@endsection
