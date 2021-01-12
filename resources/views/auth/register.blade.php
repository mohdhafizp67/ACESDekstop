
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="maklum balas pengguna​">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Pendaftaran ACES IR 4.0</title>
    <link rel="stylesheet" href="{{ asset('css/Register.css') }} " media="screen">
<link rel="stylesheet" href="{{ asset('css/Register.css') }} " media="screen">
    <script class="u-script" type="text/javascript" src="{{ asset('css/register/jquery.js') }}" defer=""></script>
    <script class="u-script" type="text/javascript" src="{{ asset('css/register/nicepage.js') }}" defer=""></script>
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
    <link rel="stylesheet" href="{{ asset('css/Register.css') }} ">

    <meta property="og:url" content="index.html">
  </head>
  <body data-home-page="Page-1.html" data-home-page-title="Page 1" class="u-body">
    <section class="u-clearfix u-section-1" id="sec-ac5e">
      <div class="u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
          <div class="u-layout-row">
            <div class="u-black u-container-style u-layout-cell u-size-15 u-layout-cell-1">
              <div class="u-container-layout u-container-layout-1">
                <img src="{{asset('concept/images/register/Logo.png')}}" alt="" class="u-align-center u-image u-image-default u-image-1" data-image-width="597" data-image-height="250">
                <p class="u-align-center u-text u-text-1">Pusat Kecemerlangan Teknologi Pintar Asia (ACES) di bawah Majlis Pembangunan Wilayah Ekonomi Pantai Timur (ECERDC) merancang untuk mengembangkan aplikasi berdasarkan&nbsp; karya sebagai alat untuk untuk menyebarkan kesedaran dan juga berfungsi sebagai pengenalan kepada industri 4.0 (I4.0) kepada pelajar Tingkatan 5 yang terpilih.</p>
                <a href="https://nicepage.com" class="u-btn u-btn-round u-button-style u-custom-color-1 u-hover-custom-color-3 u-radius-50 u-btn-1">pertolongan</a>
                <a href="https://nicepage.com" class="u-btn u-btn-round u-button-style u-custom-color-1 u-hover-custom-color-3 u-radius-50 u-btn-2">syarat</a>
                <a href="https://nicepage.com" class="u-btn u-btn-round u-button-style u-custom-color-1 u-hover-custom-color-3 u-radius-50 u-btn-3">kerahsiaan</a>
                <!-- <img src="{{asset('concept/images/register/aces.png')}}" alt="" class="u-align-right-md u-align-right-sm u-align-right-xs u-image u-image-default u-image-2" data-image-width="758" data-image-height="1875"> -->
              </div>
            </div>
            <div class="u-container-style u-image u-layout-cell u-size-45 u-image-3" data-image-width="1080" data-image-height="607">
              <div class="u-container-layout u-container-layout-2">
                <p class="u-text u-text-body-alt-color u-text-1">Pendaftaran ACES IR 4.0</p>

                <div class="u-form u-form-1">
                  <form action="{{ route('register') }}" method="POST" class="u-clearfix u-form-spacing-15 u-form-vertical u-inner-form" style="padding: 15px;" source="custom" name="form">
                    @csrf
                    <div class="u-form-group u-form-group-1">
                      <label for="text-1c57" class="u-label u-text-body-alt-color">NAMA PENUH</label>
                      <input type="text" value="{{ old('name') }}" name="name" class="u-border-1 u-border-grey-75 u-grey-75 u-input u-input-rectangle u-text-body-alt-color u-input-1 {{ $errors->has('name') ? 'is-invalid' : '' }}" oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);" autofocus>
                      @if($errors->has('name'))
                          <div class="invalid-feedback">
                              <strong>{{ $errors }}</strong>
                          </div>
                      @endif
                    </div>
                    <div class="u-form-group u-form-group-2">
                      <label for="text-c07c" class="u-label u-text-body-alt-color">KAD PENGENALAN</label>
                      <input type="text" placeholder="Kad Pengenalan" name="ic_number" value="{{ old('ic_number') }}" class="u-border-1 u-border-grey-75 u-grey-75 u-input u-input-rectangle u-text-body-alt-color u-input-2 {{ $errors->has('ic_number') ? 'is-invalid' : '' }}" minlength="12" maxlength="12" onkeypress="return onlyNumberKey(event)" autofocus>
                      @if($errors->has('ic_number'))
    											<div class="invalid-feedback">
    													<strong>{{ $errors->first('ic_number') }}</strong>
    											</div>
    									@endif
                    </div>
                    <div class="u-form-email u-form-group">
                      <label for="email-6797" class="u-label u-text-body-alt-color">EMEL</label>
                      <input type="email" placeholder="Emel" name="email" class="u-border-1 u-border-grey-75 u-grey-75 u-input u-input-rectangle u-text-body-alt-color u-input-3 {{ $errors->has('email') ? 'is-invalid' : '' }}" value="{{ old('email') }}">
                      @if($errors->has('email'))
    											<div class="invalid-feedback">
    													<strong>{{ $errors->first('email') }}</strong>
    											</div>
    									@endif
                    </div>
                    <!-- <div class="u-form-group u-form-select u-form-group-4">
                      <label for="select-25a2" class="u-label u-text-body-alt-color">SEKOLAH</label>
                      <div class="u-form-select-wrapper">
                        <select id="select-25a2" name="Pilih" class="u-border-1 u-border-grey-75 u-grey-75 u-input u-input-rectangle u-text-body-alt-color u-input-4" required="">
                          <option value="Item 1">Item 1</option>
                          <option value="Item 2">Item 2</option>
                          <option value="Item 3">Item 3</option>
                        </select>
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret"><path fill="currentColor" d="M4 8L0 4h8z"></path></svg>
                      </div>
                    </div> -->
                    <div class="u-form-group u-form-group-2">
                      <label for="phone-3812" class="u-label u-text-body-alt-color">Nombor Telefon</label>
                      <input type="text" placeholder="Nombor Telefon"  name="phone" class="u-border-1 u-border-grey-75 u-grey-75 u-input u-input-rectangle {{ $errors->has('phone') ? 'is-invalid' : '' }}" value="{{ old('phone') }}" onkeypress="return onlyNumberKey(event)" minlength="10" maxlength="11">

                      @if($errors->has('phone'))
                          <div class="invalid-feedback">
                              <strong>{{ $errors->first('phone') }}</strong>
                          </div>
                      @endif
                    </div>
                    <div class="u-form-address u-form-group u-form-group-5">
                      <label for="address-d208" class="u-label u-text-body-alt-color">ALAMAT</label>
                      <textarea placeholder="Alamat" rows="4" cols="50" name="address" class="u-border-1 u-border-grey-75 u-grey-75 u-input u-input-rectangle u-text-body-alt-color u-input-5 {{ $errors->has('address') ? 'is-invalid' : '' }}" oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">{{ old('address') }}</textarea>
                      @if($errors->has('address'))
                          <div class="invalid-feedback">
                              <strong>{{ $errors->first('address') }}</strong>
                          </div>
                      @endif
                    </div>
                    <div class="u-form-group u-form-partition-factor-2 u-form-group-6">
                      <label for="text-039e" class="u-label u-text-body-alt-color">POSKOD</label>
                      <input type="text" placeholder="Poskod" id="text-039e" name="postcode" class="u-border-1 u-border-grey-75 u-grey-75 u-input u-input-rectangle u-text-body-alt-color u-input-6 {{ $errors->has('postcode') ? 'is-invalid' : '' }}" minlength="5" maxlength="5" value="{{ old('postcode') }}" onkeypress="return onlyNumberKey(event)">
                      @if($errors->has('postcode'))
                          <div class="invalid-feedback">
                              <strong>{{ $errors->first('postcode') }}</strong>
                          </div>
                      @endif
                    </div>
                    <div class="u-form-group u-form-partition-factor-2 u-form-select u-form-group-7">
                      <label for="select-0086" class="u-label u-text-body-alt-color">NEGERI</label>
                      <div class="u-form-select-wrapper">
                        <select name="state" class="u-border-1 u-border-grey-75 u-grey-75 u-input u-input-rectangle u-text-body-alt-color u-input-7 custom-select @error('state') is-invalid @enderror" value="{{ old('state') }}">
                          <option value="" selected disabled hidden>Pilih Negeri</option>
    											<option value="Johor" {{ old('state') == "Johor" ? 'selected' : '' }}>Johor</option>
    											<option value="Kedah" {{ old('state') == "Kedah" ? 'selected' : '' }}>Kedah</option>
    											<option value="Kelantan" {{ old('state') == "Kelantan" ? 'selected' : '' }}>Kelantan</option>
    											<option value="Melaka" {{ old('state') == "Melaka" ? 'selected' : '' }}>Melaka</option>
    											<option value="Negeri Sembilan" {{ old('state') == "Negeri Sembilan" ? 'selected' : '' }}>Negeri Sembilan</option>
    											<option value="Pahang" {{ old('state') == "Pahang" ? 'selected' : '' }}>Pahang</option>
    											<option value="Pulau Pinang" {{ old('state') == "Pulau Pinang" ? 'selected' : '' }}>Pulau Pinang</option>
    											<option value="Perak" {{ old('state') == "Perak" ? 'selected' : '' }}>Perak</option>
    											<option value="Perlis" {{ old('state') == "Perlis" ? 'selected' : '' }}>Perlis</option>
    											<option value="Sabah" {{ old('state') == "Sabah" ? 'selected' : '' }}>Sabah</option>
    											<option value="Sarawak" {{ old('state') == "Sarawak" ? 'selected' : '' }}>Sarawak</option>
    											<option value="Selangor" {{ old('state') == "Selangor" ? 'selected' : '' }}>Selangor</option>
    											<option value="Terengganu" {{ old('state') == "Terengganu" ? 'selected' : '' }}>Terengganu</option>
    											<option value="WP Kuala Lumpur" {{ old('state') == "WP Kuala Lumpur" ? 'selected' : '' }}>WP Kuala Lumpur</option>
    											<option value="WP Putrajaya" {{ old('state') == "WP Putrajaya" ? 'selected' : '' }}>WP Putrajaya</option>
    											<option value="WP Labuan" {{ old('state') == "WP Labuan" ? 'selected' : '' }}>WP Labuan</option>
                        </select>
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret"><path fill="currentColor" d="M4 8L0 4h8z"></path></svg>
                        @if($errors->has('state'))
                            <div class="invalid-feedback">
                                <strong>{{ $errors->first('state') }}</strong>
                            </div>
                        @endif
                      </div>
                    </div>
                    <div class="u-form-group u-form-group-8">
                      <label for="text-2f3b" class="u-label u-text-body-alt-color">KATA LALUAN</label>
                      <input type="password" placeholder="Kata Laluan" id="password" name="password" class="u-border-1 u-border-grey-75 u-grey-75 u-input u-input-rectangle u-text-body-alt-color u-input-8 {{ $errors->has('password') ? 'is-invalid' : '' }}">
                      @if($errors->has('password'))
    											<div class="invalid-feedback">
    													<strong>{{ $errors->first('password') }}</strong>
    											</div>
    									@endif
                    </div>
                    <div class="u-form-group u-form-group-9">
                      <label for="text-97b6" class="u-label u-text-body-alt-color">SAHKAN KATA LALUAN</label>
                      <input type="password" placeholder="Sahkan Kata Laluan" id="password_confirmation" name="password_confirmation" class="u-border-1 u-border-grey-75 u-grey-75 u-input u-input-rectangle u-text-body-alt-color u-input-9 {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}">
                      @if($errors->has('password_confirmation'))
    											<div class="invalid-feedback">
    													<strong>{{ $errors->first('password_confirmation') }}</strong>
    											</div>
    									@endif
                    </div>
                    <div class="u-align-center u-form-group u-form-submit">


                      <div class="u-align-center u-form-group u-form-submit">
                          <button class="u-btn u-btn-submit u-button-style u-grey-75 u-hover-grey-80 u-btn-4" type="submit">DAFTAR MASUK</button>
                      </div>
                    </div>
                    <div class="u-form-send-message u-form-send-success">Thank you! Your message has been sent.</div>
                    <div class="u-form-send-error u-form-send-message">Unable to send your message. Please fix errors then try again.</div>
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
	    //input text ONLY
	    function onlyNumberKey(evt) {

	      // Only ASCII charactar in that range allowed
	      var ASCIICode = (evt.which) ? evt.which : evt.keyCode
	      if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
	          return false;
	      return true;
	    }
	    //visible Password
	    function visiblePass() {
	      var x = document.getElementById("password");
	      if (x.type === "password") {
	        x.type = "text";
	        document.getElementById("icon_eye_pass").style.color = "#007bff";
	      } else {
	        x.type = "password";
	        document.getElementById("icon_eye_pass").style.color = "grey";

	      }
	    }

	    function visiblePassConfirm() {
	      var x = document.getElementById("password_confirmation");
	      if (x.type === "password") {
	        x.type = "text";
	        document.getElementById("icon_eye_confirm").style.color = "#007bff";
	      } else {
	        x.type = "password";
	        document.getElementById("icon_eye_confirm").style.color = "grey";

	      }
	    }
	</script>

</html>
