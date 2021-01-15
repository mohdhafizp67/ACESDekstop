@extends('layouts.app-student')

@section('content')
<!DOCTYPE html>
<html lang="en">
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
		<div class="col-md-12" style="background-image: url({{asset('concept/images/StudentDashboard/HeaderBg.jpeg')}}); background-position: 50% 50%;background-repeat: no-repeat;background-size: cover; padding-top: 2%; padding-left: 1%; margin-left: 0%;">

        <h1 style="text-align: justify; font-size: 35px; color: #fff;">
  				ACES <font color="#CF00D8">I 4.0</font> <br>
          <p style="text-align: justify;padding-bottom: 5%; font-size: 23px; color: #fff;">
    				Halaman Utama
    			</p>
  			</h1>



      <!-- @if(Auth::user()->profile_picture == null)
      <p style="color: #fff;"><img alt="Bootstrap Image Preview" src="{{asset('concept/images/videopelajaran/FaceIcon.png')}}" style="width: 10%; margin-left: -72%; padding-bottom: 5%;">{{Auth::user()->name}}</p>
      @else
      <p style="color: #fff;"><img alt="Bootstrap Image Preview" src="{{ asset( $image_path = str_replace('public', 'storage',  Auth::user()->profile_picture)) }}" style="width: 10%; margin-left: -72%; padding-bottom: 5%;">{{Auth::user()->name}}</p>
      @endif -->

      <div class="row" style="padding-bottom: 2%;">
				<div class="col-md-4">
          <p style="text-align: center; font-size: 20px;">
    				<a href="https://aces.ecerdc.com.my/aces2/" class="btn btn-brand">Tentang ACES</a>
    			</p>
				</div>
				<div class="col-md-4">
          <p style="text-align: center; font-size: 20px;">
    				<a href="{{route('user.student.statistik')}}" class="btn btn-brand">Statistik</a>
    			</p>
				</div>
				<div class="col-md-4">
          <p  class="btn btn-brand">
    				Pencapaian
    			</p>
				</div>
			</div>

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
	<div class="row">
    <div class="col-md-2" style="background-image: linear-gradient(to right top, #031f48, #232d74, #54349c, #9030bd, #d300d3);">

    </div>
		<div class="col-md-4" style="background-color: #1E1E21">
			<!-- <h3 style="text-align: justify; font-size: 30px; padding-top: 5%; color: #fff;">
				Notis
			</h3> -->
			<!-- <div class="row">
				<div class="col-md-12" style="background-image: linear-gradient(to right top, #031f48, #232d74, #54349c, #9030bd, #d300d3); border: solid 10px; border-color: #1E1E21">
          <br>
          <p style="color: #fff;text-align: center; font-size: 20px;">
              @foreach($announcement as $data)
              {{$data->user_message}}
              <br>
              @endforeach
    			</p>
          <img alt="Bootstrap Image Preview" src="{{asset('concept/images/StudentDashboard/ps4.jpg')}}" style="width: 100%; height: 85%; background-position: 50% 50%;background-repeat: no-repeat;background-size: cover;">
				</div>
			</div> -->

      <!-- <div class="card">
          <div class="card-body" >
              <h3 class="card-title border-bottom pb-2">Pengumuman</h3>
              <p class="card-text">Vestibulumin augue posuere congue.</p>
              <p class="card-text">Peneit amet, porta semper nisi. Simple card title bottom line</p>
          </div>
      </div> -->
      <div style="padding: 10px;"></div>

      <div class="card">
            <h5 class="card-header">Pengumuman</h5>
            <div class="card-body">
                <div class="list-group" style="overflow:auto;height:325px;width:100%;border:1px solid #ccc">
                  @foreach($announcement as $data)

                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">List group item heading</h5>
                            <small class="text-muted">3 days ago</small>
                        </div>
                        <p class="mb-1">{{$data->user_message}}</p>
                        <small class="text-muted">Donec id elit non mi porta.</small>
                    </a>
                    @endforeach

                </div>
            </div>
        </div>
		</div>
    <div class="col-md-4" style="background-color: #1E1E21">

      <div style="padding: 10px;"></div>

      <div class="card">
            <h5 class="card-header">Pengumuman</h5>
            <div class="card-body">
                <div class="list-group" style="overflow:auto;height:325px;width:100%;border:1px solid #ccc">
                  @foreach($announcement as $data)

                    <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                        <div class="d-flex w-100 justify-content-between">
                            <h5 class="mb-1">List group item heading</h5>
                            <small class="text-muted">3 days ago</small>
                        </div>
                        <p class="mb-1">{{$data->user_message}}</p>
                        <small class="text-muted">Donec id elit non mi porta.</small>
                    </a>
                    @endforeach

                </div>
            </div>
        </div>
		</div>
		<!-- <div class="col-md-6" style="background-color: #1E1E21">
			<h3 style="text-align: justify; font-size: 30px; padding-top: 5%; color: #fff;">
				Mesej
			</h3>
			<div class="row">
				<div class="col-md-12" style="background-image: linear-gradient(to right top, #031f48, #232d74, #54349c, #9030bd, #d300d3); border: solid 10px; border-color: #1E1E21">
					<img alt="Bootstrap Image Preview" src="{{asset('concept/images/StudentDashboard/drone.png')}}" style="width: 100%; height: 100%; background-position: 50% 50%;background-repeat: no-repeat;background-size: cover; padding-top: 3%; padding-bottom:9%;">
				</div>
			</div>
		</div> -->
    <div class="col-md-2" style="background-image: linear-gradient(to right top, #031f48, #232d74, #54349c, #9030bd, #d300d3);">

    </div>
	</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>
@endsection
