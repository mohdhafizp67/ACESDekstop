@extends('layouts.app-student-qbadminui')

@section('content')
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>VR Lessons</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="{{ asset('css/pelajaran/vrlessons.css') }} "> -->

    <style>
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
        background-color: #fff;
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

    .items .item {
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

    .item img {
      width: 100%;
      height: 100%;
      object-fit: cover;
    }

    .item.active {
      opacity: 1;
      z-index: 99;
      box-shadow: 0px 0px 105px -35px rgba(0, 0, 0, 0.75);
    }

    .item.prev {
      z-index: 2;
      opacity: 0.25;
      transform: translate(-125%, -50%);
    }

    .item.next {
      z-index: 2;
      opacity: 0.25;
      transform: translate(25%, -50%);
    }

    .items .button-container {
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      width: 275px;
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
      float: left;
    }

    .button-container .button:nth-child(2) {
      float: right;
    }

    </style>
  </head>
  <body>

    <div class="container-fluid"  style="background-image: linear-gradient(to top, #231245, #261d52, #272960, #28346e, #28407b, #28417c, #27437e, #27447f, #273c75, #26336b, #252b61, #232357);" >
	<div class="row">
    <div class="col-md-1">

    </div>
		<div class="col-md-9">
      <h1 style="padding-top: 5%; text-align: justify; padding-bottom: 5%; color: #fff; font-size: 250%;">Pelajaran</h1>
		</div>
		<div class="col-md-2">
		</div>
	</div>
	<div class="row" style="padding-bottom: 10%">
    <div class="col-md-1">

    </div>
		<div class="col-md-10 embed-responsive embed-responsive-21by9" style="padding-bottom: 5%; border-radius: 25px; border: solid 1px #000; overflow: hidden;">

      <iframe class="embed-responsive-item" width="100%" height="320px" src="https://www.youtube.com/embed/TGJLXfSJDXI?autoplay=1&controls=0&disablekb=1&rel=0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>


		</div>
    <div class="col-md-1">

    </div>

	</div>

  <div class="row" style="padding-top: 1%; padding-bottom: 10%">
    <div class="col-md-2">

		</div>
    <div class="col-md-8">
      <div class="items">
      		<div class="item active">
      			<img src="{{asset('concept/images/icon/institut.jpg')}}" style="background-position: 100% 100%;background-repeat: no-repeat;background-size: cover;" data-toggle="modal" data-target="#lokasi">


      		</div>
      		<div class=" item next" >
            <img src="{{asset('concept/images/icon/kemahiran.jpg')}}" style="background-position: 100% 100%;background-repeat: no-repeat;background-size: cover;"  data-toggle="modal" data-target="#kemahiran">


      		</div>
      		<div class="item" >
            <img src="{{asset('concept/images/icon/prospek.jpg')}}" style="background-position: 100% 100%;background-repeat: no-repeat;background-size: cover;"  data-toggle="modal" data-target="#prospek">


      		</div>
      		<div class="item">
            <img src="{{asset('concept/images/icon/institut.jpg')}}" style="background-position: 100% 100%;background-repeat: no-repeat;background-size: cover;"  data-toggle="modal" data-target="#2">

      		</div>
      		<div class="item prev">
            <img src="{{asset('concept/images/icon/prospek.jpg')}}" style="background-position: 100% 100%;background-repeat: no-repeat;background-size: cover;"  data-toggle="modal" data-target="#prospek">

      		</div>
      		<div class="button-container">
      			<div class="button"><i class="fas fa-angle-left"></i></div>
      			<div class="button"><i class="fas fa-angle-right"></i></div>
      		</div>
      	</div>

        <div class="modal fade" id="lokasi" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="lokasi">LOKASI KURSUS KEMAHIRAN VR</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                <img alt="Bootstrap Image Preview" src="{{asset('concept/images/pelajaran/lokasi.jpg')}}" style="width: 100%; height: auto;">
                </div>

            </div>
            </div>
        </div>

        <div class="modal fade" id="kemahiran" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="lokasi">KEMAHIRAN DAN PENGETAHUAN</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                <img alt="Bootstrap Image Preview" src="{{asset('concept/images/pelajaran/pengetahuan.jpg')}}" style="width: 100%; height: auto;">
                </div>

            </div>
            </div>
        </div>

        <div class="modal fade" id="prospek" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="lokasi">KERJAYA DALAM VR</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                <img alt="Bootstrap Image Preview" src="{{asset('concept/images/pelajaran/kerjaya.jpg')}}" style="width: 100%; height: auto;">
                </div>

            </div>
            </div>
        </div>


    </div>
    <div class="col-md-2">

    </div>
  </div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>

    <script>
    const slider = document.querySelector(".items");
  const slides = document.querySelectorAll(".item");
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
  </body>
</html>

@endsection
