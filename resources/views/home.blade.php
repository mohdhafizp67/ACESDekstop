@extends('layouts.app-student-qbadminui')

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
    <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
<!-- <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script> -->
<!-- <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script> -->
<style media="screen">
.circle {
width: 120%;
margin: 6px 6px 20px;
display: inline-block;
position: relative;
text-align: center;
line-height: 1.2;
top: 20px;
}

.circle canvas {
vertical-align: top;
width: 50% !important;
}

.circle strong {
position: absolute;
top: 45px;
left: -23%;
width: 100%;
text-align: center;
line-height: 40px;
font-size: 30px;
color: black;
}

.circle strong i {
font-style: normal;
font-size: 0.6em;
font-weight: normal;
}

.circle span {
display: block;
color: #aaa;
margin-top: 85%;
margin-left: -17%;
}
</style>
  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12" style="background-image: linear-gradient(to top, #231245, #261d52, #272960, #28346e, #28407b, #28417c, #27437e, #27447f, #273c75, #26336b, #252b61, #232357);">


        <h1 style="text-align: center; font-size: 450%; color: #fff; font-weight:bold; padding-top: 0%; padding-left: 9%;">

  				ACES <font color="#ff0000">i 4.0</font> <br>
  			</h1>

        <!-- <div style="position: absolute;  top: 70px;  right: 1px;">
          <a href="https://aces.ecerdc.com.my/aces2/">
            <button type="button" class="btn btn-danger" style="margin-top: 30%;margin-left: -25%; border-radius: 5px; font-size: 15px;">
              TENTANG ACES
            </button>
          </a>
        </div> -->
        <div class="row">
          <div class="col-md-3">
            <div style="padding: 15px;"></div>
            <img src="{{ asset('https://i.redd.it/z394307odi741.png') }}" alt="profile" class="profile-avatar" style=" width:60%;">
            <!-- <div class="progressbar">
            <div class="second circle" data-percent="90">
              <strong></strong>
              <span>KUIZ</span>
            </div>
            </div> -->
          </div>
          <div class="col-md-3">
      		    <div class="progressbar">
              <div class="second circle" data-percent="90">
                <strong></strong>
                <span>KUIZ</span>
              </div>
              </div>
          </div>
          <div class="col-md-3">
            <div class="progressbar1">
            <div class="second circle" data-percent="20">
              <strong></strong>
              <span>animation <br> progress</span>
            </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="progressbar2">
            <div class="second circle" data-percent="70">
              <strong></strong>
              <span>animation <br> progress</span>
            </div>
            </div>
          </div>


        </div>

        <div class="row">
          <div class="col-md-4">

          </div>
          <div class="col-md-4">
            <div class="card text-white bg-success mb-3" style=" background-color: #183252 !important;">
              <div class="card-header" style="background-color: #130E29 !important; font-weight: bold; font-size: 100%; margin: 5px;">PENGUMUMAN</div>
              <div class="card-body list-group p-2" style="overflow:auto;height:200px;width:100%; ">
                @foreach($announcement as $data)

                  <a href="#" class="list-group-item list-group-item-action flex-column align-items-start">
                      <div class="d-flex w-100 justify-content-between">
                          <h5 class="mb-1" style="font-size: 90%">ACES I 4.0</h5>
                          <small class="text-muted">3 days ago</small>
                      </div>
                      <p class="mb-1">{{$data->user_message}}</p>
                      <!-- <small class="text-muted">Donec id elit non mi porta.</small> -->
                  </a>
                  <div style="padding: 2px;"></div>
                  @endforeach

              </div>
              <div class="card-footer" style="background-color: #130E29 !important; margin: 5px;">
              </div>
            </div>
          </div>
          <div class="col-md-4">
          </div>
        </div>
        <div style="padding: 0px;"></div>

		</div>
	</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>
<script src="https://rawgit.com/kottenator/jquery-circle-progress/1.2.2/dist/circle-progress.js"></script>
<script type="text/javascript">
$(document).ready(function ($) {
  function animateElements() {
      $('.progressbar').each(function () {
          var elementPos = $(this).offset().top;
          var topOfWindow = $(window).scrollTop();
          var percent = $(this).find('.circle').attr('data-percent');
          var animate = $(this).data('animate');
          if (elementPos < topOfWindow + $(window).height() - 30 && !animate) {
              $(this).data('animate', true);
              $(this).find('.circle').circleProgress({
                  // startAngle: -Math.PI / 2,
                  value: percent / 100,
                  size : 400,
                  thickness: 20,
                  // fill: {
                  //     color: '#5AAAE7'
                  // }
              }).on('circle-animation-progress', function (event, progress, stepValue) {
                  $(this).find('strong').text((stepValue*100).toFixed(0) + "%");
              }).stop();
          }
      });
  }

  animateElements();
  $(window).scroll(animateElements);
});
</script>

<script type="text/javascript">
$(document).ready(function ($) {
  function animateElements() {
      $('.progressbar1').each(function () {
          var elementPos = $(this).offset().top;
          var topOfWindow = $(window).scrollTop();
          var percent = $(this).find('.circle').attr('data-percent');
          var animate = $(this).data('animate');
          if (elementPos < topOfWindow + $(window).height() - 30 && !animate) {
              $(this).data('animate', true);
              $(this).find('.circle').circleProgress({
                  // startAngle: -Math.PI / 2,
                  value: percent / 100,
                  size : 400,
                  thickness: 20,
                  fill: {
                      gradient: ['#3aeabb', '#fdd250']
                  }
              }).on('circle-animation-progress', function (event, progress, stepValue) {
                  $(this).find('strong').text((stepValue*100).toFixed(0) + "%");
              }).stop();
          }
      });
  }

  animateElements();
  $(window).scroll(animateElements);
});
</script>

<script type="text/javascript">
$(document).ready(function ($) {
  function animateElements() {
      $('.progressbar2').each(function () {
          var elementPos = $(this).offset().top;
          var topOfWindow = $(window).scrollTop();
          var percent = $(this).find('.circle').attr('data-percent');
          var animate = $(this).data('animate');
          if (elementPos < topOfWindow + $(window).height() - 30 && !animate) {
              $(this).data('animate', true);
              $(this).find('.circle').circleProgress({
                  // startAngle: -Math.PI / 2,
                  value: percent / 100,
                  size : 400,
                  thickness: 20,
                  fill: {
                      gradient: ['#3aeabb', '#fdd250']
                  }
              }).on('circle-animation-progress', function (event, progress, stepValue) {
                  $(this).find('strong').text((stepValue*100).toFixed(0) + "%");
              }).stop();
          }
      });
  }

  animateElements();
  $(window).scroll(animateElements);
});
</script>
@endsection
