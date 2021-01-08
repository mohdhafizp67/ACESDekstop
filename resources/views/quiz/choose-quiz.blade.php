@extends('layouts.app-student')

@section('content')



<div class="dashboard-ecommerce">
    <div class="container-fluid dashboard-content ">
        <div class="ecommerce-widget">
          <div class="card" style="padding: 10px; background-color: #9966ff !important;">

            <div style="padding: 5px;"></div>
              <h2 class="card-header" style="text-align: center;"><i class="fa fa-question-circle mr-2" aria-hidden="true"></i>Pilih Quiz</h2>
              <div class="card-body p-0">
                <div style="padding: 10px;"></div>

                <div class="row">
                  @foreach($quiz_list as $data)

                  <div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 col-12">
                    <a href="#" data-toggle="modal" data-target="#exampleModal" onclick="pass_quiz_id({{ $data->id  }})">
                      <div class="card">
                          <div class="card-body">
                              <div class="d-inline-block">
                                  <h5 class="text-muted">Quiz {{ $loop->iteration }} | {{ $data->lesson->lesson_type }}</h5>
                                  <h2 class="mb-0">{{ $data->lesson->lesson_subject }} </h2>
                              </div>
                              <div class="float-right icon-circle-medium  icon-box-lg  bg-info-light mt-1">
                                  <i class="fa fa-gamepad fa-fw fa-sm text-info"></i>
                              </div>
                          </div>
                      </div>
                    </a>
                  </div>
                  @endforeach
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
                                <p>Anda pasti mahu memulakan quiz ini?</p>
                            </div>
                            <div class="modal-footer">
                                <a href="#" class="btn btn-secondary" data-dismiss="modal">Batal</a>
                                <form action="{{route('quiz.start-quiz')}}" method="post">
                                @csrf
                                <button type="submit" name="button" class="btn btn-primary">Mula Quiz</button>
                                <input type="hidden" id="quiz_id" name="quiz_id">
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
function pass_quiz_id(id){
 $(".modal-footer #quiz_id").val( id );
}
</script>

@endsection
