@extends('layouts.app-student')
@section('content')


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Kemaskini Profil</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/kemaskiniprofil.css') }} ">

  </head>
  <body>

    <div class="container-fluid" style="background-image: url({{asset('concept/images/permainan/drone1.jpg')}}); background-position: 100% 100%;background-repeat: no-repeat;background-size: cover;">
	<div class="row">
		<div class="col-md-12" style="padding-top: 5%; padding-bottom: 0%;">
      <h2 style="color: #fff; text-align: center; font-weight: bold; font-size: 35px;">
				Kemaskini Profil
			</h2>

		</div>
	</div>
  <div class="row">
    <div class="col-md-2">

    </div>
    <div class="col-md-8">
      <form role="form" style="padding: 15px; text-align: justify;" action="{{route('user.update', $user->id)}}" method="POST" enctype="multipart/form-data">
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

          <label for="exampleInputEmail1" style="color: #fff;font-weight: bold;">
            Nombor Telefon
          </label>
          <input type="text" name=phone class="form-control bg-light" placeholder="Input Phone No" value="{{$user->phone}}">
        </div>

				<div class="form-group">

					<label for="exampleInputPassword1" style="color: #fff;font-weight: bold;">
						Alamat
					</label>
					<input type="text" name=alamat class="form-control bg-light" placeholder="Input Address" value="{{$user->address}}">
				</div>

        <div class="row">
        <div class="col-md-6">
          <div class="form-group">

            <label for="exampleInputPassword1" style="color: #fff;font-weight: bold;">
              Poskod
            </label>
            <input type="text" name=poskod class="form-control bg-light" placeholder="Input Postcode" value="{{$user->postcode}}">
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group">

            <label for="exampleInputPassword1" style="color: #fff;font-weight: bold;">
              Negeri
            </label>
            <input type="text" name=negeri class="form-control bg-light" placeholder="Input State" value="{{$user->state}}">
          </div>
        </div>
        </div>




          <!-- <div class="form-group">
              <label style="color: #fff;font-weight: bold;">Muatnaik Gambar Profil</label>
              <div class="custom-file">
                  <input type="file" class="custom-file-input" id="gambar_profile" onchange="return fileValidation('gambar_profile')" name="gambar_profile" placeholder="Muatnaik Gambar">
                  <label class="custom-file-label bg-light" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Muatnaik fail</label>
              </div>
              <small id="saiz_data" class="form-text text-secondary">Muat naik gambar tidak melebihi 50MB</small>

              @error('gambar_profile')
              <div class="alert alert-danger">
                <strong>{{ $message }}</strong>
              </div>
              @enderror
          </div> -->


        <div class="form-group">
          <label for="exampleInputPassword1" style="color: #fff;font-weight: bold;">
            Muatnaik Gambar Profil
          </label>

          <div class="form-group">
              <div class="input-group">
                <div class="custom-file">
                         <input type="file" id="img" name="" accept="gambar" style="width:100%" </input>
                          <label class="" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02"</label>
                      </div>

              </div>
          </div>
        </div>


        <div class="u-align-center u-form-group u-form-submit">
          <button class="btn btn-success" type="submit">HANTAR</button>
        </div>
			</form>
    </div>
    <div class="col-md-2">

    </div>
  </div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>

@endsection
