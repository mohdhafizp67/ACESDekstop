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



                    <!-- <div style="padding: 5px;"></div> -->
                      <h2 class="card-header" style="text-align: center;"><i class="fa fa-question-circle" aria-hidden="true"></i>&nbsp Senarai Quiz</h2>
                      <div class="card-body p-0">
                        <div style="padding: 10px;"></div>
                        <a href="{{route('admin.activities.quiz.add')}}" class="btn btn-primary"><i class="fa fa-plus-square" aria-hidden="true"></i> &nbsp Tambah Kuiz Baru</a> &nbsp &nbsp
                        <hr>

                        <div class="table-responsive">
                          <table id="table_data" class="table table-striped table-bordered second" style="width:100%">
                            <thead style="text-align: center;">
                              <tr>
                                <th>Pelajaran</th>
                                <th>Jumlah Soalan</th>
                                <th>Masa Diperuntukkan</th>
                                <th>Peratusan Untuk Lulus</th>
                                <th>Tindakan</th>
                              </tr>
                            </thead>
                            <tbody style="text-align: center;">
                              @foreach($quiz_list as $data)
                              <tr>
                                <td>{{ $data->lesson->lesson_type }} | {{ $data->lesson->lesson_subject }}</td>
                                <td>{{ $data->number_of_question }}</td>
                                <td>{{ $data->time }} Minit</td>
                                <td>{{ $data->percentage_to_pass }}%</td>

                                <td>
                                  <a href="{{ route('admin.activities.quiz.question-banks.list', $data->lesson_id) }}" class="btn btn-secondary"><i class="fa fa-university" aria-hidden="true"></i></a> &nbsp &nbsp
                                  <a href="{{route('admin.activities.quiz.edit', $data->id)}}" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> &nbsp &nbsp
                                  <a href="#" class="btn btn-danger" onclick="pass_id_delete({{ $data->id  }})" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-trash" aria-hidden="true"></i></a>
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
                                        <h5 class="modal-title" id="exampleModalLabel">Pengesahan</h5>
                                        <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </a>
                                    </div>
                                    <div class="modal-body">
                                        <p>Anda pasti mahu memadam quiz ini?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="#" class="btn btn-secondary" data-dismiss="modal">Batal</a>
                                        <!-- <a href="#" class="btn btn-primary">Yes</a> -->
                                        <form class="" action="{{route('admin.activities.quiz.remove')}}" method="post">
                                        @csrf
                                          <button type="submit" name="button" class="btn btn-primary">Padam Quiz</button>
                                          <input type="hidden" id="question_id" name="quiz_id">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </div>
                  </div>
            </div>
        </div>
        <script type="text/javascript">
        function pass_id_delete(id){
         $(".modal-footer #question_id").val( id );
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
