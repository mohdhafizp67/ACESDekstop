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
    <link rel="stylesheet" href="{{ asset('css/videopelajaran.css') }} ">

  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">

			<div class="row">
				<div class="col-md-8" style="padding-top: 10%;background-color: slategray;">
					<h1 style="margin-left: -70%; padding-bottom: 5%;">
						Pelajaran
					</h1>


          <iframe width="100%" height="50%" src="https://www.youtube.com/embed/TGJLXfSJDXI?autoplay=1&controls=0&disablekb=0&rel=0" frameborder="0" allowfullscreen></iframe>
          <h1>
						Realiti Maya
					</h1>
				</div>
				<div class="col-md-4" style="padding-top: 5%; padding-bottom: 10%;background-color: slategray;">
					<div class="carousel slide" id="carousel-200650">
						<ol class="carousel-indicators">
							<li data-slide-to="0" data-target="#carousel-200650" class="active">
							</li>
							<li data-slide-to="1" data-target="#carousel-200650">
							</li>
							<li data-slide-to="2" data-target="#carousel-200650">
							</li>
						</ol>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<center><img class="d-block wvr-100" alt="Carousel Bootstrap First" src="{{asset('concept/images/videopelajaran/vrcollege.png')}}" style="width: 70%; height:30%;"></center>
								<!-- <div class="carousel-caption">
									<h4>
										First Thumbnail label
									</h4>
									<p>
										Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
									</p>
								</div> -->
							</div>
							<div class="carousel-item">
								<center><img class="d-block wvr-100" alt="Carousel Bootstrap First" src="{{asset('concept/images/videopelajaran/vrkerjaya.png')}}" style="width: 70%; height:50%;"></center>
								<!-- <div class="carousel-caption">
									<h4>
										Second Thumbnail label
									</h4>
									<p>
										Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
									</p>
								</div> -->
							</div>
							<div class="carousel-item">
								<center><img class="d-block wvr-100" alt="Carousel Bootstrap First" src="{{asset('concept/images/videopelajaran/vrcourses.png')}}" style="width: 70%; height:50%;"></center>
								<!-- <div class="carousel-caption">
									<h4>
										Third Thumbnail label
									</h4>
									<p>
										Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.
									</p>
								</div> -->
							</div>
						</div> <a class="carousel-control-prev" href="#carousel-200650" data-slide="prev"><span class="carousel-control-prev-icon"></span> <span class="sr-only">Previous</span></a> <a class="carousel-control-next" href="#carousel-200650" data-slide="next"><span class="carousel-control-next-icon"></span> <span class="sr-only">Next</span></a>
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
