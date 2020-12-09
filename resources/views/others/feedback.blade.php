@extends('layouts.app-index')
@section('content')
           <!--Page Body part -->
           <div class="page-body p-4 text-dark">
               <div class="page-heading border-bottom d-flex flex-row">
                   <h5 class="font-weight-normal">User Feedback</h5>
               </div>

               <!-- All Basic Form elements -->
               <div class="row">
                 <div class="col-12 mt-4">
                      <div class="card rounded-lg">
                          <div class="card-body">
                              <form action="#" method="POST">
                                @csrf
                                  <div class="row">
                                      <div class="col-md-2">
                                          <p>Name</p>
                                      </div>
                                      <div class="col-md-8">
                                          <div class="form-group">
                                              <input type="text" name=name class="form-control bg-light" placeholder="Input name">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-2">
                                          <p>Email</p>
                                      </div>
                                      <div class="col-md-8">
                                          <div class="form-group">
                                              <input type="email" name=email class="form-control bg-light" placeholder="Input Email">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-2">
                                          <p>Subject</p>
                                      </div>
                                      <div class="col-md-8">
                                          <div class="form-group">
                                              <input type="text" name=subject class="form-control bg-light" placeholder="Input Subject">
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <div class="col-md-2">
                                          <p>Content Feedback</p>
                                      </div>
                                      <div class="col-md-8">
                                          <div class="form-group">
                                              <textarea name=content class="form-control bg-light" placeholder="Input Content"></textarea>
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
