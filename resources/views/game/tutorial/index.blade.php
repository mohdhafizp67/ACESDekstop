@extends('layouts.app-student-qbadminui')
@section('content')
    <link rel="shortcut icon" href="{{ asset('game_1/TemplateData/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('game_1/TemplateData/style.css') }}">
    <script src="{{ asset('game_1/TemplateData/UnityProgress.js') }}"></script>
    <script src="{{ asset('game_1/Build/UnityLoader.js') }}"></script>
    <script>
      var unityInstance = UnityLoader.instantiate("unityContainer", "{{ asset('game_1/Build/ACES_DroneTest.json') }}", {onProgress: UnityProgress});
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
@endsection
