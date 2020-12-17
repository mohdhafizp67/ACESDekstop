@extends('layouts.app-index')
@section('content')
    <link rel="stylesheet" href="{{ asset('game/style.css') }}">
    <link rel="shortcut icon" href="{{ asset('game/favicon.ico') }}" />
    <script src="{{ asset('game/UnityProgress.js') }}"></script>
    <body class="template">
      <div class="template-wrap clear">
        <canvas class="emscripten" id="canvas" oncontextmenu="event.preventDefault()" height="600px" width="960px"></canvas>
        <br>
        <div class="logo"></div>
        <div class="fullscreen"><img src="{{ asset('game/fullscreen.png') }}" width="38" height="38" alt="Fullscreen" title="Fullscreen" onclick="SetFullscreen(1);" /></div>
        <div class="title">Artanis Cloud Demo</div>
      </div>
      <script type='text/javascript'>
        var Module = {
          TOTAL_MEMORY: 268435456,
          errorhandler: null,			// arguments: err, url, line. This function must return 'true' if the error is handled, otherwise 'false'
          compatibilitycheck: null,
          backgroundColor: "#222C36",
          splashStyle: "Light",
          dataUrl: "{{ asset('game/Release/V0.02.data') }}",
          codeUrl: "{{ asset('game/Release/V0.02.js') }}",
          asmUrl: "{{ asset('game/Release/V0.02.asm.js') }}",
          memUrl: "{{ asset('game/Release/V0.02.mem') }}",
        };
      </script>
      <script src="{{ asset('game/Release/UnityLoader.js') }}"></script>
    </body>

@endsection
