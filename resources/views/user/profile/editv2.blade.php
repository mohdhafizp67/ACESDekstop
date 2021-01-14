@extends('layouts.app-student')
@section('content')
           <!--Page Body part -->
           <div class="dashboard-ecommerce">
               <div class="container-fluid dashboard-content ">
                     <div class="card">
                       <div style="padding: 5px;"></div>
                         <h2 class="card-header" style="text-align: center;"><i class="fas fa-edit"></i>Edit Profile</h2>
                         <div class="card-body p-0">
                           <div style="padding: 10px;"></div>

                           <form action="{{route('user.update', $user->id)}}" method="POST">
                             @csrf
                             <div class="row">
                               <div class="col-md-2"></div>
                                <div class="col-md-4">
                                  <div class="input-group mb-3">
                                        <p>Name</p>
                                    </div>
                                  </div>
                                  <div class="col-md-4">
                                      <p>Address</p>
                                  </div>
                              </div>
                              <div class="row">
                                <div class="col-md-2"></div>
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <input type="text" name=name class="form-control bg-light" placeholder="Input name" value="{{$user->name}}">
                                      </div>
                                  </div>
                                  <div class="col-md-4">
                                      <div class="form-group">
                                          <input type="text" name=alamat class="form-control bg-light" placeholder="Input Address" value="{{$user->alamat}}">
                                      </div>
                                  </div>
                            </div>
                            <div class="row">
                              <div class="col-md-2"></div>
                                <div class="col-md-4">
                                    <p>IC No</p>
                                </div>
                                <div class="col-md-4">
                                    <p>Postcode</p>
                                </div>
                            </div>
                            <div class="row">
                              <div class="col-md-2"></div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" name=ic_number class="form-control bg-light" placeholder="Input IC No" value="{{$user->ic_number}}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" name=poskod class="form-control bg-light" placeholder="Input Postcode" value="{{$user->poskod}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                              <div class="col-md-2"></div>
                                <div class="col-md-4">
                                    <p>Email</p>
                                </div>
                                <div class="col-md-4">
                                    <p>State</p>
                                </div>
                            </div>
                            <div class="row">
                              <div class="col-md-2"></div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="email" name=email class="form-control bg-light" placeholder="Input Email" value="{{$user->email}}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" name=negeri class="form-control bg-light" placeholder="Input State" value="{{$user->negeri}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                              <div class="col-md-2">

                              </div>
                              <div class="col-md-8">
                                <button class="btn btn-block btn-primary" type="submit">Submit</button>
                              </div>
                              <div class="col-md-2">

                              </div>
                            </div>
                            <div style="padding: 10px;"></div>
                      </form>
                    </div>
                </div>
         </div>
       </div>
@endsection
