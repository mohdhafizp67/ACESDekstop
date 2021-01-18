
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
		<link rel="stylesheet" href="{{ asset('css/welcome.css') }} ">
		<link rel="preconnect" href="https://fonts.gstatic.com">
		<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">

  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<video autoplay muted loop id="myVideo">
  		<source src="{{ asset('concept/images/Video.mp4') }}" type="video/mp4">
			</video>
			<div class="row">
				<div class="col-md-4">
				</div>
				<div class="col-md-4" style="padding-top: 7%;">
					<img src="{{ asset('concept/images/StudentDashboard/Logo.png') }}" alt="logo" style="width: 100%;">
					<p style="padding-top: 10%; padding-bottom: 5%; color: #fff;">
						Pusat Kecemerlangan Teknologi Pintar Asia (ACES) di bawah Majlis Pembangunan Wilayah Ekonomi Pantai Timur (ECERDC) merancang untuk mengembangkan aplikasi berdasarkan  karya sebagai alat untuk untuk menyebarkan kesedaran dan juga berfungsi sebagai pengenalan kepada industri 4.0 (I4.0) kepada pelajar Tingkatan 5 yang terpilih.
					</p>
				</div>
				<div class="col-md-4">
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
				</div>
				<div class="col-md-3">
					<button type="button" class="btn btn-success" style="margin-top: 0%;margin-left: 0%;">
						<a href="{{route('register')}}">DAFTAR MASUK</a>
					</button>
				</div>
				<div class="col-md-3">
					<button type="button" class="btn btn-success" style="margin-top: 0%;margin-left: 0%;">
						<a href="{{route('login')}}">LOG MASUK</a>
					</button>
				</div>
				<div class="col-md-3">
				</div>
			</div>
			<div class="row">
				<div class="col-md-3">
				</div>
				<div class="col-md-3">
				</div>
				<div class="col-md-3">
				</div>
				<div class="col-md-3">
					<img alt="Bootstrap Image Preview" src="{{ asset('concept/images/aces.png') }}">
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
