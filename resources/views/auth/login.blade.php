@extends('layouts.app-login-register')

@section('content')
<html>
<head>
  <link rel="stylesheet" href="{{ asset('css/Login.css') }} ">
</head>
<body>
<div class="container-fluid">
	<div class="row">
		<div class="col-md-4" style="background-color: #000;">
			<center><img alt="Bootstrap Image Preview" src="{{asset('concept/images/login/Logo.png')}}" style="width: 80%; padding-top: 100px;"/></center>
			<p class="text-center" style="color: #fff; padding-bottom: 50px;">
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
		<div class="col-md-8" style="background-image: url(http://aces.test/concept/images/login/robot.jpeg); background-position: 100% 100%;background-repeat: no-repeat;background-size: cover;">
			<div class="row">
				<div class="col-md-5"  >

				</div><br><br>
        <div class="col-md-4" style="padding-bottom: 100px;">
          <h5 class="text-center" style="padding-top: 55px;margin-left: 10%;color: #fff;">
            Tiada Akaun?
          </h5>
        </div>
				<div class="col-md-3" style="padding-top: 50px;margin-left: -5%;">

					<button type="button" class="btn btn-success">
						<a href="{{route('register')}}">CIPTA AKAUN</a>
					</button>
				</div>
			</div>
			<h4 style="color: #fff;">
				Log Masuk Ke IR 4.0
			</h4>
			<form action="{{ route('login') }}" method="POST" style="padding: 10px" source="custom" name="form">
        @csrf
				<div class="form-group">

					<label for="exampleInputEmail1" style="color: #fff">
						Kad Pengenalan
					</label>
					<input type="text" placeholder="Kad Pengenalan" id="ic_number" name="ic_number" class="u-border-1 u-border-grey-80 u-grey-75 u-input u-input-rectangle form-control @error('ic_number') is-invalid @enderror" minlength="12" maxlength="12" onkeypress="return onlyNumberKey(event)" value="{{ old('ic_number') }}" required autocomplete="ic_number" autofocus/>
          @error('ic_number')
                     <span class="invalid-feedback" role="alert">
                         <strong>{{ $message }}</strong>
                     </span>
           @enderror
				</div>
				<div class="form-group">

					<label for="exampleInputPassword1" style="color: #fff">
						Password
					</label>
					<input type="password" placeholder="Kata Laluan" id="password" name="password" class="u-border-1 u-border-grey-80 u-grey-75 u-input u-input-rectangle form-control @error('password') is-invalid @enderror" required autocomplete="current-password"/>
          @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
          @enderror
				</div>


        <button type="submit" class="btn btn-success">
                            {{ __('LOG MASUK') }}
                          </button>

				</button>
			</form>
		</div>
	</div>
</div>
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
