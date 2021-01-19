@extends('layouts.app-student')

@section('content')
<!DOCTYPE html>
<html lang="en" style="background-color: #000;">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ACES I 4.0</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12" style="background-image: url({{asset('concept/images/mascot.jpg')}}); background-position: center top;background-repeat: no-repeat;background-size: cover; padding-top: 4.5%; padding-left: 1%; margin-left: 0%;">

        <h1 style="text-align: justify; font-size: 60px; color: #fff; font-weight:bold; padding-top: 5%;">
  				ACES <font color="#ff0000">i 4.0</font> <br>
          <p style="text-align: justify;padding-bottom: 15%; font-size: 20px; color: #fff;">
    				HALAMAN UTAMA
    			</p>
  			</h1>

        <div style="position: absolute;  top: 70px;  right: 1px;">
          <a href="https://aces.ecerdc.com.my/aces2/">
            <button type="button" class="btn btn-danger" style="margin-top: 0%;margin-left: -25%; border-radius: 5px; font-size: 15px;">
              TENTANG ACES
            </button>
          </a>
        </div>

        <div class="row">
          <div class="col-md-1">

          </div>
          <div class="col-md-5">
            <div class="card text-white bg-success mb-3" style=" background-color: #5e0080 !important;">
              <div class="card-header" style="background-color: #5e0080 !important; font-weight: bold; font-size: 130%;">PENGUMUMAN</div>
              <div class="card-body list-group p-2" style="overflow:auto;height:300px;width:100%; ">
                @foreach($announcement as $data)

                  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                      <div class="d-flex w-100 justify-content-between">
                          <h5 class="mb-1">List group item heading</h5>
                          <small class="text-muted">3 days ago</small>
                      </div>
                      <p class="mb-1">{{$data->user_message}}</p>
                      <small class="text-muted">Donec id elit non mi porta.</small>
                  </a>
                  <div style="padding: 2px;"></div>
                  @endforeach

              </div>
              <div class="card-footer" style="background-color: #5e0080 !important;">
              </div>
            </div>
          </div>
          <div class="col-md-1">

          </div>
          <div class="col-md-4">
            <div class="card text-white bg-success mb-3" style=" background-color: #5e0080 !important;">
              <div class="card-header" style="background-color: #5e0080 !important; font-weight: bold; font-size: 130%;">MESEJ</div>
              <div class="card-body list-group p-2" style="overflow:auto;height:300px;width:100%; ">
                @foreach($announcement as $data)

                  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                      <div class="d-flex w-100 justify-content-between">
                          <h5 class="mb-1">List group item heading</h5>
                          <small class="text-muted">3 days ago</small>
                      </div>
                      <p class="mb-1">{{$data->user_message}}</p>
                      <small class="text-muted">Donec id elit non mi porta.</small>
                  </a>
                  <div style="padding: 2px;"></div>
                  @endforeach

              </div>
              <div class="card-footer" style="background-color: #5e0080 !important;">
              </div>
            </div>
          </div>
          <div class="col-md-1">

          </div>
        </div>
        <div style="padding: 0px;"></div>
      <!-- @if(Auth::user()->profile_picture == null)
      <p style="color: #fff;"><img alt="Bootstrap Image Preview" src="{{asset('concept/images/videopelajaran/FaceIcon.png')}}" style="width: 10%; margin-left: -72%; padding-bottom: 5%;">{{Auth::user()->name}}</p>
      @else
      <p style="color: #fff;"><img alt="Bootstrap Image Preview" src="{{ asset( $image_path = str_replace('public', 'storage',  Auth::user()->profile_picture)) }}" style="width: 10%; margin-left: -72%; padding-bottom: 5%;">{{Auth::user()->name}}</p>
      @endif -->

      <!-- <div class="row" style="padding-bottom: 2%;">
        <div class="col-md-2">

        </div>
				<div class="col-md">
          <button type="button" class="btn btn-success" style="margin-top: -30%;margin-left: -25%; border-radius: 25px;">
						<a href="https://aces.ecerdc.com.my/aces2/">Tentang ACES</a>
					</button>


				</div>
				<div class="col-md">
          <button type="button" class="btn btn-success" style="margin-top: -30%;margin-left: -25%; border-radius: 25px;">
          <a href="{{route('user.student.statistik')}}">Statistik</a>
          </button>

				</div>
				<div class="col-md">
          <button type="button" class="btn btn-success" style="margin-top: -30%;margin-left: -25%; border-radius: 25px;">
          <a href="#">Pencapaian</a>
          </button>

				</div>
        <div class="col-md-2">

        </div>
			</div> -->

      <!-- <div class="row">
        <div class="col-md-2">

        </div>
        <div class="col-md-8">
          <button class="btn btn-success" type="submit">Tukar Kata Laluan</button>

        </div>
        <div class="col-md-2">

        </div>
      </div> -->

		</div>
	</div>


	<!-- <div class="row" style="background-image: linear-gradient(to right top, #031f48, #232d74, #54349c, #9030bd, #d300d3);">
    <div class="col-md-1">

    </div>
    <div class="col-md-5">
      <div style="padding: 10px;"></div>

      <div class="card text-white bg-success mb-3" style=" background-color: #5e0080 !important;">
        <div class="card-header" style="background-color: #5e0080 !important; font-weight: bold; font-size: 120%;">Pengumuman</div>
        <div class="card-body list-group p-2" style="overflow:auto;height:300px;width:100%; ">
          @foreach($announcement as $data)

            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">List group item heading</h5>
                    <small class="text-muted">3 days ago</small>
                </div>
                <p class="mb-1">{{$data->user_message}}</p>
                <small class="text-muted">Donec id elit non mi porta.</small>
            </a>
            <div style="padding: 2px;"></div>
            @endforeach

        </div>
      </div>
    </div>
    <div class="col-md-1">

    </div>
    <div class="col-md-4">
      <div style="padding: 10px;"></div>

      <div class="card text-white bg-success mb-3" style="max-width: 18rem; background-color: #5e0080 !important;">
        <div class="card-header" style="background-color: #5e0080 !important; font-weight: bold; font-size: 120%;">Mesej</div>
        <div class="card-body list-group p-2" style="overflow:auto;height:300px;width:100%; ">
          @foreach($announcement as $data)

            <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                <div class="d-flex w-100 justify-content-between">
                    <h5 class="mb-1">List group item heading</h5>
                    <small class="text-muted">3 days ago</small>
                </div>
                <p class="mb-1">{{$data->user_message}}</p>
                <small class="text-muted">Donec id elit non mi porta.</small>
            </a>
            <div style="padding: 2px;"></div>
            @endforeach


        </div>
      </div>
    </div>
    <div class="col-md-1">

    </div>


    <div class="col-md-2" style="background-image: linear-gradient(to right top, #031f48, #232d74, #54349c, #9030bd, #d300d3);">

    </div>

	</div> -->

</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>
@endsection
