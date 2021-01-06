@extends('layouts.app-login-register')

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
    <link rel="stylesheet" href="{{ asset('css/Login.css') }} ">

    <meta property="og:url" content="index.html">
  </head>
  <body data-home-page="Page-1.html" data-home-page-title="Page 1" class="u-body">
    <section class="u-clearfix u-section-1" id="sec-ac5e">
      <div class="u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
          <div class="u-layout-row">
            <div class="u-black u-container-style u-layout-cell u-size-15 u-layout-cell-1">
              <div class="u-container-layout u-container-layout-1">
                <img src="{{asset('concept/images/login/Logo.png')}}" alt="" class="u-align-center u-image u-image-default u-image-1" data-image-width="597" data-image-height="250">
                <p class="u-align-center u-text u-text-1">Pusat Kecemerlangan Teknologi Pintar Asia (ACES) di bawah Majlis Pembangunan Wilayah Ekonomi Pantai Timur (ECERDC) merancang untuk mengembangkan aplikasi berdasarkan&nbsp; karya sebagai alat untuk untuk menyebarkan kesedaran dan juga berfungsi sebagai pengenalan kepada industri 4.0 (I4.0) kepada pelajar Tingkatan 5 yang terpilih.</p>
                <a href="#" class="u-btn u-btn-round u-button-style u-custom-color-1 u-hover-custom-color-3 u-radius-50 u-btn-1">pertolongan</a>
                <a href="#" class="u-btn u-btn-round u-button-style u-custom-color-1 u-hover-custom-color-3 u-radius-50 u-btn-2">syarat</a>
                <a href="#" class="u-btn u-btn-round u-button-style u-custom-color-1 u-hover-custom-color-3 u-radius-50 u-btn-3">kerahsiaan</a>
                <img src="{{asset('concept/images/login/aces.png')}}" alt="" class="u-image u-image-default u-image-2" data-image-width="758" data-image-height="1875">
              </div>
            </div>
            <div class="u-container-style u-image u-layout-cell u-size-45 u-image-3" data-image-width="1080" data-image-height="607">
              <div class="u-container-layout u-container-layout-2">
                <p class="u-text u-text-body-alt-color u-text-default u-text-2">Tidak mempunyai akaun</p>
                <a href="{{route('register')}}" class="u-btn u-button-style u-grey-75 u-hover-grey-80 u-btn-4">CIPTA AKAUN</a>
                <h1 class="u-heading-font u-text u-text-body-alt-color u-title u-text-3">ACES IR 4.0</h1>
                <p class="u-text u-text-body-alt-color u-text-4">Pengenalan kepada&nbsp;</p>
                <img src="{{asset('concept/images/login/cartajohan.png')}}" alt="" class="u-image u-image-default u-preserve-proportions u-image-4" data-image-width="93" data-image-height="79">
                <p class="u-text u-text-body-alt-color u-text-default u-text-5">Carta Johan</p>
                <a href="#" class="u-border-0 u-btn u-btn-round u-button-style u-custom-color-1 u-hover-custom-color-3 u-radius-50 u-text-body-alt-color u-btn-5">MAIN</a>
                <p class="u-text u-text-body-alt-color u-text-default u-text-6">Log Masuk ke ACES IR 4.0</p>
                <p class="u-text u-text-body-alt-color u-text-default u-text-7">Masukkan maklumat log masuk anda di bawah</p>
                <div class="u-form u-form-1">
                  <form action="{{ route('login') }}" method="POST" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" style="padding: 10px" source="custom" name="form">
                    @csrf
                    <input type="hidden" id="siteId" name="siteId" value="65209289">
                    <input type="hidden" id="pageId" name="pageId" value="744530727">
                    <div class="u-form-email u-form-group u-form-group-1">
                      <label for="email-d1d4" class="u-label u-text-body-alt-color">KAD PENGENALAN</label>
                      <input type="text" placeholder="Kad Pengenalan" id="ic_number" name="ic_number" class="u-border-1 u-border-custom-color-2 u-grey-75 u-input u-input-rectangle u-input-1 form-control @error('ic_number') is-invalid @enderror" minlength="12" maxlength="12" onkeypress="return onlyNumberKey(event)" value="{{ old('ic_number') }}" required autocomplete="ic_number" autofocus>
                      @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    </div>
                    <div class="u-form-group u-form-group-2">
                      <label for="text-4934" class="u-label u-text-body-alt-color">KATA KUNCI</label>
                      <input type="password" placeholder="Kata Kunci" id="password" name="password" class="u-border-1 u-border-custom-color-2 u-grey-75 u-input u-input-rectangle u-input-2 form-control @error('password') is-invalid @enderror" required autocomplete="current-password">
                      @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                      @enderror
                    </div>
                    <div class="u-align-left u-form-group u-form-submit">

                      <button type="submit" class="u-btn u-btn-submit u-button-style u-grey-75 u-btn-6">
                          {{ __('TANDA TANGAN MASUK') }}
                      </button>
                    </div>
                    <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
                    <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then try again. </div>
                    <input type="hidden" value="" name="recaptchaResponse">
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </body>
  <script type="text/javascript">
  function onlyNumberKey(evt) {

        // Only ASCII charactar in that range allowed
        var ASCIICode = (evt.which) ? evt.which : evt.keyCode
        if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
            return false;
        return true;
    }
  </script>
</html>
@endsection
