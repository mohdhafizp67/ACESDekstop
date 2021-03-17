@extends('layouts.app-student-qbadminui')

@section('content')

<!DOCTYPE html>
<html lang="en" style="background-color: #000a11 !important;">
  <head>
    <meta charset="utf-8">
    <title>LEADERBOARD</title>

    <!-- <link rel="stylesheet" href="{{ asset('css/cartajohan.css') }} "> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Include from the CDN -->

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/html2canvas@1.0.0-rc.5/dist/html2canvas.min.js"></script>




    <style media="screen">
      .table thead th{
            border-bottom: 2px solid #0000;
            border-top: 1px solid #0000;
      }

      .table td, .table th{
        border-top: 1px solid #2d6c7f;
        border-bottom: 1px solid #2d6c7f;
      }

      #photo {
  			padding: 4px;
  		}

            /* width */
      ::-webkit-scrollbar {
        width: 5px;
      }

      /* Track */
      ::-webkit-scrollbar-track {
        background: #13526403;
      }

      /* Handle */
      ::-webkit-scrollbar-thumb {
        background: #13526403;
      }

      /* Handle on hover */
      ::-webkit-scrollbar-thumb:hover {
        background: #13526403;
      }
    </style>
  </head>
  <body>

<div id="photo" class="container-fluid" style="background-image: url({{asset('concept/images/galaxy/background3.png')}}); background-position: 0% 100%;background-repeat: no-repeat;background-size: cover;padding: 0%;">
<h1 style="padding-top: 4%; text-align: center;font-size: 350%; color: #fff; font-weight: bold;; padding-bottom: 0%;">LEADERBOARD</h1>
<div class="row" style="padding-top: 0%;">
  <div class="col-md-1">

  </div>
  <div class="col-md-10">
    <table class="table">
      <thead style="background-image: url({{asset('concept/images/galaxy/table.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover;">
        <tr>
          <th style="color: #5ddaff; font-size: 120%;text-align: right;">
            Ranking
          </th>
          <th style="color: #5ddaff; font-size: 120%;text-align: left;">
            Avatar
          </th>
          <th style="color: #5ddaff; font-size: 120%;text-align: left;">
            Name
          </th>
          <th style="color: #5ddaff; font-size: 120%;text-align: center;">
            School
          </th>
          <th style="color: #5ddaff; font-size: 120%;text-align: center;">
            State
          </th>
          <th style="color: #5ddaff; font-size: 120%;text-align: left;">
            Points
          </th>
        </tr>
      </thead>
    </table>
  </div>
  <div class="col-md-1">

  </div>
</div>

