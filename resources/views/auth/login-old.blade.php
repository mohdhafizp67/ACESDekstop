<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="maklum balas pengguna​">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Log Masuk ACES IR 4.0</title>
    <link rel="stylesheet" href="{{ asset('css/Login.css') }} " media="screen">
<link rel="stylesheet" href="{{ asset('css/Login.css') }} " media="screen">
    <script class="u-script" type="text/javascript" src="{{ asset('css/login/jquery.js') }} " defer=""></script>
    <script class="u-script" type="text/javascript" src="{{ asset('css/login/nicepage.js') }}" defer=""></script>
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
  <body data-home-page="Page-1.html" data-home-page-title="Page 1" class="u-body u-palette-1-base">
    <section class="u-align-left u-clearfix u-image u-section-1" id="sec-ec69" data-image-width="1080" data-image-height="607">
      <div class="u-black u-container-style u-expanded-width-xs u-group u-group-1">
        <div class="u-container-layout u-container-layout-1">
          <img src="{{asset('concept/images/login/Logo.png')}}" alt="" class="u-align-center u-image u-image-default u-image-1" data-image-width="597" data-image-height="250">
          <p class="u-align-center u-text u-text-body-alt-color u-text-1">Pusat Kecemerlangan Teknologi Pintar Asia (ACES) di bawah Majlis Pembangunan Wilayah Ekonomi Pantai Timur (ECERDC) merancang untuk mengembangkan aplikasi berdasarkan&nbsp; karya sebagai alat untuk untuk menyebarkan kesedaran dan juga berfungsi sebagai pengenalan kepada industri 4.0 (I4.0) kepada pelajar Tingkatan 5 yang terpilih.</p>
          <a href="https://nicepage.com" class="u-align-left u-border-2 u-border-custom-color-1 u-border-hover-custom-color-3 u-btn u-btn-round u-button-style u-hover-custom-color-3 u-none u-radius-50 u-btn-1">pertolongan</a>
          <a href="https://nicepage.com" class="u-align-left u-border-2 u-border-custom-color-1 u-border-hover-custom-color-3 u-btn u-btn-round u-button-style u-hover-custom-color-3 u-none u-radius-50 u-btn-2">syarat</a>
          <a href="https://nicepage.com" class="u-align-left u-border-2 u-border-custom-color-1 u-border-hover-custom-color-3 u-btn u-btn-round u-button-style u-hover-custom-color-3 u-none u-radius-50 u-btn-3">kerahsiaan</a>
        </div>
      </div>
      <div class="u-form u-form-1">
        <form action="{{ route('login') }}" method="POST" class="u-clearfix u-form-spacing-15 u-form-vertical u-inner-form" style="padding: 15px;">
          @csrf
          <div class="u-form-group u-form-group-1">
            <label for="text-7bbd" class="u-form-control-hidden u-label"></label>
            <input type="text" placeholder="Kad Pengenalan" id="ic_number" name="ic_number" class="u-border-1 u-border-grey-80 u-grey-80 u-input u-input-rectangle u-text-body-alt-color u-input-1 form-control @error('ic_number') is-invalid @enderror" minlength="12" maxlength="12" onkeypress="return onlyNumberKey(event)" value="{{ old('ic_number') }}" required autocomplete="ic_number" autofocus>
			         @error('email')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                @enderror
          </div>
          <div class="u-form-group u-form-group-2">
            <label for="text-b923" class="u-form-control-hidden u-label"></label>
            <input type="password" placeholder="Kata Laluan" id="password" name="password" class="u-border-1 u-border-grey-80 u-grey-80 u-input u-input-rectangle u-text-body-alt-color u-input-2 form-control @error('password') is-invalid @enderror" required autocomplete="current-password">
				        @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                @enderror
          </div>
          <div class="u-align-center u-form-group u-form-submit">
      			<button type="submit" class="u-btn u-btn-submit u-button-style u-grey-80 u-btn-4">
                                {{ __('TANDA TANGAN MASUK') }}
            </button>
          </div>
        </form>
      </div>
      <p class="u-align-center u-text u-text-body-alt-color u-text-2">Log Masuk ke ACES IR 4.0</p>
      <p class="u-align-center-lg u-align-center-md u-align-center-sm u-align-center-xs u-text u-text-body-alt-color u-text-3">Masukkan maklumat log masuk anda di bawah</p>
      <a href="{{route('register')}}" class="u-btn u-button-style u-grey-80 u-hover-grey-80 u-btn-5">CIPTA AKAUN</a>
      <p class="u-align-center-xs u-text u-text-body-alt-color u-text-4">Tidak mempunyai akaun</p>
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
