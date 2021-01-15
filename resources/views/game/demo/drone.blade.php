<html lang="en-us">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>Unity WebGL Player | Drone Game ACES</title>
    <link rel="shortcut icon" href="{{ asset('game/drone/TemplateData/favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('game/drone/TemplateData/style.css') }}">
    <script src="{{ asset('game/drone/TemplateData/UnityProgress.js') }}"></script>
    <script src="{{ asset('game/drone/Build/UnityLoader.js') }}"></script>
    <script>
      var unityInstance = UnityLoader.instantiate("unityContainer", "{{ asset('game/drone/Build/WebGLgame.json') }}", {onProgress: UnityProgress});
    </script>
  </head>
  <body>
    <div class="webgl-content">
      <div id="unityContainer" style="width: 960px; height: 600px"></div>
      <div class="footer">
        <div class="webgl-logo"></div>
        <div class="fullscreen" onclick="unityInstance.SetFullscreen(1)"></div>
        <div class="title">Drone Game ACES</div>
      </div>
    </div>
  </body>
</html>
