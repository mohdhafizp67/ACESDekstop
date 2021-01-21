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

  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12" style="background-image: url({{asset('concept/images/mascot4.png')}}); background-position: 40% 100%;background-repeat: no-repeat;background-size: cover; padding-top: 0%; padding-left: 1%; margin-left: 0%;">


        <h1 style="text-align: justify; font-size: 450%; color: #fff; font-weight:bold; padding-top: 5%; padding-left: 9%;">

  				ACES <font color="#ff0000">i 4.0</font> <br>
          <p style="text-align: justify;padding-bottom: 1%; font-size: 40%; color: #fff;">
    				HALAMAN UTAMA
    			</p>
  			</h1>

        <!-- <div style="position: absolute;  top: 70px;  right: 1px;">
          <a href="https://aces.ecerdc.com.my/aces2/">
            <button type="button" class="btn btn-danger" style="margin-top: 30%;margin-left: -25%; border-radius: 5px; font-size: 15px;">
              TENTANG ACES
            </button>
          </a>
        </div> -->

        <div class="row">
          <div class="col-md-1">

          </div>
          <div class="col-md-5">
            <div class="card text-white bg-success mb-3" style=" background-color: #183252 !important;">
              <div class="card-header" style="background-color: #130E29 !important; font-weight: bold; font-size: 150%; margin: 5px;">PENGUMUMAN</div>
              <div class="card-body list-group p-2" style="overflow:auto;height:280px;width:100%; ">
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
          <div class="col-md-0">

          </div>
          <div class="col-md-5">
            <div class="card text-white bg-success mb-3" style=" background-color: #183252 !important;">
              <div class="card-header" style="background-color: #130E29 !important; font-weight: bold; font-size: 150%; margin: 5px;">MESEJ</div>
              <div class="card-body list-group p-2" style="overflow:auto;height:280px;width:100%; ">
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
          <div class="col-md-1">

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
@endsection
