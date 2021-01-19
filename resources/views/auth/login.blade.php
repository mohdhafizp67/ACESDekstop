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
			<center><img alt="Bootstrap Image Preview" src="{{asset('concept/images/login/Logo.png')}}" style="width: 80%; padding-top: 25%; padding-bottom: 15%;"/></center>
			<p class="text-center" style="color: #fff; padding-bottom: 25%; padding-top: 10%;">
				Aces I 4.0 merupakan satu inisiatif yang mengguna pakai sistem elearning dan gamifikasi untuk memberi ilmu pengetahuan secara interaktif kepada pelajar pelajar tingkatan 5 di bawah kelolaan ecerdc.
			</p>
			<p style="color: #fff;">
				Pertolongan
			</p>
			<p style="color: #fff;">
				Syarat
			</p>
			<p style="color: #fff;">
				Kerahsiaan
			</p><br>
		</div>
		<div class="col-md-8" style="background-image: url({{asset('concept/images/login/robot.jpeg')}}); background-position: 100% 100%;background-repeat: no-repeat;background-size: cover;">
			<div class="row" style="padding-bottom: 15%; padding-top: 5%;">
				<div class="col-md-6"  >

				</div><br><br>

        <div class="col-md-3" style="padding-bottom: 0px;text-align-last: left;">
          <!-- <h5 class="text-center" style="padding-top: 8%;margin-left: 26%;color: #fff;">
            Tiada Akaun?
          </h5> -->
        </div>
				<div class="col-md-3" style="padding-top: 5%;margin-left: -5%;text-align-last: right;">


					<button type="button" class="btn btn-success" style="margin-top: -30%;margin-left: -25%;">
						<a href="{{route('register')}}">CIPTA AKAUN</a>
					</button>
				</div>
			</div>
			<h4 style="color: #fff; font-size: 35px;text-align: center;">
				Log Masuk Ke I 4.0
			</h4>
      <div class="card-body">
        <div class="row">
          <div class="col-md-2">

          </div>
          <div class="col-md-8">
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
      						Kata Laluan
      					</label>
      					<input type="password" placeholder="Kata Laluan" id="password" name="password" class="u-border-1 u-border-grey-80 u-grey-75 u-input u-input-rectangle form-control @error('password') is-invalid @enderror" required autocomplete="current-password"/>
                @error('password')
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $message }}</strong>
                          </span>
                @enderror
      				</div>


              <button type="submit" class="btn btn-success"  style="text-align: center;">
                                  {{ __('LOG MASUK') }}
                                </button>

      				</button>
      			</form>
          </div>
          <div class="col-md-2">

          </div>
        </div>







      </div>

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
