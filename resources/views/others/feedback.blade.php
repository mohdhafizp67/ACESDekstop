@extends('layouts.app-student')

@section('content')
<!DOCTYPE html>
<html lang="en" style="background-color: #232121;">
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
    		<div class="col-md-12" style="background-image: url({{asset('concept/images/StudentDashboard/HeaderBg.jpeg')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover; padding-top: 2%; padding-left: 1%; margin-left: 0%;">

          <div style="padding: 30px;"></div>
          <div class="row">
            <div class="col-md-2">

            </div>
            <div class="col-md" style="padding-top: 6%;">
              @if ($message = Session::get('success'))
              <div id=alert>
                  <div class="alert alert-card  alert-success" role="alert">
                      <strong>Operasi Berjaya! </strong>
                      {{$message}}
                      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
              </div>
              @elseif ($message = Session::get('error'))
              <div id="alert">
                <div class="alert alert-card  alert-danger" role="alert">
                    <strong>Ralat! </strong>
                    {{$message}}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
              </div>
              @endif
              <div class="card border-dark mb-3" style="">
                <div class="card-header">MAKLUM BALAS</div>
                <form action="{{route('others.feedback.save')}}" method="POST"  style="padding: 10px" source="custom" name="form">
                  @csrf
                <div class="card-body text-dark">
                  <div class="row">
                    <div class="col-md-1">

                    </div>
                    <div class="col-md-5">
                      <div class="form-group">
                        <label class="col-form-label">Nama</label>
                        <input id="name" type="text"name="name" value="{{Auth::user()->name}}" class="form-control" disabled>
                      </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group">
                          <label class="col-form-label">Email</label>
                          <input id="email" type="text"name="email" value="{{Auth::user()->email}}" class="form-control" disabled>
                        </div>
                    </div>
                    <div class="col-md-1">

                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-1">

                    </div>
                    <div class="col-md-10">
                      <div class="form-group">
                        <label class="col-form-label">Subjek</label>
                        <input id="subject" type="text"name="subject" class="form-control" required>
                      </div>
                    </div>
                    <div class="col-md-1">

                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-1">

                    </div>
                    <div class="col-md-10">
                      <div class="form-group">
                        <label class="col-form-label">Maklum Balas</label>
                        <textarea class="form-control" id="feedback" name="feedback" rows="3" required></textarea>
                      </div>
                    </div>
                    <div class="col-md-1">

                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-1">

                    </div>
                    <div class="col-md-10">
                      <button type="submit" class="btn btn-success" name="button">HANTAR MAKLUM BALAS</button>
                    </div>
                    <div class="col-md-1">

                    </div>
                  </div>
                </div>
              </form>
              </div>
            </div>
            <div class="col-md-2">

            </div>
          </div>
          <div style="padding: 75px;"></div>
    		</div>
    	</div>
    </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>
@endsection
