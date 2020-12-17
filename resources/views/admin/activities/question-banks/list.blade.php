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
                      <h2 class="card-header" style="text-align: center;"><i class="fa fa-university" aria-hidden="true"></i>&nbsp Question Bank</h2>
                      <div class="card-body p-0">
                        <div style="padding: 10px;"></div>
                        <a href="{{route('admin.activities.question-banks.add')}}" class="btn btn-primary"><i class="fa fa-plus-square" aria-hidden="true"></i> &nbsp Add New Question</a>

                        <hr>

                        <div class="table-responsive">
                          <table id="table_data" class="table table-striped table-bordered second" style="width:100%">
                            <thead style="text-align: center;">
                              <tr>
                                <th>Question</th>
                                <th>Chapter</th>
                                <th>Action</th>
                              </tr>
                            </thead>
                            <tbody style="text-align: center;">
                          @foreach($question_list as $data)
                          <tr>
                            <td>{{ $data->question }}</td>
                            <td>{{ $data->chapter }}</td>


                            <td>
                              <a href="{{route('admin.activities.question-banks.edit', $data->id)}}" class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></a>
                              <a href="#" class="btn btn-danger" onclick="pass_id_delete({{ $data->id  }})" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-trash" aria-hidden="true"></i></a>

                              <!-- <a href="{{route('admin.activities.question-banks.remove', $data->id)}}" class="btn btn-danger" ><i class="fa fa-trash" aria-hidden="true"></i></a> -->
                            </td>

                          </tr>
                          @endforeach
                            </tbody>
                          </table>
                        </div>
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                                        <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </a>
                                    </div>
                                    <div class="modal-body">
                                        <p>Do you want to remove this question?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="#" class="btn btn-secondary" data-dismiss="modal">Cancel</a>
                                        <!-- <a href="#" class="btn btn-primary">Yes</a> -->
                                        <form class="" action="{{route('admin.activities.question-banks.remove')}}" method="post">
                                        @csrf
                                          <button type="submit" name="button" class="btn btn-primary">Remove Question</button>
                                          <input type="hidden" id="question_id" name="question_id">
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
@endsection