<div class="row" style="padding-bottom: 1%;">
  <div class="col-md-2">

  </div>
  <div class="col-md-8" style="overflow-y:auto;height: 350px;width:100%;">
    <table class="table" style="text-align: center; text-transform: uppercase;">
      @foreach($student as $data)
        <tr class="table" style="background-image: url({{asset('concept/images/galaxy/table2.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover;">
          <td style="color: #fff; font-size: 200%; text-align: end;font-weight: bold;padding-left: 5%;">
            {{ $loop->index + 1  }}
          </td>
          <td style="text-align: end;padding-left:7%;">
            @if($data->profile_picture!= null)
            <img src="{{ asset( $image_path = str_replace('public', 'storage',  $data->profile_picture)) }}" onError="this.src='http://161.35.227.188/ACES{{ ( $image_path = str_replace('public', 'storage',  $data->profile_picture)) }}';" class="profile-avatar" style="height:40px; width:40px;">
            @else
            <img src="{{ asset('https://i.redd.it/z394307odi741.png') }}"  class="profile-avatar" style="height:40px; width:40px;">
            @endif <br>
          </td>
          <td style="color: #fff; font-size: 100%;padding-left: 5%;">
            {{$data->name}}
          </td>
          <td style="color: #fff; font-size: 100%;">
            {{$data->school}}
          </td>
          <td style="color: #fff; font-size: 100%;">
            {{$data->state}}
          </td>
          <td style="color: #fff; font-size: 100%; font-weight: bold;">
            {{ $data->total_points ? $data->total_points : 0 }}
          </td>
        </tr>
        @endforeach
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
            {{$current_user_ranking}}
          </td>
          <td style="text-align: end;">
            @if(Auth::user()->profile_picture != null)
            <img src="{{ asset( $image_path = str_replace('public', 'storage',  Auth::user()->profile_picture)) }}" onError="this.src='http://161.35.227.188/ACES{{ ( $image_path = str_replace('public', 'storage',  Auth::user()->profile_picture)) }}';" class="profile-avatar" style="height:40px; width:40px;">
            @else
            <img src="{{ asset('https://i.redd.it/z394307odi741.png') }}"  class="profile-avatar" style="height:40px; width:40px;">
            @endif <br>
          </td>
          <td style="color: #fff; font-size: 100%; color:#E9FF00">
            {{Auth::user()->name}}
          </td>
          <td style="color: #fff; font-size: 100%; color:#E9FF00">
            {{Auth::user()->school}}
          </td>
          <td style="color: #fff; font-size: 100%; color:#E9FF00">
            {{Auth::user()->state}}
          </td>
          <td style="color: #fff; font-size: 100%; color:#E9FF00">
            {{$current_user_marks}}
          </td>
           <td style="color: #fff; font-size: 100%; color:#E9FF00">
            <span onclick="screenshot()" data-toggle="modal" data-target="#myModal" style="font-size: 15px;">
        			<i class="fas fa-camera"></i>
        		</span>


           <div class="modal fade" id="myModal" role="dialog">
             <div class="modal-dialog">


               <div class="modal-content">
                 <div class="modal-header">
                   <button type="button" class="close" data-dismiss="modal">&times;</button>
                 </div>
                 <div class="modal-body">
                   <input type='button' id='but_screenshot' value='Take screenshot' onclick='screenshot();'>

                   <div id="mImageBox">
                     <img id="facebook_image" width="400px" height="400px">
                   <button id="my_image" alt=''  src="{{asset( $image_path = str_replace('public', 'storage',  auth()->user()->screenshots)) }}" class="social__link" onclick="fbs_click(this)"><i class="fa fa-facebook"></i></button>
                   </div>
                   <script>
                   function fbs_click(TheImg) {

                      var  u=TheImg.getAttribute('src');

                       t=TheImg.getAttribute('alt');

                       window.open('http://www.facebook.com/sharer.php?u='+encodeURIComponent(u)+'&t='+encodeURIComponent(t),'sharer','toolbar=0,status=0,width=626,height=436');

                       return false;

                      }
                    </script>

                 </div>

               </div>

             </div>
           </div>
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
      <script src="http://hongru.github.io/proj/canvas2image/canvas2image.js"></script>

      <script type='text/javascript'>
      function screenshot(){
         html2canvas(document.body,{background: '#fff'}).then(function(canvas) {

        document.getElementById("facebook_image").src = "#"; // clear previous image

          document.body.appendChild(canvas);
          // Get base64URL
          var base64URL = canvas.toDataURL("image/jpg",1.0);
          var image = base64URL.replace(/^data:image\/(png|jpg);base64,/, "");
          // console.log(base64URL);

          // AJAX request
          $.ajax({
             url: 'upload/screenshot',
             type: 'post',
             dataType: 'text',
             // contentType: false,
             headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
             },
             data: {
               image: image
             },
             success: function(data, textStatus){
                console.log(data);
                document.getElementById("facebook_image").src = "{{asset( $image_path = str_replace('public', 'storage',  auth()->user()->screenshots)) }}"; // append new data with
             },
             error: function(data, textStatus, error){
               console.log(error);
             }
          });
        });
      }
      </script>

        <script>
      // When the user clicks on div, open the popup
      function myFunction() {
        var popup = document.getElementById("myPopup");
        popup.classList.toggle("show");
      }
      </script>

</html>
@endsection
