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
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">

    <!-- Stylesheet -->
    <link rel="stylesheet" href="{{ asset('qbadminui/fontawesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('qbadminui/css/vendor/bootstrap-4.3.1/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('qbadminui/css/main.css') }}">

    <link rel="stylesheet" href="{{ asset('qbadminui/css/vendor/DataTable-1.10.20/datatables.min.css') }}"></link>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <style>
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
                <img src="{{ asset('concept/images/StudentDashboard/Logo.png') }}" alt="bran_name" class="brand-img" style="width: 100%;padding-top: 20%;">
                <!-- <a href="{{ route('home') }}" class="brand-name mt-2 ml-2 font-weight-bold" style="text-align: center; font-size: 20px !important;">Permohonan Data Geospatial</a> -->
            </div>
            @if(Auth::user())
            <!-- Side bar menu -->
            <div class="the_menu mt-5">
                <!-- Heading -->
                <div class="side-menu-heading d-flex">
                    <h6 class=" font-weight-bold pb-2 mx-3"> {{ucwords(strtolower((Auth::user()->name)))}} </h6>
                    <a  class="font-weight-bold ml-auto px-3"
                        href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                    >
                        <i class="fas fa-sign-out-alt"></i>
                    </a>
                </div>

                <!-- Menu item -->
                <div id="accordion">
                    <ul class="side-menu p-0 m-0 mt-3">

                        <li class="side-menu-item px-3"><a href="{{route('home')}}" class="w-100 py-2"><i class="fa fa-home" aria-hidden="true"></i>HALAMAN UTAMA</a></li>
                        <!-- Sub menu parent -->
                        <li class="side-menu-item px-3"><a href="{{ route('user.student.profile') }}" class="w-100 py-2"><i class="fas fa-user-circle"aria-hidden="true"></i>PROFIL PELAJAR</a></li>

                        <li class="nav-divider" style="text-align: justify; margin-left: 6%; font-size: 1rem; padding-top: 2%;padding-bottom: 2%; text-decoration: underline">
                            <font color="white">AKTIVITI</font>
                        </li>

                        <!-- Sub menu parent -->
                        <li class="side-menu-item px-3"><a href="{{route('lesson.courses')}}" class="w-100 py-2" ><i class="fa fa-book" aria-hidden="true"></i>PELAJARAN</a></li>
                        <!-- Sub menu parent -->
                        <li class="side-menu-item px-3"><a href="{{route('quiz.choose-quiz')}}" class="w-100 py-2" ><i class="fa fa-question-circle" aria-hidden="true"></i>KUIZ</a></li>


                        <!-- Sub menu parent -->
                        <li class="side-menu-item px-3"><a href="{{route('user.game.demo')}}" class="w-100 py-2" ><i class="fa fa-gamepad" aria-hidden="true"></i>PERMAINAN</a></li>

                        <li class="side-menu-item px-3"><a href="{{ route('activities.leaderboard') }}" class="w-100 py-2" ><i class="fa fa-trophy" aria-hidden="true"></i>CARTA JUARA</a></li>

                        <li class="nav-divider" style="text-align: justify; margin-left: 6%; font-size: 1rem; padding-top: 2%;padding-bottom: 2%; text-decoration: underline">
                            <font color="white">LAIN-LAIN</font>
                        </li>


                        <!-- Sub menu parent -->
                        <li class="side-menu-item px-3"><a href="{{route('others.feedback')}}" class="w-100 py-2"><i class="fas fa-comments" aria-hidden="true"></i>MAKLUM BALAS</a></li>

                        <li class="nav-item ">
                          <a class="nav-link" href="#" data-toggle="modal" data-target="#logOutModal"><i class="fa fa-power-off" aria-hidden="true"></i>LOG KELUAR</a>
                        </li>

                        <!-- <li class="side-menu-item px-3"><a href="#" class="w-100 py-3 pl-4" >Senarai Permohonan </a></li> -->



                        <!-- <li class="side-menu-item px-3"><a href="#" class="w-100 py-3 pl-4" >Manual Pengguna</a></li> -->




                    </ul>
                </div>
            </div>
                        @endif

        </div>

        <!-- Main section -->
        <main class="bg-light main-full-body" style="background-color: #ccc!important;">

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
            <!-- The navbar -->
            <nav class="navbar navbar-expand navbar-light bg-light py-3" style="background-color: #ccc!important;">
                <p class="navbar-brand mb-0 pb-0">
                    <span></span>
                    <span></span>
                    <span></span>


                </p>



                <a href="{{ url()->previous() }}" class="btn btn-outline-primary m-2" style="font-size:150%"><i class="fa fa-chevron-circle-left" aria-hidden="true"></i> Kembali</a>



                <!-- Navbar search section -->
                <!-- <div class="navb-search ml-5 d-none d-md-block">
                    <form action="#" method="POST">
                        <div class="input-group search-round">
                            <input type="text" class="form-control" placeholder="Search...">
                            <div class="input-group-append">
                                <button class="btn border" type="submit"><i class="fas fa-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div> -->
                <!-- Navbar right menu section -->
                <div class="navb-menu ml-auto d-flex flex-row">

                    <!-- Message dropdown -->
                    <div class="dropdown dropdown-arow-none d-contents text-center mx-2 pt-1">
                        <!-- Icon -->

                    </div>

                    <!-- Notification dropdown -->

                    <!-- Profile action dropdown -->
                    <div class="dropdown dropdown-arow-none d-contents text-center mx-2">
                        <!-- Icon -->
                        <a href="#" class="w-100 dropdown-toggle text-muted" data-toggle="dropdown">

                          @if(Auth::user()->gambar_profile == null)

                          <img src="{{ asset('https://icon-library.com/images/default-profile-icon/default-profile-icon-24.jpg') }}" alt="profile" class="profile-avatar" style="height:40px; width:40px;">
                          @else
                          <img src="{{ asset( $image_path = str_replace('public', 'storage',  Auth::user()->gambar_profile)) }}"  class="profile-avatar" style="height:40px; width:40px; ">
                          @endif
                        </a>
                        <!-- Dropdown Menu -->
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-max-height">
                            <!-- Menu items -->

                            <a href="#" class="dropdown-item disabled small"><i class="far fa-user mr-1"></i>{{explode(' ',trim(ucwords(strtolower((Auth::user()->name)))))[0]}} </a>
                            <a href="{{route('user.student.profile')}}" class="dropdown-item text-secondary-light">PROFIL PELAJAR</a>
                            <a href="{{ route('user.change-password') }}" class="dropdown-item text-secondary-light">TUKAR KATA LALUAN</a>

                            <!-- <a href="#" class="dropdown-item text-secondary-light">Billing history</a> -->
                            <a  class="dropdown-item text-secondary-light"
                                href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"
                            >Log Keluar</a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </nav>

    @yield('content')

    <!-- Footer section -->
    <footer class="footer" style="padding-top: 2%">
        <p style="padding: 1%; margin-top: 1%;">&copy; Hakcipta Terpelihara 2021. <a href="#" target="_Blank"><font color="black">ARTANIS CLOUD SDN BHD</font></a></p>
    </footer>
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
