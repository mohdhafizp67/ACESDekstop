@extends('layouts.app-index-admin-dashboard')

@section('content')

        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
              @if ($message = Session::get('success'))
              <div id=alert>
                  <div class="alert alert-card  alert-success" role="alert">
                      <strong>Operasi Berjaya! </strong>
                      {{$message}}
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
              </div>
              @elseif ($message = Session::get('error'))
              <div id="alert">
                <div class="alert alert-card  alert-danger" role="alert">
                    <strong>Ralat! </strong>
                    {{$message}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
              </div>
              @endif
                  <div class="card" style="padding: 10px;">

                    <div style="padding: 5px;"></div>
                      <h2 class="card-header" style="text-align: center;"><i class="fa fa-unlock-alt mr-2" aria-hidden="true"></i>Tukar Kata Laluan</h2>
                      <div class="card-body p-0">
                        <div style="padding: 10px;"></div>
                        <form action="{{ route('admin.profiles.change-password.updating') }}" method="post">
                          @csrf
                        <div class="row">
                          <div class="col-md-2">

                          </div>
                          <div class="col-md-8">
                            <div class="input-group mb-3">
                                <input type="password"
                                       id="password"
                                       name="password"
                                       class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"
                                       placeholder="Kata laluan semasa">
                                <div class="input-group-append">
                                  <a onclick="visiblePass()">

                                    <div class="input-group-text">
                                        <span id="icon_eye_pass" class="fa fa-eye" ></span>
                                    </div>
                                  </a>

                                </div>
                                @if($errors->has('password'))
                                    <div class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </div>
                                @endif
                            </div>
                          </div>
                          <div class="col-md-2">

                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-2">

                          </div>
                          <div class="col-md-4">
                            <div class="input-group mb-3">
                                <input type="password"
                                       id="new_password"
                                       name="new_password"
                                       class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"
                                       placeholder="Kata Laluan Baru">
                                <div class="input-group-append">
                                  <a onclick="visiblenNewPass()">

                                    <div class="input-group-text">
                                        <span id="icon_eye_new" class="fa fa-eye" ></span>
                                    </div>
                                  </a>

                                </div>
                                @if($errors->has('password'))
                                    <div class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </div>
                                @endif
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="input-group mb-3">
                                <input type="password"
                                       id="password_confirmation"
                                       name="password_confirmation"
                                       class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"
                                       placeholder="Sahkan kata laluan baru">
                                <div class="input-group-append">
                                  <a onclick="visiblePassConfirm()">

                                    <div class="input-group-text">
                                        <span id="icon_eye_confirm" class="fa fa-eye" ></span>
                                    </div>
                                  </a>

                                </div>
                                @if($errors->has('password'))
                                    <div class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </div>
                                @endif
                            </div>
                          </div>
                          <div class="col-md-2">

                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-2">

                          </div>
                          <div class="col-md-8">
                            <!-- <button class="btn btn-block btn-primary" type="submit">Change Password</button> -->
                            <a href="#" class="btn btn-block btn-primary" data-toggle="modal" data-target="#exampleModal">Tukar Kata Laluan</a>
                          </div>
                          <div class="col-md-2">

                          </div>
                        </div>
                        <div style="padding: 10px;"></div>

                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Pengesahan</h5>
                                        <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </a>
                                    </div>
                                    <div class="modal-body">
                                        <p>Anda pasti mahu menukar kata laluan?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="#" class="btn btn-secondary" data-dismiss="modal">Batal</a>
                                        <!-- <a href="#" class="btn btn-primary">Yes</a> -->
                                        <button type="submit" name="button" class="btn btn-primary">Tukar Kata Laluan</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                      </form>
                      </div>
                  </div>
            </div>
        </div>
        <script type="text/javascript">
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

        function visiblenNewPass() {
          var x = document.getElementById("new_password");
          if (x.type === "password") {
            x.type = "text";
            document.getElementById("icon_eye_new").style.color = "#007bff";
          } else {
            x.type = "password";
            document.getElementById("icon_eye_new").style.color = "grey";

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

        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>

        <script type="text/javascript">
        $("document").ready(function(){
          setTimeout(function(){
             $("div.alert").remove();
          }, 5000 ); // 5 secs

        });
        </script>
@endsection
