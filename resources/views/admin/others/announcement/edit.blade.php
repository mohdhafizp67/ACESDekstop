@extends('layouts.app-index-admin-dashboard')

@section('content')

        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
                  <div class="card" style="padding: 10px;">

                    @if ($message = Session::get('success'))
                    <div id=alert>
                        <div class="alert alert-card  alert-success" role="alert">
                            <strong>Operation Successful! </strong>
                            {{$message}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                    @elseif ($message = Session::get('error'))
                    <div id="alert">
                      <div class="alert alert-card  alert-danger" role="alert">
                          <strong>Error! </strong>
                          {{$message}}
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                    </div>
                    @endif

                    <!-- <div style="padding: 5px;"></div> -->
                      <h2 class="card-header" style="text-align: center;"><i class="fa fa-question-circle" aria-hidden="true"></i>&nbsp Add New Announcement</h2>
                      <div class="card-body p-0">
                        <div style="padding: 10px;"></div>

                        <form class="" action="{{route('admin.others.announcement.edit') }}" method="POST">
                          @csrf
                          <div class="row">
                            <div class="col-md-2">

                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                 <label>Message</label>
                                 <!-- <input type="text" name="chapter" class="form-control bg-light" required> -->

                                 <textarea id="message" name="message" rows="5" cols="145"></textarea>

                              </div>
                            </div>
                            <div class="col-md-4">

                            </div>
                            <div class="col-md-2">

                            </div>
                          </div>



                        <div class="row">
                          <div class="col-md-2">

                          </div>

                          <div class="col-md-4">

                          </div>
                          <div class="col-md-2">

                          </div>
                        </div>



                        <div class="row">
                          <div class="col-md-2">

                          </div>
                          <div class="col-md-8">
                            <!-- <button class="btn btn-block btn-primary" type="submit">Change Password</button> -->
                            <a href="#" class="btn btn-block btn-primary" data-toggle="modal" data-target="#exampleModal">Post an announcement</a>
                          </div>
                          <div class="col-md-2">

                          </div>
                        </div>

                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                                        <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </a>
                                    </div>
                                    <div class="modal-body">
                                        <p>Are you want to keep this setting?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="#" class="btn btn-secondary" data-dismiss="modal">Cancel</a>
                                        <!-- <a href="#" class="btn btn-primary">Yes</a> -->
                                        <button type="submit" name="button" class="btn btn-primary">Save Settings Quiz</button>
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
        function onlyNumberKey(evt) {

          // Only ASCII charactar in that range allowed
          var ASCIICode = (evt.which) ? evt.which : evt.keyCode
          if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
              return false;
          return true;
        }
        </script>
@endsection
