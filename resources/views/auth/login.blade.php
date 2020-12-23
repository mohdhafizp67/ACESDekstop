@extends('layouts.app-login-register')

@section('content')
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Log Masuk ACES IR 4.0​">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Page 1</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Page-1.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.2.5, nicepage.com">

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
    <meta property="og:url" content="index.html">
		<link rel="stylesheet" href="{{ asset('css/Login.css') }} ">

<style media="screen">
.u-section-1 {
 background-image: url("{{asset('concept/images/login/ps4.jpg')}}");
 background-position: 50% 50%;
}
</style>
  </head>
  <body data-home-page="Page-1.html" data-home-page-title="Page 1" class="u-body">
    <section class="u-clearfix u-image u-section-1" id="sec-01a8" data-image-width="3840" data-image-height="2400">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-align-justify u-custom-font u-text u-text-body-alt-color u-text-default u-title u-text-1">Log Masuk ACES IR 4.0 </h1>
        <div class="u-container-style u-custom-color-4 u-group u-opacity u-opacity-45 u-group-1">
          <div class="u-container-layout u-valign-top u-container-layout-1">
            <div class="u-form u-form-1">
              <form method="POST" action="{{ route('login') }}" class="u-clearfix u-form-spacing-20 u-form-vertical u-inner-form" style="padding: 25px;" source="custom" name="form">
                @csrf
                <div class="u-form-group u-form-name">
                  <label for="name-6797" class="u-label u-text-body-alt-color u-label-1">Kad Pengenalan</label>
                  <input type="text" id="ic_number" placeholder="Kad Pengenalan" name="ic_number" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white u-input-1 form-control @error('ic_number') is-invalid @enderror" minlength="12" maxlength="12" onkeypress="return onlyNumberKey(event)" name="ic_number" value="{{ old('ic_number') }}" required autocomplete="ic_number" autofocus>

                  @error('email')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <div class="u-form-email u-form-group">
                  <label for="email-6797" class="u-label u-text-body-alt-color u-label-2">Kata Kunci</label>
                  <input id="password" type="password" placeholder="Kata Kunci" name="password" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-white u-input-2 form-control @error('password') is-invalid @enderror" required autocomplete="current-password">

                  @error('password')
                      <span class="invalid-feedback" role="alert">
                          <strong>{{ $message }}</strong>
                      </span>
                  @enderror
                </div>
                <div class="u-align-center u-form-group u-form-submit">
                  <!-- <a href="#" class="u-btn u-btn-submit u-button-style u-custom-color-1 u-hover-custom-color-3 u-btn-1">Submit</a> -->
                  <button type="submit" class="u-btn u-btn-submit u-button-style u-custom-color-1 u-hover-custom-color-3 u-btn-1">
                      {{ __('Login') }}
                  </button>
                  <input type="submit" value="submit" class="u-form-control-hidden">
                </div>
                <div class="u-form-send-message u-form-send-success">Thank you! Your message has been sent.</div>
                <div class="u-form-send-error u-form-send-message">Unable to send your message. Please fix errors then try again.</div>
                <input type="hidden" value="" name="recaptchaResponse">
              </form>
            </div>
          </div>
        </div>
        <a href="https://nicepage.com/templates" class="u-btn u-btn-round u-button-style u-hover-palette-4-base u-palette-3-base u-radius-50 u-btn-2"><span class="u-icon u-icon-1"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 512 512" x="0px" y="0px" style="width: 1em; height: 1em;"><g><g><g><circle cx="256" cy="378.5" r="25"></circle><path d="M256,0C114.516,0,0,114.497,0,256c0,141.484,114.497,256,256,256c141.484,0,256-114.497,256-256     C512,114.516,397.503,0,256,0z M256,472c-119.377,0-216-96.607-216-216c0-119.377,96.607-216,216-216     c119.377,0,216,96.607,216,216C472,375.377,375.393,472,256,472z"></path><path d="M256,128.5c-44.112,0-80,35.888-80,80c0,11.046,8.954,20,20,20s20-8.954,20-20c0-22.056,17.944-40,40-40     c22.056,0,40,17.944,40,40c0,22.056-17.944,40-40,40c-11.046,0-20,8.954-20,20v50c0,11.046,8.954,20,20,20     c11.046,0,20-8.954,20-20v-32.531c34.466-8.903,60-40.26,60-77.469C336,164.388,300.112,128.5,256,128.5z"></path>
