@extends('layouts.app-student')

@section('content')

<div class="container-fluid" style="background-image: url({{asset('concept/images/mascot4.jpg')}}); background-position: 50% 50%;background-repeat: no-repeat;background-size: cover;">
	<div class="row">
		<div class="col-md-12">
			<h3 style="padding-top: 10%; padding-bottom: 5%; font-size: 35px; font-weight: bold; color: #000;">
				PILIH KARAKTER ANDA
			</h3>
		</div>
	</div>
	<div class="row" style="padding-bottom: 13%;">
		<div class="col-md-2">
		</div>
		<div class="col-md-8">
        <a href="{{route('lesson.videogame')}}"><img alt="Bootstrap Image Preview" src="{{asset('concept/images/videogame/5.jpeg')}}" style="width: 100%; height: auto;"></a>
		</div>

		<div class="col-md-2">
		</div>
	</div>
</div>
@endsection
