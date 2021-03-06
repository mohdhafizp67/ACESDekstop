@extends('layouts.app-student-qbadminuigame')

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
    #warning-message { display: none; }
     @media only screen and (orientation:portrait){
         #wrapper { display:none; }
         #warning-message {
           display:block;
           background-color: #000c15;
           text-align: center;
           font-size: 150%;
         }
     }
     @media only screen and (orientation:landscape){
         #warning-message { display:none; }
     }

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

      .fa-facebook-square {
        color: #3b5998;
        background-image: linear-gradient( to bottom, transparent 20%, white 20%, white 93%, transparent 93% );
        background-size: 55%;
        background-position: 70% 0;
        background-repeat: no-repeat;
      }


      .social-buttons {
  list-style-type: none;
  box-sizing: border-box;
  *zoom: 1;
}
.social-buttons:before,
.social-buttons:after {
  box-sizing: border-box;
}
.social-buttons:before,
.social-buttons:after {
  content: " ";
  display: table;
  line-height: 0;
}
.social-buttons:after {
  clear: both;
}
.button__share {
  float: left;
  background-color: #888;
  margin-right: .7em;
  margin-bottom: .7em;
  border-radius: 4px;
  cursor: grab;
}
.button__share:last-child {
  margin-right: 0;
}
.button__share:hover {
  -moz-opacity: 0.8;
  -khtml-opacity: 0.8;
  -webkit-opacity: 0.8;
  opacity: 0.8;
  -ms-filter: progid:DXImageTransform.Microsoft.Alpha(opacity=80);
  filter: alpha(opacity=80);
}
.button__share a {
  color: #fff;
  font-family: Arial, Helvetica, -apple-system, sans-serif;
  font-weight: 700;
  font-style: normal;
  line-height: 1.33;
  text-decoration: none;
  padding: .35em .7em;
  display: inline-block;
}
.button__share--facebook {
  background-color: #3b5998;
  padding: 1%;
}
.button__share--twitter {
  background-color: #55acee;
}

    </style>
  </head>
  <body>

    <div id="wrapper">

<div id="photo" class="container-fluid">
<h1 style="padding-top: 4%; text-align: center;font-size: 350%; color: #fff; font-weight: bold;; padding-bottom: 0%;">LEADERBOARD</h1>
<div class="row" style="padding-top: 0%;">
  <div class="col-md-1">

  </div>
  <div class="col-md-10">
    <table class="table">
      <thead style="background-image: url({{asset('concept/images/galaxy/table.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover;">
        <tr>
          <th style="color: #5ddaff; font-size: 120%;width: 20%;text-align: center;">
            Ranking
          </th>
          <th style="color: #5ddaff; font-size: 120%;width: 20%;text-align: center;">
            Avatar
          </th>
          <th style="color: #5ddaff; font-size: 120%;width: 20%;text-align: center;">
            Name
          </th>
          <th style="color: #5ddaff; font-size: 120%;width: 20%;text-align: center;">
            School
          </th>
          <th style="color: #5ddaff; font-size: 120%;width: 20%;text-align: center;">
            State
          </th>
          <th style="color: #5ddaff; font-size: 120%;width: 20%;text-align: center;">
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
  <div class="col-md-1">

  </div>
  <div class="col-md-10" style="overflow-y:auto;height: 350px;width:100%;">
    <table class="table" style="text-transform: uppercase;">
      @foreach($student as $data)
        <tr class="table" style="background-image: url({{asset('concept/images/galaxy/table2.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover;">
          <td style="color: #fff; font-size: 200%;font-weight: bold;width: 20%;text-align: center;">
            {{ $loop->index + 1  }}
          </td>
          <td style="width: 20%;text-align: center;">
            @if($data->profile_picture!= null)
            <img src="{{ asset( $image_path = str_replace('public', 'storage',  $data->profile_picture)) }}" onError="this.src='http://161.35.227.188/ACES{{ ( $image_path = str_replace('public', 'storage',  $data->profile_picture)) }}';" class="profile-avatar" style="height:40px; width:40px;">
            @else
            <img src="{{ asset('concept/images/defaultprofile.jpg') }}"  class="profile-avatar" style="height:40px; width:40px;">
            @endif <br>
          </td>
          <td style="color: #fff; font-size: 100%;width: 20%;text-align: center;">
            {{$data->name}}
          </td>
          <td style="color: #fff; font-size: 100%;width: 20%;text-align: center;">
            {{$data->school}}
          </td>
          <td style="color: #fff; font-size: 100%;width: 20%;text-align: center;">
            {{$data->state}}
          </td>
          <td style="color: #fff; font-size: 100%; font-weight: bold;width: 20%;text-align: center;">
            {{ $data->total_points ? $data->total_points : 0 }}
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
  <div class="col-md-1">

  </div>
