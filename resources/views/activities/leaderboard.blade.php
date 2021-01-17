@extends('layouts.app-student')

@section('content')

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Carta Juara</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
      <link rel="stylesheet" href="{{ asset('css/cartajohan.css') }} ">

  </head>
  <body>

    <div class="container-fluid" style="background-image: url({{asset('concept/images/StudentDashboard/HeaderBg.jpeg')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover; padding-top: 2%; padding-left: 1%; margin-left: 0%;">
	<div class="row" style="padding-top: 5%;">
		<div class="col-md-12">
			<h3 style="text-align: justify; color: #fff; font-size: 35px; font-weight: bold; padding-bottom: 5%;">
				Carta Juara
			</h3>
		</div>
	</div>
	<div class="row">
		<div class="col-md-2">
		</div>
		<div class="col-md-8" style="padding-bottom: 4%;">
			<table class="table table-hover table-bordered table-sm table-carta">
				<thead>
					<tr>
						<th style="color: #fff; font-size: 20px;">
							Kedudukan
						</th>
						<th style="color: #fff; font-size: 20px;">
							Gambar
						</th>
						<th style="color: #fff; font-size: 20px;">
							Nama
						</th>
						<th style="color: #fff; font-size: 20px;">
							Sekolah
						</th>
            <th style="color: #fff; font-size: 20px;">
							Negeri
						</th>
            <th style="color: #fff; font-size: 20px;">
							Mata
						</th>
					</tr>
				</thead>
				<tbody>
					<tr class="table-johan">
						<td>
							1
						</td>
						<td>
							{{Auth::user()->profile_picture}}
						</td>
						<td>
							{{Auth::user()->name}}
						</td>
						<td>
							Sekolah
						</td>
            <td>
							Negeri
						</td>
            <td>
							Mata
						</td>
					</tr>
          <tr class="table-johan">
            <td>
              2
            </td>
            <td>
              {{Auth::user()->profile_picture}}
            </td>
            <td>
              {{Auth::user()->name}}
            </td>
            <td>
              Sekolah
            </td>
            <td>
              Negeri
            </td>
            <td>
              Mata
            </td>
          </tr>
          <tr class="table-johan">
            <td>
              3
            </td>
            <td>
              {{Auth::user()->profile_picture}}
            </td>
            <td>
              {{Auth::user()->name}}
            </td>
            <td>
              Sekolah
            </td>
            <td>
              Negeri
            </td>
            <td>
              Mata
            </td>
          </tr>
          <tr class="table-johan">
            <td>
              4
            </td>
            <td>
              {{Auth::user()->profile_picture}}
            </td>
            <td>
              {{Auth::user()->name}}
            </td>
            <td>
              Sekolah
            </td>
            <td>
              Negeri
            </td>
            <td>
              Mata
            </td>
          </tr>
          <tr class="table-johan">
            <td>
              5
            </td>
            <td>
              {{Auth::user()->profile_picture}}
            </td>
            <td>
              {{Auth::user()->name}}
            </td>
            <td>
              Sekolah
            </td>
            <td>
              Negeri
            </td>
            <td>
              Mata
            </td>
          </tr>
          <tr class="table-johan">
            <td>
              6
            </td>
            <td>
              {{Auth::user()->profile_picture}}
            </td>
            <td>
              {{Auth::user()->name}}
            </td>
            <td>
              Sekolah
            </td>
            <td>
              Negeri
            </td>
            <td>
              Mata
            </td>
          </tr>
          <tr class="table-johan">
            <td>
              7
            </td>
            <td>
              {{Auth::user()->profile_picture}}
            </td>
            <td>
              {{Auth::user()->name}}
            </td>
            <td>
              Sekolah
            </td>
            <td>
              Negeri
            </td>
            <td>
              Mata
            </td>
          </tr>
          <tr class="table-johan">
            <td>
              8
            </td>
            <td>
              {{Auth::user()->profile_picture}}
            </td>
            <td>
              {{Auth::user()->name}}
            </td>
            <td>
              Sekolah
            </td>
            <td>
              Negeri
            </td>
            <td>
              Mata
            </td>
          </tr>
          <tr class="table-johan">
            <td>
              9
            </td>
            <td>
              {{Auth::user()->profile_picture}}
            </td>
            <td>
              {{Auth::user()->name}}
            </td>
            <td>
              Sekolah
            </td>
            <td>
              Negeri
            </td>
            <td>
              Mata
            </td>
          </tr>

          <tr class="table-user">
            <td>
              500
            </td>
            <td>
              {{Auth::user()->profile_picture}}
            </td>
            <td>
              {{Auth::user()->name}}
            </td>
            <td>
              Sekolah
            </td>
            <td>
              Negeri
            </td>
            <td>
              Mata
            </td>
          </tr>

				</tbody>
			</table>
		</div>
		<div class="col-md-2">
		</div>
	</div>
	<!-- <div class="row">
		<div class="col-md-2">
		</div>
		<div class="col-md-8">
			<table class="table table-hover table-striped">
				<thead>
					<tr>
						<th>
							#
						</th>
						<th>
							Product
						</th>
						<th>
							Payment Taken
						</th>
						<th>
							Status
						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							1
						</td>
						<td>
							TB - Monthly
						</td>
						<td>
							01/04/2012
						</td>
						<td>
							Default
						</td>
					</tr>
					<tr class="table-active">
						<td>
							1
						</td>
						<td>
							TB - Monthly
						</td>
						<td>
							01/04/2012
						</td>
						<td>
							Approved
						</td>
					</tr>
					<tr class="table-success">
						<td>
							2
						</td>
						<td>
							TB - Monthly
						</td>
						<td>
							02/04/2012
						</td>
						<td>
							Declined
						</td>
					</tr>
					<tr class="table-warning">
						<td>
							3
						</td>
						<td>
							TB - Monthly
						</td>
						<td>
							03/04/2012
						</td>
						<td>
							Pending
						</td>
					</tr>
					<tr class="table-danger">
						<td>
							4
						</td>
						<td>
							TB - Monthly
						</td>
						<td>
							04/04/2012
						</td>
						<td>
							Call in to confirm
						</td>
					</tr>
				</tbody>
			</table>
		</div>
		<div class="col-md-2">
		</div>
	</div> -->
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>

@endsection
