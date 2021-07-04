@extends('layouts.app-index-admin-dashboard')

@section('content')

        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
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
                  <div class="card" style="padding: 10px;">

                    <div style="padding: 5px;"></div>
                      <h2 class="card-header" style="text-align: center;"><i class="fas fa-signal" aria-hidden="true"></i>  Audit Trail</h2>
                      <div class="card-body p-0">
                        <div style="padding: 10px;"></div>
                        <form class="" action="{{route('admin.others.audit-trail.audit-trail-log.filter')}}" method="post">
                            @csrf
                          <div class="row">
                            <div class="col-md-1">

                            </div>
                            <div class="col-md-4">
                              <label>From :</label>
                              <input id="tarikh_mula" class="form-control bg-light" type="date" name="tarikh_mula" required>
                            </div>
                            <div class="col-md-4">
                              <label>To :</label>
                              <input id="tarikh_akhir" class="form-control bg-light" type="date" name="tarikh_akhir" required>
                            </div>
                            <div class="col-md-3">
                              <div style="padding:15px;"></div>
                              <button type="submit" class="btn btn-primary m-auto" name="button"><i class="fa fa-search" aria-hidden="true"></i>  Filter</button>
                              <a href="{{ route('admin.others.audit-trail.audit-trail-log') }}" class="btn btn-primary m-auto"><i class="fa fa-refresh" aria-hidden="true"></i> Reset</a>
                            </div>
                          </div>
                        </form>
                        <br>
                        <div class="table-responsive">
                          <table class="table table-striped table-bordered" id="table_data" style="width: 100%;">
                            <!-- Table head -->
                            <thead>
                                <tr>
                                    <th class="all">No</th>
                                    <th class="all">User Name</th>
                                    <th class="all">IC Number</th>
                                    <th class="all">Email</th>
                                    <th class="all">Phone</th>
                                    <th class="all">School</th>
                                    <th class="all">District</th>
                                    <th class="all">IP Address</th>
                                    <th class="all">Time</th>
                                    <th class="all">Database</th>
                                    <th class="all">Event</th>
                                    <th class="all">Previous Data</th>
                                    <th class="all">New Data</th>
                                </tr>
                            </thead>
                            <!-- Table body -->
                            <tbody>
                              @foreach($data as $datas)
                                @if ($datas->user_id != null)
                                        <tr>
                                            @if ($datas->user->name == null)
                                                <td>Tiada</td>
                                            @else
                                                <td>{{ $datas->id }}</td>
                                                <td>{{ ucfirst($datas->user->name) }}</td>
                                            @endif
                                            @if ($datas->user->ic_number == null)
                                                <td>Tiada</td>
                                            @else
                                                <td>{{ $datas->user->ic_number }}</td>
                                            @endif
                                            <td>{{ $datas->user->email }}</td>
                                            <td>{{ $datas->user->phone }}</td>
                                            <td>{{ $datas->user->school }}</td>
                                            <td>{{ $datas->user->district }}</td>

                                            @if ($datas->ip_address == null)
                                                <td>-</td>
                                            @else
                                                <td>{{ $datas->ip_address }}</td>
                                            @endif
                                            <!-- <td>{!! Carbon\Carbon::parse($datas->updated_at)->format('M-d-Y h:i:s') !!}</td> -->
                                            <td>{{ Carbon\Carbon::parse($datas->updated_at)->format('Y-m-d h:i:s') }}
                                            </td>
                                            <td>{{ substr($datas->auditable_type, strpos($datas->auditable_type, '/') + 11) }}
                                            </td>
                                            <td>{{ ucfirst($datas->event) }}</td>

                                            @if ($datas->old_values == '[]')
                                                <td>-</td>
                                            @else
                                                <td>
                                                    <table>
                                                        @foreach (explode(',', $datas->old_values) as $info)
                                                            <tr>
                                                                <td>{{ preg_replace('/[{}]/', '', $info) }}</td>
                                                            </tr>
                                                        @endforeach
                                                    </table>
                                                </td>
                                            @endif
                                            @if ($datas->new_values == '[]')
                                                <td>-</td>
                                            @else
                                                <td>
                                                    <table>
                                                        @foreach (explode(',', $datas->new_values) as $info)
                                                            <tr>
                                                                <td>{{ preg_replace('/[{}]/', '', $info) }}</td>
                                                            </tr>
                                                        @endforeach
                                                    </table>
                                                </td>
                                            @endif

                                        </tr>
                                    @endif
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
                                          <p>Are you sure you want to deactivate this user?</p>
                                      </div>
                                      <div class="modal-footer">
                                          <a href="#" class="btn btn-secondary" data-dismiss="modal">Cancel</a>
                                          <form class="" action="{{ route('admin.others.user-list.disable') }}" method="post">
                                            @csrf
                                            <button type="submit" name="button" class="btn btn-primary">Deactivate User</button>
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
                                        <p>Are you sure you want to enable this user?</p>
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

        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>

        <script type="text/javascript">
        $("document").ready(function(){
          setTimeout(function(){
             $("div.alert").remove();
          }, 5000 ); // 5 secs

        });
        </script>
@endsection
