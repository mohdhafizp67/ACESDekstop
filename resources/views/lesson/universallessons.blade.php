@extends('layouts.app-student-qbadminuilesson')

@section('content')
<!DOCTYPE html>
<html lang="en" style="background-color: #000a11 !important;">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="target-densitydpi=device-dpi">


    <title>Universal Integration</title>

    <link rel="stylesheet" href="{{ asset('css/w3schools.css') }}">
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="{{ asset('css/pelajaran/vrlessons.css') }} ">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <style>
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
      width: 100%;
      pointer-events: auto;
      background-color: #022a36;
      background-clip: padding-box;
      border: 1px solid rgba(0,0,0,.2);
      border-radius: .3rem;
      outline: 0;
      /* margin-left: 20%; */
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
      cursor: not-allowed;
      pointer-events: none;

    }

    .item1.next {
      z-index: 2;
      opacity: 0.25;
      transform: translate(25%, -50%);
      cursor: not-allowed;
      pointer-events: none;

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

    .w3-modal-content {
    margin: auto;
    background-color: #000;
    position: relative;
    padding: 0;
    outline: 0;
    width: 800px;
    display: block;
    /* margin-left: 30%; */
    /* margin-top: 5%; */

    }
    .w3-display-topright {
        position: absolute;
        right: 0;
        top: 0;
        font-size: 250%;
        color: red;
    }

    </style>
  </head>
  <body>
    <div id="wrapper">

    <div class="container-fluid">
	<div class="row">

		<div class="col-md-12">
      <h1 style="padding-top: 1%; padding-bottom: 4%;text-align: center;color: #fff; font-weight: bold;font-size: 250%;">UNIVERSAL INTEGRATION</h1>
		</div>

	</div>
	<div class="row" style="padding-bottom: 5%">
    <div class="col-md-1">

    </div>
    <div class="col-md-10" style="background-image: url({{asset('concept/images/galaxy/panel.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover;">

                    <!-- <div class="tab-regular" style="margin-left: 5%;">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Introduction</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#link" role="tab" aria-controls="home" aria-selected="true">Find Your Future</a>
                            </li>

                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                              <iframe class="embed-responsive-item" width="95%" height="280px" src="https://www.youtube.com/embed/n4SeobN_PFM?autoplay=1&controls=0&disablekb=1&rel=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <div class="tab-pane fade show active" id="link" role="tabpanel" aria-labelledby="home-tab">
                              <p><i class="fas fa-arrow-circle-right" style="font-size: 150%; color: #00f0ff; margin-top: 2%;"></i><a href="https://youtu.be/jRQzl8ewDMQ" style="margin-left:2%;">Knowledge and Skill</a></p>
                              <p><i class="fas fa-arrow-circle-right" style="font-size: 150%; color: #00f0ff; margin-top: 0%;"></i><a href="https://youtu.be/reAzWA3oFV8" style="margin-left:2%;">Training</a></p>
                              <p><i class="fas fa-arrow-circle-right" style="font-size: 150%; color: #00f0ff; margin-top: 0%;"></i><a href="https://youtu.be/NqswOcwJBFE" style="margin-left:2%;">Job Virtual Reality Developer</a></p>

                            </div>


                        </div>
                    </div> -->

                    <div class="tab-regular" style="margin-left: 5%;">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true" style="font-size: 100%;">Introduction</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="home2-tab" data-toggle="tab" href="#home2" role="tab" aria-controls="home2" aria-selected="false" style="font-size: 100%;">System Integration Method</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#link" role="tab" aria-controls="profile" aria-selected="false" style="font-size: 100%;">I4.0 Application</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                              <iframe class="embed-responsive-item" width="95%" height="350px" src="https://www.youtube.com/embed/FVvxg-QTbSQ?cc_load_policy=1&autoplay=0&controls=0&disablekb=1&rel=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>

                            <div class="tab-pane fade" id="home2" role="tabpanel" aria-labelledby="home2-tab">
                              <iframe class="embed-responsive-item" width="95%" height="350px" src="https://www.youtube.com/embed/mMyAZRJWLJg?cc_load_policy=1&autoplay=0&controls=0&disablekb=1&rel=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                              </div>

                            <div class="tab-pane fade" id="link" role="tabpanel" aria-labelledby="profile-tab" style="width:95%; height:350px;">

                                <span style="color: rgb(255, 0, 0)">*For more information about I4.0, we have provided some links regarding I4.0</span>

                              <p onclick="document.getElementById('id01').style.display='block'" style="color: #fff;"><i class="fas fa-arrow-circle-right" style="font-size: 150%; color: #00f0ff; margin-top: 2%;"></i><span style="margin-left: 2%;font-size: 150%;pointer-events: none;">Four Steps for Successful Systems Integration in Industry 4.0<span></p>

                              <div id="id01" class="w3-modal">
                                <div class="w3-modal-content w3-card-4">
                                  <header class="">
                                    <span onclick="document.getElementById('id01').style.display='none'"
                                    class="w3-button w3-display-topright">&times;</span>

                                  </header>
                                  <div class="w3-container">
                                    <iframe width="100%" height="300px" src="https://www.youtube.com/embed/3Ar5flx-EjU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                  </div>

                                </div>
                              </div>

                              <script>
                                // Get the modal
                                var modal = document.getElementById('id01');

                                // When the user clicks anywhere outside of the modal, close it
                                window.onclick = function(event) {
                                  if (event.target == modal) {
                                    modal.style.display = "none";
                                  }
                                }
                                </script>

                                <p onclick="document.getElementById('id02').style.display='block'" style="color: #fff;"><i class="fas fa-arrow-circle-right" style="font-size: 150%; color: #00f0ff; margin-top: 2%;"></i><span style="margin-left: 2%;font-size: 150%;pointer-events: none;">Industry 4.0: Software Integration<span></p>

                                <div id="id02" class="w3-modal">
                                  <div class="w3-modal-content w3-card-4">
                                    <header class="">
                                      <span onclick="document.getElementById('id02').style.display='none'"
                                      class="w3-button w3-display-topright">&times;</span>

                                    </header>
                                    <div class="w3-container">
                                      <iframe width="100%" height="300px" src="https://www.youtube.com/embed/wv-fTb-trd8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                    </div>

                                  </div>
                                </div>

                                <script>
                                  // Get the modal
                                  var modal = document.getElementById('id02');

                                  // When the user clicks anywhere outside of the modal, close it
                                  window.onclick = function(event) {
                                    if (event.target == modal) {
                                      modal.style.display = "none";
                                    }
                                  }
                                  </script>

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
            <img src="{{asset('concept/images/pelajaran/lesson/college.png')}}" style="background-position: 100% 100%;background-repeat: no-repeat;background-size: cover;" data-toggle="modal" data-target="#lokasi">
          </div>
          <div class=" item1 next" >
            <img src="{{asset('concept/images/pelajaran/lesson/skill.png')}}" style="background-position: 100% 100%;background-repeat: no-repeat;background-size: cover;"  data-toggle="modal" data-target="#kemahiran">
          </div>
          <div class="item1" >
            <img src="{{asset('concept/images/pelajaran/lesson/career.png')}}" style="background-position: 100% 100%;background-repeat: no-repeat;background-size: cover;"  data-toggle="modal" data-target="#prospek">
          </div>
          <div class=" item1" >
            <img src="{{asset('concept/images/pelajaran/lesson/skill.png')}}" style="background-position: 100% 100%;background-repeat: no-repeat;background-size: cover;"  data-toggle="modal" data-target="#kemahiran">
          </div>
          <div class="item1 prev">
            <img src="{{asset('concept/images/pelajaran/lesson/career.png')}}" style="background-position: 100% 100%;background-repeat: no-repeat;background-size: cover;"  data-toggle="modal" data-target="#prospek">

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

              <div class="w3-content w3-display-container" style="text-align: center">
                <img class="career" src="{{asset('concept/images/pelajaran/courses/universalcourses.png')}}" style="width:100%">

                <span>This slides will be play automatically</span>

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
                  <div class="display-container" style="text-align: center">
                    <img class="career" src="{{asset('concept/images/pelajaran/courses/universalskill.png')}}" style="width:100%">
                    <span>This slides will be play automatically</span>

                  </div>
                  <!-- <div class="w3-content w3-display-container">
                    <img class="mySlides" src="{{asset('concept/images/pelajaran/Page01.jpg')}}" style="width:100%">
                    <img class="mySlides" src="{{asset('concept/images/pelajaran/Page02.jpg')}}" style="width:100%">



                    <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
                    <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
                  </div> -->
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
                  <div class="display-container" style="text-align: center">
                    <img class="career" src="{{asset('concept/images/pelajaran/courses/universalcareer.png')}}" style="width:100%">
                    <span>This slides will be play automatically</span>
                  </div>
                  <!-- <div class="w3-content w3-display-container">
                    <img class="mySlides2" src="{{asset('concept/images/pelajaran/vr/careervr.jpeg')}}" style="width:100%">
                    <img class="mySlides2" src="{{asset('concept/images/pelajaran/vr/careervr2.jpeg')}}" style="width:100%">



                    <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
                    <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
                  </div> -->
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

</div>
<div id="warning-message">
    <img class="logo-img" src="{{ asset('concept/images/StudentDashboard/Logo.png') }}" alt="logo" style="width: 100%;padding-top: 20%;padding-bottom: 20%;">
    <img src="{{asset('concept/images/galaxy/mascot.gif')}}" width="100%" height="auto" style="margin-top: -10%;background-position: 100% 100%;background-repeat: no-repeat;background-size: cover;">


    <span style="color: #fff;text-transform: uppercase;">Best View is in Landscape Mode</span>
    <br><br>
    <span style="color: #fff;text-transform: uppercase;">Please rotate your device to view ACES WEB APP</span>
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

    <!-- <script>
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
      </script> -->

      <!-- <script>
        var slideIndex = 1;
        showDivs(slideIndex);

        function plusDivs(n) {
          showDivs(slideIndex += n);
        }

        function showDivs(n) {
          var i;
          var x = document.getElementsByClassName("mySlides2");
          if (n > x.length) {slideIndex = 1}
          if (n < 1) {slideIndex = x.length}
          for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
          }
          x[slideIndex-1].style.display = "block";
        }

        </script> -->
        <script>
          var slideIndex = 1;
          var slideIndex1 = 1;

          carousel();
          carousel1();

          function carousel() {
            var i;
              var x = document.getElementsByClassName("mySlides1");
              for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
              }
              slideIndex++;
              if (slideIndex > x.length) {
                slideIndex = 1
              }
              x[slideIndex - 1].style.display = "block";
              setTimeout(carousel, 5000); // Change image every 2 seconds
            }

            function carousel1() {
            var i;
              var x = document.getElementsByClassName("mySlides2");
              for (i = 0; i < x.length; i++) {
                x[i].style.display = "none";
              }
              slideIndex1++;
              if (slideIndex1 > x.length) {
                slideIndex1 = 1
              }
              x[slideIndex1 - 1].style.display = "block";
              setTimeout(carousel1, 5000); // Change image every 2 seconds
            }

          </script>

        <script>
        function startTimer(duration, display) {
          var timer = duration, minutes, seconds;
          setInterval(function () {
              minutes = parseInt(timer / 60, 10);
              seconds = parseInt(timer % 60, 10);

              minutes = minutes < 10 ? "0" + minutes : minutes;
              seconds = seconds < 10 ? "0" + seconds : seconds;

              // display.textContent = minutes + ":" + seconds;

              if (--timer < 0) {
                  timer = duration;
              }
          }, 1000);
        }

        window.onload = function () {
          //display timer
          var fiveMinutes = 255 * 1,
              display = document.querySelector('#time');
          startTimer(fiveMinutes, display);

          //timer for auto submit form/quiz
          var setTimer = (1 * 255) * 1000;
          // var setTimer = 5000;
          window.setTimeout(function() {
            $.ajax({
              type:"get",
               url:"/lesson/ajax/update-lesson/8",

              success: function(respond){
              },
              error: function(XMLHttpRequest, textStatus, errorThrown) {
                  console.log("Status: " + textStatus);
                  console.log("Error: " + errorThrown);
              }
            })
           }, setTimer);
        };
        </script>


  </body>
</html>

@endsection
