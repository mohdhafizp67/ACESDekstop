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
                      <h2 class="card-header" style="text-align: center;"><i class="fa fa-users" aria-hidden="true"></i>Senarai Pengguna</h2>
                      <div class="card-body p-0">
                        <div style="padding: 10px;"></div>
                        <div class="table-responsive">
                          <table id="table_data" class="table table-striped table-bordered second" style="width:100%">
                            <thead style="text-align: center;">
                              <tr>
                                <th>Nama</th>
                                <th>Kad Pengenalan</th>
                                <th>Negeri</th>
                                <th>Peranan</th>
                                <th>Status</th>
                                <th>Tindakan</th>
                              </tr>
                            </thead>
                            <tbody style="text-align: center;">
                              @foreach($user_list as $data)
                          <tr>
                            <td>{{ $data->name  }}</td>
                            <td>{{ $data->ic_number  }}</td>
                            <td>{{ $data->state  }}</td>

                            @if($data->is_admin == 1)
                            <td><span class="badge badge-pill badge-brand">Admin</span></td>
                            @elseif($data->is_student == 1)
                            <td><span class="badge badge-pill badge-primary">Pelajar</span></td>
                            @elseif($data->is_ecerdb_personnel == 1)
                            <td><span class="badge badge-pill badge-info">ECERDB Personnel</span></td>
                            @endif

                            @if($data->is_active == 1)
                            <td><span class="badge badge-pill badge-success">Aktif</span></td>
                            @else
                            <td><span class="badge badge-pill badge-danger">Tidak Aktif</span></td>
                            @endif

                            <td>
                              <a href="{{route('admin.others.user-list.edit', $data->id)}}" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
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
                              <div class="modal-dialog modal-dialog-centered" role="document">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Pengesahan</h5>
                                          <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                  </a>
                                      </div>
                                      <div class="modal-body">
                                          <p>Anda pasti mahu menyahaktif pengguna ini?</p>
                                      </div>
                                      <div class="modal-footer">
                                          <a href="#" class="btn btn-secondary" data-dismiss="modal">Batal</a>
                                          <form class="" action="{{ route('admin.others.user-list.disable') }}" method="post">
                                            @csrf
                                            <button type="submit" name="button" class="btn btn-primary">Nyahaktifkan Pengguna</button>
                                            <input type="hidden" id="id_disable" name="id_disable">

                                          </form>
                                      </div>
                                  </div>
                              </div>
                          </div>

                          <div class="modal fade" id="activate_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                              <div class="modal-dialog modal-dialog-centered" role="document">
                                  <div class="modal-content">
                                      <div class="modal-header">
                                          <h5 class="modal-title" id="exampleModalLabel">Pengesahan</h5>
                                          <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                                      <span aria-hidden="true">&times;</span>
                                                  </a>
                                      </div>
                                      <div class="modal-body">
                                        <p>Anda pasti mahu mengaktifkan pengguna ini?</p>
                                      </div>
                                      <div class="modal-footer">
                                          <a href="#" class="btn btn-secondary" data-dismiss="modal">Batal</a>
                                          <form class="" action="{{ route('admin.others.user-list.activate') }}" method="post">
                                            @csrf
                                          <button type="submit" name="button" class="btn btn-primary">Aktifkan</button>
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

        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>

        <script type="text/javascript">
        $("document").ready(function(){
          setTimeout(function(){
             $("div.alert").remove();
          }, 5000 ); // 5 secs

        });
        </script>
@endsection
