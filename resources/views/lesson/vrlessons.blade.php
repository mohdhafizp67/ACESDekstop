@extends('layouts.app-student-qbadminui')

@section('content')
<!DOCTYPE html>
<html lang="en" style="background-color: #130e29 !important;">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>VR Lessons</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="{{ asset('css/pelajaran/vrlessons.css') }} ">

    <style>

    .mySlides {display:none;}

    .modal-dialog {
    max-width: 800px;
    margin: 1.75rem auto;
    }

    .modal-content {
        position: relative;
        display: -ms-flexbox;
        display: flex;
        -ms-flex-direction: column;
        flex-direction: column;
        width: 90%;
        pointer-events: auto;
        background-color: #022a36;
        background-clip: padding-box;
        border: 1px solid rgba(0,0,0,.2);
        border-radius: .3rem;
        outline: 0;
        margin-left: 5%;
    }


    .items {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      user-select: none;
    }

    .items .item1 {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 150px;
      height: 150px;
      border-radius: 50%;
      overflow: hidden;
      transition: all 300ms ease-in-out;
      z-index: -1;
      opacity: 0;
    }

    .item1 img {
      width: 100%;
      height: 90%;
      object-fit: cover;
    }

    .item1.active {
      opacity: 1;
      z-index: 99;
      box-shadow: 0px 0px 105px -35px rgba(0, 0, 0, 0.75);
    }

    .item1.prev {
      z-index: 2;
      opacity: 0.25;
      transform: translate(-125%, -50%);
    }

    .item1.next {
      z-index: 2;
      opacity: 0.25;
      transform: translate(25%, -50%);
    }

    .items .button-container {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 500px;
      z-index: 100;
    }

    .button-container .button {
      color: #fff;
      font-size: 32px;
      cursor: pointer;
      position: relative;
      opacity: 0.75;
      transition: all 300ms ease-in-out;
    }

    .button-container .button:hover {
      opacity: 1;
    }

    .button-container .button:before {
      content: "";
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 50px;
      height: 50px;
      background-color: rgba(0, 0, 0, 1);
      border-radius: 50%;
      z-index: -99;
    }

    .button-container .button:nth-child(1) {
      /* float: left; */
    }

    .button-container .button:nth-child(2) {
      /* float: right; */
    }

    .nav-tabs {
    border-bottom: 0px solid #dee2e6;
    }

    .nav-tabs .nav-item.show .nav-link, .nav-tabs .nav-link.active {
    color: #495057;
    background-color: #013443;
    border-color: #00f0ff #00f0ff #00f0ff;
    }


    </style>
  </head>
  <body>

    <div class="container-fluid"  style="background-image: url({{asset('concept/images/galaxy/background_blue.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover;" >
	<div class="row">

		<div class="col-md-12">
      <h1 style="padding-top: 0%; padding-bottom: 1%; text-align: center;color: #fff; font-size: 250%; font-weight: bold;">VR LESSONS</h1>
		</div>

	</div>
	<div class="row" style="padding-bottom: 5%">
    <div class="col-md-1">

    </div>
    <div class="col-md-10" style="background-image: url({{asset('concept/images/galaxy/panel.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover;">

                    <div class="tab-regular" style="margin-left: 5%;">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Part 1</a>
                            </li>

                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                              <iframe class="embed-responsive-item" width="95%" height="280px" src="https://www.youtube.com/embed/rsnpypOFURw?autoplay=1&controls=0&disablekb=1&rel=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>


                        </div>
                    </div>

    </div>

    <div class="col-md-1">

    </div>

	</div>

  <div class="row" style="padding-top: 1%; padding-bottom: 5%">
    <div class="col-md-2">
      <div class="button-container">
        <div class="button" ><i class="fas fa-angle-left" style="margin-left: 45%;"></i></div>
      </div>
		</div>
    <div class="col-md-8">
      <div class="items">
      		<div class="item1 active">
      			<img src="{{asset('concept/images/pelajaran/icon/colleges.png')}}" style="background-position: 100% 100%;background-repeat: no-repeat;background-size: cover;" data-toggle="modal" data-target="#lokasi">
      		</div>
      		<div class=" item1 next" >
            <img src="{{asset('concept/images/pelajaran/icon/skill.png')}}" style="background-position: 100% 100%;background-repeat: no-repeat;background-size: cover;"  data-toggle="modal" data-target="#kemahiran">
      		</div>
      		<div class="item1" >
            <img src="{{asset('concept/images/pelajaran/icon/career.png')}}" style="background-position: 100% 100%;background-repeat: no-repeat;background-size: cover;"  data-toggle="modal" data-target="#prospek">
      		</div>
          <div class=" item1" >
            <img src="{{asset('concept/images/pelajaran/icon/colleges.png')}}" style="background-position: 100% 100%;background-repeat: no-repeat;background-size: cover;"  data-toggle="modal" data-target="#lokasi">
          </div>
      		<div class="item1 prev">
            <img src="{{asset('concept/images/pelajaran/icon/skill.png')}}" style="background-position: 100% 100%;background-repeat: no-repeat;background-size: cover;"  data-toggle="modal" data-target="#prospek">
      		</div>

      	</div>

        <div class="modal fade" id="lokasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <!-- <div class="modal-header">
                <h5 class="modal-title" id="lokasi">LOKASI KURSUS KEMAHIRAN VR</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div> -->
                <div class="modal-body">
                <!-- <img alt="Bootstrap Image Preview" src="{{asset('concept/images/pelajaran/lokasi.jpg')}}" style="width: 100%; height: auto;"> -->

              <div class="w3-content w3-display-container">
                <img class="career" src="{{asset('concept/images/pelajaran/vrcourses.jpg')}}" style="width:100%">



                <!-- <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
                <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button> -->
              </div>
                </div>

            </div>
            </div>
        </div>

        <div class="modal fade" id="kemahiran" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <!-- <div class="modal-header">
                <h5 class="modal-title" id="lokasi">KEMAHIRAN DAN PENGETAHUAN</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div> -->
                <div class="modal-body">
                  <div class="w3-content w3-display-container">
                    <img class="mySlides" src="{{asset('concept/images/pelajaran/1.jpg')}}" style="width:100%">
                    <img class="mySlides" src="{{asset('concept/images/pelajaran/2.jpg')}}" style="width:100%">
                    <img class="mySlides" src="{{asset('concept/images/pelajaran/3.jpg')}}" style="width:100%">


                    <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
                    <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
                  </div>
                </div>

            </div>
            </div>
        </div>

        <div class="modal fade" id="prospek" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <!-- <div class="modal-header">
                <h5 class="modal-title" id="lokasi">KERJAYA DALAM VR</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div> -->
                <div class="modal-body">
                  <div class="w3-content w3-display-container">
                    <img class="skill" src="{{asset('concept/images/pelajaran/icon/career2.jpeg')}}" style="width:100%">



                    <!-- <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
                    <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button> -->
                  </div>
                </div>

            </div>
            </div>
        </div>





    </div>
    <div class="col-md-2">
      <div class="button-container">
        <div class="button" ><i class="fas fa-angle-right" style="margin-left: 45%;"></i></div>
      </div>
    </div>
  </div>
