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
                      <h2 class="card-header" style="text-align: center;"><i class="fa fa-book" aria-hidden="true"></i>&nbsp Pelajaran</h2>
                      <div class="card-body p-0">
                        <div style="padding: 10px;"></div>

                        <div class="table-responsive">
                          <table id="table_data" class="table table-striped table-bordered second" style="width:100%">
                            <thead style="text-align: center;">
                              <tr>
                                <th>Pelajaran</th>
                                <!-- <th>Pautan Video</th> -->
                                <th>Tindakan</th>
                              </tr>
                            </thead>
                            <tbody style="text-align: center;">
                              @foreach($lesson_list as $data)
                              <tr>
                                <td>{{ $data->lesson_type }} | {{ $data->lesson_subject }}</td>
                                <!-- <td>
                                  <a href="//{{ $data->video_link }}">{{ $data->video_link }}</a>
                                </td> -->

                                <td>
                                  <a href="#" class="btn btn-primary" onclick="pass_id_lesson({{ $data->id  }})" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                                </td>

                              </tr>
                              @endforeach
                            </tbody>
                          </table>
                        </div>


                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Kemaskini Pautan Video</h5>
                                        <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </a>
                                    </div>
                                    <form action="{{route('admin.activities.lesson.list.update')}}" method="post">
                                    <div class="modal-body">
                                      <div class="form-group">
                                         <label style="color: black !important;">Pautan Video</label>
                                         <input type="text" id="link" name="link" class="form-control bg-light" required>
                                      </div>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="#" class="btn btn-secondary" data-dismiss="modal">Batal</a>
                                        <!-- <a href="#" class="btn btn-primary">Yes</a> -->

                                        @csrf
                                          <button type="submit" name="button" class="btn btn-primary">Muatnaik</button>
                                          <input type="hidden" id="lesson_id" name="lesson_id">
                                    </div>
                                  </form>

                                </div>
                            </div>
                        </div>


                      </div>
                  </div>
            </div>
        </div>

        <script type="text/javascript">
        function pass_id_lesson(id){
         $(".modal-footer #lesson_id").val( id );
       }
        </script>
        <script type="text/javascript">
        $("document").ready(function(){
          setTimeout(function(){
             $("div.alert").remove();
          }, 5000 ); // 5 secs

        });
        </script>
@endsection
