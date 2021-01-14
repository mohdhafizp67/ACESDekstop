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
		<div class="col-md-12" style="background-image: url({{asset('concept/images/StudentDashboard/HeaderBg.jpeg')}}); background-position: 50% 50%;background-repeat: no-repeat;background-size: cover; padding-top: 10%;margin-left: 0%;">
			<h1 style="text-align: justify; font-size: 35px; color: #fff;">
				ACES <font color="#CF00D8">I 4.0</font>
			</h1>
			<p style="text-align: justify;padding-bottom: 5%; color: #fff;">
				Maklumat Terperinci
			</p>
      <p style="color: #fff;"><img alt="Bootstrap Image Preview" src="{{asset('concept/images/videopelajaran/FaceIcon.png')}}" style="width: 10%; margin-left: -72%; padding-bottom: 5%;">{{Auth::user()->name}}</p>
			<div class="row" style="padding-bottom: 2%;">
				<div class="col-md-4">
          <p style="text-align: center; font-size: 20px;">
    				<a href="https://aces.ecerdc.com.my/aces2/">Tentang ACES</a>
    			</p>
				</div>
				<div class="col-md-4">
          <p style="text-align: center; font-size: 20px;">
    				<a href="{{route('user.student.statistik')}}">Statistik</a>
    			</p>
				</div>
				<div class="col-md-4">
          <p style="text-align: center; font-size: 20px; color: #fff;">
    				Pencapaian
    			</p>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6" style="background-color: #1E1E21">
			<h3 style="text-align: justify; font-size: 30px; padding-top: 5%; color: #fff;">
				Notis
			</h3>
			<div class="row">
				<div class="col-md-12" style="background-image: linear-gradient(to right top, #031f48, #232d74, #54349c, #9030bd, #d300d3); border: solid 10px; border-color: #1E1E21">
          <br>
          <p style="color: #fff;text-align: center; font-size: 20px;">
              @foreach($announcement as $data)
              {{$data->user_message}}
              <br>
              @endforeach
    			</p>
          <img alt="Bootstrap Image Preview" src="{{asset('concept/images/StudentDashboard/ps4.jpg')}}" style="width: 50%; height: auto; background-position: 50% 50%;background-repeat: no-repeat;background-size: cover; padding-bottom: 10%; margin-top: 15%;">
				</div>
			</div>
		</div>
		<div class="col-md-6" style="background-color: #1E1E21">
			<h3 style="text-align: justify; font-size: 30px; padding-top: 5%; color: #fff;">
				Mesej
			</h3>
			<div class="row">
				<div class="col-md-12" style="background-image: linear-gradient(to right top, #031f48, #232d74, #54349c, #9030bd, #d300d3); border: solid 10px; border-color: #1E1E21">
					<img alt="Bootstrap Image Preview" src="{{asset('concept/images/StudentDashboard/mesej.png')}}" style="width: 100%; height: 100%; background-position: 50% 50%;background-repeat: no-repeat;background-size: cover;">
				</div>
			</div>
		</div>
	</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>
@endsection
