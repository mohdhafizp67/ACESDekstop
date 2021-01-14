@extends('layouts.app-student')

@section('content')

        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
                  <div class="card">
                    <div style="padding: 5px;"></div>
                      <h2 class="card-header" style="text-align: center;"><i class="fa fa-unlock-alt mr-2" aria-hidden="true"></i>Change Password</h2>
                      <div class="card-body p-0">
                        <div style="padding: 10px;"></div>
                        <div class="row">
                          <div class="col-md-2">

                          </div>
                          <div class="col-md-8">
                            <div class="input-group mb-3">
                                <input type="password"
                                       id="password"
                                       name="password"
                                       class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"
                                       placeholder="Current Password">
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
                                       id="password"
                                       name="password"
                                       class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"
                                       placeholder="New Password">
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
                          </div>
                          <div class="col-md-4">
                            <div class="input-group mb-3">
                                <input type="password"
                                       id="password"
                                       name="password"
                                       class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"
                                       placeholder="Confirm New Password">
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
                          </div>
                          <div class="col-md-2">

                          </div>
                        </div>

                        <div class="row">
                          <div class="col-md-2">

                          </div>
                          <div class="col-md-8">
                            <button class="btn btn-block btn-primary" type="submit">Change Password</button>
                          </div>
                          <div class="col-md-2">

                          </div>
                        </div>
                        <div style="padding: 10px;"></div>

                      </div>
                  </div>
            </div>
        </div>
@endsection
