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
    <link rel="stylesheet" href="{{ asset('css/kemaskiniprofil.css') }} ">

  </head>
  <body>

    <div class="container-fluid">
	<div class="row">
		<div class="col-md-12" style="padding-top: 8%; padding-bottom: 8%; background-image: url({{asset('concept/images/permainan/drone1.jpg')}}); background-position: 100% 100%;background-repeat: no-repeat;background-size: cover;">
      <h2 style="color: #fff; text-align: justify; font-weight: bold;">
				Kemaskini Profil
			</h2>
			<form role="form" style="padding: 15px; text-align: justify;" action="{{route('user.update', $user->id)}}" method="POST">
        @csrf
        <div class="form-group">

					<label for="exampleInputEmail1" style="color: #fff;font-weight: bold;">
						Nama Penuh
					</label>
					<input type="text" name=name class="form-control bg-light" placeholder="Input name" value="{{$user->name}}">
				</div>

        <div class="form-group">

					<label for="exampleInputEmail1" style="color: #fff;font-weight: bold;">
						IC Penuh
					</label>
					<input type="text" name=ic_number class="form-control bg-light" placeholder="Input IC No" value="{{$user->ic_number}}">
				</div>
				<div class="form-group">

					<label for="exampleInputEmail1" style="color: #fff;font-weight: bold;">
						Emel
					</label>
				  <input type="email" name=email class="form-control bg-light" placeholder="Input Email" value="{{$user->email}}">
				</div>

				<div class="form-group">

					<label for="exampleInputPassword1" style="color: #fff;font-weight: bold;">
						Alamat
					</label>
					<input type="text" name=alamat class="form-control bg-light" placeholder="Input Address" value="{{$user->alamat}}">
				</div>

        <div class="form-group">

          <label for="exampleInputPassword1" style="color: #fff;font-weight: bold;">
            Poskod
          </label>
          <input type="text" name=poskod class="form-control bg-light" placeholder="Input Postcode" value="{{$user->poskod}}">
        </div>

        <div class="form-group">

          <label for="exampleInputPassword1" style="color: #fff;font-weight: bold;">
            Negeri
          </label>
          <input type="text" name=negeri class="form-control bg-light" placeholder="Input State" value="{{$user->negeri}}">
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
