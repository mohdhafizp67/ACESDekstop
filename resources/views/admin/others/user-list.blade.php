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

                    <div style="padding: 5px;"></div>
                      <h2 class="card-header" style="text-align: center;"><i class="fa fa-users" aria-hidden="true"></i>User List</h2>
                      <div class="card-body p-0">
                        <div style="padding: 10px;"></div>
                        <div class="table-responsive">
                          <table id="table_data" class="table table-striped table-bordered second" style="width:100%">
                            <thead style="text-align: center;">
                              <tr>
                                <th>Name</th>
                                <th>IC Number</th>
                                <th>State</th>
                                <th>Role</th>
                                <th>Status</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody style="text-align: center;">
                              @foreach($user_list as $data)
                          <tr>
                            <td>{{ $data->name  }}</td>
                            <td>{{ $data->ic_number  }}</td>
                            <td>{{ $data->state  }}</td>

                            @if($data->is_admin == 1)
                            <td><span class="badge badge-pill badge-primary">Admin</span></td>
                            @elseif($data->is_student == 1)
                            <td><span class="badge badge-pill badge-primary">Student</span></td>
                            @elseif($data->is_ecerdb_personnel == 1)
                            <td><span class="badge badge-pill badge-primary">ECERDB Personnel</span></td>
                            @endif

                            @if($data->is_active == 1)
                            <td><span class="badge badge-pill badge-success">Active</span></td>
                            @else
                            <td><span class="badge badge-pill badge-danger">Inactive</span></td>
                            @endif

                            <td>
                              <a href="#" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                              @if($data->is_active == 1)
                              <a href="#" class="btn btn-danger" onclick="pass_id_disable({{ $data->id  }})" data-toggle="modal" data-target="#diactivate_modal"><i class="fa fa-times" aria-hidden="true"></i></a>
                              @else
                              <a href="#" class="btn btn-success" onclick="pass_id_activate({{ $data->id  }})" data-toggle="modal" data-target="#activate_modal"><i class="fa fa-check" aria-hidden="true"></i></a>
                              @endif
                            </td>

                          </tr>
                          @endforeach
                            </tbody>
                          </table>
                          <div class="modal fade" id="diactivate_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                                          <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                  </a>
                                      </div>
                                      <div class="modal-body">
                                          <p>Do you want to disable this user?</p>
                                      </div>
                                      <div class="modal-footer">
                                          <a href="#" class="btn btn-secondary" data-dismiss="modal">Cancel</a>
                                          <form class="" action="{{ route('admin.others.user-list.disable') }}" method="post">
                                            @csrf
                                            <button type="submit" name="button" class="btn btn-primary">Disable</button>
                                            <input type="hidden" id="id_disable" name="id_disable">

                                          </form>
                                      </div>
                                  </div>
                              </div>
                          </div>

                          <div class="modal fade" id="activate_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog" role="document">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                                          <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                  </a>
                                      </div>
                                      <div class="modal-body">
                                        <p>Do you want to activate this user?</p>
                                      </div>
                                      <div class="modal-footer">
                                          <a href="#" class="btn btn-secondary" data-dismiss="modal">Cancel</a>
                                          <form class="" action="{{ route('admin.others.user-list.activate') }}" method="post">
                                            @csrf
                                          <button type="submit" name="button" class="btn btn-primary">Activate</button>
                                          <input type="hidden" id="id_activate" name="id_activate">

                                          </form>

                                      </div>
                                  </div>
                              </div>
                          </div>
                        </div>
                      </div>
                  </div>
            </div>
        </div>

        <script type="text/javascript">
           function pass_id_disable(id){
            $(".modal-footer #id_disable").val( id );
          }

           function pass_id_activate(id){
            $(".modal-footer #id_activate").val( id );
          }
        </script>
@endsection
