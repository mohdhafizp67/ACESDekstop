@extends('layouts.app-student-qbadminui')

@section('content')

<!DOCTYPE html>
<html lang="en" style="background-color: #000a11 !important;">
  <head>
    <meta charset="utf-8">
    <title>LEADERBOARD</title>

    <link rel="stylesheet" href="{{ asset('css/cartajohan.css') }} ">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


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

<div class="container-fluid" style="background-image: url({{asset('concept/images/galaxy/background3.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover;padding: 15%;">
<h1 style="padding-top: 1%; text-align: center; color: #fff; font-weight: bold;margin-top: -3%; padding-bottom: 0%;font-size: 550%;">LEADERBOARD</h1>
<div class="row" style="padding-top: 0%;">
  <div class="col-md-2">

  </div>
  <div class="col-md-8">
    <table class="table">
      <thead style="background-image: url({{asset('concept/images/galaxy/table.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover;">
        <tr>
          <th style="color: #5ddaff; font-size: 100%;text-align: justify;">
            Ranking
          </th>
          <th style="color: #5ddaff; font-size: 100text-align: justify;">
            Avatar
          </th>
          <th style="color: #5ddaff; font-size: 100%;text-align: center;">
            Name
          </th>
          <th style="color: #5ddaff; font-size: 100%;text-align: end;">
            School
          </th>
          <th style="color: #5ddaff; font-size: 100%;text-align: end;">
            State
          </th>
          <th style="color: #5ddaff; font-size: 100%;text-align: end;">
            Points
          </th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="col-md-2">

  </div>
</div>

<div class="row" style="padding-bottom: 1%;">
  <div class="col-md-2">

  </div>
  <div class="col-md-8" style="overflow-y:auto;height:300px;width:100%;">
    <table class="table" style="text-align: center; text-transform: uppercase;">

        <tr class="table" style="background-image: url({{asset('concept/images/galaxy/table2.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover;">
          <td style="color: #fff; font-size: 200%; text-align: end;font-weight: bold;">
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
          <td style="color: #fff; font-size: 100%; font-weight: bold;">
            3000
          </td>
        </tr>

        <tr class="table" style="background-image: url({{asset('concept/images/galaxy/table2.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover;">
          <td style="color: #fff; font-size: 200%;text-align: end; font-weight: bold;">
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
          <td style="color: #fff; font-size: 100%; font-weight: bold;">
            3000
          </td>
        </tr>

        <tr class="table" style="background-image: url({{asset('concept/images/galaxy/table2.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover;">
          <td style="color: #fff;font-size: 200%;text-align: end; font-weight: bold;">
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
          <td style="color: #fff; font-size: 100%; font-weight: bold;">
            3000
          </td>
        </tr>

        <tr class="table" style="background-image: url({{asset('concept/images/galaxy/table2.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover;">
          <td style="color: #fff;font-size: 200%;text-align: end; font-weight: bold;">
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
          <td style="color: #fff; font-size: 100%; font-weight: bold;">
            3000
          </td>
        </tr>

        <tr class="table" style="background-image: url({{asset('concept/images/galaxy/table2.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover;">
          <td style="color: #fff;font-size: 200%;text-align: end; font-weight: bold;">
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
          <td style="color: #fff; font-size: 100%; font-weight: bold;">
            3000
          </td>
        </tr>

        <tr class="table" style="background-image: url({{asset('concept/images/galaxy/table2.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover;">
          <td style="color: #fff;font-size: 200%;text-align: end; font-weight: bold;">
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
          <td style="color: #fff; font-size: 100%; font-weight: bold;">
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
          <!-- <td style="color: #fff; font-size: 150%; color:#E9FF00">
            <div class="popup" onclick="myFunction()">Share+
              <span class="popuptext" id="myPopup">
                <a href="#" class="fa fa-facebook"></a>
  	             <a href="#" class="fa fa-twitter"></a>
               </span>
             </div>
          </td> -->


        </tr>

      </tbody>
    </table>
  </div>
  <div class="col-md-1">

  </div>
</div>
</div>

  </body>
  <script>
// When the user clicks on div, open the popup
function myFunction() {
  var popup = document.getElementById("myPopup");
  popup.classList.toggle("show");
}
</script>

</html>
@endsection
