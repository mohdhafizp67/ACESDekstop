@extends('layouts.app-index')
@section('content')
           <!--Page Body part -->
           <div class="page-body p-4 text-dark">
               <div class="page-heading border-bottom d-flex flex-row">
                   <h5 class="font-weight-normal">User Profile</h5>
               </div>

               <!-- All Basic Form elements -->
               <div class="row">
                 <div class="col-12 mt-4">
                      <div class="card rounded-lg">
                          <div class="card-body">
                              <form action="{{route('user.update', $user->id)}}" method="POST">
                                @csrf
                                  <div class="row">
                                      <div class="col-md-2">
                                          <p>Name</p>
                                      </div>
                                      <div class="col-md-8">
                                          <div class="form-group">
                                              <input type="text" name=name class="form-control bg-light" placeholder="Input name" value="{{$user->name}}">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-2">
                                          <p>IC No</p>
                                      </div>
                                      <div class="col-md-8">
                                          <div class="form-group">
                                              <input type="text" name=ic_number class="form-control bg-light" placeholder="Input IC No" value="{{$user->ic_number}}">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-2">
                                          <p>Email</p>
                                      </div>
                                      <div class="col-md-8">
                                          <div class="form-group">
                                              <input type="email" name=email class="form-control bg-light" placeholder="Input Email" value="{{$user->email}}">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-2">
                                          <p>Address</p>
                                      </div>
                                      <div class="col-md-8">
                                          <div class="form-group">
                                              <input type="text" name=alamat class="form-control bg-light" placeholder="Input Address" value="{{$user->alamat}}">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-2">
                                          <p>Postcode</p>
                                      </div>
                                      <div class="col-md-8">
                                          <div class="form-group">
                                              <input type="text" name=poskod class="form-control bg-light" placeholder="Input Postcode" value="{{$user->poskod}}">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-2">
                                          <p>State</p>
                                      </div>
                                      <div class="col-md-8">
                                          <div class="form-group">
                                              <input type="text" name=negeri class="form-control bg-light" placeholder="Input State" value="{{$user->negeri}}">
                                          </div>
                                      </div>
                                  </div>
                                    <div class="col-md-2">
                                      <button type="submit" class="btn btn-primary mt-4">Submit</button>
                                    </div>
                                  </div>
                              </form>
                          </div>
                      </div>
               </div>
           </div>
@endsection
