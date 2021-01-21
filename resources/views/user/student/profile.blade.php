@extends('layouts.app-student-qbadminui')

@section('content')

<!DOCTYPE html>
<html lang="en" style="background-color: #232121;">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Profil Pelajar</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/profile.css') }} ">

<style>
.btn-profil {
  background: #FF002C;
  box-shadow:10px 10px 0 rgba(0,0,0,.5);
  display:inline-block;
  /* font-size:2em; */
  /* padding:.5em 2em; */
  text-decoration:none;
}

.parallelogram{
  transform: skew(-20deg);
}

</style>
  </head>
  <body>

    <div class="container-fluid" >
      <div class="row" style="background-image: url({{asset('concept/images/mascot4.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover; padding-top: 5%;">
        <div class="col-md-12">
          <h1 style="color: #fff;font-size: 450%;text-align: justify; padding-top: 5%;">
						Profil
					</h1>
        </div>
        <div class="col-md-12" style="text-align: justify; padding-bottom: 5%; margin-left: 0;">
          @if(Auth::user()->profile_picture != null)
          <img src="{{ asset( $image_path = str_replace('public', 'storage',  Auth::user()->profile_picture)) }}"  class="profile-avatar" style="height:100px; width:100px; border-radius: 50px;">
          @else
          <img src="{{asset('concept/images/profile.png')}}"  class="profile-avatar" style="height:100px; width:100px; border-radius: 50px;">
          @endif
        </div>
        <div class="col-md-3">
          <!-- <button type="button" class="btn btn-success" style="margin-top: 0%;margin-left: 0%;">
          <a href="{{route('user.profile.edit')}}">Kemaskini Profil</a>
          </button> -->
        </div>
        <div class="col-md-3">
          <button type="button" class="btn btn-profil parallelogram" style="margin-top: 0%;margin-left: 0%; ">
          	<a href="{{ route('user.change-password') }}">Tukar Kata Laluan</a>
          </button>
        </div>
        <div class="col-md-3" style="padding-bottom: 2%;">
          <button type="button" class="btn btn-profil parallelogram" style="margin-top: 0%;margin-left: 0%;">
          <a href="{{route('user.profile.edit')}}">Kemaskini Profil</a>
          </button>
        </div>
        <div class="col-md-3">
          <!-- <button type="button" class="btn btn-success" style="margin-top: 0%;margin-left: 0%; ">
          	<a href="{{ route('user.change-password') }}">Tukar Kata Laluan</a>
          </button> -->
        </div>
        <!-- <div class="col-md-3">
          <button type="button" class="btn btn-success" style="margin-top: 0%;margin-left: 0%; ">
            <a href="#">Statistik</a>
          </button>
        </div> -->
        <!-- <div class="col-md-3">
          <button type="button" class="btn btn-success" style="margin-top: 0%;margin-left: 0%;">
            <a href="#">Pencapaian</a>
          </button>
        </div> -->
      </div>

	<div class="row" style="padding: 5%; padding-bottom: 0%; background-color: #130E29;">
    <div class="col-md-12">
      <div class="row" style="padding-bottom: 5%;">
      <div class="card col-md-4">
        <h3 style="padding-bottom: 5%;padding-top: 5%; font-weight: bold; color: #000; font-size: 150%;">Pelajaran</h3>

        <div class="progress blue">
                      <span class="progress-left">
                          <span class="progress-bar"></span>
                      </span>
                      <span class="progress-right">
                          <span class="progress-bar"></span>
                      </span>
                      <div class="progress-value">90%</div>
                  </div>
                  <p style="padding-bottom: 5%; color: #000;">KEMAJUAN</p>


  		</div>
      <div class="card col-md-4">
        <h3 style="padding-bottom: 5%;padding-top: 5%; font-weight: bold; color: #000; font-size: 150%;">Kuiz</h3>

        <div class="progress blue">
                      <span class="progress-left">
                          <span class="progress-bar"></span>
                      </span>
                      <span class="progress-right">
                          <span class="progress-bar"></span>
                      </span>
                      <div class="progress-value">90%</div>
                  </div>
                  <p style="padding-bottom: 5%; color: #000;">KEMAJUAN</p>

  		</div>
      <div class="card col-md-4">
        <h3 style="padding-bottom: 5%;padding-top: 5%; font-weight: bold; color: #000; font-size: 150%;">Permainan</h3>

        <div class="progress blue">
                      <span class="progress-left">
                          <span class="progress-bar"></span>
                      </span>
                      <span class="progress-right">
                          <span class="progress-bar"></span>
                      </span>
                      <div class="progress-value">90%</div>
                  </div>
                  <p style="padding-bottom: 5%; color: #000;">KEMAJUAN</p>

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
