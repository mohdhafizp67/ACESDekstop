@extends('layouts.app-student-qbadminui')

@section('content')

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>LEADERBOARD</title>

    <link rel="stylesheet" href="{{ asset('css/cartajohan.css') }} ">


    <style media="screen">
      .table thead th{
            border-bottom: 2px solid #0000;
            border-top: 1px solid #0000;
      }

      .table td, .table th{
        border-top: 1px solid #2d6c7f;
        border-bottom: 1px solid #2d6c7f;
      }
    </style>
  </head>
  <body>

<div class="container-fluid" style="background-image: url({{asset('concept/images/galaxy/background3.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover;">
<h1 style="padding-top: 1%; text-align: center; color: #fff; font-weight: bold;">LEADERBOARD</h1>
<div class="row" style="padding-top: 0%;">
  <div class="col-md-2">

  </div>
  <div class="col-md-8">
    <table class="table">
      <thead style="background-image: url({{asset('concept/images/galaxy/table.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover;">
        <tr>
          <th style="color: #fff; font-size: 100%;">
            Ranking
          </th>
          <th style="color: #fff; font-size: 100%;">
            Avatar
          </th>
          <th style="color: #fff; font-size: 100%;">
            Name
          </th>
          <th style="color: #fff; font-size: 100%;">
            School
          </th>
          <th style="color: #fff; font-size: 100%;">
            State
          </th>
          <th style="color: #fff; font-size: 100%;">
            Points
          </th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="col-md-2">

  </div>
</div>

