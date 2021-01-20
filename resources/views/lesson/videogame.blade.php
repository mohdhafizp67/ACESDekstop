@extends('layouts.app-student')

@section('content')

<div class="container-fluid" style="background-image: url({{asset('concept/images/mascot4.png')}}); background-position: 50% 50%;background-repeat: no-repeat;background-size: cover;">
	<div class="row">
		<div class="col-md-12">
			<h3 style="padding-top: 10%; padding-bottom: 5%; font-size: 35px; font-weight: bold; color: #000;">
				VIDEO PENGENALAN
			</h3>
		</div>
	</div>
	<div class="row" style="padding-bottom: 5%;">
		<div class="col-md-2">
		</div>
		<div class="col-md-8">
        <iframe width="100%" height="410px" src="https://www.youtube.com/embed/cCV40Fr5WVo" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>

		<div class="col-md-2">
		</div>
	</div>
  <div class="row" style="padding-bottom: 4%;">
    <div class="col-md-10">

    </div>
    <div class="col-md-2">
      <a href="http://localhost/PlatformIntro/webgl/" class="btn btn-success" type="submit">SKIP</a>
    </div>
  </div>
</div>
@endsection
