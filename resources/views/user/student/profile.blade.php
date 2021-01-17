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
    <link rel="stylesheet" href="{{ asset('css/profile.css') }} ">

  </head>
  <body>

    <div class="container-fluid" >
      <div class="row" style="background-image: url({{asset('concept/images/profile/bg.jpeg')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover; padding-top: 5%;">
        <div class="col-md-12">
          <h1 style="margin-left: -80%; padding-bottom: 7%; color: #fff;">
						Profil
					</h1>
        </div>
        <div class="col-md-3" style="padding-bottom: 5%;">
          <button type="button" class="btn btn-success" style="margin-top: 0%;margin-left: 0%; border-radius: 25px;">
          <a href="{{route('user.profile.edit')}}">Kemaskini Profil</a>
          </button>
        </div>
        <div class="col-md-3">
          <button type="button" class="btn btn-success" style="margin-top: 0%;margin-left: 0%; border-radius: 25px;">
          	<a href="{{ route('user.change-password') }}">Tukar Kata Laluan</a>
          </button>
        </div>
        <div class="col-md-3">

        </div>
        <div class="col-md-3">

        </div>
      </div>

	<div class="row">
		<div class="col-md-4" style="background-image: url({{asset('concept/images/permainan/Picture2.png')}}); background-position: 100% 40%;background-repeat: no-repeat;background-size: cover; padding-top: 2%; padding-left: 1%; margin-left: 0%;">
      <h3 style="padding-bottom: 5%; font-weight: bold; color: #fff;">Pelajaran</h3>
      <p style="padding-bottom: 13%; color: #fff;">Lorem Ipsum</p>
      <div class="progress blue" style="margin-bottom: 15%;">
                    <span class="progress-left">
                        <span class="progress-bar"></span>
                    </span>
                    <span class="progress-right">
                        <span class="progress-bar"></span>
                    </span>
                    <div class="progress-value">90%</div>
                </div>


		</div>
    <div class="col-md-4" style="background-image: url({{asset('concept/images/permainan/Picture9.png')}}); background-position: 50% 50%;background-repeat: no-repeat;background-size: cover; padding-top: 2%; padding-left: 1%; margin-left: 0%;">
      <h3 style="padding-bottom: 5%; font-weight: bold; color: #fff;">Kuiz</h3>
      <p style="padding-bottom: 13%; color: #fff;">Lorem Ipsum</p>
      <div class="progress blue">
                    <span class="progress-left">
                        <span class="progress-bar"></span>
                    </span>
                    <span class="progress-right">
                        <span class="progress-bar"></span>
                    </span>
                    <div class="progress-value">90%</div>
                </div>

		</div>
    <div class="col-md-4" style="background-image: url({{asset('concept/images/permainan/Picture11.png')}}); background-position: 50% 50%;background-repeat: no-repeat;background-size: cover; padding-top: 2%; padding-left: 1%; margin-left: 0%;">
      <h3 style="padding-bottom: 5%; font-weight: bold; color: #fff;">Permainan</h3>
      <p style="padding-bottom: 13%; color: #fff;">Lorem Ipsum</p>
      <div class="progress blue">
                    <span class="progress-left">
                        <span class="progress-bar"></span>
                    </span>
                    <span class="progress-right">
                        <span class="progress-bar"></span>
                    </span>
                    <div class="progress-value">90%</div>
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
