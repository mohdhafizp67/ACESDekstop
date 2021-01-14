@extends('layouts.app-student')
@section('content')
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Bootstrap 4, from LayoutIt!</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/permainan.css') }} ">

  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12" style="background-image: url({{asset('concept/images/permainan/drone1.jpg')}}); background-position: 100% 100%;background-repeat: no-repeat;background-size: cover;">
			<div class="row" style="padding-top: 5%; padding-bottom: 5%;">
				<div class="col-md-6">
					<h1 style="color: #fff; margin-left: -40%;  font-size: 35px;">
						Liga Permainan
					</h1>
				</div>
				<div class="col-md-6">
					<img alt="Bootstrap Image Preview" src="{{asset('concept/images/permainan/FaceIcon.png')}}" style="width: 15%; margin-right: -60%;">
				</div>
			</div>
			<div class="row" style="padding-bottom: 5%;">
				<div class="col-md-3 text-block" style="padding-bottom: 5%;">
					<img alt="Bootstrap Image Preview" src="{{asset('concept/images/permainan/Picture1.png')}}" style="border: solid 7px; border-color: #960202; background-image: linear-gradient(to right top, #ff9b00, #ff8300, #ff6900, #ff4800, #ff0000);">
          <h4 style="color: #fff;"><a href="{{route('user.game.drone')}}">Pengenalan</a></h4>
				</div>
				<div class="col-md-3" style="padding-bottom: 5%;">
					<img alt="Bootstrap Image Preview" src="{{asset('concept/images/permainan/Picture2.png')}}" style="border: solid 7px; border-color: #960202; background-image: linear-gradient(to right top, #ff9b00, #ff8300, #ff6900, #ff4800, #ff0000);">
          <h4 style="color: #fff;">Misi 1</h4>
				</div>
				<div class="col-md-3" style="padding-bottom: 5%;">
					<img alt="Bootstrap Image Preview" src="{{asset('concept/images/permainan/Picture3.png')}}" style="border: solid 7px; border-color: #960202; background-image: linear-gradient(to right top, #ff9b00, #ff8300, #ff6900, #ff4800, #ff0000);">
          <h4 style="color: #fff;">Misi 2</h4>
				</div>
				<div class="col-md-3" style="padding-bottom: 5%;">
					<img alt="Bootstrap Image Preview" src="{{asset('concept/images/permainan/Picture4.png')}}" style="border: solid 7px; border-color: #960202; background-image: linear-gradient(to right top, #ff9b00, #ff8300, #ff6900, #ff4800, #ff0000);">
          <h4 style="color: #fff;">Misi 3</h4>
				</div>
			</div>
			<div class="row" style="padding-bottom: 5%;">
				<div class="col-md-3" style="padding-bottom: 5%;">
					<img alt="Bootstrap Image Preview" src="{{asset('concept/images/permainan/Picture5.png')}}" style="border: solid 7px; border-color: #960202; background-image: linear-gradient(to right top, #ff9b00, #ff8300, #ff6900, #ff4800, #ff0000);">
          <h4 style="color: #fff;">Misi 4</h4>
				</div>
				<div class="col-md-3" style="padding-bottom: 5%;">
					<img alt="Bootstrap Image Preview" src="{{asset('concept/images/permainan/Picture10.png')}}" style="border: solid 7px; border-color: #960202; background-image: linear-gradient(to right top, #ff9b00, #ff8300, #ff6900, #ff4800, #ff0000);">
          <h4 style="color: #fff;">Misi 5</h4>
				</div>
				<div class="col-md-3" style="padding-bottom: 5%;">
					<img alt="Bootstrap Image Preview" src="{{asset('concept/images/permainan/Picture7.png')}}" style="border: solid 7px; border-color: #960202; background-image: linear-gradient(to right top, #ff9b00, #ff8300, #ff6900, #ff4800, #ff0000);">
          <h4 style="color: #fff;">Misi 6</h4>
				</div>
				<div class="col-md-3" style="padding-bottom: 5%;">
					<img alt="Bootstrap Image Preview" src="{{asset('concept/images/permainan/Picture8.png')}}" style="border: solid 7px; border-color: #960202; height: 88%; background-image: linear-gradient(to right top, #ff9b00, #ff8300, #ff6900, #ff4800, #ff0000);">
          <h4 style="color: #fff;">Misi 7</h4>
				</div>
			</div>
			<div class="row" style="padding-bottom: 5%;">
				<div class="col-md-4" style="padding-bottom: 5%;">
					<img alt="Bootstrap Image Preview" src="{{asset('concept/images/permainan/Picture9.png')}}" style="border: solid 7px; border-color: #960202; background-image: linear-gradient(to right top, #ff9b00, #ff8300, #ff6900, #ff4800, #ff0000);">
          <h4 style="color: #fff;">Misi 8</h4>
				</div>
				<div class="col-md-4" style="padding-bottom: 5%;">
					<img alt="Bootstrap Image Preview" src="{{asset('concept/images/permainan/Picture10.png')}}" style="border: solid 7px; border-color: #960202; background-image: linear-gradient(to right top, #ff9b00, #ff8300, #ff6900, #ff4800, #ff0000);">
          <h4 style="color: #fff;">Misi 9</h4>
				</div>
				<div class="col-md-4" style="padding-bottom: 5%;">
					<img alt="Bootstrap Image Preview" src="{{asset('concept/images/permainan/Picture11.png')}}" style="border: solid 7px; border-color: #960202; background-image: linear-gradient(to right top, #ff9b00, #ff8300, #ff6900, #ff4800, #ff0000);">
          <h4 style="color: #fff;">Mis Akhir</h4>
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
