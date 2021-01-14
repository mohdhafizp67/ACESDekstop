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
    <link rel="stylesheet" href="{{ asset('css/profile.css') }} ">

  </head>
  <body>

    <div class="container-fluid" >
	<div class="row">
		<div class="col-md-12" style="background-image: url({{asset('concept/images/profile/bg.jpeg')}}); background-position: 100% 100%;background-repeat: no-repeat;background-size: cover; padding-top: 5%;">
			<div class="row">
				<div class="col-md-8">
					<h1 style="margin-left: -80%; padding-bottom: 10%; color: #fff;">
						Profil
					</h1>
				</div>
				<div class="col-md-4">
				</div>
			</div>
			<div class="row">
				<div class="col-md-8">
					<p style="color: #fff;"><img alt="Bootstrap Image Preview" src="{{asset('concept/images/profile/FaceIcon.png')}}" style="width: 15%; margin-left: -50%; padding-bottom: 10%;">{{Auth::user()->name}}</p>
				</div>
				<div class="col-md-4">
				</div>
			</div>
			<div class="row" style="padding-bottom: 0%;">
				<div class="col-md-3">
					<h3 style="color: #fff; font-size: 20px;">
						<a href="{{route('user.profile.edit')}}">Kemaskini Profil</a>
					</h3>
				</div>
				<div class="col-md-3">
					<h3 style="color: #fff; font-size: 20px;">
						<a href="{{ route('user.change-password') }}">Tukar Kata Laluan</a>
					</h3>
				</div>
				<div class="col-md-3">
				</div>
				<div class="col-md-3">
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">

      <section class="timeline">
  <ol>
    <li>
      <div>
        <time style="color: #D50000">February</time>Introduction
      </div>
    </li>
    <li>
      <div>
        <time>February</time>Advanced Simulation
      </div>
    </li>
    <li>
      <div>
        <time>February</time>Augmented Reality
      </div>
    </li>
    <li>
      <div>
        <time>March</time>Universal Integration
      </div>
    </li>
    <li>
      <div>
        <time>March</time>Autonomous Robot
      </div>
    </li>
    <li>
      <div>
        <time>March</time>Cloud Computing
      </div>
    </li>
    <li>
      <div>
        <time>March</time>Addictive Manufacturing
      </div>
    </li>
    <li>
      <div>
        <time>March</time>Cyber Security
      </div>
    </li>
    <li>
      <div>
        <time>March</time>Big Data
      </div>
    </li>
    <li>
      <div>
        <time>1943</time>Internet of Things
      </div>
    </li>
    <li></li>
  </ol>

  <div class="arrows">
    <button class="arrow arrow__prev disabled" disabled>
      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/arrow_prev.svg" alt="prev timeline arrow">
    </button>
    <button class="arrow arrow__next">
      <img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/162656/arrow_next.svg" alt="next timeline arrow">
    </button>
  </div>
</section>

		</div>
	</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>

    <script>
    (function() {

// VARIABLES
const timeline = document.querySelector(".timeline ol"),
  elH = document.querySelectorAll(".timeline li > div"),
  arrows = document.querySelectorAll(".timeline .arrows .arrow"),
  arrowPrev = document.querySelector(".timeline .arrows .arrow__prev"),
  arrowNext = document.querySelector(".timeline .arrows .arrow__next"),
  firstItem = document.querySelector(".timeline li:first-child"),
  lastItem = document.querySelector(".timeline li:last-child"),
  xScrolling = 280,
  disabledClass = "disabled";

// START
window.addEventListener("load", init);

function init() {
  setEqualHeights(elH);
  animateTl(xScrolling, arrows, timeline);
  setSwipeFn(timeline, arrowPrev, arrowNext);
  setKeyboardFn(arrowPrev, arrowNext);
}

// SET EQUAL HEIGHTS
function setEqualHeights(el) {
  let counter = 0;
  for (let i = 0; i < el.length; i++) {
    const singleHeight = el[i].offsetHeight;

    if (counter < singleHeight) {
      counter = singleHeight;
    }
  }

  for (let i = 0; i < el.length; i++) {
    el[i].style.height = `${counter}px`;
  }
}

// CHECK IF AN ELEMENT IS IN VIEWPORT
// http://stackoverflow.com/questions/123999/how-to-tell-if-a-dom-element-is-visible-in-the-current-viewport
function isElementInViewport(el) {
  const rect = el.getBoundingClientRect();
  return (
    rect.top >= 0 &&
    rect.left >= 0 &&
    rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
    rect.right <= (window.innerWidth || document.documentElement.clientWidth)
  );
}

// SET STATE OF PREV/NEXT ARROWS
function setBtnState(el, flag = true) {
  if (flag) {
    el.classList.add(disabledClass);
  } else {
    if (el.classList.contains(disabledClass)) {
      el.classList.remove(disabledClass);
    }
    el.disabled = false;
  }
}

// ANIMATE TIMELINE
function animateTl(scrolling, el, tl) {
  let counter = 0;
  for (let i = 0; i < el.length; i++) {
    el[i].addEventListener("click", function() {
      if (!arrowPrev.disabled) {
        arrowPrev.disabled = true;
      }
      if (!arrowNext.disabled) {
        arrowNext.disabled = true;
      }
      const sign = (this.classList.contains("arrow__prev")) ? "" : "-";
      if (counter === 0) {
        tl.style.transform = `translateX(-${scrolling}px)`;
      } else {
        const tlStyle = getComputedStyle(tl);
        // add more browser prefixes if needed here
        const tlTransform = tlStyle.getPropertyValue("-webkit-transform") || tlStyle.getPropertyValue("transform");
        const values = parseInt(tlTransform.split(",")[4]) + parseInt(`${sign}${scrolling}`);
        tl.style.transform = `translateX(${values}px)`;
      }

      setTimeout(() => {
        isElementInViewport(firstItem) ? setBtnState(arrowPrev) : setBtnState(arrowPrev, false);
        isElementInViewport(lastItem) ? setBtnState(arrowNext) : setBtnState(arrowNext, false);
      }, 1100);

      counter++;
    });
  }
}

// ADD SWIPE SUPPORT FOR TOUCH DEVICES
function setSwipeFn(tl, prev, next) {
  const hammer = new Hammer(tl);
  hammer.on("swipeleft", () => next.click());
  hammer.on("swiperight", () => prev.click());
}

// ADD BASIC KEYBOARD FUNCTIONALITY
function setKeyboardFn(prev, next) {
  document.addEventListener("keydown", (e) => {
    if ((e.which === 37) || (e.which === 39)) {
      const timelineOfTop = timeline.offsetTop;
      const y = window.pageYOffset;
      if (timelineOfTop !== y) {
        window.scrollTo(0, timelineOfTop);
      }
      if (e.which === 37) {
        prev.click();
      } else if (e.which === 39) {
        next.click();
      }
    }
  });
}

})();
    </script>
  </body>
</html>

@endsection
