@extends('layouts.app-student')

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
    <link rel="stylesheet" href="{{ asset('css/pelajaran/vrlessons.css') }} ">

    <style>
    .modal-dialog {
    max-width: 800px;
    margin: 1.75rem auto;
}
    </style>
  </head>
  <body>

    <div class="container-fluid"  style="background-image: url({{asset('concept/images/profile/bg.jpeg')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover;">
	<div class="row">
		<div class="col-md-10">
      <h1 style="padding-top: 8%; text-align: justify; padding-bottom: 5%; color: #fff; font-size: 35px;">Pelajaran</h1>
		</div>
		<div class="col-md-2">
		</div>
	</div>
	<div class="row">
		<div class="col-md-8">
      <!-- <iframe width="100%" height="90%" src="https://www.youtube.com/embed/QJQu1ytJlMs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
      <!-- <iframe width="100%" height="90%" src="https://www.youtube.com/embed/TGJLXfSJDXI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> -->
      <iframe width="100%" height="90%" src="https://www.youtube.com/embed/TGJLXfSJDXI?autoplay=1&controls=0&disablekb=0&rel=0" frameborder="0" allowfullscreen allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"></iframe>
		</div>
		<div class="col-md-4" style="padding-bottom: 9%; padding-top: 4%;">
      <div class="row">
        <div class="col-md-12">
          <button class="card" data-toggle="modal" data-target="#kerjaya">
            <img src="{{asset('concept/images/pelajaran/vr.jpg')}}" alt="John" style="width:20%; align-self: center;" height="auto">
            <h3 style="align-self: center; text-transform: uppercase;">Lokasi VR</h3>

          </button>

          <div class="modal fade" id="kerjaya" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                  <h5 class="modal-title" id="kerjaya">LOKASI KURSUS KEMAHIRAN VR</h5>
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

        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <button class="card" data-toggle="modal" data-target="#kerjaya">
            <img src="{{asset('concept/images/pelajaran/vr.jpg')}}" alt="John" style="width:20%; align-self: center;" height="auto">
            <h3 style="align-self: center; text-transform: uppercase;">Kerjaya VR</h3>

          </button>

          <div class="modal fade" id="kerjaya" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                  <h5 class="modal-title" id="kerjaya">KERJAYA DALAM VR</h5>
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
      </div>
      <div class="row">
        <div class="col-md-12">
          <button class="card" data-toggle="modal" data-target="#kerjaya">
            <img src="{{asset('concept/images/pelajaran/vr.jpg')}}" alt="John" style="width:20%; align-self: center;" height="auto">
            <h3 style="align-self: center; text-transform: uppercase;">Pengetahuan VR</h3>

          </button>

          <div class="modal fade" id="kerjaya" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                  <h5 class="modal-title" id="kerjaya">PENGETAHUAN DAN KEMAHIRAN</h5>
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

        </div>
      </div>


		</div>
	</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>


  </body>
</html>

@endsection
