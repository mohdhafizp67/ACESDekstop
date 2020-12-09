@extends('layouts.app-login-register')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
          <form class="splash-container" method="POST" action="{{ route('register') }}">
            @csrf
              <div class="card">
                  <div class="card-header">
                      <h3 class="mb-1">Registrations Form</h3>
                      <p>Please enter your user information.</p>
                  </div>
                  <div class="card-body">
                    <div class="input-group mb-3">
                        <input
                        type="text"
                        name="name"
                        class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                        value="{{ old('name') }}"
                        placeholder="Full Name"
                        oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);"
                        autofocus
                        >
                        <div class="input-group-append">
                            <div class="input-group-text">
                                <span class="fas fa-user"></span>
                            </div>
                        </div>
                        @if($errors->has('name'))
                            <div class="invalid-feedback">
                                <strong>{{ $errors }}</strong>
                            </div>
                        @endif
                    </div>

                  {{-- Kad Pengenalan field --}}
                  <div class="input-group mb-3">
                      <input type="text"
                             name="ic_number"
                             class="form-control {{ $errors->has('ic_number') ? 'is-invalid' : '' }}"
                             value="{{ old('ic_number') }}"
                             placeholder="IC-Number"
                             minlength="12"
                             maxlength="12"
                             onkeypress="return onlyNumberKey(event)"
                             autofocus
                             >
                      <div class="input-group-append">
                          <div class="input-group-text">
                              <span class="far fa-id-card"></span>
                          </div>
                      </div>
                      @if($errors->has('ic_number'))
                          <div class="invalid-feedback">
                              <strong>{{ $errors->first('ic_number') }}</strong>
                          </div>
                      @endif
                  </div>

                  {{-- Email field --}}
                  <div class="input-group mb-3">
                      <input
                      type="email"
                      name="email"
                      class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
                      value="{{ old('email') }}"
                      placeholder="Email"
                      >
                      <div class="input-group-append">
                          <div class="input-group-text">
                              <span class="fas fa-envelope"></span>
                          </div>
                      </div>
                      @if($errors->has('email'))
                          <div class="invalid-feedback">
                              <strong>{{ $errors->first('email') }}</strong>
                          </div>
                      @endif
                  </div>

                  {{-- Phone field --}}
                  <div class="input-group mb-3">
                      <input
                      type="text"
                      name="phone"
                      class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}"
                      value="{{ old('phone') }}"
                      onkeypress="return onlyNumberKey(event)"
                      minlength="10"
                      maxlength="11"
                      placeholder="Phone Number"
                      >
                      <div class="input-group-append">
                          <div class="input-group-text">
                              <span class="fas fa-phone"></span>
                          </div>
                      </div>
                      @if($errors->has('phone'))
                          <div class="invalid-feedback">
                              <strong>{{ $errors->first('phone') }}</strong>
                          </div>
                      @endif
                  </div>

                  {{-- Address field --}}
                  <div class="input-group mb-3">
                      <textarea
                      name="address"
                      rows="3"
                      cols="50"
                      oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);"
                      class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}"
                      placeholder="Address"
                      >{{ old('address') }}</textarea>
                      <div class="input-group-append">
                          <div class="input-group-text">
                              <span class="fas fa-map-marker"></span>
                          </div>
                      </div>
                      @if($errors->has('address'))
                          <div class="invalid-feedback">
                              <strong>{{ $errors->first('address') }}</strong>
                          </div>
                      @endif
                  </div>

                  {{-- Postcode field --}}
                  <div class="input-group mb-3">
                      <input type="text"
                      name="postcode"
                      class="form-control {{ $errors->has('postcode') ? 'is-invalid' : '' }}"
                      minlength="5"
                      maxlength="5"
                      value="{{ old('postcode') }}"
                      onkeypress="return onlyNumberKey(event)"
                      placeholder="Postcode"
                      >
                      <div class="input-group-append">
                          <div class="input-group-text">
                              <span class="fas fa-map-signs"></span>
                          </div>
                      </div>
                      @if($errors->has('postcode'))
                          <div class="invalid-feedback">
                              <strong>{{ $errors->first('postcode') }}</strong>
                          </div>
                      @endif
                  </div>

                  {{-- State field --}}
                  <div class="input-group mb-3">
                   <select class="custom-select  bg-light @error('state') is-invalid @enderror" name="state" value="{{ old('state') }}"  >
                         <option value="" selected disabled hidden>Choose State</option>
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
                      <div class="input-group-append">
                          <div class="input-group-text">
                              <span class="fas fa-flag"></span>
                          </div>
                      </div>
                      @if($errors->has('state'))
                          <div class="invalid-feedback">
                              <strong>{{ $errors->first('state') }}</strong>
                          </div>
                      @endif
                  </div>
                      {{-- Password field --}}

                        <div class="input-group mb-3">
                            <input type="password"
                                   id="password"
                                   name="password"
                                   class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"
                                   placeholder="Password">
                            <div class="input-group-append">
                                <div class="input-group-text">
                                  <a onclick="visiblePass()">
                                    <span id="icon_eye_pass" class="fa fa-eye" ></span>
                                  </a>
                                </div>
                            </div>
                            @if($errors->has('password'))
                                <div class="invalid-feedback">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </div>
                            @endif
                        </div>

                      {{-- Confirm password field --}}
                      <div class="input-group mb-3">
                          <input type="password"
                                 id="password_confirmation"
                                 name="password_confirmation"
                                 class="form-control {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}"
                                 placeholder="Re-type Password">
                          <div class="input-group-append">
                              <div class="input-group-text">
                                <a onclick="visiblePassConfirm()">
                                  <span id="icon_eye_confirm" class="fa fa-eye" ></span>
                                </a>
                              </div>
                          </div>
                          @if($errors->has('password_confirmation'))
                              <div class="invalid-feedback">
                                  <strong>{{ $errors->first('password_confirmation') }}</strong>
                              </div>
                          @endif
                      </div>

                      <div class="form-group pt-2">
                          <button class="btn btn-block btn-primary" type="submit">Register My Account</button>
                      </div>
                      <!-- <div class="form-group">
                          <label class="custom-control custom-checkbox">
                              <input class="custom-control-input" type="checkbox"><span class="custom-control-label">By creating an account, you agree the <a href="#">terms and conditions</a></span>
                          </label>
                      </div> -->
                      <!-- <div class="form-group row pt-0">
                          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2">
                              <button class="btn btn-block btn-social btn-facebook " type="button">Facebook</button>
                          </div>
                          <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                              <button class="btn  btn-block btn-social btn-twitter" type="button">Twitter</button>
                          </div>
                      </div> -->
                  </div>
                  <div class="card-footer bg-white">
                      <p>Already member? <a href="{{route('login')}}" class="text-secondary">Login Here.</a></p>
                  </div>
              </div>
          </form>
        </div>
    </div>
</div>
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
@endsection
