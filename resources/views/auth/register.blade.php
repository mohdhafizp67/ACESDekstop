@extends('layouts.app-login-register')

@section('content')
<html>
<head>
  <link rel="stylesheet" href="{{ asset('css/Register.css') }} ">
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-4" style="background-color: #000;">
			<center><img alt="Bootstrap Image Preview" src="{{asset('concept/images/login/Logo.png')}}" style="width: 80%; padding-top: 25%;"/></center>
			<p class="text-center" style="color: #fff; padding-bottom: 25%; padding-top: 15%;">
				Pusat Kecemerlangan Teknologi Pintar Asia (ACES) di bawah Majlis Pembangunan Wilayah Ekonomi Pantai Timur (ECERDC) merancang untuk mengembangkan aplikasi berdasarkan  karya sebagai alat untuk untuk menyebarkan kesedaran dan juga berfungsi sebagai pengenalan kepada industri 4.0 (I4.0) kepada pelajar Tingkatan 5 yang terpilih.
			</p>
			<button type="button" class="btn btn-success" style="border-radius: 50px;">
				Pertolongan
			</button><br><br>
			<button type="button" class="btn btn-success" style="border-radius: 50px;">
				Syarat
			</button><br><br>
			<button type="button" class="btn btn-success" style="border-radius: 50px;">
				Kerahsiaan
			</button><br><br>
		</div>
		<div class="col-md-8" style="background-image: url({{asset('concept/images/login/robot.jpeg')}}); background-position: 100% 100%;background-repeat: no-repeat;background-size: cover;">
			<div class="row">
				<div class="col-md-6"  >

				</div><br><br>
        <!-- <div class="col-md-3" style="padding-bottom: 0px;text-align-last: left;">
          <h5 class="text-center" style="padding-top: 32%;margin-left: 30%;color: #fff;">
            Tiada Akaun?
          </h5>
        </div> -->
				<!-- <div class="col-md-3" style="padding-top: 11%;text-align-last: right;">

					<button type="button" class="btn btn-success" style="margin-top: -40%;margin-left: -25%;">
						<a href="{{route('register')}}">CIPTA AKAUN</a>
					</button>
				</div> -->
			</div>
			<h4 style="color: #fff;">
				Daftar Masuk Ke IR 4.0
			</h4>
			<form action="{{ route('register') }}" method="POST" style="padding: 10px" source="custom" name="form">
        @csrf
        <div class="form-group">

					<label for="exampleInputEmail1" style="color: #fff">
						Nama Penuh
					</label>
					<input type="text" value="{{ old('name') }}" placeholder="Nama Penuh" name="name" class="u-border-1 u-border-grey-80 u-grey-75 u-input u-input-rectangle form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);" autofocus/>
          @if($errors->has('name'))
              <div class="invalid-feedback">
                  <strong>{{ $errors }}</strong>
              </div>
          @endif
				</div>

				<div class="form-group">

					<label for="exampleInputEmail1" style="color: #fff">
						Kad Pengenalan
					</label>
					<input type="text" placeholder="Kad Pengenalan" name="ic_number" value="{{ old('ic_number') }}" class="u-border-1 u-border-grey-80 u-grey-75 u-input u-input-rectangle form-control {{ $errors->has('ic_number') ? 'is-invalid' : '' }}" minlength="12" maxlength="12" onkeypress="return onlyNumberKey(event)" autofocus/>
          @if($errors->has('ic_number'))
              <div class="invalid-feedback">
                  <strong>{{ $errors->first('ic_number') }}</strong>
              </div>
          @endif
				</div>

        <div class="form-group">

					<label for="exampleInputEmail1" style="color: #fff">
						Emel
					</label>
					<input type="email" placeholder="Emel" name="email" value="{{ old('email') }}" class="u-border-1 u-border-grey-80 u-grey-75 u-input u-input-rectangle form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"/>
          @if($errors->has('email'))
              <div class="invalid-feedback">
                  <strong>{{ $errors->first('email') }}</strong>
              </div>
          @endif
				</div>

        <div class="form-group">

          <label for="exampleInputEmail1" style="color: #fff">
            Nombor Telefon
          </label>
          <input type="text" placeholder="Nombor Telefon" name="phone" class="u-border-1 u-border-grey-80 u-grey-75 u-input u-input-rectangle form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" value="{{ old('phone') }}" onkeypress="return onlyNumberKey(event)" minlength="10" maxlength="11"/>
          @if($errors->has('address'))
              <div class="invalid-feedback">
                  <strong>{{ $errors->first('address') }}</strong>
              </div>
          @endif
        </div>

        <div class="form-group">

          <label for="exampleInputEmail1" style="color: #fff">
            Poskod
          </label>
          <input type="text" placeholder="Poskod" name="postcode" class="u-border-1 u-border-grey-80 u-grey-75 u-input u-input-rectangle form-control {{ $errors->has('postcode') ? 'is-invalid' : '' }}" minlength="5" maxlength="5" value="{{ old('postcode') }}" onkeypress="return onlyNumberKey(event)"/>
          @if($errors->has('postcode'))
              <div class="invalid-feedback">
                  <strong>{{ $errors->first('postcode') }}</strong>
              </div>
          @endif
        </div>

        <div class="form-group">

          <label for="exampleInputEmail1" style="color: #fff">
            ALAMAT
          </label>
          <textarea placeholder="Alamat" rows="4" cols="50" name="address" class="u-border-1 u-border-grey-80 u-grey-75 u-input u-input-rectangle form-control {{ $errors->has('address') ? 'is-invalid' : '' }}" oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">{{ old('address') }}</textarea>
          @if($errors->has('phone'))
              <div class="invalid-feedback">
                  <strong>{{ $errors->first('phone') }}</strong>
              </div>
          @endif
        </div>

        <div class="form-group">

          <label for="exampleInputEmail1" style="color: #fff">
            Negeri
          </label>
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
          @if($errors->has('state'))
              <div class="invalid-feedback">
                  <strong>{{ $errors->first('state') }}</strong>
              </div>
          @endif
        </div>

				<div class="form-group">

					<label for="exampleInputPassword1" style="color: #fff">
						Kata Laluan
					</label>
					<input type="password" placeholder="Kata Laluan" id="password" name="password" class="u-border-1 u-border-grey-80 u-grey-75 u-input u-input-rectangle form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"/>
          @if($errors->has('password'))
              <div class="invalid-feedback">
                  <strong>{{ $errors->first('password') }}</strong>
              </div>
          @endif
				</div>

        <div class="form-group">

					<label for="exampleInputPassword1" style="color: #fff">
						Sahkan Kata Laluan
					</label>
					<input type="password" placeholder="Sahkan Kata Laluan" id="password_confirmation" name="password_confirmation" class="u-border-1 u-border-grey-80 u-grey-75 u-input u-input-rectangle form-control {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}"/>
          @if($errors->has('password'))
              <div class="invalid-feedback">
                  <strong>{{ $errors->first('password') }}</strong>
              </div>
          @endif
				</div>


        <div class="u-align-center u-form-group u-form-submit">


          <div class="u-align-center u-form-group u-form-submit">
              <button class="btn btn-success" type="submit">DAFTAR MASUK</button>
          </div>
        </div>

				</button>
			</form>
		</div>
	</div>
</div>
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
@endsection
