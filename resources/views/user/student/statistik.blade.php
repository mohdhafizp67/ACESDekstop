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
    <!-- <link rel="stylesheet" href="{{ asset('css/HeaderStudent.css') }} "> -->

  </head>
  <body>

    <div class="container-fluid" style="padding-top: 5%; background-image: url({{asset('concept/images/profile/bg.jpeg')}}); background-position: 50% 50%;background-repeat: no-repeat;background-size: cover;">
	<div class="row">
		<div class="col-md-12">
			<h1 style="margin-left: -70%; padding-bottom: 5%; color: #fff;">
				Statistik Pelajar
			</h1>

		</div>
    <div class="col-md-12" style="padding-bottom: 5%;">
      <h3 style="color: #fff;"><img alt="Bootstrap Image Preview" src="{{asset('concept/images/permainan/FaceIcon.png')}}" style="width: 10%; height: auto; margin-left: -70%;">{{Auth::user()->name}}</h3>
    </div>
	</div>
	<div class="row">
		<div class="col-md-12">
		</div>
	</div>

</div>
<div class="row">
  <div class="col-md-12">

    <div class="">
        <h5 class="card-header" style="text-align: justify;">Kemajuan Pelajar</h5>
        <div class="card-body">

          <div class="bg-style">

            <div class="wrapper">
              <div class="row pt-4 pb-4">
                <div class="col-6 col-sm-3">
                  <div class="counter" data-cp-percentage="75" data-cp-color="#00bfeb">
                  </div><br>
                  <h4>Pelajaran</h4>

                </div>
                <div class="col-6 col-sm-3">
                  <div class="counter" data-cp-percentage="65" data-cp-color="#EA4C89"></div><br>
                  <h4>Kuiz</h4>

                </div>
                <div class="col-6 col-sm-3">
                  <div class="counter" data-cp-percentage="35" data-cp-color="#FF675B"></div><br>

                  <h4>Permainan</h4>

                </div>
                <div class="col-6 col-sm-3">
                  <div class="counter" data-cp-percentage="44" data-cp-color="#FF9900"></div><br>
                  <h4>Level</h4>

                </div>
              </div>
            </div>
            <button class="btn-update">Semak Semula</button>
          </div>
          <!-- <p class="p-3">
            HTML and JS Circular Progress bar, developed with canvas and some nice easing- animation. Feel free to use. <br />You could mention this codepen
          </p> -->
        </div>
    </div>

  </div>
</div>
    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>

    <script type="text/javascript">
    document.addEventListener("DOMContentLoaded", function() {

    var circleProgress = (function(selector) {
      var wrapper = document.querySelectorAll(selector);
      Array.prototype.forEach.call(wrapper, function(wrapper, i) {
        var wrapperWidth,
          wrapperHeight,
          percent,
          innerHTML,
          context,
          lineWidth,
          centerX,
          centerY,
          radius,
          newPercent,
          speed,
          from,
          to,
          duration,
          start,
          strokeStyle,
          text;

        var getValues = function() {
          wrapperWidth = parseInt(window.getComputedStyle(wrapper).width);
          wrapperHeight = wrapperWidth;
          percent = wrapper.getAttribute('data-cp-percentage');
          innerHTML = '<span class="percentage"><strong>' + percent + '</strong> %</span><canvas class="circleProgressCanvas" width="' + (wrapperWidth * 2) + '" height="' + wrapperHeight * 2 + '"></canvas>';
          wrapper.innerHTML = innerHTML;
          text = wrapper.querySelector(".percentage");
          canvas = wrapper.querySelector(".circleProgressCanvas");
          wrapper.style.height = canvas.style.width = canvas.style.height = wrapperWidth + "px";
          context = canvas.getContext('2d');
          centerX = canvas.width / 2;
          centerY = canvas.height / 2;
          newPercent = 0;
          speed = 1;
          from = 0;
          to = percent;
          duration = 1000;
          lineWidth = 25;
          radius = canvas.width / 2 - lineWidth;
          strokeStyle = wrapper.getAttribute('data-cp-color');
          start = new Date().getTime();
        };

        function animate() {
          requestAnimationFrame(animate);
          var time = new Date().getTime() - start;
          if (time <= duration) {
            var x = easeInOutQuart(time, from, to - from, duration);
            newPercent = x;
            text.innerHTML = Math.round(newPercent) + " %";
            drawArc();
          }
        }

        function drawArc() {
          var circleStart = 1.5 * Math.PI;
          var circleEnd = circleStart + (newPercent / 50) * Math.PI;
          context.clearRect(0, 0, canvas.width, canvas.height);
          context.beginPath();
          context.arc(centerX, centerY, radius, circleStart, 4 * Math.PI, false);
          context.lineWidth = lineWidth;
          context.strokeStyle = "#ddd";
          context.stroke();
          context.beginPath();
          context.arc(centerX, centerY, radius, circleStart, circleEnd, false);
          context.lineWidth = lineWidth;
          context.strokeStyle = strokeStyle;
          context.stroke();

        }
        var update = function() {
          getValues();
          animate();
        }
        update();

        var btnUpdate = document.querySelectorAll(".btn-update")[0];
        btnUpdate.addEventListener("click", function() {
          wrapper.setAttribute("data-cp-percentage", Math.round(getRandom(5, 95)));
          update();
        });
        wrapper.addEventListener("click", function() {
          update();
        });

        var resizeTimer;
        window.addEventListener("resize", function() {
          clearTimeout(resizeTimer);
          resizeTimer = setTimeout(function() {
            clearTimeout(resizeTimer);
            start = new Date().getTime();
            update();
          }, 250);
        });
      });

      //
      // http://easings.net/#easeInOutQuart
      //  t: current time
      //  b: beginning value
      //  c: change in value
      //  d: duration
      //
      function easeInOutQuart(t, b, c, d) {
        if ((t /= d / 2) < 1) return c / 2 * t * t * t * t + b;
        return -c / 2 * ((t -= 2) * t * t * t - 2) + b;
      }

    });

    circleProgress('.counter');

    // Gibt eine Zufallszahl zwischen min (inklusive) und max (exklusive) zurück
    function getRandom(min, max) {
      return Math.random() * (max - min) + min;
    }
    });
    </script>

  </body>
</html>

@endsection
