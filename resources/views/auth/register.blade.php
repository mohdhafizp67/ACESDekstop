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
			<center><img alt="Bootstrap Image Preview" src="{{asset('concept/images/login/Logo.png')}}" style="width: 80%; padding-top: 35%;"/></center>
			<p class="text-center" style="color: #fff; padding-bottom: 35%; padding-top: 20%; text-transform: uppercase;">
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
			<h4 style="color: #fff; font-size: 35px; text-align: center; text-transform: uppercase;">
				Daftar Masuk
			</h4>
      <div class="card-body">
        <div class="row">
          <div class="col-md-2">

          </div>
          <div class="col-md-8">
            <form action="{{ route('register') }}" method="POST" style="padding: 10px" source="custom" name="form">
              @csrf
              <div class="row">
                <div class="col-md-6">
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
                </div>
                <div class="col-md-6">
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
                </div>
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
                  ALAMAT
                </label>
                <textarea placeholder="Alamat" rows="4" cols="50" name="address" class="u-border-1 u-border-grey-80 u-grey-75 u-input u-input-rectangle form-control {{ $errors->has('address') ? 'is-invalid' : '' }}" oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">{{ old('address') }}</textarea>
                @if($errors->has('phone'))
                    <div class="invalid-feedback">
                        <strong>{{ $errors->first('phone') }}</strong>
                    </div>
                @endif
              </div>


              <div class="row">
                <div class="col-md-6">
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
                </div>
                <div class="col-md-6">
                  <div class="form-group">

                    <label for="exampleInputEmail1" style="color: #fff">
                      Negeri
                    </label>
                    <select id="state" name="state" class="u-border-1 u-border-grey-75 u-grey-75 u-input u-input-rectangle u-text-body-alt-color u-input-7 custom-select @error('state') is-invalid @enderror" value="{{ old('state') }}">
                      <option value="" selected disabled hidden>Pilih Negeri</option>
                      <option value="Johor" {{ old('state') == "Johor" ? 'selected' : '' }}>Johor</option>
                      <option disabled value="Kedah" {{ old('state') == "Kedah" ? 'selected' : '' }}>Kedah</option>
                      <option value="Kelantan" {{ old('state') == "Kelantan" ? 'selected' : '' }}>Kelantan</option>
                      <option disabled value="Melaka" {{ old('state') == "Melaka" ? 'selected' : '' }}>Melaka</option>
                      <option disabled value="Negeri Sembilan" {{ old('state') == "Negeri Sembilan" ? 'selected' : '' }}>Negeri Sembilan</option>
                      <option value="Pahang" {{ old('state') == "Pahang" ? 'selected' : '' }}>Pahang</option>
                      <option disabled value="Pulau Pinang" {{ old('state') == "Pulau Pinang" ? 'selected' : '' }}>Pulau Pinang</option>
                      <option disabled value="Perak" {{ old('state') == "Perak" ? 'selected' : '' }}>Perak</option>
                      <option disabled value="Perlis" {{ old('state') == "Perlis" ? 'selected' : '' }}>Perlis</option>
                      <option disabled value="Sabah" {{ old('state') == "Sabah" ? 'selected' : '' }}>Sabah</option>
                      <option disabled value="Sarawak" {{ old('state') == "Sarawak" ? 'selected' : '' }}>Sarawak</option>
                      <option disabled value="Selangor" {{ old('state') == "Selangor" ? 'selected' : '' }}>Selangor</option>
                      <option value="Terengganu" {{ old('state') == "Terengganu" ? 'selected' : '' }}>Terengganu</option>
                      <option disabled value="WP Kuala Lumpur" {{ old('state') == "WP Kuala Lumpur" ? 'selected' : '' }}>WP Kuala Lumpur</option>
                      <option disabled value="WP Putrajaya" {{ old('state') == "WP Putrajaya" ? 'selected' : '' }}>WP Putrajaya</option>
                      <option disabled value="WP Labuan" {{ old('state') == "WP Labuan" ? 'selected' : '' }}>WP Labuan</option>
                    </select>
                    @if($errors->has('state'))
                        <div class="invalid-feedback">
                            <strong>{{ $errors->first('state') }}</strong>
                        </div>
                    @endif
                  </div>
                </div>
              </div>

              <div class="form-group">

                <label for="exampleInputEmail1" style="color: #fff">
                  Daerah
                </label>
                <select id="district" name="district" class="u-border-1 u-border-grey-75 u-grey-75 u-input u-input-rectangle u-text-body-alt-color u-input-7 custom-select @error('state') is-invalid @enderror" value="{{ old('district') }}">
                  <option value="" selected disabled hidden>Pilih Daerah</option>
                </select>
                @if($errors->has('state'))
                    <div class="invalid-feedback">
                        <strong>{{ $errors->first('state') }}</strong>
                    </div>
                @endif
              </div>


              <div class="row">
                <div class="col-md-6">
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
                </div>
                <div class="col-md-6">
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

                </div>
              </div>





              <div class="u-align-center u-form-group u-form-submit">


                <div class="u-align-center u-form-group u-form-submit" style="text-align: center;">
                    <button class="btn btn-success" type="submit">DAFTAR MASUK</button>
                </div>
              </div>

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

    //ajax for daerah
</script>

<script type="text/javascript">
$('#state').change(function(){
  //fetch data from jenis_dokumen
  var negeri = $(this).val();
  //clear jenis_data selection
  $("#district").empty();
  //initialize selection
  $("#district").append('<option value="" selected disabled hidden>Pilih Daerah</option>');
  //ajax

  if(negeri){
    $.ajax({
      type:"get",
       url:"/register/ajax/get-district/"+negeri,

      success: function(respond){
        //console.log(respond);
        var data = JSON.parse(respond);
        data.forEach(function(data)
        {
          // console.log(data.daerah);
          $("#district").append('<option value="'+data.daerah+'" >'+data.daerah+'</option>');
        });
            // $.each(JSON.parse(respond),function(key,value){
            //     $("#jenis_data").append('<option value="'+value+'">'+value+'</option>');
            // });
      },
      error: function(XMLHttpRequest, textStatus, errorThrown) {
          console.log("Status: " + textStatus);
          console.log("Error: " + errorThrown);
      }
    })

  }
});
</script>


</html>
@endsection
