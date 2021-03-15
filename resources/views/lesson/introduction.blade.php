@extends('layouts.app-student-qbadminuilesson')

@section('content')
<!DOCTYPE html>
<html lang="en" style="background-color: #000a11 !important;">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>VR Lessons</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link rel="stylesheet" href="{{ asset('css/w3schools.css') }}">
    <!-- <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" href="{{ asset('css/pelajaran/vrlessons.css') }} "> -->

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
        width: 100%;
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

    .w3-modal-content {
    margin: auto;
    background-color: #000;
    position: relative;
    padding: 0;
    outline: 0;
    width: 800px;
    display: block;
    margin-left: 30%;
    margin-top: 5%;

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

    <div class="container-fluid"  style="background-image: url({{asset('concept/images/galaxy/background_blue.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover;padding: 0%" >
	<div class="row">

		<div class="col-md-12">
      <h1 style="padding-top: 5%; padding-bottom: 0%;text-align: center;color: #fff; font-weight: bold;font-size: 250%;">INTRODUCTION</h1>
		</div>

	</div>
	<div class="row" style="padding-bottom: 5%">
    <div class="col-md-1">

    </div>
    <div class="col-md-10" style="background-image: url({{asset('concept/images/galaxy/panel.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover;">

                    <div class="tab-regular" style="margin-left: 5%;">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true" style="font-size: 100%;">Introduction</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"  style="font-size: 100%;">Pillars of I 4.0</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#link" role="tab" aria-controls="profile" aria-selected="false"  style="font-size: 100%;">I 4.0 Application</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                              <iframe class="embed-responsive-item" width="95%" height="350px" src="https://www.youtube.com/embed/OVXnu6UE5Yw?cc_load_policy=1&autoplay=0&controls=0&disablekb=1&rel=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                             </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                              <iframe class="embed-responsive-item" width="95%" height="350px" src="https://www.youtube.com/embed/bkdhfHHtULg?cc_load_policy=1&autoplay=0&controls=0&disablekb=1&rel=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                            <div class="tab-pane fade" id="link" role="tabpanel" aria-labelledby="profile-tab" style="width:95%; height:350px;">
                              <p onclick="document.getElementById('id01').style.display='block'" style="color: #fff;"><i class="fas fa-arrow-circle-right" style="font-size: 150%; color: #00f0ff; margin-top: 2%;"></i><span style="margin-left: 2%;font-size: 150%;">What is the Fourth Industrial Revolution?<span></p>

                              <div id="id01" class="w3-modal">
                                <div class="w3-modal-content w3-card-4">
                                  <header class="">
                                    <span onclick="document.getElementById('id01').style.display='none'"
                                    class="w3-button w3-display-topright">&times;</span>

                                  </header>
                                  <div class="w3-container">
                                    <iframe width="100%" height="300px" src="https://www.youtube.com/embed/v9rZOa3CUC8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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

                                <p onclick="document.getElementById('id02').style.display='block'" style="color: #fff;"><i class="fas fa-arrow-circle-right" style="font-size: 150%; color: #00f0ff; margin-top: 2%;"></i><span style="margin-left: 2%;font-size: 150%;">What is Industry 4.0 and what does it mean for you?<span></p>

                                <div id="id02" class="w3-modal">
                                  <div class="w3-modal-content w3-card-4">
                                    <header class="">
                                      <span onclick="document.getElementById('id02').style.display='none'"
                                      class="w3-button w3-display-topright">&times;</span>

                                    </header>
                                    <div class="w3-container">
                                      <iframe width="100%" height="300px" src="https://www.youtube.com/embed/b9mJrzdlfR8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
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

                                  <p onclick="document.getElementById('id03').style.display='block'" style="color: #fff;"><i class="fas fa-arrow-circle-right" style="font-size: 150%; color: #00f0ff; margin-top: 2%;"></i><span style="margin-left: 2%;font-size: 150%;">Industry 4.0<span></p>

                                  <div id="id03" class="w3-modal">
                                    <div class="w3-modal-content w3-card-4">
                                      <header class="">
                                        <span onclick="document.getElementById('id03').style.display='none'"
                                        class="w3-button w3-display-topright">&times;</span>

                                      </header>
                                      <div class="w3-container">
                                        <iframe width="100%" height="300px" src="https://www.youtube.com/embed/IMmnSZ7U1qM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                      </div>

                                    </div>
                                  </div>

                                  <script>
                                    // Get the modal
                                    var modal = document.getElementById('id03');

                                    // When the user clicks anywhere outside of the modal, close it
                                    window.onclick = function(event) {
                                      if (event.target == modal) {
                                        modal.style.display = "none";
                                      }
                                    }
                                    </script>

                                    <p onclick="document.getElementById('id04').style.display='block'" style="color: #fff;"><i class="fas fa-arrow-circle-right" style="font-size: 150%; color: #00f0ff; margin-top: 2%;"></i><span style="margin-left: 2%;font-size: 150%;">4th Industrial Revolution<span></p>

                                    <div id="id04" class="w3-modal">
                                      <div class="w3-modal-content w3-card-4">
                                        <header class="">
                                          <span onclick="document.getElementById('id04').style.display='none'"
                                          class="w3-button w3-display-topright">&times;</span>

                                        </header>
                                        <div class="w3-container">
                                          <iframe width="100%" height="300px" src="https://www.youtube.com/embed/1ezqG29uymo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                        </div>

                                      </div>
                                    </div>

                                    <script>
                                      // Get the modal
                                      var modal = document.getElementById('id04');

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
      			<img src="{{asset('concept/images/pelajaran/icon/industry.png')}}" style="background-position: 100% 100%;background-repeat: no-repeat;background-size: cover;" data-toggle="modal" data-target="#lokasi">
      		</div>
      		<!-- <div class=" item1 next" >
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
      		</div> -->

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
                <img class="mySlides" src="{{asset('concept/images/pelajaran/companiesi40.jpg')}}" style="width:100%">
                <!-- <img class="mySlides" src="{{asset('concept/images/pelajaran/2.jpg')}}" style="width:100%">
                <img class="mySlides" src="{{asset('concept/images/pelajaran/3.jpg')}}" style="width:100%"> -->


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
                    <img class="skill" src="{{asset('concept/images/pelajaran/1.jpg')}}" style="width:100%">



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
                    <img class="career" src="{{asset('concept/images/pelajaran/vrcourses.jpg')}}" style="width:100%">


                    <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
                    <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

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
            var fiveMinutes = 180 * 1,
                display = document.querySelector('#time');
            startTimer(fiveMinutes, display);

            //timer for auto submit form/quiz
            var setTimer = (1 * 180) * 1000;
            // var setTimer = 5000;
            window.setTimeout(function() {
              $.ajax({
                type:"get",
                 url:"/ACES-Desktop/lesson/ajax/update-lesson/1",

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
