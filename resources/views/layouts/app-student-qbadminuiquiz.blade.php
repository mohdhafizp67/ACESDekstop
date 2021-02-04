<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'QBAdminUI') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset('qbadminui/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('qbadminui/css/vendor/bootstrap-4.3.1/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('qbadminui/css/main.css') }}">


    <link rel="stylesheet" href="{{ asset('qbadminui/css/vendor/DataTable-1.10.20/datatables.min.css') }}"></link>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <style>

    .dropdown-menu {
        position: absolute;
        top: 100%;
        left: 0;
        z-index: 1000;
        display: none;
        float: left;
        min-width: 10rem;
        padding: .5rem 0;
        margin: .125rem 0 0;
        font-size: 1rem;
        color: #ffffff;
        text-align: left;
        list-style: none;
        background-color: #17a2b88a;
        background-clip: padding-box;
        border: 1px solid rgba(0,0,0,.15);
        border-radius: 10px;
        border: 2px solid #007bff;
    }

      .dropdown-menu-right {
      right: 0;
      left: auto;
      }

    .dropdown-menu-max-height {
        max-height: 15rem !important;
        overflow: auto !important;
    }

    .modal-content {
    position: relative;
    display: -ms-flexbox;
    display: flex;
    color: #fff;
    -ms-flex-direction: column;
    flex-direction: column;
    width: 100%;
    pointer-events: auto;
    background-color: #012f37;
    background-clip: padding-box;
    border: 1px solid rgba(0,0,0,.2);
    border-radius: .3rem;
    outline: 0;
    /* border: 2px solid #007bff; */
}

.modal-header {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: start;
    align-items: flex-start;
    -ms-flex-pack: justify;
    justify-content: space-between;
    padding: 1rem 1rem;
    border-bottom: 0px solid #dee2e6;
    border-top-left-radius: .3rem;
    border-top-right-radius: .3rem;
}

.modal-footer {
    display: -ms-flexbox;
    display: flex;
    -ms-flex-align: center;
    align-items: center;
    -ms-flex-pack: end;
    justify-content: flex-end;
    padding: 1rem;
    border-top: 0px solid #dee2e6;
    border-bottom-right-radius: .3rem;
    border-bottom-left-radius: .3rem;
}
    </style>
    <meta name="theme-color" content="#fafafa">
