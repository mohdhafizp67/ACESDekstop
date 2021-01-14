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
    <link rel="stylesheet" href="{{ asset('css/feedback.css') }} ">

  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12" style="padding-top: 8%; padding-bottom: 9%; background-image: url({{asset('concept/images/permainan/drone1.jpg')}}); background-position: 100% 100%;background-repeat: no-repeat;background-size: cover;">
      <h2 style="color: #fff; text-align: justify; font-weight: bold;">
				Maklum Balas
			</h2>
			<form role="form" style="padding: 15px; text-align: justify;" action="#" method="POST" >
        <div class="form-group">

					<label for="exampleInputEmail1" style="color: #fff;font-weight: bold;">
						Nama Penuh
					</label>
					<input placeholder="Nama"ctype="text" class="form-control" id="" autocomplete="off" >
				</div>
				<div class="form-group">

					<label for="exampleInputEmail1" style="color: #fff;font-weight: bold;">
						Emel
					</label>
					<input  placeholder="Emel"type="email" class="form-control" id="" autocomplete="off" >
				</div>
				<div class="form-group">

					<label for="exampleInputPassword1" style="color: #fff;font-weight: bold;">
						Kata Laluan
					</label>
					<input placeholder="Kata Laluan" type="password" class="form-control" id="" autocomplete="off">
				</div>

        <div class="form-group">

          <label for="exampleInputEmail1" style="color: #fff;font-weight: bold;">
            Mesej
          </label>
          <textarea placeholder="Mesej" rows="4" cols="50" name="address" class="u-border-1 u-border-grey-80 u-grey-75 u-input u-input-rectangle form-control" oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);"></textarea>
        </div>

				<div class="form-group">

					<label for="exampleInputFile" style="color: #fff;font-weight: bold;">
						File input
					</label>
					<input type="file" class="form-control-file" id="">
				</div>

        <div class="u-align-center u-form-group u-form-submit">
            <button class="btn btn-success" type="submit">HANTAR</button>
        </div>
			</form>
		</div>
	</div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>

@endsection
