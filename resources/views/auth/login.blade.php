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
  <body data-home-page="Page-1.html" data-home-page-title="Page 1" class="u-body u-image" style="background-position: 50% 50%; background-image: url(&quot;images/WhatsAppImage2020-12-23at4.30.00PM.jpeg&quot;);">
    <section class="u-clearfix u-grey-5 u-section-1" id="sec-dbfb">
      <div class="u-black u-container-style u-group u-group-1">
        <div class="u-container-layout u-container-layout-1">
          <img src="{{asset('concept/images/login/Logo.png')}}" alt="" class="u-image u-image-default u-image-1 align-center" data-image-width="597" data-image-height="250">
          <p class="u-align-center u-text u-text-default u-text-1">Pusat Kecemerlangan Teknologi Pintar Asia (ACES) di bawah Majlis Pembangunan Wilayah Ekonomi Pantai Timur (ECERDC) merancang untuk mengembangkan aplikasi berdasarkan&nbsp; karya sebagai alat untuk untuk menyebarkan kesedaran dan juga berfungsi sebagai pengenalan kepada industri 4.0 (I4.0) kepada pelajar Tingkatan 5 yang terpilih.</p>
          <a href="https://nicepage.com/static-site-generator" class="u-btn u-btn-round u-button-style u-custom-color-1 u-hover-custom-color-3 u-radius-50 u-btn-1">pertolongan</a>
          <a href="https://nicepage.com/static-site-generator" class="u-btn u-btn-round u-button-style u-custom-color-1 u-hover-custom-color-3 u-radius-50 u-btn-2">syarat</a>
          <a href="https://nicepage.com/static-site-generator" class="u-btn u-btn-round u-button-style u-custom-color-1 u-hover-custom-color-3 u-radius-50 u-btn-3">kerahsiaan</a>
        </div>
      </div>
      <div class="u-container-style u-group u-image u-image-2" data-image-width="1080" data-image-height="607">
        <div class="u-container-layout u-container-layout-2">
          <p class="u-text u-text-body-alt-color u-text-default u-text-2">Tidak mempunyai akaun</p>
          <a href="{{route('register')}}" class="u-btn u-button-style u-grey-75 u-hover-grey-90 u-btn-4">Cipta akaun</a>
          <p class="u-text u-text-body-alt-color u-text-default u-text-3">Log Masuk ke ACES IR 4.0</p>
          <p class="u-text u-text-body-alt-color u-text-default u-text-4">Masukkan maklumat log masuk di bawah</p>
          <div class="u-form u-form-1">
            <form action="{{ route('login') }}" method="POST" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" style="padding: 10px" source="custom" name="form">
              @csrf
              <div class="u-form-group u-form-name u-form-group-1">
                <label for="name-3b9a" class="u-form-control-hidden u-label u-text-body-alt-color">Name</label>
                <input type="text" placeholder="Kad Pengenalan" id="ic_number" name="ic_number" class="u-border-1 u-border-grey-80 u-grey-75 u-input u-input-rectangle form-control @error('ic_number') is-invalid @enderror" minlength="12" maxlength="12" onkeypress="return onlyNumberKey(event)" value="{{ old('ic_number') }}" required autocomplete="ic_number" autofocus>
                @error('email')
                           <span class="invalid-feedback" role="alert">
                               <strong>{{ $message }}</strong>
                           </span>
                 @enderror
              </div>
              <div class="u-form-email u-form-group u-form-group-2">
                <label for="email-3b9a" class="u-form-control-hidden u-label u-text-body-alt-color">Email</label>
                <input type="password" placeholder="Kata Laluan" id="password" name="password" class="u-border-1 u-border-grey-80 u-grey-75 u-input u-input-rectangle form-control @error('password') is-invalid @enderror" required autocomplete="current-password">
                @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                @enderror
              </div>
              <div class="u-align-center u-form-group u-form-submit u-form-group-3">

                <button type="submit" class="u-btn u-btn-submit u-button-style u-grey-80 u-btn-5">
                                    {{ __('TANDA TANGAN MASUK') }}

              </div>
              <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
              <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then try again. </div>
              <!-- <input type="hidden" value="" name="recaptchaResponse"> -->
            </form>
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
