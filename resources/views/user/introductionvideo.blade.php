@extends('layouts.app-login-register')

@section('content')
<html>
<head>
  <link rel="stylesheet" href="{{ asset('css/Login.css') }} ">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

<style>
:root {
  --overlay-color: #31385C;
}

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  font-family: "Poppins", sans-serif;
}

.showcase {
  position: absolute;
  right: 0;
  width: 100%;
  min-height: 100vh;
  padding: 100px;
  display: flex;
  justify-content: space-between;
  align-items: center;
  background: #111;
  color: #fff;
  transition: 0.5s;
  z-index: 2;
}

.showcase.active {
  right: 300px;
}

.showcase header {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  padding: 40px 100px;
  z-index: 1000;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.logo {
  text-transform: uppercase;
  cursor: pointer;
}

.showcase video {
  position: fixed;
  top: 0;
  left: 0;
  width: 100%;
  /* min-height: 100vh; */
  object-fit: cover;
  opacity: 0.8;
  height: 510px;
}

.overlay {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: var(--overlay-color);
  mix-blend-mode: overlay;
}

.text {
  position: relative;
  z-index: 10;
}

.text h2 {
  font-size: 5em;
  font-weight: 800;
  line-height: 1em;
  text-transform: uppercase;
}

.text h3 {
  font-size: 4em;
  font-weight: 700;
  line-height: 1em;
  text-transform: uppercase;
}

.text p {
  font-size: 1.1em;
  font-weight: 400;
  margin: 20px 0;
  max-width: 700px;
}

.text a {
  display: inline-block;
  font-size: 1em;
  background: #fff;
  padding: 10px 30px;
  text-decoration: none;
  color: #111;
  margin-top: 10px;
  text-transform: uppercase;
  letter-spacing: 2px;
  transition: 0.2s;
}

.text a:hover {
  letter-spacing: 6px;
}

.social {
  position: absolute;
  bottom: 20px;
  z-index: 10;
  display: flex;
  justify-content: center;
  align-items: center;
}

.social li {
  list-style: none;
}

.social li a {
  display: inline-block;
  filter: invert(1);
  margin-right: 20px;
  transform: scale(0.5);
  transition: 0.5s;
}

.social li a:hover {
  transform: scale(0.5) translateY(-15px);
}

.menu {
  position: absolute;
  top: 0;
  right: 0;
  width: 300px;
  height: 100%;
  display: flex;
  align-items: center;
  justify-content: center;
}

.menu ul {
  position: relative;
  list-style: none;
}

.menu ul li a {
  text-decoration: none;
  font-size: 24px;
  color: #111;
}

.menu ul li a:hover {
  color: var(--overlay-color);
}

@media (max-width: 800px) {
  .showcase,
  .showcase header {
    padding: 40px;
  }

  .text h2 {
    font-size: 3em;
  }

  .text h3 {
    font-size: 2em;
  }
}

</style>
</head>
<body>

  <section class="showcase">
    <header>
      <div class="toggle"></div>
    </header>
    <video
      id="myVideo"
      src="{{asset('concept/video/Mascotvideo.mp4')}}"
      muted
      loop
      autoplay
      type="video/mp4"
    ></video>
<!-- Sample Video provided by DesignSupply https://codepen.io/designsupply/pen/zmEWBm -->
    <!-- Download Video Source and host the file on your own server -->
    <!-- For example: https://www.pexels.com/video/aerial-view-of-beautiful-resort-2169880/ -->
    <div class="overlay"></div>

    <ul class="social">

          <button onclick="pauseVid()" type="button" class="btn" style="background-image: url({{asset('concept/images/galaxy/button_submit.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover; width: 100%; color: #fff;">Pause Video</button>&nbsp

           <button onclick="playVid()" type="button" class="btn" style="background-image: url({{asset('concept/images/galaxy/button_submit.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover; width: 100%; color: #fff;">Play Video</button>&nbsp&nbsp

           <a href="{{route('login')}}"><button type="button" class="btn" style="background-image: url({{asset('concept/images/galaxy/button_submit.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover; width: 200%; color: #fff;">Next</button></a>

    </ul>

  </section>

</body>

<script>
var vid = document.getElementById("myVideo");

function playVid() {
  vid.play();
}

function pauseVid() {
  vid.pause();
}
</script>
</html>
@endsection
