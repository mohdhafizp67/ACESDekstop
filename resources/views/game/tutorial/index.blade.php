@extends('layouts.app-student-qbadminui')
@section('content')
<html lang="en-us">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>ACES Drone Tutorial</title>
    <link rel="shortcut icon" href="{{ asset('game/game_1/TemplateData/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('game/game_1/TemplateData/style.css') }}">
    <script src="{{ asset('game/game_1/TemplateData/UnityProgress.js') }}"></script>
    <script src="{{ asset('game/game_1/Build/UnityLoader.js') }}"></script>
    <script>
      var unityInstance = UnityLoader.instantiate("unityContainer", "{{ asset('game/game_1/Build/ACES_DroneTest.json') }}", {onProgress: UnityProgress});
    </script>
  </head>
  <body>
    <div class="webgl-content">
      <div id="unityContainer" style="width: 960px; height: 600px"></div>
      <div class="footer">
        <div class="webgl-logo"></div>
        <div class="fullscreen" onclick="unityInstance.SetFullscreen(1)"></div>
        <div class="title">ACES Drone Tutorial</div>
      </div>
    </div>
  </body>
</html>
@endsection