</g>
</g>
</g></svg><img></span>&nbsp;bantuan
        </a>
        <a href="https://nicepage.com/templates" class="u-btn u-btn-round u-button-style u-hover-palette-4-base u-palette-3-base u-radius-50 u-btn-3"><span class="u-icon u-icon-2"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 512.001 512.001" x="0px" y="0px" style="width: 1em; height: 1em;"><g><g><path d="M447.229,67.855h-43.181v-43.18C404.049,11.103,392.944,0,379.379,0H64.771C51.2,0,40.097,11.103,40.097,24.675V419.47    c0,13.571,11.103,24.675,24.675,24.675h43.181v43.181c0,13.571,11.098,24.675,24.675,24.675h209.729    c13.565,0,32.762-7.612,42.638-16.908l68.929-64.882c9.888-9.296,17.969-28.012,17.969-41.583l0.012-296.096    C471.904,78.959,460.8,67.855,447.229,67.855z M107.951,92.531v333.108h-43.18c-3.343,0-6.168-2.825-6.168-6.168V24.675    c0-3.343,2.825-6.168,6.168-6.168H379.38c3.337,0,6.168,2.825,6.168,6.168v43.181H132.626    C119.049,67.856,107.951,78.959,107.951,92.531z M441.24,416.737l-68.929,64.877c-1.412,1.327-3.251,2.628-5.281,3.867v-56.758    c0-4.238,1.709-8.051,4.528-10.888c2.844-2.819,6.656-4.533,10.894-4.533h61.718C443.213,414.602,442.233,415.799,441.24,416.737z     M453.385,388.626c0,1.832-0.334,3.954-0.839,6.168h-70.095c-18.721,0.037-33.89,15.206-33.928,33.928v64.024    c-2.202,0.445-4.324,0.746-6.168,0.746H132.626v0.001c-3.35,0-6.168-2.825-6.168-6.168V92.53c0-3.343,2.819-6.168,6.168-6.168    h314.602c3.343,0,6.168,2.825,6.168,6.168L453.385,388.626z"></path>
</g>
</g><g><g><path d="M379.379,154.216H200.488c-5.114,0-9.253,4.139-9.253,9.253c0,5.114,4.14,9.253,9.253,9.253h178.891    c5.108,0,9.253-4.139,9.253-9.253S384.487,154.216,379.379,154.216z"></path>
</g>
</g><g><g><path d="M379.379,277.59H200.488c-5.114,0-9.253,4.139-9.253,9.253c0,5.114,4.14,9.253,9.253,9.253h178.891    c5.108,0,9.253-4.139,9.253-9.253C388.632,281.728,384.487,277.59,379.379,277.59z"></path>
</g>
</g><g><g><path d="M299.187,339.277h-98.698c-5.114,0-9.253,4.139-9.253,9.253s4.139,9.253,9.253,9.253h98.698    c5.108,0,9.247-4.139,9.247-9.253S304.295,339.277,299.187,339.277z"></path>
</g>
</g><g><g><path d="M379.379,215.903H200.488c-5.114,0-9.253,4.139-9.253,9.253s4.14,9.253,9.253,9.253h178.891    c5.108,0,9.253-4.139,9.253-9.253S384.487,215.903,379.379,215.903z"></path>
</g>
</g></svg><img></span>&nbsp;Syarat
        </a>
        <a href="https://nicepage.com/templates" class="u-btn u-btn-round u-button-style u-hover-palette-4-base u-palette-3-base u-radius-50 u-btn-4"><span class="u-icon u-icon-3"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 471.7 471.7" x="0px" y="0px" style="width: 1em; height: 1em;"><g><g><path d="M360.8,200.6v-74.7c0.2-33.8-13.3-66.3-37.4-90C300.1,12.7,269.6,0,237.3,0c-0.5,0-1.1,0-1.6,0    c-68.9,0.1-124.9,56.5-124.9,125.9v74.7c-26,3.1-45,24.9-45,51.3v167.8c0,28.5,22.8,52,51.3,52h237.5c28.5,0,51.3-23.5,51.3-52    V251.9C405.8,225.6,386.8,203.7,360.8,200.6z M130.7,125.9h0.1c0-58.4,47.1-106.2,105-106.2h0.1c27.5-0.1,53.9,10.8,73.4,30.2    c20.3,20.1,31.6,47.5,31.4,76v74.8h-22v-74.8c0.2-22.7-8.8-44.5-24.9-60.5c-15.2-15.2-35.8-23.8-57.3-23.8h-0.6    c-46,0-83.2,37.8-83.2,84.2v74.9h-22V125.9z M298.8,125.9v74.8h-126v-74.8c0-35.4,28.2-64.2,63.2-64.2h0.6    c16.2,0,31.8,6.5,43.3,18C292.1,91.9,299,108.6,298.8,125.9z M386.8,420L386.8,420c0,17.5-14.2,31.7-31.7,31.7H117.5    c-17.5,0-31.7-14.2-31.7-31.7V252.4c0-17.5,14.2-31.7,31.7-31.7h237.6c17.5,0,31.7,14.2,31.7,31.7V420z"></path>
</g>
</g><g><g><path d="M270.4,330c-4.4-15.5-18.5-26.1-34.6-26.1c-19.9,0-36.1,16.1-36.1,36.1c0,16.1,10.6,30.2,26.1,34.6v28c0,5.5,4.5,10,10,10    s10-4.5,10-10v-28C264.9,369.1,276,349.1,270.4,330z M235.8,356c-8.9,0-16.1-7.2-16.1-16.1c0-8.9,7.2-16.1,16.1-16.1    c8.9,0,16.1,7.2,16.1,16.1C251.9,348.8,244.7,356,235.8,356z"></path>
</g>
</g></svg><img></span>&nbsp;keselamatan
        </a>
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