</div>

    <!-- <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script> -->

    <script>
    const slider = document.querySelector(".items");
  const slides = document.querySelectorAll(".item1");
  const button = document.querySelectorAll(".button");

  let current = 0;
  let prev = 4;
  let next = 1;

  for (let i = 0; i < button.length; i++) {
    button[i].addEventListener("click", () => i == 0 ? gotoPrev() : gotoNext());
  }

  const gotoPrev = () => current > 0 ? gotoNum(current - 1) : gotoNum(slides.length - 1);

  const gotoNext = () => current < 4 ? gotoNum(current + 1) : gotoNum(0);

  const gotoNum = number => {
    current = number;
    prev = current - 1;
    next = current + 1;

    for (let i = 0; i < slides.length; i++) {
      slides[i].classList.remove("active");
      slides[i].classList.remove("prev");
      slides[i].classList.remove("next");
    }

    if (next == 5) {
      next = 0;
    }

    if (prev == -1) {
      prev = 4;
    }

    slides[current].classList.add("active");
    slides[prev].classList.add("prev");
    slides[next].classList.add("next");
  }
    </script>

    <script>
      var slideIndex = 1;
      showDivs(slideIndex);

      function plusDivs(n) {
        showDivs(slideIndex += n);
      }

      function showDivs(n) {
        var i;
        var x = document.getElementsByClassName("mySlides");
        if (n > x.length) {slideIndex = 1}
        if (n < 1) {slideIndex = x.length}
        for (i = 0; i < x.length; i++) {
          x[i].style.display = "none";
        }
        x[slideIndex-1].style.display = "block";
      }
      </script>

      <script>
        var slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n) {
          showDivs(slideIndex += n);
        }

        function showDivs(n) {
          var i;
          var x = document.getElementsByClassName("mySlides");
          if (n > x.length) {slideIndex = 1}
          if (n < 1) {slideIndex = x.length}
          for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
          }
          x[slideIndex-1].style.display = "block";
        }
        </script>

        <script>
          var slideIndex = 1;
          showDivs(slideIndex);

          function plusDivs(n) {
            showDivs(slideIndex += n);
          }

          function showDivs(n) {
            var i;
            var x = document.getElementsByClassName("mySlides");
            if (n > x.length) {slideIndex = 1}
            if (n < 1) {slideIndex = x.length}
            for (i = 0; i < x.length; i++) {
              x[i].style.display = "none";
            }
            x[slideIndex-1].style.display = "block";
          }
          </script>

  </body>
</html>

@endsection
