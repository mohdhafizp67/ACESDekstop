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

  <body data-home-page="Page-1.html" data-home-page-title="Page 1" class="u-body">
    <section class="u-clearfix u-image u-section-1" id="sec-3c4f" data-image-width="1080" data-image-height="607">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-custom-font u-text u-text-body-alt-color u-title u-text-1">
          <span style="font-size: 3rem;">maklum balas pengguna</span>
        </h1>
        <div class="u-form u-form-1">
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

          <form action="{{route('others.feedback.save')}}" method="POST"  style="padding: 10px" source="custom" name="form">
            @csrf
            <div class="u-form-email u-form-group">
              <label for="email-3b9a" class="u-label u-text-body-alt-color">Nama</label>
              <input type="email" placeholder="" value="{{Auth::user()->name}}" id="email-3b9a" name="text" class="u-input u-input-rectangle u-white" disabled>
            </div>
            <div class="u-form-group u-form-name">
              <label for="name-3b9a" class="u-label u-text-body-alt-color">Emel</label>
              <input type="text" placeholder="Emel" id="name-3b9a" name="email" value="{{Auth::user()->email}}" class="u-input u-input-rectangle u-white" disabled>
            </div>
            <div class="u-form-group u-form-group-3">
              <label for="text-719d" class="u-label u-text-body-alt-color">Subjek</label>
              <input type="text" placeholder="Subjek" id="text-719d" name="text-1" class="u-input u-input-rectangle u-white" required>
            </div>
            <div class="u-form-group u-form-message">
              <label for="message-3b9a" class="u-label u-text-body-alt-color">Maklum Balas</label>
              <textarea placeholder="Mesej" rows="4" cols="50" id="message-3b9a" name="message" class="u-input u-input-rectangle u-white" autofocus="autofocus" required></textarea>
            </div>
            <div class="u-align-center u-form-group u-form-submit">
              <!-- <a href="#" class="u-btn u-btn-submit u-button-style u-custom-color-1 u-hover-custom-color-3 u-btn-1">Hantar</a> -->
              <button type="submit" class="u-btn u-btn-submit u-button-style u-custom-color-1 u-hover-custom-color-3 u-btn-1" name="button">Hantar Maklum Balas</button>
              <!-- <input type="submit" value="submit" class="u-form-control-hidden"> -->
            </div>
            <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
            <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then try again. </div>
            <input type="hidden" value="" name="recaptchaResponse">
          </form>

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

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>

<script type="text/javascript">
$("document").ready(function(){
  setTimeout(function(){
     $("div.alert").remove();
  }, 5000 ); // 5 secs

});
</script>

@endsection
