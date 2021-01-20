
@extends('layouts.app-student')


@section('content')

<div class="container-fluid" style="background-image: url({{asset('concept/images/mascot3.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover;">
	<div class="row">
		<div class="col-md-12" style="padding-bottom:10%;">
			<h3 style="padding-top: 10%; font-size: 35px; font-weight: bold; color: #fff;">
				KUIZ
			</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12" style="background-image: url({{asset('concept/images/kuiz/kuiz.png')}}); background-position: 50% 50%;background-repeat: no-repeat;background-size: cover; padding-top: 22%; padding-bottom: 20%;">
			<div class="row">
				<div class="col-md-2">
				</div>
				<div class="col-md-2">
					<p style="margin-top: -98%; margin-left: 38%; font-size: 15px; text-align: center; font-weight: bold;">
						Addictive Manufacturing
					</p>
				</div>
				<div class="col-md-2">
				<a href="#" data-toggle="modal" data-target="#exampleModal" onclick="pass_quiz_id(1)">
          	<p style="margin-top: -98%; margin-left: 22%; font-size: 15px; text-align: center; font-weight: bold; color:#fff;">
						Introduction to IR 4.0
					</p>
        </a>
				</div>
				<div class="col-md-2">
					<p style="margin-top: -101%; margin-left: 0%; font-size: 15px; text-align: center; font-weight: bold;">
					 Advanced Simulation
         </p>
				</div>
				<div class="col-md-2">
					<p style="margin-top: -101%; margin-left: -36%; font-size: 15px; text-align: center; font-weight: bold; color:#fff;">
						Cloud <br> Computing
					</p>
				</div>
				<div class="col-md-2">
				</div>
			</div>
			<div class="row">
				<div class="col-md-2">
				</div>
				<div class="col-md-2">
				</div>
				<div class="col-md-2">
					<p style="margin-top: -1%; margin-left: -265%; font-size: 30px; text-align: center; font-weight: bold;">
						VR
					</p>
				</div>
				<div class="col-md-2">
					<p style="margin-top: -1%; margin-left: -306%; font-size: 15px; text-align: center; font-weight: bold;">
						Autonomous <br> Robot
					</p>
				</div>
				<div class="col-md-2">
					<p style="margin-top: -1%; margin-left: -340%; font-size: 30px; text-align: center; font-weight: bold; color:#fff;">
						VR
					</p>
				</div>
				<div class="col-md-2">
					<p style="margin-top: -1%; margin-left: -368%; font-size: 15px; text-align: center; font-weight: bold;">
						Cyber <br> Security
					</p>
				</div>
			</div>
			<div class="row">
				<div class="col-md-2">
				</div>
				<div class="col-md-2">
					<p style="margin-top: 40%; margin-left: 67%; font-size: 15px; text-align: center; font-weight: bold;">
						Internet of Things
					</p>
				</div>
				<div class="col-md-2">
				</div>
				<div class="col-md-2">
					<p style="margin-top: 55%; margin-left: 10%; font-size: 15px; text-align: center; font-weight: bold;">
						Universal <br>Integration
					</p>
				</div>
				<div class="col-md-2">
				</div>
				<div class="col-md-2">
				</div>
			</div>
		</div>
<!-- Modal -->
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

<!-- <div class="dashboard-ecommerce">
    <div class="container-fluid dashboard-content " style="padding-top: 15%;padding-bottom: 17%;">
        <div class="ecommerce-widget">
          <div class="card" style="padding: 10px; background-color: #9966ff !important;">

            <div style="padding: 5px;"></div>
              <h2 class="card-header" style="text-align: center; color: #000;"><i class="fa fa-question-circle mr-2" aria-hidden="true"></i>Pilih Quiz</h2>
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
</div> -->
<script type="text/javascript">
function pass_quiz_id(id){
 $(".modal-footer #quiz_id").val( id );
}
</script>

@endsection