<div class="row" style="padding-bottom: 5%;">
  <div class="col-md-2">

  </div>
  <div class="col-md-8" style="overflow-y:auto;height:300px;width:100%;">
    <table class="table" style="text-align: center; text-transform: uppercase;">

        <tr class="table" style="background-image: url({{asset('concept/images/galaxy/table2.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover;">
          <td style="color: #fff; font-size: 150%; text-align: end;font-weight: bold;">
            1
          </td>
          <td style="text-align: end;">
            @if(Auth::user()->profile_picture != null)
            <img src="{{ asset( $image_path = str_replace('public', 'storage',  Auth::user()->profile_picture)) }}"  class="profile-avatar" style="height:40px; width:40px;">
            @else
            <img src="{{asset('concept/images/profile.png')}}"  class="profile-avatar" style="height:40px; width:40px;">
            @endif <br>
          </td>
          <td style="color: #fff; font-size: 100%;">
            <!-- {{Auth::user()->name}} -->
            Mohd Amirul
          </td>
          <td style="color: #fff; font-size: 100%;">
            SMK
          </td>
          <td style="color: #fff; font-size: 100%;">
            Pahang
          </td>
          <td style="color: #fff; font-size: 100%;">
            3000
          </td>
        </tr>

        <tr class="table" style="background-image: url({{asset('concept/images/galaxy/table2.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover;">
          <td style="color: #fff; font-size: 150%;text-align: end; font-weight: bold;">
            2
          </td>
          <td style="text-align: end;">
            @if(Auth::user()->profile_picture != null)
            <img src="{{ asset( $image_path = str_replace('public', 'storage',  Auth::user()->profile_picture)) }}"  class="profile-avatar" style="height:40px; width:40px;">
            @else
            <img src="{{asset('concept/images/profile.png')}}"  class="profile-avatar" style="height:40px; width:40px;">
            @endif <br>
          </td>
          <td style="color: #fff; font-size: 100%;">
            <!-- {{Auth::user()->name}} -->
            Mohd Amirul
          </td>
          <td style="color: #fff; font-size: 100%;">
            SMK
          </td>
          <td style="color: #fff; font-size: 100%;">
            Pahang
          </td>
          <td style="color: #fff; font-size: 100%;">
            3000
          </td>
        </tr>

        <tr class="table" style="background-image: url({{asset('concept/images/galaxy/table2.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover;">
          <td style="color: #fff;font-size: 150%;text-align: end; font-weight: bold;">
            3
          </td>
          <td style="text-align: end;">
            @if(Auth::user()->profile_picture != null)
            <img src="{{ asset( $image_path = str_replace('public', 'storage',  Auth::user()->profile_picture)) }}"  class="profile-avatar" style="height:40px; width:40px;">
            @else
            <img src="{{asset('concept/images/profile.png')}}"  class="profile-avatar" style="height:40px; width:40px;">
            @endif <br>
          </td>
          <td style="color: #fff; font-size: 100%;">
            <!-- {{Auth::user()->name}} -->
            Mohd Amirul
          </td>
          <td style="color: #fff; font-size: 100%;">
            SMK
          </td>
          <td style="color: #fff; font-size: 100%;">
            Pahang
          </td>
          <td style="color: #fff; font-size: 100%;">
            3000
          </td>
        </tr>

        <tr class="table" style="background-image: url({{asset('concept/images/galaxy/table2.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover;">
          <td style="color: #fff;font-size: 150%;text-align: end; font-weight: bold;">
            4
          </td>
          <td style="text-align: end;">
            @if(Auth::user()->profile_picture != null)
            <img src="{{ asset( $image_path = str_replace('public', 'storage',  Auth::user()->profile_picture)) }}"  class="profile-avatar" style="height:40px; width:40px;">
            @else
            <img src="{{asset('concept/images/profile.png')}}"  class="profile-avatar" style="height:40px; width:40px;">
            @endif <br>
          </td>
          <td style="color: #fff; font-size: 100%;">
            <!-- {{Auth::user()->name}} -->
            Mohd Amirul
          </td>
          <td style="color: #fff; font-size: 100%;">
            SMK
          </td>
          <td style="color: #fff; font-size: 100%;">
            Pahang
          </td>
          <td style="color: #fff; font-size: 100%;">
            3000
          </td>
        </tr>

        <tr class="table" style="background-image: url({{asset('concept/images/galaxy/table2.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover;">
          <td style="color: #fff;font-size: 150%;text-align: end; font-weight: bold;">
            5
          </td>
          <td style="text-align: end;">
            @if(Auth::user()->profile_picture != null)
            <img src="{{ asset( $image_path = str_replace('public', 'storage',  Auth::user()->profile_picture)) }}"  class="profile-avatar" style="height:40px; width:40px;">
            @else
            <img src="{{asset('concept/images/profile.png')}}"  class="profile-avatar" style="height:40px; width:40px;">
            @endif <br>
          </td>
          <td style="color: #fff; font-size: 100%;">
            <!-- {{Auth::user()->name}} -->
            Mohd Amirul
          </td>
          <td style="color: #fff; font-size: 100%;">
            SMK
          </td>
          <td style="color: #fff; font-size: 100%;">
            Pahang
          </td>
          <td style="color: #fff; font-size: 100%;">
            3000
          </td>
        </tr>

        <tr class="table" style="background-image: url({{asset('concept/images/galaxy/table2.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover;">
          <td style="color: #fff;font-size: 150%;text-align: end; font-weight: bold;">
            6
          </td>
          <td style="text-align: end;">
            @if(Auth::user()->profile_picture != null)
            <img src="{{ asset( $image_path = str_replace('public', 'storage',  Auth::user()->profile_picture)) }}"  class="profile-avatar" style="height:40px; width:40px;">
            @else
            <img src="{{asset('concept/images/profile.png')}}"  class="profile-avatar" style="height:40px; width:40px;">
            @endif <br>
          </td>
          <td style="color: #fff; font-size: 100%;">
            <!-- {{Auth::user()->name}} -->
            Mohd Amirul
          </td>
          <td style="color: #fff; font-size: 100%;">
            SMK
          </td>
          <td style="color: #fff; font-size: 100%;">
            Pahang
          </td>
          <td style="color: #fff; font-size: 100%;">
            3000
          </td>
        </tr>








      </tbody>
    </table>
  </div>
  <div class="col-md-2">

  </div>
</div>


<div class="row">
  <div class="col-md-1">

  </div>
  <div class="col-md-10">
    <table class="table" style="text-align: center; text-transform: uppercase;">

        <tr class="table" style="background-image: url({{asset('concept/images/galaxy/table2.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover;">
          <td style="color: #fff; font-size: 150%; text-align: end; color:#E9FF00">
            100
          </td>
          <td style="text-align: end;">
            @if(Auth::user()->profile_picture != null)
            <img src="{{ asset( $image_path = str_replace('public', 'storage',  Auth::user()->profile_picture)) }}"  class="profile-avatar" style="height:40px; width:40px;">
            @else
            <img src="{{asset('concept/images/profile.png')}}"  class="profile-avatar" style="height:40px; width:40px;">
            @endif <br>
          </td>
          <td style="color: #fff; font-size: 150%; color:#E9FF00">
            {{Auth::user()->name}}
          </td>
          <td style="color: #fff; font-size: 150%; color:#E9FF00">
            SMK
          </td>
          <td style="color: #fff; font-size: 150%; color:#E9FF00">
            Pahang
          </td>
          <td style="color: #fff; font-size: 150%; color:#E9FF00">
            1000
          </td>
        </tr>



      </tbody>
    </table>
  </div>
  <div class="col-md-1">

  </div>
</div>
</div>

  </body>
</html>
@endsection
