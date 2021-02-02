@extends('layouts.app-login-register')

@section('content')
<html>
<head>
  <link rel="stylesheet" href="{{ asset('css/Register.css') }} ">
</head>
<body>
<div class="container-fluid" style="background-image: url({{asset('concept/images/galaxy/background3.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover; background-color: transparent !important;">

<div class="row">

  <div class="col-md-4">
    <center><img alt="Bootstrap Image Preview" src="{{asset('concept/images/login/Logo.png')}}" style="width: 80%; padding-top: 15%;"/></center>
    <p class="text-center" style="color: #fff; padding-bottom: 10%; padding-top: 10%; text-transform: uppercase; font-size: 80%;">
      ACES will be a regional hub providing wide-ranging Industry 4.0 solutions including advisory, consulting and training services for businesses in Malaysia, ASEAN and ASIA.

    </p>
    <div class="row">
      <div class="col-md-1">

      </div>
      <div class="col-md-8" style="background-image: url({{asset('concept/images/galaxy/button_submit.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover;color: #fff; text-align: center;padding: 5%;">
        <button type="button" class="btn">
          <a href="#" style="font-size: 80%;">HELP</a>
        </button>
      </div>
      <div class="col-md-2">

      </div>
    </div>

    <div class="row">
      <div class="col-md-1">

      </div>
      <div class="col-md-8" style="background-image: url({{asset('concept/images/galaxy/button_submit.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover;color: #fff; text-align: center;padding: 5%;">
        <button type="button" class="btn">
          <a href="#" style="font-size: 80%;">T&C</a>
        </button>
      </div>
      <div class="col-md-2">

      </div>
    </div>

    <div class="row">
      <div class="col-md-1">

      </div>
      <div class="col-md-8" style="background-image: url({{asset('concept/images/galaxy/button_submit.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover;color: #fff; text-align: center;padding: 5%;">
        <button type="button" class="btn">
          <a href="#" style="font-size: 80%;">PRIVACY</a>
        </button>
      </div>
      <div class="col-md-2">

      </div>
    </div>

  </div>
  <div class="col-md-7" style="background-color: transparent !important; border: transparent; background-image: url({{asset('concept/images/galaxy/cards2.png')}}); background-repeat: no-repeat;background-size: 100% 100%; margin-top: 2%;">
    <h4 style="color: #fff; font-size: 200%; text-align: center; text-transform: uppercase; padding-top: 10%;">
      REGISTRATION FORM
    </h4>

    <div class="card-body" style="padding: 10%;margin-top: -10%;">
      <div class="row">

        <div class="col-md-12">
          <form action="{{ route('register') }}" method="POST" style="padding: 10px" source="custom" name="form">
            @csrf
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">

                  <label for="exampleInputEmail1" style="color: #fff">
                    FULL NAME
                  </label>
                  <input type="text" value="{{ old('name') }}" placeholder="Full Name" name="name" class="u-border-1 u-border-grey-80 u-grey-75 u-input u-input-rectangle form-control {{ $errors->has('name') ? 'is-invalid' : '' }}" oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);" autofocus/>
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
                    IC Number
                  </label>
                  <input type="text" placeholder="IC Number" name="ic_number" value="{{ old('ic_number') }}" class="u-border-1 u-border-grey-80 u-grey-75 u-input u-input-rectangle form-control {{ $errors->has('ic_number') ? 'is-invalid' : '' }}" minlength="12" maxlength="12" onkeypress="return onlyNumberKey(event)" autofocus/>
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
                EMAIL
              </label>
              <input type="email" placeholder="Email" name="email" value="{{ old('email') }}" class="u-border-1 u-border-grey-80 u-grey-75 u-input u-input-rectangle form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"/>
              @if($errors->has('email'))
                  <div class="invalid-feedback">
                      <strong>{{ $errors->first('email') }}</strong>
                  </div>
              @endif
            </div>

            <div class="form-group">

              <label for="exampleInputEmail1" style="color: #fff">
                PHONE NUMBER
              </label>
              <input type="text" placeholder="Phone Number" name="phone" class="u-border-1 u-border-grey-80 u-grey-75 u-input u-input-rectangle form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}" value="{{ old('phone') }}" onkeypress="return onlyNumberKey(event)" minlength="10" maxlength="11"/>
              @if($errors->has('address'))
                  <div class="invalid-feedback">
                      <strong>{{ $errors->first('address') }}</strong>
                  </div>
              @endif
            </div>



            <div class="form-group">

              <label for="exampleInputEmail1" style="color: #fff">
                ADDRESS
              </label>
              <textarea placeholder="Address" rows="4" cols="30" name="address" class="u-border-1 u-border-grey-80 u-grey-75 u-input u-input-rectangle form-control {{ $errors->has('address') ? 'is-invalid' : '' }}" oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">{{ old('address') }}</textarea>
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
                    POSTCODE
                  </label>
                  <input type="text" placeholder="Postcode" name="postcode" class="u-border-1 u-border-grey-80 u-grey-75 u-input u-input-rectangle form-control {{ $errors->has('postcode') ? 'is-invalid' : '' }}" minlength="5" maxlength="5" value="{{ old('postcode') }}" onkeypress="return onlyNumberKey(event)"/>
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
                    STATE
                  </label>
                  <select id="state" name="state" class="u-border-1 u-border-grey-75 u-grey-75 u-input u-input-rectangle u-text-body-alt-color u-input-7 custom-select @error('state') is-invalid @enderror" value="{{ old('state') }}">
                    <option value="" selected disabled hidden>Select State  </option>
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
                DISTRICT
              </label>
              <select id="district" name="district" class="u-border-1 u-border-grey-75 u-grey-75 u-input u-input-rectangle u-text-body-alt-color u-input-7 custom-select @error('state') is-invalid @enderror" value="{{ old('district') }}">
                <option value="" selected disabled hidden>Select District</option>
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
                    PASSWORD
                  </label>
                  <input type="password" placeholder="Password" id="password" name="password" class="u-border-1 u-border-grey-80 u-grey-75 u-input u-input-rectangle form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"/>
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
                    CONFIRM PASSWORD
                  </label>
                  <input type="password" placeholder="Confirm Password" id="password_confirmation" name="password_confirmation" class="u-border-1 u-border-grey-80 u-grey-75 u-input u-input-rectangle form-control {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}"/>
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
                  <button class="btn" type="submit" style="background-image: url({{asset('concept/images/galaxy/button_submit.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover;">REGISTER</button>
              </div>
            </div>

            </button>
          </form>
        </div>

      </div>







    </div>

  </div>

  <!-- <div class="col-md-1">

  </div> -->
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
  $("#district").append('<option value="" selected disabled hidden>Select District</option>');
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
