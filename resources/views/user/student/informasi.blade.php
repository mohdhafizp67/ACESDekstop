@extends('layouts.app-student')

@section('content')


<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Pencapaian, Statistik, Informasi, Notis, mesej​">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Page 1</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Page-1.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.2.5, nicepage.com">

    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700|Alegreya+Sans+SC:100,100i,300,300i,400,400i,500,500i,700,700i,800,800i,900,900i">



    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "",
		"url": "index.html"
}</script>
    <meta property="og:title" content="Page 1">
    <meta property="og:type" content="website">
    <meta name="theme-color" content="#478ac9">
    <link rel="canonical" href="index.html">
    <meta property="og:url" content="index.html">
		<link rel="stylesheet" href="{{ asset('css/HeaderStudent.css') }} ">

  </head>


<div class="dashboard-ecommerce">

  <body data-home-page="Page-1.html" data-home-page-title="Page 1" class="u-body">
    <section class="u-clearfix u-image u-shading u-section-1" id="sec-ccb0" data-image-width="1600" data-image-height="900">
      <div class="u-clearfix u-sheet u-sheet-1">
        <p class="u-custom-font u-font-oswald u-text u-text-body-alt-color u-text-1">ACES <span class="u-text-custom-color-3">
            <span class="u-text-custom-color-1">IR 4.0</span>
          </span>
        </p>
        <p class="u-custom-font u-font-oswald u-text u-text-body-alt-color u-text-2">Maklimat Terperinci</p>
        <img src="{{asset('concept/images/StudentDashboard/profile.jpg')}}" alt="" class="u-image u-image-circle u-image-1" data-image-width="905" data-image-height="1280">
        <p class="u-text u-text-default u-text-3">{{Auth::user()->name}}</p>
        <!-- <h1 class="u-custom-font u-text u-text-default u-title u-text-4">Pencapaian</h1>
        <h1 class="u-custom-font u-text u-text-default u-title u-text-5"><a href="{{route('user.student.statistik')}}">Statistik</a></h1>
        <h1 class="u-custom-font u-text u-text-default u-title u-text-6">Informasi</h1> -->
      </div>
    </section>
    <div class="container-fluid dashboard-content ">
        <!-- ============================================================== -->
        <!-- pageheader  -->
        <!-- ============================================================== -->
        <!-- <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="page-header">
                    <h2 class="pageheader-title">ACES Dashboard</h2>

                    <div class="page-breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Statistik</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
 -->


        <!-- ============================================================== -->
        <!-- end pageheader  -->
        <!-- ============================================================== -->



        <div class="ecommerce-widget">

            <!-- <div class="row">
              <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                       <div class="card border-3 border-top" style="border-radius: 25px";>
                           <div class="card-body border-radius" style="background-color: #007F7E";>
                               <h3 class="text-statistik">Pelajaran</h3>

                                 <div class="w3-light-grey w3-round">
                                   <div class="w3-container w3-red w3-round" style="width:50%">75%</div>
                                 </div>


                           </div>
                       </div>
                   </div>
                   <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                            <div class="card border-3 border-top" style="border-radius: 25px";>
                                <div class="card-body border-radius" style="background-color: #2A7CB2";>
                                    <h3 class="text-statistik">Kemajuan Kuiz</h3>
                                    <div class="w3-light-grey w3-round">
                                      <div class="w3-container w3-red w3-round" style="width:50%">75%</div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                <div class="card border-3 border-top" style="border-radius: 25px";>
                                    <div class="card-body border-radius" style="background-color: #A364A2";>
                                        <h3 class="text-statistik">Permainan</h3>
                                        <div class="w3-light-grey w3-round">
                                          <div class="w3-container w3-red w3-round" style="width:50%">75%</div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                      <div class="card border-3 border-top" style="border-radius: 25px";>
                                          <div class="card-body border-radius" style="background-color: #C15A7E";>
                                              <h3 class="text-statistik">Jumlah</h3>
                                              <div class="w3-light-grey w3-round">
                                                <div class="w3-container w3-red w3-round" style="width:50%">75%</div>
                                              </div>

                                          </div>
                                      </div>
                                  </div>
            </div> -->
        








    </div>
</div>


</body>


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
</html>
@endsection
