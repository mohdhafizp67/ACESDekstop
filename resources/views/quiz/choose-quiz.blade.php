@extends('layouts.app-student-qbadminui')


@section('content')


<!DOCTYPE html>
<html lang="en" style="background-color: #000a11 !important;">
  <head>
    <meta charset="utf-8">
    <title>PELAJARAN I 4.0</title>

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

      @keyframes heartbeat {
        0% {
          transform: scale(0);
        }
        25% {
          transform: scale(1.2);
        }
        50% {
          transform: scale(1);
        }
        75% {
          transform: scale(1.2);
        }
        100% {
          transform: scale(1);
        }
      }

      .slider-container {
        position: relative;
        margin: 0 auto;
        /* width: 800px; */
        height: 600px;

      }
      /* .slider-container .bullet-container {
        position: absolute;
        bottom: 20%;
        width: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        margin-left: 25%;
      } */
      /* .slider-container .bullet-container .bullet {
        margin-right: 14px;
        height: 15px;
        width: 15px;
        border-radius: 50%;
        background-color: white;
        opacity: 0.5;
      } */
      .slider-container .bullet-container .bullet:last-child {
        margin-right: 0px;
      }
      .slider-container .bullet-container .bullet.active {
        opacity: 1;
      }
      .slider-container .slider-content {
        position: relative;
        left: 50%;
        top: 45%;
        width: 70%;
        height: 63%;
        transform: translate(-50%, -50%);
				margin-top: -10%;
      }
      .slider-container .slider-content .slider-single {
        position: absolute;
        z-index: 0;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        transition: z-index 0ms 250ms;
      }
      .slider-container .slider-content .slider-single .slider-single-image {
        position: relative;
        left: 0;
        top: 0;
        width: 100%;
        height: 95%;
        /* box-shadow: 0px 10px 40px rgba(0, 0, 0, 0.2); */
        transition: 500ms cubic-bezier(0.17, 0.67, 0.55, 1.43);
        transform: scale(0);
        opacity: 0;
      }
      .slider-container .slider-content .slider-single .slider-single-download {
        position: absolute;
        display: block;
        right: -22px;
        bottom: 12px;
        padding: 15px;
        color: #333333;
        background-color: #fdc84b;
        font-size: 18px;
        font-weight: 600;
        font-family: "karla";
        border-radius: 5px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.3);
        transition: 500ms cubic-bezier(0.17, 0.67, 0.55, 1.43);
        opacity: 0;
      }
      .slider-container .slider-content .slider-single .slider-single-download:hover, .slider-container .slider-content .slider-single .slider-single-download:focus {
        outline: none;
        text-decoration: none;
      }
      .slider-container .slider-content .slider-single .slider-single-title {
        display: block;
        float: left;
        margin: 16px 0 0 20px;
        font-size: 20px;
        font-family: "karla";
        font-weight: 400;
        color: #ffffff;
        transition: 500ms cubic-bezier(0.17, 0.67, 0.55, 1.43);
        opacity: 0;
      }
      .slider-container .slider-content .slider-single .slider-single-likes {
        display: block;
        float: right;
        margin: 16px 20px 0 0;
        transition: 500ms cubic-bezier(0.17, 0.67, 0.55, 1.43);
        opacity: 0;
      }
      .slider-container .slider-content .slider-single .slider-single-likes i {
        font-size: 20px;
        display: inline-block;
        vertical-align: middle;
        margin-right: 5px;
        color: #ff6060;
        transition: 500ms cubic-bezier(0.17, 0.67, 0.55, 1.43);
        transform: scale(0);
      }
      .slider-container .slider-content .slider-single .slider-single-likes p {
        display: inline-block;
        vertical-align: middle;
        margin: 0;
        color: #ffffff;
      }
      .slider-container .slider-content .slider-single .slider-single-likes:hover, .slider-container .slider-content .slider-single .slider-single-likes:focus {
        outline: none;
        text-decoration: none;
      }
      .slider-container .slider-content .slider-single.preactivede .slider-single-image {
        transform: translateX(-50%) scale(0);
      }
      .slider-container .slider-content .slider-single.preactive {
        z-index: 1;
      }
      .slider-container .slider-content .slider-single.preactive .slider-single-image {
        opacity: 0.3;
        transform: translateX(-25%) scale(0.8);
      }
      .slider-container .slider-content .slider-single.preactive .slider-single-download {
        transform: translateX(-150px);
      }
      .slider-container .slider-content .slider-single.preactive .slider-single-title {
        transform: translateX(-150px);
      }
      .slider-container .slider-content .slider-single.preactive .slider-single-likes {
        transform: translateX(-150px);
      }
      .slider-container .slider-content .slider-single.proactive {
        z-index: 1;
      }
      .slider-container .slider-content .slider-single.proactive .slider-single-image {
        opacity: 0.2;
        transform: translateX(25%) scale(0.8);
      }
      .slider-container .slider-content .slider-single.proactive .slider-single-download {
        transform: translateX(150px);
      }
      .slider-container .slider-content .slider-single.proactive .slider-single-title {
        transform: translateX(150px);
      }
      .slider-container .slider-content .slider-single.proactive .slider-single-likes {
        transform: translateX(150px);
      }
      .slider-container .slider-content .slider-single.proactivede .slider-single-image {
        transform: translateX(50%) scale(0);
      }
      .slider-container .slider-content .slider-single.active {
        z-index: 2;
      }
      .slider-container .slider-content .slider-single.active .slider-single-image {
        opacity: 1;
        transform: translateX(0%) scale(1);
      }
      .slider-container .slider-content .slider-single.active .slider-single-download {
        opacity: 1;
        transition-delay: 100ms;
        transform: translateX(0px);
      }
      .slider-container .slider-content .slider-single.active .slider-single-title {
        opacity: 1;
        transition-delay: 200ms;
        transform: translateX(0px);
      }
      .slider-container .slider-content .slider-single.active .slider-single-likes {
        opacity: 1;
        transition-delay: 300ms;
        transform: translateX(0px);
      }
      .slider-container .slider-content .slider-single.active .slider-single-likes i {
        animation-name: heartbeat;
        animation-duration: 500ms;
        animation-delay: 900ms;
        animation-interation: 1;
        animation-fill-mode: forwards;
      }
      .slider-container .slider-left {
        position: absolute;
        z-index: 3;
        display: block;
        right: 85%;
        top: 47%;
        color: #ffffff;
        transform: translateY(-50%);
        padding: 20px 15px;
        border-top: 2px solid #fdc84b;
        border-right: 2px solid #fdc84b;
        border-bottom: 2px solid #fdc84b;
        border-left: 2px solid #fdc84b;
        margin-right: -2px;
      }
      .slider-container .slider-right {
        position: absolute;
        z-index: 3;
        display: block;
        left: 85%;
        top: 47%;
        color: #ffffff;
        transform: translateY(-50%);
        padding: 20px 15px;
        border-top: 2px solid #fdc84b;
        border-right: 2px solid #fdc84b;
        border-bottom: 2px solid #fdc84b;
        border-left: 2px solid #fdc84b;
        margin-left: -2px;
      }
      .slider-container .not-visible {
        display: none !important;
      }

			.blinking{
      	animation:blinkingText 30.0s infinite;
      }
      @keyframes blinkingText{
      	0%{		color: #ffffff;	}
      	49%{	color: transparent;	}
      	50%{	color: transparent;	}
      	99%{	color:transparent;	}
      	100%{	color: #ffffff;	}
      }

      .button {
        background-color: ##ffffff00;
        border: none;
        /* color: white; */
        /* padding: 16px 32px; */
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        /* margin: 4px 2px; */
        transition-duration: 0.4s;
        cursor: pointer;
      }

      .buttonsound {
        background-color: #ffffff00;
        color: #fff;
        /* border: 2px solid #4CAF50; */
      }

       /* glow */
       .glow {
        font-size: 80px;
        color: #fff;
        text-align: center;
        animation: glow 1s ease-in-out infinite alternate;
        }

        @-webkit-keyframes glow {
        from {
            text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #e60000, 0 0 40px #e60000, 0 0 50px #e60000, 0 0 60px #e60000, 0 0 70px #e60000;
        }

        to {
            text-shadow: 0 0 20px #fff, 0 0 30px #ff4d4d, 0 0 40px #ff4d4d, 0 0 50px #ff4d4d, 0 0 60px #ff4d4d, 0 0 70px #ff4d4d, 0 0 80px #ff4d4d;
        }
        }
      </style>

  </head>
  <body>
  <div id="wrapper">

<div class="container-fluid">



    <h1 style="padding-top: 2%; text-align: center; color: #fff; font-weight: bold; padding-bottom: 0%;font-size: 350%;padding-left: 3%;">QUIZ</h1>
    <h1 class="blinking" style="font-size: 150%; text-align: center; padding-bottom: 0%; color: #fff;padding-left: 3%;">Click right to see other quiz</h1>

    <div class="row" style="padding: 1%;">
      <div class="col-md-4">


        <!-- Trigger/Open The Modal -->

        <span id="myBtn"><i class="far fa-question-circle glow" style="font-size: 35px; color: #fff; padding-left: 35%; margin-top: 38.5%"></i></span>

        <!-- The Modal -->
        <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content" style="padding: 5%; margin-left: 30%; margin-top: 20%; width: 50%; text-align: center">
            <p style="font-size: 20px;">Some text in the Modal..</p>
            <p style="font-size: 15px;">Click anywhere to dismiss the information</p>
        </div>

        </div>
        <script>
            // Get the modal
            var modal = document.getElementById("myModal");

            // Get the button that opens the modal
            var btn = document.getElementById("myBtn");

            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];

            // When the user clicks the button, open the modal
            btn.onclick = function() {
              modal.style.display = "block";
            }

            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
              modal.style.display = "none";
            }

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
              if (event.target == modal) {
                modal.style.display = "none";
              }
            }
            </script>

        <img src="{{asset('concept/images/galaxy/mascot.gif')}}" width="90%" style="background-position: 100% 100%;background-repeat: no-repeat;background-size: cover;margin-left: -3%;">


        <button id="mute_button" class="button buttonsound" onclick="mute()" type="button" style="padding: 1%;margin-left: 13.8%;width: 27%; height: 5.5%; background-image: url({{asset('concept/images/galaxy/button_submit.png')}}); background-position: 50% 50%;background-repeat: no-repeat;background-size: cover;"><i class="fas fa-volume-up" style="font-size: 16px;"></i></button>
        <button onclick="replay()" class="button buttonsound" type="button" style="padding: 1%;color: #fff; width: 27%; height: 5.5%; background-image: url({{asset('concept/images/galaxy/button_submit.png')}}); background-position: 50% 50%;background-repeat: no-repeat;background-size: cover;"><i class="fas fa-undo" style="font-size: 16px;"></i></button>

        <audio id="myAudio" controls autoplay hidden="true">

        <source src="{{asset('concept/audio/quizv1.mp3')}}" type="audio/mpeg">
        </audio>

        <script>
        var aud = document.getElementById("myAudio");
        @if(Auth::user()->first_time_login == 0)
          aud.muted = true;
        @endif
        function mute() {
          if(aud.muted == true)
          {
            console.log('unmute');
            $('#mute_button').html('<i class="fas fa-volume-up"></i>');

            aud.muted = false;
          }
          else {
            console.log('mute');
            aud.muted = true;
            $('#mute_button').html('<i class="fas fa-volume-mute"></i>');

          }
        }

        // function disableMute() {
        //   console.log('unmute');
        //   aud.muted = false;
        // }

        // function checkMute() {
        //   console.log('check');
        //   alert(aud.muted);
        // }
        function replay(){
          aud.currentTime=0;
          aud.play();
        }
        </script>
      </div>
      <div class="col-md-8" style="margin-left: -15%;">
        <div class="slider-container">

          <div class="slider-content">

              <div class="slider-single">
                  <a href="{{route('quiz.intro-start', 1)}}"><img class="slider-single-image" src="{{ asset('concept/images/kuiz/introduction.png') }}" alt="1" /></a>
                  <!-- <h1 class="slider-single-title">VR</h1> -->
                  <!-- <a class="slider-single-likes" href="javascript:void(0);">
                      <i class="fa fa-heart"></i>
                      <p>1,247</p>
                  </a> -->
              </div>

              <div class="slider-single">
                <a href="{{route('quiz.intro-start', 3)}}"><img class="slider-single-image" src="{{ asset('concept/images/kuiz/vrar.png') }}" alt="2" /></a>


                  <!-- <h1 class="slider-single-title">Addictive Manufacturing</h1> -->
                  <!-- <a class="slider-single-likes" href="javascript:void(0);">
                      <i class="fa fa-heart"></i>
                      <p>1,247</p>
                  </a> -->
              </div>

              <div class="slider-single">
                <a href="{{route('quiz.intro-start', 8)}}"><img class="slider-single-image" src="{{ asset('concept/images/kuiz/additive.png') }}" alt="3" /></a>


                  <!-- <h1 class="slider-single-title">Internet of Things</h1> -->
                  <!-- <a class="slider-single-likes" href="javascript:void(0);">
                      <i class="fa fa-heart"></i>
                      <p>1,247</p>
                  </a> -->
              </div>


              <div class="slider-single">
                <a href="{{route('quiz.intro-start', 4)}}"><img class="slider-single-image" src="{{ asset('concept/images/kuiz/iot.png') }}" alt="4" /></a>


                  <!-- <h1 class="slider-single-title">Big Data</h1> -->
                  <!-- <a class="slider-single-likes" href="javascript:void(0);">
                      <i class="fa fa-heart"></i>
                      <p>1,247</p>
                  </a> -->
              </div>


              <div class="slider-single">
                <a href="{{route('quiz.intro-start', 5)}}"><img class="slider-single-image" src="{{ asset('concept/images/kuiz/bigdata.png') }}" alt="5" /></a>


                  <!-- <h1 class="slider-single-title">Cloud Computing</h1> -->
                  <!-- <a class="slider-single-likes" href="javascript:void(0);">
                      <i class="fa fa-heart"></i>
                      <p>1,247</p>
                  </a> -->
              </div>

              <div class="slider-single">
                <a href="{{route('quiz.intro-start', 7)}}">
                  <img class="slider-single-image" src="{{ asset('concept/images/kuiz/cloud.png') }}" alt="6" />
                </a>

                  <!-- <h1 class="slider-single-title">Cyber Security</h1> -->
                  <!-- <a class="slider-single-likes" href="javascript:void(0);">
                      <i class="fa fa-heart"></i>
                      <p>1,247</p>
                  </a> -->
              </div>

                <div class="slider-single">
                  <a href="{{route('quiz.intro-start', 9)}}"><img class="slider-single-image" src="{{ asset('concept/images/kuiz/advanced.png') }}" alt="9" /></a>

                  <!-- <h1 class="slider-single-title">Universal Integration</h1> -->
                  <!-- <a class="slider-single-likes" href="javascript:void(0);">
                      <i class="fa fa-heart"></i>
                      <p>1</p>
                  </a> -->
              </div>

            <div class="slider-single">
              <a href="{{route('quiz.intro-start', 11)}}"><img class="slider-single-image" src="{{ asset('concept/images/kuiz/autonomous.png') }}" alt="10" /></a>

                  <!-- <h1 class="slider-single-title">Advanced Simulation</h1> -->
                  <!-- <a class="slider-single-likes" href="javascript:void(0);">
                      <i class="fa fa-heart"></i>
                      <p>2</p>
                  </a> -->
              </div>

            <div class="slider-single">
              <a href="{{route('quiz.intro-start', 10)}}"><img class="slider-single-image" src="{{ asset('concept/images/kuiz/universal.png') }}" alt="8" /></a>

                  <!-- <h1 class="slider-single-title">Autonomous Robot</h1> -->
                  <!-- <a class="slider-single-likes" href="javascript:void(0);">
                      <i class="fa fa-heart"></i>
                      <p>3</p> -->
                  </a>
              </div>

              <div class="slider-single">
                <a href="{{route('quiz.intro-start', 6)}}"><img class="slider-single-image" src="{{ asset('concept/images/kuiz/cyber.png') }}" alt="7" /></a>

                    <!-- <h1 class="slider-single-title">Autonomous Robot</h1> -->
                    <!-- <a class="slider-single-likes" href="javascript:void(0);">
                        <i class="fa fa-heart"></i>
                        <p>3</p> -->
                    </a>
                </div>

          </div>

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

    <!-- <h2>Checkout <a target="_blank" href="https://codepen.io/WillyW/pen/jOrPLab">v2</a></h2> -->

  </body>



  <script>

  const repeat = false;
  const noArrows = false;
  const noBullets = false;


  const container = document.querySelector('.slider-container');
  var slide = document.querySelectorAll('.slider-single');
  var slideTotal = slide.length - 1;
  var slideCurrent = -1;

  function initBullets() {
      if (noBullets) {
          return;
      }
      const bulletContainer = document.createElement('div');
      bulletContainer.classList.add('bullet-container')
      slide.forEach((elem, i) => {
          const bullet = document.createElement('div');
          bullet.classList.add('bullet')
          bullet.id = `bullet-index-${i}`
          bullet.addEventListener('click', () => {
              goToIndexSlide(i);
          })
          bulletContainer.appendChild(bullet);
          elem.classList.add('proactivede');
      })
      container.appendChild(bulletContainer);
  }

  function initArrows() {
      if (noArrows) {
          return;
      }
      const leftArrow = document.createElement('a')
      const iLeft = document.createElement('i');
      iLeft.classList.add('fa')
      iLeft.classList.add('fa-arrow-left')
      leftArrow.classList.add('slider-left')
      leftArrow.appendChild(iLeft)
      leftArrow.addEventListener('click', () => {
          slideLeft();
      })
      const rightArrow = document.createElement('a')
      const iRight = document.createElement('i');
      iRight.classList.add('fa')
      iRight.classList.add('fa-arrow-right')
      rightArrow.classList.add('slider-right')
      rightArrow.appendChild(iRight)
      rightArrow.addEventListener('click', () => {
          slideRight();
      })
      container.appendChild(leftArrow);
      container.appendChild(rightArrow);
  }

  function slideInitial() {
      initBullets();
      initArrows();
      setTimeout(function () {
          slideRight();
      }, 500);
  }

  function updateBullet() {
      if (!noBullets) {
          document.querySelector('.bullet-container').querySelectorAll('.bullet').forEach((elem, i) => {
              elem.classList.remove('active');
              if (i === slideCurrent) {
                  elem.classList.add('active');
              }
          })
      }
      checkRepeat();
  }

  function checkRepeat() {
      if (!repeat) {
          if (slideCurrent === slide.length - 1) {
              slide[0].classList.add('not-visible');
              slide[slide.length - 1].classList.remove('not-visible');
              if (!noArrows) {
                  document.querySelector('.slider-right').classList.add('not-visible')
                  document.querySelector('.slider-left').classList.remove('not-visible')
              }
          }
          else if (slideCurrent === 0) {
              slide[slide.length - 1].classList.add('not-visible');
              slide[0].classList.remove('not-visible');
              if (!noArrows) {
                  document.querySelector('.slider-left').classList.add('not-visible')
                  document.querySelector('.slider-right').classList.remove('not-visible')
              }
          } else {
              slide[slide.length - 1].classList.remove('not-visible');
              slide[0].classList.remove('not-visible');
              if (!noArrows) {
                  document.querySelector('.slider-left').classList.remove('not-visible')
                  document.querySelector('.slider-right').classList.remove('not-visible')
              }
          }
      }
  }

  function slideRight() {
      if (slideCurrent < slideTotal) {
          slideCurrent++;
      } else {
          slideCurrent = 0;
      }

      if (slideCurrent > 0) {
          var preactiveSlide = slide[slideCurrent - 1];
      } else {
          var preactiveSlide = slide[slideTotal];
      }
      var activeSlide = slide[slideCurrent];
      if (slideCurrent < slideTotal) {
          var proactiveSlide = slide[slideCurrent + 1];
      } else {
          var proactiveSlide = slide[0];

      }

      slide.forEach((elem) => {
          var thisSlide = elem;
          if (thisSlide.classList.contains('preactivede')) {
              thisSlide.classList.remove('preactivede');
              thisSlide.classList.remove('preactive');
              thisSlide.classList.remove('active');
              thisSlide.classList.remove('proactive');
              thisSlide.classList.add('proactivede');
          }
          if (thisSlide.classList.contains('preactive')) {
              thisSlide.classList.remove('preactive');
              thisSlide.classList.remove('active');
              thisSlide.classList.remove('proactive');
              thisSlide.classList.remove('proactivede');
              thisSlide.classList.add('preactivede');
          }
      });
      preactiveSlide.classList.remove('preactivede');
      preactiveSlide.classList.remove('active');
      preactiveSlide.classList.remove('proactive');
      preactiveSlide.classList.remove('proactivede');
      preactiveSlide.classList.add('preactive');

      activeSlide.classList.remove('preactivede');
      activeSlide.classList.remove('preactive');
      activeSlide.classList.remove('proactive');
      activeSlide.classList.remove('proactivede');
      activeSlide.classList.add('active');

      proactiveSlide.classList.remove('preactivede');
      proactiveSlide.classList.remove('preactive');
      proactiveSlide.classList.remove('active');
      proactiveSlide.classList.remove('proactivede');
      proactiveSlide.classList.add('proactive');

      updateBullet();
  }

  function slideLeft() {
      if (slideCurrent > 0) {
          slideCurrent--;
      } else {
          slideCurrent = slideTotal;
      }

      if (slideCurrent < slideTotal) {
          var proactiveSlide = slide[slideCurrent + 1];
      } else {
          var proactiveSlide = slide[0];
      }
      var activeSlide = slide[slideCurrent];
      if (slideCurrent > 0) {
          var preactiveSlide = slide[slideCurrent - 1];
      } else {
          var preactiveSlide = slide[slideTotal];
      }
      slide.forEach((elem) => {
          var thisSlide = elem;
          if (thisSlide.classList.contains('proactive')) {
              thisSlide.classList.remove('preactivede');
              thisSlide.classList.remove('preactive');
              thisSlide.classList.remove('active');
              thisSlide.classList.remove('proactive');
              thisSlide.classList.add('proactivede');
          }
          if (thisSlide.classList.contains('proactivede')) {
              thisSlide.classList.remove('preactive');
              thisSlide.classList.remove('active');
              thisSlide.classList.remove('proactive');
              thisSlide.classList.remove('proactivede');
              thisSlide.classList.add('preactivede');
          }
      });

      preactiveSlide.classList.remove('preactivede');
      preactiveSlide.classList.remove('active');
      preactiveSlide.classList.remove('proactive');
      preactiveSlide.classList.remove('proactivede');
      preactiveSlide.classList.add('preactive');

      activeSlide.classList.remove('preactivede');
      activeSlide.classList.remove('preactive');
      activeSlide.classList.remove('proactive');
      activeSlide.classList.remove('proactivede');
      activeSlide.classList.add('active');

      proactiveSlide.classList.remove('preactivede');
      proactiveSlide.classList.remove('preactive');
      proactiveSlide.classList.remove('active');
      proactiveSlide.classList.remove('proactivede');
      proactiveSlide.classList.add('proactive');

      updateBullet();
  }

  function goToIndexSlide(index) {
      const sliding = (slideCurrent > index) ? () => slideRight() : () => slideLeft();
      while (slideCurrent !== index) {
          sliding();
      }
  }

  slideInitial();
  </script>

  <script>
  function myFunction() {
    console.log('auto');
    document.getElementById("myAudio").autoplay;
  }
  </script>

</html>


@endsection