</div>


<div class="row">
  <div class="col-md-1">

  </div>
  <div class="col-md-10">
    <table class="table" style="text-align: center; text-transform: uppercase;">

        <tr class="table" style="background-image: url({{asset('concept/images/galaxy/table2.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover;">
          <td style="color: #fff; font-size: 150%; width: 20%;text-align: center; color:#E9FF00">
            {{$current_user_ranking}}
          </td>
          <td style="width: 20%;text-align: center;">
            @if(Auth::user()->profile_picture != null)
            <img src="{{ asset( $image_path = str_replace('public', 'storage',  Auth::user()->profile_picture)) }}" onError="this.src='http://161.35.227.188/ACES{{ ( $image_path = str_replace('public', 'storage',  Auth::user()->profile_picture)) }}';" class="profile-avatar" style="height:40px; width:40px;">
            @else
            <img src="{{ asset('concept/images/defaultprofile.jpg') }}"  class="profile-avatar" style="height:40px; width:40px;">
            @endif <br>
          </td>
          <td style="color: #fff; font-size: 100%; color:#E9FF00;width: 20%;text-align: center;">
            {{Auth::user()->name}}
          </td>
          <td style="color: #fff; font-size: 100%; color:#E9FF00;width: 20%;text-align: center;">
            {{Auth::user()->school}}
          </td>
          <td style="color: #fff; font-size: 100%; color:#E9FF00;width: 20%;text-align: center;">
            {{Auth::user()->state}}
          </td>
          <td style="color: #fff; font-size: 100%; color:#E9FF00;width: 20%;text-align: center;">
            {{$current_user_marks}}
          </td>
           <td style="color: #fff; font-size: 100%; color:#E9FF00;width: 20%;text-align: center;">
            <span onclick="screenshot()" data-toggle="modal" data-target="#myModal" style="font-size: 15px;">
        			<i class="fas fa-camera"></i>
        		</span>


           <div class="modal fade" id="myModal" role="dialog">
             <div class="modal-dialog">


               <div class="modal-content">
                 <div class="modal-header" style="color: yellow;">
                   <span>Share on Facebook</span>
                   <button type="button" class="close" data-dismiss="modal" style="color: #fff;">&times;</button>
                 </div>
                 <div class="modal-body">
                   <!-- <input type='button' id='but_screenshot' value='Take screenshot' onclick='screenshot();'> -->

                   <div id="mImageBox">
                     <img id="facebook_image" src="{{ asset('concept/images/loading.gif') }}" onError="{{ asset('concept/images/loading.gif') }}" width="100%" height="auto;">
                   </div><br>


                    <ul class="social-buttons" style="padding-left: 40%;">
                      <li id="my_image" onclick="fbs_click(this)" class="button__share button__share--facebook">Facebook</li>

                      <!-- <li id="my_image" onclick="twt_click(this)" class="button__share button__sharetwitter">Twitter</li> -->
                      <!-- <li class="button__share button__sharetwitter"><a href="https://twitter.com/intent/tweet?text=Your%20Content%20Here" target="blank">Twitter</a></li> -->
                    </ul>

                   <!-- <span id="my_image" class="social__link" onclick="fbs_click(this)"><i class="fa fa-facebook-square" style="font-size: 30px;"></i></span>&nbsp -->
                   <!-- <a href='javascript:void((function()%7Bvar%20e=document.createElement(&apos;script&apos;);e.setAttribute(&apos;type&apos;,&apos;text/javascript&apos;);e.setAttribute(&apos;charset&apos;,&apos;UTF-8&apos;);e.setAttribute(&apos;src&apos;,&apos;http://assets.pinterest.com/js/pinmarklet.js?r=&apos;+Math.random()*99999999);document.body.appendChild(e)%7D)());'>Pin</a> -->

                    <!-- <script type="text/javascript">
                      function twt_click() {
                        var url = "http://161.35.227.188/ACES-Desktop";
                        var text = "Come and Join Us! Lets Race";
                        window.open('http://twitter.com/share?url='+encodeURIComponent(url)+'&text='+encodeURIComponent(text), 'left=0,top=0,width=550,height=450,personalbar=0,toolbar=0,scrollbars=0,resizable=0');
                      }
                    </script> -->

                   <script>
                   function fbs_click(TheImg) {

                      var  u=TheImg.getAttribute('src');

                       t=TheImg.getAttribute('alt');

                       var text = "Come and Join Us! Lets Race";
                       window.open('http://www.facebook.com/sharer.php?u='+encodeURIComponent(u)+'&t='+encodeURIComponent(t)+'&text='+encodeURIComponent(text),'sharer','toolbar=0,status=0,width=626,height=436');

                       return false;

                     };


                    </script>



                    <!-- <span id="my_image2" alt=''  src="{{asset( $image_path = str_replace('public', 'storage',  auth()->user()->screenshots)) }}" class="social__link" onclick="twt_click(this)"><i class="fab fa-twitter-square" style="font-size: 30px;"></i></span>

                    <script>
                    function twt_click(TheImg) {

                       var  u=TheImg.getAttribute('src');

                        t=TheImg.getAttribute('alt');

                        window.open('https://twitter.com/intent/tweet?u='+encodeURIComponent(u)+'&t='+encodeURIComponent(t),'sharer','toolbar=0,status=0,width=626,height=436');

                        return false;

                      };


                     </script> -->


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

