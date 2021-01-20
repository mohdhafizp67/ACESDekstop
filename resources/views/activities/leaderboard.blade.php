@extends('layouts.app-student')

@section('content')


<!DOCTYPE html>
<html lang="en" style="background-color: #232121;">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Carta Juara</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/cartajohan.css') }} ">

  </head>

  <body>

    <div class="container-fluid" style="background-image: url({{asset('concept/images/mascot3.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover;">
	<div class="row" style="padding-top: 3%;" >
		<div class="col-md-8">
			<h3 style="font-size: 30px; font-weight: bold;text-align: justify; color: #fff;">
				Carta Juara
			</h3>
		</div>
		<div class="col-md-4">
		</div>
	</div>
  <div class="row" style="padding-bottom: 5%;">
    <div class="col-md-1">

    </div>
    <div class="col-md-2">
      @if(Auth::user()->profile_picture != null)
      <img src="{{ asset( $image_path = str_replace('public', 'storage',  Auth::user()->profile_picture)) }}"  class="profile-avatar" style="height:100px; width:100px;">
      @else
      <img src="{{asset('concept/images/profile.png')}}"  class="profile-avatar" style="height:100px; width:100px;">
      @endif
    </div>
    <div class="col-md-4">
      <h3 style="font-size: 25px; text-align: justify; color: #fff;">
        {{Auth::user()->name}}
      </h3>
    </div>
    <div class="col-md-5">


    </div>
  </div>
	<div class="row">
    <div class="col-md-1">

    </div>
    <div class="col-md-10" style="padding-bottom: 4%;">
      <table class="table table-sm table-bordered table-head">
        <thead>
          <tr>
            <th style="color: #fff; font-size: 20px;">
              Kedudukan
            </th>
            <th style="color: #fff; font-size: 20px;">
              Sekolah
            </th>
            <th style="color: #fff; font-size: 20px;">
              Negeri
            </th>
            <th style="color: #fff; font-size: 20px;">
              Mata
            </th>
          </tr>
        </thead>
        <tbody>
          <tr class="table-first">
            <td>
              199
            </td>
            <td>
              SMK Kuantan
            </td>
            <td>
              Pahang
            </td>
            <td>
              1000
            </td>
          </tr>

        </tbody>
      </table>
    </div>
    <div class="col-md-1">

    </div>

	</div>
	<div class="row" style="padding-bottom: 2%;">
    <div class="col-md-1">

    </div>
    <div class="col-md-10" style="overflow-y:auto;height:350px;width:100%;">
      <table class="table table-sm table-bordered">
        <thead class="table-head">
          <tr>
            <th style="color: #fff; font-size: 20px;">
              Kedudukan
            </th>
            <th style="color: #fff; font-size: 20px;">
              Pelajar
            </th>
            <th style="color: #fff; font-size: 20px;">
              Sekolah
            </th>
            <th style="color: #fff; font-size: 20px;">
              Negeri
            </th>
            <th style="color: #fff;">
              Mata
            </th>
          </tr>
        </thead>
        <tbody>
          <tr class="table-first">
            <td>
              1
            </td>
            <td>
              @if(Auth::user()->profile_picture != null)
              <img src="{{ asset( $image_path = str_replace('public', 'storage',  Auth::user()->profile_picture)) }}"  class="profile-avatar" style="height:40px; width:40px;">
              @else
              <img src="{{asset('concept/images/profile.png')}}"  class="profile-avatar" style="height:40px; width:40px;">
              @endif <br>
              <!-- {{Auth::user()->name}} -->
              Mohd Amirul
            </td>
            <td>
              SMK Kelantan
            </td>
            <td>
              Kelantan
            </td>
            <td>
              3000
            </td>
          </tr>
          <tr class="table-second">
            <td>
              2
            </td>
            <td>
              @if(Auth::user()->profile_picture != null)
              <img src="{{ asset( $image_path = str_replace('public', 'storage',  Auth::user()->profile_picture)) }}"  class="profile-avatar" style="height:40px; width:40px;">
              @else
              <img src="{{asset('concept/images/profile.png')}}"  class="profile-avatar" style="height:40px; width:40px;">
              @endif <br>
              <!-- {{Auth::user()->name}} -->
              Khairul Anwar
            </td>
            <td>
              SMK Pahang
            </td>
            <td>
              Pahang
            </td>
            <td>
              2900
            </td>
          </tr>
          <tr class="table-first">
            <td>
              3
            </td>
            <td>
              @if(Auth::user()->profile_picture != null)
              <img src="{{ asset( $image_path = str_replace('public', 'storage',  Auth::user()->profile_picture)) }}"  class="profile-avatar" style="height:40px; width:40px;">
              @else
              <img src="{{asset('concept/images/profile.png')}}"  class="profile-avatar" style="height:40px; width:40px;">
              @endif <br>
              <!-- {{Auth::user()->name}} -->
              Siti Syazwani
            </td>
            <td>
              SMK Pahang
            </td>
            <td>
              Pahang
            </td>
            <td>
              2800
            </td>
          </tr>
          <tr class="table-second">
            <td>
              4
            </td>
            <td>
              @if(Auth::user()->profile_picture != null)
              <img src="{{ asset( $image_path = str_replace('public', 'storage',  Auth::user()->profile_picture)) }}"  class="profile-avatar" style="height:40px; width:40px;">
              @else
              <img src="{{asset('concept/images/profile.png')}}"  class="profile-avatar" style="height:40px; width:40px;">
              @endif <br>
              <!-- {{Auth::user()->name}} -->
              Muhammad Zaki
            </td>
            <td>
              SMK Pahang
            </td>
            <td>
              Pahang
            </td>
            <td>
              2700
            </td>
          </tr>
          <tr class="table-first">
            <td>
              5
            </td>
            <td>
              @if(Auth::user()->profile_picture != null)
              <img src="{{ asset( $image_path = str_replace('public', 'storage',  Auth::user()->profile_picture)) }}"  class="profile-avatar" style="height:40px; width:40px;">
              @else
              <img src="{{asset('concept/images/profile.png')}}"  class="profile-avatar" style="height:40px; width:40px;">
              @endif <br>
              <!-- {{Auth::user()->name}} -->
              Nur Syaza
            </td>
            <td>
              SMK Pahang
            </td>
            <td>
              Pahang
            </td>
            <td>
              2500
            </td>
          </tr>
          <tr class="table-second">
            <td>
              6
            </td>
            <td>
              @if(Auth::user()->profile_picture != null)
              <img src="{{ asset( $image_path = str_replace('public', 'storage',  Auth::user()->profile_picture)) }}"  class="profile-avatar" style="height:40px; width:40px;">
              @else
              <img src="{{asset('concept/images/profile.png')}}"  class="profile-avatar" style="height:40px; width:40px;">
              @endif <br>
              <!-- {{Auth::user()->name}} -->
              Nur Haikal
            </td>
            <td>
              SMK Pahang
            </td>
            <td>
              Pahang
            </td>
            <td>
              2100
            </td>
          </tr>

          <tr class="table-first">
            <td>
              7
            </td>
            <td>
              @if(Auth::user()->profile_picture != null)
              <img src="{{ asset( $image_path = str_replace('public', 'storage',  Auth::user()->profile_picture)) }}"  class="profile-avatar" style="height:40px; width:40px;">
              @else
              <img src="{{asset('concept/images/profile.png')}}"  class="profile-avatar" style="height:40px; width:40px;">
              @endif <br>
              <!-- {{Auth::user()->name}} -->
              Muhammad Zainol
            </td>
            <td>
              SMK Pahang
            </td>
            <td>
              Pahang
            </td>
            <td>
              2000
            </td>
          </tr>

          <tr class="table-second">
            <td>
              8
            </td>
            <td>
              @if(Auth::user()->profile_picture != null)
              <img src="{{ asset( $image_path = str_replace('public', 'storage',  Auth::user()->profile_picture)) }}"  class="profile-avatar" style="height:40px; width:40px;">
              @else
              <img src="{{asset('concept/images/profile.png')}}"  class="profile-avatar" style="height:40px; width:40px;">
              @endif <br>
              <!-- {{Auth::user()->name}} -->
              Nur Qaisarah
            </td>
            <td>
              SMK Pahang
            </td>
            <td>
              Pahang
            </td>
            <td>
              1700
            </td>
          </tr>

          <tr class="table-first">
            <td>
              9
            </td>
            <td>
              @if(Auth::user()->profile_picture != null)
              <img src="{{ asset( $image_path = str_replace('public', 'storage',  Auth::user()->profile_picture)) }}"  class="profile-avatar" style="height:40px; width:40px;">
              @else
              <img src="{{asset('concept/images/profile.png')}}"  class="profile-avatar" style="height:40px; width:40px;">
              @endif <br>
              <!-- {{Auth::user()->name}} -->
              Sit Zulaikha
            </td>
            <td>
              SMK Pahang
            </td>
            <td>
              Pahang
            </td>
            <td>
              1500
            </td>
          </tr>

          <tr class="table-second">
            <td>
              10
            </td>
            <td>
              @if(Auth::user()->profile_picture != null)
              <img src="{{ asset( $image_path = str_replace('public', 'storage',  Auth::user()->profile_picture)) }}"  class="profile-avatar" style="height:40px; width:40px;">
              @else
              <img src="{{asset('concept/images/profile.png')}}"  class="profile-avatar" style="height:40px; width:40px;">
              @endif <br>
              <!-- {{Auth::user()->name}} -->
              Naqiurudin
            </td>
            <td>
              SMK Pahang
            </td>
            <td>
              Pahang
            </td>
            <td>
              1200
            </td>
          </tr>

        </tbody>
      </table>
    </div>
    <div class="col-md-1">

    </div>

	</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>

@endsection