</head>
<body class="position-relative">
    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->
    <div class="container-fluid px-0">
        <!-- The side bar -->
        <div class="side-bar side-bar-lg-active" data-theme="purple">
            <!-- Brand details -->
            <div class="side-menu-brand d-flex flex-column justify-content-center align-items-center clear mt-3">
                <img src="{{ asset('concept/images/StudentDashboard/Logo.png') }}" alt="bran_name" class="brand-img" style="width: 100%;padding-top: 15%;">
                <!-- <a href="{{ route('home') }}" class="brand-name mt-2 ml-2 font-weight-bold" style="text-align: center; font-size: 20px !important;">Permohonan Data Geospatial</a> -->
            </div>
            @if(Auth::user())
            <!-- Side bar menu -->
            <div class="the_menu mt-2">
                <!-- Heading -->
                <div class="side-menu-heading d-flex">
                    <h6 class=" font-weight-bold pb-2 mx-3" style="color: yellow;">&nbsp&nbsp&nbsp&nbsp&nbsp{{explode(' ',trim(ucwords(strtolower((Auth::user()->name)))))[0]}} {{explode(' ',trim(ucwords(strtolower((Auth::user()->name)))))[1]}} </h6>

                    <!-- <a  class="font-weight-bold ml-auto px-3"
                        href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                    >
                        <i class="fas fa-sign-out-alt"></i>
                    </a> -->
                </div>

                <!-- Menu item -->
                <div id="accordion">
                    <ul class="side-menu p-0 m-0 mt-3">


                        <li class="side-menu-item px-3" style="background-image: url({{asset('concept/images/galaxy/button_main.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover;"><a href="{{route('home')}}" class="w-100 py-2">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fa fa-home" aria-hidden="true"></i>&nbsp&nbsp DASHBOARD</a></li>
                        <!-- <div style="padding: 5px;"></div> -->
                        <!-- <li class="side-menu-item px-3" style="background-image: url({{asset('concept/images/galaxy/button_main.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover;"><a href="{{ route('user.student.profile') }}" class="w-100 py-2">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fas fa-user-circle"aria-hidden="true"></i>&nbsp&nbsp PROFIL PELAJAR</a></li> -->

                        <li class="nav-divider" style="text-align: justify; margin-left: 6%; font-size: 1rem; padding-top: 2%;padding-bottom: 2%;">
                            <font color="#77D8BE">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspACTIVITIES</font>
                        </li>

                        <li class="side-menu-item px-3" style="background-image: url({{asset('concept/images/galaxy/button_main.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover;"><a href="{{route('lesson.courses')}}" class="w-100 py-2" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fa fa-book" aria-hidden="true"></i>&nbsp&nbsp LESSON</a></li>
                        <div style="padding: 5px;"></div>
                        <li class="side-menu-item px-3" style="background-image: url({{asset('concept/images/galaxy/button_main.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover;"><a href="{{route('quiz.choose-quiz')}}" class="w-100 py-2" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fa fa-question-circle" aria-hidden="true"></i>&nbsp&nbsp QUIZ</a></li>
                        <div style="padding: 5px;"></div>

                        <li class="side-menu-item px-3" style="background-image: url({{asset('concept/images/galaxy/button_main.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover;"><a href="{{route('user.game.demo')}}" class="w-100 py-2" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fa fa-gamepad" aria-hidden="true"></i>&nbsp&nbsp GAME</a></li>
                        <div style="padding: 5px;"></div>

                        <li class="side-menu-item px-3" style="background-image: url({{asset('concept/images/galaxy/button_main.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover;"><a href="{{ route('activities.leaderboard') }}" class="w-100 py-2" >&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fa fa-trophy" aria-hidden="true"></i>&nbsp&nbsp LEADERBOARD</a></li>


                        <li class="nav-divider" style="text-align: justify; margin-left: 6%; font-size: 1rem; padding-top: 2%;padding-bottom: 2%;">
                            <font color="#77D8BE">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspOTHERS</font>
                        </li>
                        <li class="side-menu-item px-3" style="background-image: url({{asset('concept/images/galaxy/button_main.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover;"><a href="{{route('others.feedback')}}" class="w-100 py-2">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fas fa-comments" aria-hidden="true"></i>&nbsp&nbsp FEED BACK</a></li>


                        <div style="padding: 5px;"></div>

                        <li class="side-menu-item px-3" style="background-image: url({{asset('concept/images/galaxy/button_main.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover;"><a href="#" class="w-100 py-2" data-toggle="modal" data-target="#logOutModal">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<i class="fa fa-power-off" aria-hidden="true"></i>&nbsp&nbsp LOG OUT</a></li>

                        <!-- <li class="nav-divider" style="background-image: url({{asset('concept/images/galaxy/button_main.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover;">
                            <button type="button" class="btn" name="button" data-toggle="modal" data-target="#logOutModal"><i class="fa fa-power-off" aria-hidden="true"></i>&nbsp&nbsp LOG KELUAR</button>
                        </li> -->

                        <!-- <li class="nav-divider" style="background-image: url({{asset('concept/images/galaxy/button_main.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover;">
                            <button type="button" class="btn" name="button" data-toggle="modal" data-target="#logOutModal" style="color: #ff1100"><i class="fa fa-power-off" aria-hidden="true"></i>&nbsp&nbsp LOG KELUAR</button>
                        </li> -->

                    </ul>
                </div>
            </div>
                        @endif

        </div>

        <!-- Main section -->
        <main class="bg-light main-full-body">

          <div class="modal fade" id="logOutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered" role="document">
                  <div class="modal-content">
                      <div class="modal-header">
                          <h6 class="modal-title" id="exampleModalLabel">CONFIRMATION</h6>
                          <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </a>
                      </div>
                      <div class="modal-body">
                          <p style="text-align: justify;">ARE YOU SURE TO LOG OUT?</p>
                      </div>
                      <div class="modal-footer">
                          <a href="#" class="btn" data-dismiss="modal" style="background-image: url({{asset('concept/images/galaxy/button_submit.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover; width: 22%;">CANCEL</a>
                          <!-- <a href="#" class="btn btn-primary">Yes</a> -->
                          <form id="logout-form" action="{{ route('logout') }}" method="POST">
                          @csrf
                          <button type="
                          " name="button" class="btn" style="background-image: url({{asset('concept/images/galaxy/button_submit.png')}}); background-position: 40% 40%;background-repeat: no-repeat;background-size: cover;">LOG OUT</button>
                          </form>
                      </div>
                  </div>
              </div>
          </div>

            <!-- Theme changer -->
            <!-- <div class="theme-option p-4">
                <div class="theme-pck">
                    <i class="fas fa-cog fa-lg"></i>
                </div>
                <p>Colour Theme:</p>
                <div class="side-nav-themes d-flex flex-row">
                    <p class="p-3 rounded side-nav-theme-primary side-nav-theme" theme-color="purple"></p>
                    <p class="p-3 rounded ml-2 side-nav-theme-light side-nav-theme" theme-color="light"></p>
                </div>
            </div> -->

<!--
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
            @endif -->
            <!-- The navbar -->


    @yield('content')

    <!-- Footer section -->

    <!-- <footer class="footer" style="padding-top: 0%; background-color: #130E29 !important;">
        <p style="padding: 1%; margin-top: 0%; color: white;">&copy; Hakcipta Terpelihara 2021. <a href="#" target="_Blank"><font color="white">ARTANIS CLOUD SDN BHD</font></a></p>

    </footer> -->
  </div>


    <script src="{{ asset('qbadminui/js/vendor/bootstrap-4.3.1/modernizr-3.7.1.min.js') }}"></script>
    <script src="{{ asset('qbadminui/js/vendor/jquery-3.3.1/jquery-3.3.1.min.js') }}"></script>
    <!-- Bootstrap -->
    <script src="{{ asset('qbadminui/js/vendor/popper-js/popper1.14.7.js') }}"></script>
    <script src="{{ asset('qbadminui/js/vendor/bootstrap-4.3.1/bootstrap.min.js') }}"></script>
    <!-- eChart -->
    <script src="{{ asset('qbadminui/js/vendor/eChart/echarts.min.js') }}"></script>
    <script src="{{ asset('qbadminui/js/vendor/eChart/echarts.option.min.js') }}"></script>
    <!-- eChart script -->
    <script src="{{ asset('qbadminui/js/plugins/echart_drw.js') }}"></script>
    <script src="{{ asset('qbadminui/js/plugins.js') }}"></script>
    <script src="{{ asset('qbadminui/js/main.js') }}"></script>
    <!-- Data Table -->
    <script src="{{ asset('qbadminui/js/vendor/DataTable-1.10.20/datatables.min.js') }}"></script>
    <!-- Data Table script -->
    <script src="{{ asset('qbadminui/js/plugins/dataTable_script.js') }}"></script>
</body>
</html>
<script type="text/javascript">
$("document").ready(function(){
  setTimeout(function(){
     $("div.alert").remove();
  }, 5000 ); // 5 secs

});
</script>