</div>
<div id="warning-message">
    <img class="logo-img" src="{{ asset('concept/images/StudentDashboard/Logo.png') }}" alt="logo" style="width: 100%;padding-top: 20%;padding-bottom: 20%;">
    <img src="{{asset('concept/images/galaxy/mascot.gif')}}" width="100%" height="auto" style="margin-top: -10%;background-position: 100% 100%;background-repeat: no-repeat;background-size: cover;">


    <span style="color: #fff;text-transform: uppercase;">Best View is in Landscape Mode</span>
    <br><br>
    <span style="color: #fff;text-transform: uppercase;">Please rotate your device to view ACES WEB APP</span>
</div>

  </body>
      <script src="http://hongru.github.io/proj/canvas2image/canvas2image.js"></script>


      <script type='text/javascript'>
      function screenshot(){
         html2canvas(document.body,{background: '#fff'}).then(function(canvas) {

        document.getElementById("facebook_image").src = "{{ asset('concept/images/loading.gif') }}"; // clear previous image
        document.getElementById("my_image").src = "#"; // clear previous image

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
                var image = document.getElementById("my_image");
                var att = document.createAttribute("src");
                console.log("{{ auth()->user()->screenshots }}");
                if(!("{{ auth()->user()->screenshots }}")){
                    location.reload();
                }
                att.value = "{{asset( $image_path = str_replace('public', 'storage',  auth()->user()->screenshots)) }}";
                image.setAttributeNode(att);
                console.log("{{asset( $image_path = str_replace('public', 'storage',  auth()->user()->screenshots)) }}");
                document.getElementById("facebook_image").src = "{{asset( $image_path = str_replace('public', 'storage',  auth()->user()->screenshots)) }}"; // append new data with
             },
             error: function(data, textStatus, error){
               location.reload();
               console.log(error);
             }
          });
        });
      }
      </script>

        {{-- <script>
      // When the user clicks on div, open the popup
      function myFunction() {
        var popup = document.getElementById("myPopup");
        popup.classList.toggle("show");

        $(document).ready(function() {
          $(".myPopup").on("hidden.bs.modal", function() {
          $(".myPopup").html("");
          });
        });
      }
      </script> --}}

</html>
@endsection
