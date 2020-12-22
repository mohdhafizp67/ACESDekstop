<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



    <link rel="stylesheet" href="{{ asset('concept/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link href="{{ asset('concept/vendor/fonts/circular-std/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('concept/libs/css/style.css') }}">
    <link rel="stylesheet" href=" {{ asset('concept/vendor/fonts/fontawesome/css/fontawesome-all.css') }}">

    <link rel="stylesheet" href="{{ asset('concept/vendor/charts/chartist-bundle/chartist.css') }}" >
    <link rel="stylesheet" href="{{ asset('concept/vendor/charts/morris-bundle/morris.css') }}">
    <link rel="stylesheet" href="{{ asset('concept/vendor/fonts/material-design-iconic-font/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('concept/vendor/charts/c3charts/c3.css') }}">
    <link rel="stylesheet" href="{{ asset('concept/vendor/fonts/flag-icon-css/flag-icon.min.css') }} ">

    <!-- Icon Size -->
    <!-- <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
    <link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css"> -->

</head>
<body>
    <div id="app">
        <main class="py-0">
          <div class="dashboard-main-wrapper">
              <!-- ============================================================== -->
              <!-- navbar -->
              <!-- ============================================================== -->
              <div class="dashboard-header">
                  <nav class="navbar navbar-expand-lg fixed-top" style="background-color:#fff";>
                      <a class="navbar-brand" href="{{ route('home') }}">ACES</a>
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                          <span class="navbar-toggler-icon"></span>
                      </button>
                      <div class="collapse navbar-collapse " id="navbarSupportedContent">
                          <ul class="navbar-nav ml-auto navbar-right-top">
                              <!-- <li class="nav-item">
                                  <div id="custom-search" class="top-search-bar">
                                      <input class="form-control" type="text" placeholder="Search..">
                                  </div>
                              </li> -->
                              <!-- <li class="nav-item dropdown notification">
                                  <a class="nav-link nav-icons" href="#" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-bell"></i> <span class="indicator"></span></a>
                                  <ul class="dropdown-menu dropdown-menu-right notification-dropdown">
                                      <li>
                                          <div class="notification-title"> Notification</div>
                                          <div class="notification-list">
                                              <div class="list-group">
                                                  <a href="#" class="list-group-item list-group-item-action active">
                                                      <div class="notification-info">
                                                          <div class="notification-list-user-img"><img src="#" alt="" class="user-avatar-md rounded-circle"></div>
                                                          <div class="notification-list-user-block"><span class="notification-list-user-name">Jeremy Rakestraw</span>accepted your invitation to join the team.
                                                              <div class="notification-date">2 min ago</div>
                                                          </div>
                                                      </div>
                                                  </a>
                                                  <a href="#" class="list-group-item list-group-item-action">
                                                      <div class="notification-info">
                                                          <div class="notification-list-user-img"><img src="#" alt="" class="user-avatar-md rounded-circle"></div>
                                                          <div class="notification-list-user-block"><span class="notification-list-user-name">John Abraham </span>is now following you
                                                              <div class="notification-date">2 days ago</div>
                                                          </div>
                                                      </div>
                                                  </a>
                                                  <a href="#" class="list-group-item list-group-item-action">
                                                      <div class="notification-info">
                                                          <div class="notification-list-user-img"><img src="#" alt="" class="user-avatar-md rounded-circle"></div>
                                                          <div class="notification-list-user-block"><span class="notification-list-user-name">Monaan Pechi</span> is watching your main repository
                                                              <div class="notification-date">2 min ago</div>
                                                          </div>
                                                      </div>
                                                  </a>
                                                  <a href="#" class="list-group-item list-group-item-action">
                                                      <div class="notification-info">
                                                          <div class="notification-list-user-img"><img src="#" alt="" class="user-avatar-md rounded-circle"></div>
                                                          <div class="notification-list-user-block"><span class="notification-list-user-name">Jessica Caruso</span>accepted your invitation to join the team.
                                                              <div class="notification-date">2 min ago</div>
                                                          </div>
                                                      </div>
                                                  </a>
                                              </div>
                                          </div>
                                      </li>
                                      <li>
                                          <div class="list-footer"> <a href="#">View all notifications</a></div>
                                      </li>
                                  </ul>
                              </li> -->
                              <!-- <li class="nav-item dropdown connection">
                                  <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-fw fa-th"></i> </a>
                                  <ul class="dropdown-menu dropdown-menu-right connection-dropdown">
                                      <li class="connection-list">
                                          <div class="row">
                                              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                                  <a href="#" class="connection-item"><img src="#" alt="" > <span>Github</span></a>
                                              </div>
                                              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                                  <a href="#" class="connection-item"><img src="#" alt="" > <span>Dribbble</span></a>
                                              </div>
                                              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                                  <a href="#" class="connection-item"><img src="#" alt="" > <span>Dropbox</span></a>
                                              </div>
                                          </div>
                                          <div class="row">
                                              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                                  <a href="#" class="connection-item"><img src="#" alt=""> <span>Bitbucket</span></a>
                                              </div>
                                              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                                  <a href="#" class="connection-item"><img src="#" alt="" ><span>Mail chimp</span></a>
                                              </div>
                                              <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 ">
                                                  <a href="#" class="connection-item"><img src="#" alt="" > <span>Slack</span></a>
                                              </div>
                                          </div>
                                      </li>
                                      <li>
                                          <div class="conntection-footer"><a href="#">More</a></div>
                                      </li>
                                  </ul>
                              </li> -->
                              <li class="nav-item dropdown nav-user">
                                  <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle" aria-hidden="true" style="font-size: 230%;"></i></a>
                                  <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                      <div class="nav-user-info">
                                          <h5 class="mb-0 text-white nav-user-name">Muhammad Shahid</h5>
                                          <span class="status"></span><span class="ml-2">Student</span>
                                      </div>
                                      <a class="dropdown-item" href="{{route('user.profile.edit')}}"><i class="fas fa-user mr-2"></i>Profile</a>
                                      <a class="dropdown-item" href="{{ route('user.change-password') }}"><i class="fa fa-unlock-alt mr-2" aria-hidden="true"></i>Change Password</a>
                                      <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                      <i class="fas fa-power-off mr-2"></i>Logout</a>
                                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                      @csrf
                                      </form>
                                  </div>
                              </li>
                          </ul>
                      </div>
                  </nav>
              </div>


              <!-- ============================================================== -->
              <!-- end navbar -->
              <!-- ============================================================== -->
              <!-- ============================================================== -->
              <!-- left sidebar -->
              <!-- ============================================================== -->
              <div class="nav-left-sidebar" style="background-color: #232121";>
                  <div class="menu-list">
                      <nav class="navbar navbar-expand-lg navbar-light">
                          <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon"></span>
                          </button>
                          <div class="collapse navbar-collapse" id="navbarNav">
                              <ul class="navbar-nav flex-column">
                                <li class="nav-divider">
                                  <img class="logo-img" src="{{ asset('concept/images/aces-removebg-preview.png') }}" alt="logo">
                                </li>
                                  <li class="nav-divider">
                                      Activities
                                  </li>
                                  <li class="nav-item ">
                                    <a class="nav-link" href="{{ route('home') }}"><i class="fas fa-user-circle"aria-hidden="true"></i> </i>Profil</a>
                                  </li>
                                  <li class="nav-item ">
                                    <a class="nav-link" href="#"><i class="fas fa-comments" aria-hidden="true"></i> </i>Mesej</a>
                                  </li>
                                  <li class="nav-item ">
                                    <a class="nav-link" href="#"><i class="fas fa-star" aria-hidden="true"></i> </i>Skor</a>
                                  </li>
                                  <li class="nav-item ">
                                    <a class="nav-link" href="#"><i class="fa fa-gamepad" aria-hidden="true"></i>Liga Permainan</a>
                                  </li>
                                  <li class="nav-item ">
                                    <a class="nav-link" href="#"><i class="fas fa-gift"  aria-hidden="true"></i></i>Ganjaran</a>
                                  </li>
                                  <li class="nav-item ">
                                    <a class="nav-link" href="{{ route('activities.leaderboard') }}"><i class="fa fa-trophy" aria-hidden="true"></i>Carta Johan</a>
                                  </li>
                                  <li class="nav-item ">
                                    <a class="nav-link" href="{{route('lesson.courses')}}"><i class="fa fa-book" aria-hidden="true"></i>Pelajaran</a>
                                  </li>
                                  <li class="nav-item ">
                                    <a class="nav-link" href="{{route('quiz.start-quiz')}}"><i class="fa fa-question-circle" aria-hidden="true"></i>Kuiz</a>
                                  </li>

                                  <li class="nav-divider">
                                      Others
                                  </li>
                                  <li class="nav-item ">
                                    <a class="nav-link" href="{{route('others.feedback')}}"><i class="fas fa-comments" aria-hidden="true"></i>Maklum Balas</a>
                                  </li>
                                  <!-- <li class="nav-item ">
                                      <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-fw fa-user-circle"></i>Dashboard <span class="badge badge-success">6</span></a>
                                      <div id="submenu-1" class="collapse submenu" style="">
                                          <ul class="nav flex-column">
                                              <li class="nav-item">
                                                  <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1-2" aria-controls="submenu-1-2">E-Commerce</a>
                                                  <div id="submenu-1-2" class="collapse submenu" style="">
                                                      <ul class="nav flex-column">
                                                          <li class="nav-item">
                                                              <a class="nav-link" href="index.html">E Commerce Dashboard</a>
                                                          </li>
                                                          <li class="nav-item">
                                                              <a class="nav-link" href="ecommerce-product.html">Product List</a>
                                                          </li>
                                                          <li class="nav-item">
                                                              <a class="nav-link" href="ecommerce-product-single.html">Product Single</a>
                                                          </li>
                                                          <li class="nav-item">
                                                              <a class="nav-link" href="ecommerce-product-checkout.html">Product Checkout</a>
                                                          </li>
                                                      </ul>
                                                  </div>
                                              </li>
                                              <li class="nav-item">
                                                  <a class="nav-link" href="dashboard-finance.html">Finance</a>
                                              </li>
                                              <li class="nav-item">
                                                  <a class="nav-link" href="dashboard-sales.html">Sales</a>
                                              </li>
                                              <li class="nav-item">
                                                  <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-1-1" aria-controls="submenu-1-1">Infulencer</a>
                                                  <div id="submenu-1-1" class="collapse submenu" style="">
                                                      <ul class="nav flex-column">
                                                          <li class="nav-item">
                                                              <a class="nav-link" href="dashboard-influencer.html">Influencer</a>
                                                          </li>
                                                          <li class="nav-item">
                                                              <a class="nav-link" href="influencer-finder.html">Influencer Finder</a>
                                                          </li>
                                                          <li class="nav-item">
                                                              <a class="nav-link" href="influencer-profile.html">Influencer Profile</a>
                                                          </li>
                                                      </ul>
                                                  </div>
                                              </li>
                                          </ul>
                                      </div>
                                  </li>
                                  <li class="nav-item">
                                      <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-2" aria-controls="submenu-2"><i class="fa fa-fw fa-rocket"></i>UI Elements</a>
                                      <div id="submenu-2" class="collapse submenu" style="">
                                          <ul class="nav flex-column">
                                              <li class="nav-item">
                                                  <a class="nav-link" href="pages/cards.html">Cards <span class="badge badge-secondary">New</span></a>
                                              </li>
                                              <li class="nav-item">
                                                  <a class="nav-link" href="pages/general.html">General</a>
                                              </li>
                                              <li class="nav-item">
                                                  <a class="nav-link" href="pages/carousel.html">Carousel</a>
                                              </li>
                                              <li class="nav-item">
                                                  <a class="nav-link" href="pages/listgroup.html">List Group</a>
                                              </li>
                                              <li class="nav-item">
                                                  <a class="nav-link" href="pages/typography.html">Typography</a>
                                              </li>
                                              <li class="nav-item">
                                                  <a class="nav-link" href="pages/accordions.html">Accordions</a>
                                              </li>
                                              <li class="nav-item">
                                                  <a class="nav-link" href="pages/tabs.html">Tabs</a>
                                              </li>
                                          </ul>
                                      </div>
                                  </li>
                                  <li class="nav-item">
                                      <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-3" aria-controls="submenu-3"><i class="fas fa-fw fa-chart-pie"></i>Chart</a>
                                      <div id="submenu-3" class="collapse submenu" style="">
                                          <ul class="nav flex-column">
                                              <li class="nav-item">
                                                  <a class="nav-link" href="pages/chart-c3.html">C3 Charts</a>
                                              </li>
                                              <li class="nav-item">
                                                  <a class="nav-link" href="pages/chart-chartist.html">Chartist Charts</a>
                                              </li>
                                              <li class="nav-item">
                                                  <a class="nav-link" href="pages/chart-charts.html">Chart</a>
                                              </li>
                                              <li class="nav-item">
                                                  <a class="nav-link" href="pages/chart-morris.html">Morris</a>
                                              </li>
                                              <li class="nav-item">
                                                  <a class="nav-link" href="pages/chart-sparkline.html">Sparkline</a>
                                              </li>
                                              <li class="nav-item">
                                                  <a class="nav-link" href="pages/chart-gauge.html">Guage</a>
                                              </li>
                                          </ul>
                                      </div>
                                  </li> -->
                                  <!-- <li class="nav-item ">
                                      <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-4" aria-controls="submenu-4"><i class="fab fa-fw fa-wpforms"></i>Forms</a>
                                      <div id="submenu-4" class="collapse submenu" style="">
                                          <ul class="nav flex-column">
                                              <li class="nav-item">
                                                  <a class="nav-link" href="pages/form-elements.html">Form Elements</a>
                                              </li>
                                              <li class="nav-item">
                                                  <a class="nav-link" href="pages/form-validation.html">Parsely Validations</a>
                                              </li>
                                              <li class="nav-item">
                                                  <a class="nav-link" href="pages/multiselect.html">Multiselect</a>
                                              </li>
                                              <li class="nav-item">
                                                  <a class="nav-link" href="pages/datepicker.html">Date Picker</a>
                                              </li>
                                              <li class="nav-item">
                                                  <a class="nav-link" href="pages/bootstrap-select.html">Bootstrap Select</a>
                                              </li>
                                          </ul>
                                      </div>
                                  </li>
                                  <li class="nav-item">
                                      <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-5" aria-controls="submenu-5"><i class="fas fa-fw fa-table"></i>Tables</a>
                                      <div id="submenu-5" class="collapse submenu" style="">
                                          <ul class="nav flex-column">
                                              <li class="nav-item">
                                                  <a class="nav-link" href="pages/general-table.html">General Tables</a>
                                              </li>
                                              <li class="nav-item">
                                                  <a class="nav-link" href="pages/data-tables.html">Data Tables</a>
                                              </li>
                                          </ul>
                                      </div>
                                  </li>
                                  <li class="nav-divider">
                                      Features
                                  </li>
                                  <li class="nav-item">
                                      <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-6" aria-controls="submenu-6"><i class="fas fa-fw fa-file"></i> Pages </a>
                                      <div id="submenu-6" class="collapse submenu" style="">
                                          <ul class="nav flex-column">
                                              <li class="nav-item">
                                                  <a class="nav-link" href="pages/blank-page.html">Blank Page</a>
                                              </li>
                                              <li class="nav-item">
                                                  <a class="nav-link" href="pages/blank-page-header.html">Blank Page Header</a>
                                              </li>
                                              <li class="nav-item">
                                                  <a class="nav-link" href="pages/login.html">Login</a>
                                              </li>
                                              <li class="nav-item">
                                                  <a class="nav-link" href="pages/404-page.html">404 page</a>
                                              </li>
                                              <li class="nav-item">
                                                  <a class="nav-link" href="pages/sign-up.html">Sign up Page</a>
                                              </li>
                                              <li class="nav-item">
                                                  <a class="nav-link" href="pages/forgot-password.html">Forgot Password</a>
                                              </li>
                                              <li class="nav-item">
                                                  <a class="nav-link" href="pages/pricing.html">Pricing Tables</a>
                                              </li>
                                              <li class="nav-item">
                                                  <a class="nav-link" href="pages/timeline.html">Timeline</a>
                                              </li>
                                              <li class="nav-item">
                                                  <a class="nav-link" href="pages/calendar.html">Calendar</a>
                                              </li>
                                              <li class="nav-item">
                                                  <a class="nav-link" href="pages/sortable-nestable-lists.html">Sortable/Nestable List</a>
                                              </li>
                                              <li class="nav-item">
                                                  <a class="nav-link" href="pages/widgets.html">Widgets</a>
                                              </li>
                                              <li class="nav-item">
                                                  <a class="nav-link" href="pages/media-object.html">Media Objects</a>
                                              </li>
                                              <li class="nav-item">
                                                  <a class="nav-link" href="pages/cropper-image.html">Cropper</a>
                                              </li>
                                              <li class="nav-item">
                                                  <a class="nav-link" href="pages/color-picker.html">Color Picker</a>
                                              </li>
                                          </ul>
                                      </div>
                                  </li> -->
                                  <!-- <li class="nav-item">
                                      <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-7" aria-controls="submenu-7"><i class="fas fa-fw fa-inbox"></i>Apps <span class="badge badge-secondary">New</span></a>
                                      <div id="submenu-7" class="collapse submenu" style="">
                                          <ul class="nav flex-column">
                                              <li class="nav-item">
                                                  <a class="nav-link" href="pages/inbox.html">Inbox</a>
                                              </li>
                                              <li class="nav-item">
                                                  <a class="nav-link" href="pages/email-details.html">Email Detail</a>
                                              </li>
                                              <li class="nav-item">
                                                  <a class="nav-link" href="pages/email-compose.html">Email Compose</a>
                                              </li>
                                              <li class="nav-item">
                                                  <a class="nav-link" href="pages/message-chat.html">Message Chat</a>
                                              </li>
                                          </ul>
                                      </div>
                                  </li>
                                  <li class="nav-item">
                                      <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-8" aria-controls="submenu-8"><i class="fas fa-fw fa-columns"></i>Icons</a>
                                      <div id="submenu-8" class="collapse submenu" style="">
                                          <ul class="nav flex-column">
                                              <li class="nav-item">
                                                  <a class="nav-link" href="pages/icon-fontawesome.html">FontAwesome Icons</a>
                                              </li>
                                              <li class="nav-item">
                                                  <a class="nav-link" href="pages/icon-material.html">Material Icons</a>
                                              </li>
                                              <li class="nav-item">
                                                  <a class="nav-link" href="pages/icon-simple-lineicon.html">Simpleline Icon</a>
                                              </li>
                                              <li class="nav-item">
                                                  <a class="nav-link" href="pages/icon-themify.html">Themify Icon</a>
                                              </li>
                                              <li class="nav-item">
                                                  <a class="nav-link" href="pages/icon-flag.html">Flag Icons</a>
                                              </li>
                                              <li class="nav-item">
                                                  <a class="nav-link" href="pages/icon-weather.html">Weather Icon</a>
                                              </li>
                                          </ul>
                                      </div>
                                  </li>
                                  <li class="nav-item">
                                      <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-9" aria-controls="submenu-9"><i class="fas fa-fw fa-map-marker-alt"></i>Maps</a>
                                      <div id="submenu-9" class="collapse submenu" style="">
                                          <ul class="nav flex-column">
                                              <li class="nav-item">
                                                  <a class="nav-link" href="pages/map-google.html">Google Maps</a>
                                              </li>
                                              <li class="nav-item">
                                                  <a class="nav-link" href="pages/map-vector.html">Vector Maps</a>
                                              </li>
                                          </ul>
                                      </div>
                                  </li> -->
                                  <!-- <li class="nav-item">
                                      <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-10" aria-controls="submenu-10"><i class="fas fa-f fa-folder"></i>Menu Level</a>
                                      <div id="submenu-10" class="collapse submenu" style="">
                                          <ul class="nav flex-column">
                                              <li class="nav-item">
                                                  <a class="nav-link" href="#">Level 1</a>
                                              </li>
                                              <li class="nav-item">
                                                  <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false" data-target="#submenu-11" aria-controls="submenu-11">Level 2</a>
                                                  <div id="submenu-11" class="collapse submenu" style="">
                                                      <ul class="nav flex-column">
                                                          <li class="nav-item">
                                                              <a class="nav-link" href="#">Level 1</a>
                                                          </li>
                                                          <li class="nav-item">
                                                              <a class="nav-link" href="#">Level 2</a>
                                                          </li>
                                                      </ul>
                                                  </div>
                                              </li>
                                              <li class="nav-item">
                                                  <a class="nav-link" href="#">Level 3</a>
                                              </li>
                                          </ul>
                                      </div>
                                  </li> -->
                              </ul>
                          </div>
                      </nav>
                  </div>
              </div>
              <!-- ============================================================== -->
              <!-- end left sidebar -->
              <!-- ============================================================== -->
              <!-- ============================================================== -->
              <!-- wrapper  -->
              <!-- ============================================================== -->
              <div class="dashboard-wrapper">

<!DOCTYPE html>
<html class="html" lang="en-US">
<head>
	<meta charset="UTF-8">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<title>Header &#8211; ACES</title>
<meta name="viewport" content="width=device-width, initial-scale=1"><link rel='dns-prefetch' href='//s.w.org' />
<link rel="alternate" type="application/rss+xml" title="ACES &raquo; Feed" href="http://ezran.my/ACES/feed/" />
<link rel="alternate" type="application/rss+xml" title="ACES &raquo; Comments Feed" href="http://ezran.my/ACES/comments/feed/" />
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.0.0\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.0.0\/svg\/","svgExt":".svg","source":{"concatemoji":"http:\/\/ezran.my\/ACES\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.5.3"}};
			!function(e,a,t){var r,n,o,i,p=a.createElement("canvas"),s=p.getContext&&p.getContext("2d");function c(e,t){var a=String.fromCharCode;s.clearRect(0,0,p.width,p.height),s.fillText(a.apply(this,e),0,0);var r=p.toDataURL();return s.clearRect(0,0,p.width,p.height),s.fillText(a.apply(this,t),0,0),r===p.toDataURL()}function l(e){if(!s||!s.fillText)return!1;switch(s.textBaseline="top",s.font="600 32px Arial",e){case"flag":return!c([127987,65039,8205,9895,65039],[127987,65039,8203,9895,65039])&&(!c([55356,56826,55356,56819],[55356,56826,8203,55356,56819])&&!c([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]));case"emoji":return!c([55357,56424,8205,55356,57212],[55357,56424,8203,55356,57212])}return!1}function d(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(i=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},o=0;o<i.length;o++)t.supports[i[o]]=l(i[o]),t.supports.everything=t.supports.everything&&t.supports[i[o]],"flag"!==i[o]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[i[o]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(r=t.source||{}).concatemoji?d(r.concatemoji):r.wpemoji&&r.twemoji&&(d(r.twemoji),d(r.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
	<link rel='stylesheet' id='gtranslate-style-css'  href='http://ezran.my/ACES/wp-content/plugins/gtranslate/gtranslate-style24.css?ver=5.5.3' type='text/css' media='all' />
<link rel='stylesheet' id='wp-block-library-css'  href='http://ezran.my/ACES/wp-includes/css/dist/block-library/style.min.css?ver=5.5.3' type='text/css' media='all' />
<link rel='stylesheet' id='wp-block-library-theme-css'  href='http://ezran.my/ACES/wp-includes/css/dist/block-library/theme.min.css?ver=5.5.3' type='text/css' media='all' />
<link rel='stylesheet' id='wpb-ea-bootstrap-grid-css'  href='http://ezran.my/ACES/wp-content/plugins/wpb-elementor-addons/inc/../assets/css/grid.min.css?ver=4.0.0' type='text/css' media='' />
<link rel='stylesheet' id='wpb-ea-owl-carousel-css'  href='http://ezran.my/ACES/wp-content/plugins/wpb-elementor-addons/inc/../assets/css/owl.carousel.css?ver=2.3.4' type='text/css' media='' />
<link rel='stylesheet' id='fancybox-css'  href='http://ezran.my/ACES/wp-content/plugins/wpb-elementor-addons/inc/../assets/css/jquery.fancybox.min.css?ver=3.0.47' type='text/css' media='' />
<link rel='stylesheet' id='wpb-lineicons-css-css'  href='http://ezran.my/ACES/wp-content/plugins/wpb-elementor-addons/inc/../assets/icons/lineicons/lineicons.min.css?ver=1.0' type='text/css' media='' />
<link rel='stylesheet' id='wpb_ea_main_css-css'  href='http://ezran.my/ACES/wp-content/plugins/wpb-elementor-addons/inc/../assets/css/main.css?ver=1.0' type='text/css' media='' />
<style id='wpb_ea_main_css-inline-css' type='text/css'>

        .wpb-ea-team-member .social-buttons,
        .wpb-ea-service-box-image .wpb-ea-service-box-btn:hover {
            background: #3878ff;
        }
        .wpb-ea-service-box-icon .wpb-ea-service-box-btn:hover {
            color: #3878ff;
        }
        .wpb-ea-service-box-image .wpb-ea-service-box-btn:hover {
            border-color: #3878ff;
        }

</style>
<link rel='stylesheet' id='dashicons-css'  href='http://ezran.my/ACES/wp-includes/css/dashicons.min.css?ver=5.5.3' type='text/css' media='all' />
<link rel='stylesheet' id='font-awesome-css'  href='http://ezran.my/ACES/wp-content/themes/oceanwp/assets/fonts/fontawesome/css/all.min.css?ver=5.11.2' type='text/css' media='all' />
<link rel='stylesheet' id='simple-line-icons-css'  href='http://ezran.my/ACES/wp-content/themes/oceanwp/assets/css/third/simple-line-icons.min.css?ver=2.4.0' type='text/css' media='all' />
<link rel='stylesheet' id='magnific-popup-css'  href='http://ezran.my/ACES/wp-content/themes/oceanwp/assets/css/third/magnific-popup.min.css?ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='slick-css'  href='http://ezran.my/ACES/wp-content/themes/oceanwp/assets/css/third/slick.min.css?ver=1.6.0' type='text/css' media='all' />
<link rel='stylesheet' id='oceanwp-style-css'  href='http://ezran.my/ACES/wp-content/themes/oceanwp/assets/css/style.min.css?ver=1.9.0' type='text/css' media='all' />
<link rel='stylesheet' id='wpdreams-asl-basic-css'  href='http://ezran.my/ACES/wp-content/plugins/ajax-search-lite/css/style.basic.css?ver=4.8.4' type='text/css' media='all' />
<link rel='stylesheet' id='wpdreams-ajaxsearchlite-css'  href='http://ezran.my/ACES/wp-content/plugins/ajax-search-lite/css/style-curvy-black.css?ver=4.8.4' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-icons-ekiticons-css'  href='http://ezran.my/ACES/wp-content/plugins/elementskit-lite/modules/controls/assets/css/ekiticons.css?ver=5.9.0' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-icons-css'  href='http://ezran.my/ACES/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=5.9.1' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-animations-css'  href='http://ezran.my/ACES/wp-content/plugins/elementor/assets/lib/animations/animations.min.css?ver=3.0.13' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-frontend-legacy-css'  href='http://ezran.my/ACES/wp-content/plugins/elementor/assets/css/frontend-legacy.min.css?ver=3.0.13' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-frontend-css'  href='http://ezran.my/ACES/wp-content/plugins/elementor/assets/css/frontend.min.css?ver=3.0.13' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-11-css'  href='http://ezran.my/ACES/wp-content/uploads/elementor/css/post-11.css?ver=1604546378' type='text/css' media='all' />
<link rel='stylesheet' id='powerpack-frontend-css'  href='http://ezran.my/ACES/wp-content/plugins/powerpack-lite-for-elementor/assets/css/frontend.css?ver=2.2.1' type='text/css' media='all' />
<link rel='stylesheet' id='elementskit-css-widgetarea-control-editor-css'  href='http://ezran.my/ACES/wp-content/plugins/elementskit-lite/modules/controls/assets/css/widgetarea-editor.css?ver=2.0.9.1' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-global-css'  href='http://ezran.my/ACES/wp-content/uploads/elementor/css/global.css?ver=1604548018' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-1147-css'  href='http://ezran.my/ACES/wp-content/uploads/elementor/css/post-1147.css?ver=1608179378' type='text/css' media='all' />
<link rel='stylesheet' id='ekit-widget-styles-css'  href='http://ezran.my/ACES/wp-content/plugins/elementskit-lite/widgets/init/assets/css/widget-styles.css?ver=2.0.9.1' type='text/css' media='all' />
<link rel='stylesheet' id='ekit-widget-styles-pro-css'  href='http://ezran.my/ACES/wp-content/plugins/elementskit-lite/widgets/init/assets/css/widget-styles-pro.css?ver=2.0.9.1' type='text/css' media='all' />
<link rel='stylesheet' id='ekit-responsive-css'  href='http://ezran.my/ACES/wp-content/plugins/elementskit-lite/widgets/init/assets/css/responsive.css?ver=2.0.9.1' type='text/css' media='all' />
<link rel='stylesheet' id='oe-widgets-style-css'  href='http://ezran.my/ACES/wp-content/plugins/ocean-extra/assets/css/widgets.css?ver=5.5.3' type='text/css' media='all' />
<link rel='stylesheet' id='oceanwp-custom-css'  href='http://ezran.my/ACES/wp-content/uploads/oceanwp/custom-style.css?ver=5.5.3' type='text/css' media='all' />
<link rel='stylesheet' id='google-fonts-1-css'  href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CAlata%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;ver=5.5.3' type='text/css' media='all' />
<script type='text/javascript' id='jquery-core-js-extra'>
/* <![CDATA[ */
var pp = {"ajax_url":"http:\/\/ezran.my\/ACES\/wp-admin\/admin-ajax.php"};
/* ]]> */
</script>
<script type='text/javascript' src='http://ezran.my/ACES/wp-includes/js/jquery/jquery.js?ver=1.12.4-wp' id='jquery-core-js'></script>
<link rel="https://api.w.org/" href="http://ezran.my/ACES/wp-json/" /><link rel="alternate" type="application/json" href="http://ezran.my/ACES/wp-json/wp/v2/pages/1147" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://ezran.my/ACES/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://ezran.my/ACES/wp-includes/wlwmanifest.xml" />
<meta name="generator" content="WordPress 5.5.3" />
<link rel="canonical" href="http://ezran.my/ACES/header/" />
<link rel='shortlink' href='http://ezran.my/ACES/?p=1147' />
<link rel="alternate" type="application/json+oembed" href="http://ezran.my/ACES/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fezran.my%2FACES%2Fheader%2F" />
<link rel="alternate" type="text/xml+oembed" href="http://ezran.my/ACES/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fezran.my%2FACES%2Fheader%2F&#038;format=xml" />
                <link href='//fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
                <style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>                <style type="text/css">
                    <!--

            @font-face {
                font-family: 'aslsicons2';
                src: url('//ezran.my/ACES/wp-content/plugins/ajax-search-lite/css/fonts/icons2.eot');
                src: url('//ezran.my/ACES/wp-content/plugins/ajax-search-lite/css/fonts/icons2.eot?#iefix') format('embedded-opentype'),
                     url('//ezran.my/ACES/wp-content/plugins/ajax-search-lite/css/fonts/icons2.woff2') format('woff2'),
                     url('//ezran.my/ACES/wp-content/plugins/ajax-search-lite/css/fonts/icons2.woff') format('woff'),
                     url('//ezran.my/ACES/wp-content/plugins/ajax-search-lite/css/fonts/icons2.ttf') format('truetype'),
                     url('//ezran.my/ACES/wp-content/plugins/ajax-search-lite/css/fonts/icons2.svg#icons') format('svg');
                font-weight: normal;
                font-style: normal;
            }
            div[id*='ajaxsearchlitesettings'].searchsettings .asl_option_inner label {
                font-size: 0px !important;
                color: rgba(0, 0, 0, 0);
            }
            div[id*='ajaxsearchlitesettings'].searchsettings .asl_option_inner label:after {
                font-size: 11px !important;
                position: absolute;
                top: 0;
                left: 0;
                z-index: 1;
            }
            div[id*='ajaxsearchlite'].wpdreams_asl_container {
                width: 100%;
                margin: 0px 0px 0px 0px;
            }
            div[id*='ajaxsearchliteres'].wpdreams_asl_results div.resdrg span.highlighted {
                font-weight: bold;
                color: rgba(217, 49, 43, 1);
                background-color: rgba(238, 238, 238, 1);
            }
            div[id*='ajaxsearchliteres'].wpdreams_asl_results .results div.asl_image {
                width: 70px;
                height: 70px;
            }
            div.asl_r .results {
                max-height: none;
            }

                .asl_m .probox svg {
                    fill: rgba(0, 0, 0, 1) !important;
                }
                .asl_m .probox .innericon {
                    background-color: rgba(255, 255, 255, 1) !important;
                    background-image: none !important;
                    -webkit-background-image: none !important;
                    -ms-background-image: none !important;
                }

                div.asl_r.asl_w.vertical .results .item::after {
                    display: block;
                    position: absolute;
                    bottom: 0;
                    content: '';
                    height: 1px;
                    width: 100%;
                    background: #D8D8D8;
                }
                div.asl_r.asl_w.vertical .results .item.asp_last_item::after {
                    display: none;
                }
                                    -->
                </style>
                            <script type="text/javascript">
                if ( typeof _ASL !== "undefined" && _ASL !== null && typeof _ASL.initialize !== "undefined" )
                    _ASL.initialize();
            </script>
            <link rel="icon" href="http://ezran.my/ACES/wp-content/uploads/2020/11/cropped-WhatsApp-Image-2020-11-04-at-10.56.03-AM-32x32.jpeg" sizes="32x32" />
<link rel="icon" href="http://ezran.my/ACES/wp-content/uploads/2020/11/cropped-WhatsApp-Image-2020-11-04-at-10.56.03-AM-192x192.jpeg" sizes="192x192" />
<link rel="apple-touch-icon" href="http://ezran.my/ACES/wp-content/uploads/2020/11/cropped-WhatsApp-Image-2020-11-04-at-10.56.03-AM-180x180.jpeg" />
<meta name="msapplication-TileImage" content="http://ezran.my/ACES/wp-content/uploads/2020/11/cropped-WhatsApp-Image-2020-11-04-at-10.56.03-AM-270x270.jpeg" />
<style type="text/css">/** Mega Menu CSS: fs **/</style>
</head>

<body class="page-template page-template-elementor_header_footer page page-id-1147 wp-embed-responsive wpb-elementor-addons oceanwp-theme dropdown-mobile no-header-border default-breakpoint has-sidebar content-right-sidebar page-header-disabled has-breadcrumbs elementor-default elementor-template-full-width elementor-kit-11 elementor-page elementor-page-1147" itemscope="itemscope" itemtype="https://schema.org/WebPage">



	<div id="outer-wrap" class="site clr">

		<a class="skip-link screen-reader-text" href="#main">Skip to content</a>


		<div id="wrap" class="clr">




			<main id="main" class="site-main clr"  role="main">

						<div data-elementor-type="wp-page" data-elementor-id="1147" class="elementor elementor-1147" data-elementor-settings="[]">
						<div class="elementor-inner">
							<div class="elementor-section-wrap">
							<section class="elementor-section elementor-top-section elementor-element elementor-element-53fb0ec elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="53fb0ec" data-element_type="section" data-settings="{&quot;background_background&quot;:&quot;classic&quot;,&quot;ekit_has_onepagescroll_dot&quot;:&quot;yes&quot;}">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-b525bcc" data-id="b525bcc" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<section class="elementor-section elementor-inner-section elementor-element elementor-element-628a2d0 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="628a2d0" data-element_type="section" data-settings="{&quot;ekit_has_onepagescroll_dot&quot;:&quot;yes&quot;}">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-ee1a927" data-id="ee1a927" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-313c6d7 elementor-widget elementor-widget-spacer" data-id="313c6d7" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
					<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-a4e244f elementor-widget elementor-widget-text-editor" data-id="a4e244f" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
					<div class="elementor-text-editor elementor-clearfix"><p>ACES <span style="color: #b000b1;">IR 4.0</span></p></div>
				</div>
				</div>
						</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-inner-column elementor-element elementor-element-20962d5" data-id="20962d5" data-element_type="column">
			<div class="elementor-column-wrap">
							<div class="elementor-widget-wrap">
								</div>
					</div>
		</div>
								</div>
					</div>
		</section>
				<section class="elementor-section elementor-inner-section elementor-element elementor-element-8d7aa30 elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="8d7aa30" data-element_type="section" data-settings="{&quot;ekit_has_onepagescroll_dot&quot;:&quot;yes&quot;}">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-f906c8a" data-id="f906c8a" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-c16cc36 elementor-widget elementor-widget-image" data-id="c16cc36" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
					<div class="elementor-image">
										<img width="150" height="150" src="http://ezran.my/ACES/wp-content/uploads/2020/11/cropped-Avatar-Round-150x150.png" class="attachment-thumbnail size-thumbnail" alt="" loading="lazy" srcset="http://ezran.my/ACES/wp-content/uploads/2020/11/cropped-Avatar-Round-150x150.png 150w, http://ezran.my/ACES/wp-content/uploads/2020/11/cropped-Avatar-Round-300x300.png 300w, http://ezran.my/ACES/wp-content/uploads/2020/11/cropped-Avatar-Round-100x100.png 100w, http://ezran.my/ACES/wp-content/uploads/2020/11/cropped-Avatar-Round.png 512w" sizes="(max-width: 150px) 100vw, 150px" />											</div>
				</div>
				</div>
						</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-4ffb7ce" data-id="4ffb7ce" data-element_type="column">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-7b3e19e elementor-widget elementor-widget-heading" data-id="7b3e19e" data-element_type="widget" data-widget_type="heading.default">
				<div class="elementor-widget-container">
			<h2 class="elementor-heading-title elementor-size-default">Username</h2>		</div>
				</div>
						</div>
					</div>
		</div>

				<div class="elementor-column elementor-col-33 elementor-inner-column elementor-element elementor-element-19bfe85" data-id="19bfe85" data-element_type="column">
			<div class="elementor-column-wrap">
							<div class="elementor-widget-wrap">
								</div>
					</div>
		</div>

								</div>
					</div>
		</section>
				<div class="elementor-element elementor-element-7c0f822 elementor-widget elementor-widget-spacer" data-id="7c0f822" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
					<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
				</div>
				</div>
        <div class="page-breadcrumb">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{route('home')}}" class="breadcrumb-link">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Statistik</li>
                </ol>
            </nav>
        </div>
						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
						</div>
						</div>
					</div>

	</main><!-- #main -->







</div><!-- #wrap -->


</div><!-- #outer-wrap -->



<a id="scroll-top" class="scroll-top-right" href="#"><span class="fa fa-angle-up" aria-label="Scroll to the top of the page"></span></a>




<script type='text/javascript' src='http://ezran.my/ACES/wp-includes/js/imagesloaded.min.js?ver=4.1.4' id='imagesloaded-js'></script>
<script type='text/javascript' src='http://ezran.my/ACES/wp-content/plugins/powerpack-lite-for-elementor/assets/lib/magnific-popup/jquery.magnific-popup.min.js?ver=2.2.1' id='magnific-popup-js'></script>
<script type='text/javascript' src='http://ezran.my/ACES/wp-content/themes/oceanwp/assets/js/third/lightbox.min.js?ver=1.9.0' id='oceanwp-lightbox-js'></script>
<script type='text/javascript' id='oceanwp-main-js-extra'>
/* <![CDATA[ */
var oceanwpLocalize = {"isRTL":"","menuSearchStyle":"drop_down","sidrSource":null,"sidrDisplace":"1","sidrSide":"left","sidrDropdownTarget":"link","verticalHeaderTarget":"link","customSelects":".woocommerce-ordering .orderby, #dropdown_product_cat, .widget_categories select, .widget_archive select, .single-product .variations_form .variations select","ajax_url":"http:\/\/ezran.my\/ACES\/wp-admin\/admin-ajax.php"};
/* ]]> */
</script>
<script type='text/javascript' src='http://ezran.my/ACES/wp-content/themes/oceanwp/assets/js/main.min.js?ver=1.9.0' id='oceanwp-main-js'></script>
<script type='text/javascript' id='wpdreams-ajaxsearchlite-js-extra'>
/* <![CDATA[ */
var ajaxsearchlite = {"ajaxurl":"http:\/\/ezran.my\/ACES\/wp-admin\/admin-ajax.php","backend_ajaxurl":"http:\/\/ezran.my\/ACES\/wp-admin\/admin-ajax.php","js_scope":"jQuery"};
var ASL = {"ajaxurl":"http:\/\/ezran.my\/ACES\/wp-admin\/admin-ajax.php","backend_ajaxurl":"http:\/\/ezran.my\/ACES\/wp-admin\/admin-ajax.php","js_scope":"jQuery","detect_ajax":"0","scrollbar":"1","js_retain_popstate":"0","version":"4741","fix_duplicates":"1","analytics":{"method":0,"tracking_id":"","string":"?ajax_search={asl_term}","event":{"focus":{"active":1,"action":"focus","category":"ASL","label":"Input focus","value":"1"},"search_start":{"active":0,"action":"search_start","category":"ASL","label":"Phrase: {phrase}","value":"1"},"search_end":{"active":1,"action":"search_end","category":"ASL","label":"{phrase} | {results_count}","value":"1"},"magnifier":{"active":1,"action":"magnifier","category":"ASL","label":"Magnifier clicked","value":"1"},"return":{"active":1,"action":"return","category":"ASL","label":"Return button pressed","value":"1"},"facet_change":{"active":0,"action":"facet_change","category":"ASL","label":"{option_label} | {option_value}","value":"1"},"result_click":{"active":1,"action":"result_click","category":"ASL","label":"{result_title} | {result_url}","value":"1"}}}};
/* ]]> */
</script>
<script type='text/javascript' src='http://ezran.my/ACES/wp-content/plugins/ajax-search-lite/js/min/jquery.ajaxsearchlite.min.js?ver=4.8.4' id='wpdreams-ajaxsearchlite-js'></script>
<script type='text/javascript' src='http://ezran.my/ACES/wp-content/plugins/elementskit-lite/libs/framework/assets/js/frontend-script.js?ver=2.0.9.1' id='elementskit-framework-js-frontend-js'></script>
<script type='text/javascript' id='elementskit-framework-js-frontend-js-after'>
		var elementskit = {
            resturl: 'http://ezran.my/ACES/wp-json/elementskit/v1/',
        }


</script>
<script type='text/javascript' src='http://ezran.my/ACES/wp-content/plugins/elementskit-lite/widgets/init/assets/js/widget-scripts.js?ver=2.0.9.1' id='ekit-widget-scripts-js'></script>
<script type='text/javascript' src='http://ezran.my/ACES/wp-includes/js/hoverIntent.min.js?ver=1.8.1' id='hoverIntent-js'></script>
<script type='text/javascript' id='megamenu-js-extra'>
/* <![CDATA[ */
var megamenu = {"timeout":"300","interval":"100"};
/* ]]> */
</script>
<script type='text/javascript' src='http://ezran.my/ACES/wp-content/plugins/megamenu/js/maxmegamenu.js?ver=2.9.1' id='megamenu-js'></script>
<script type='text/javascript' src='http://ezran.my/ACES/wp-includes/js/wp-embed.min.js?ver=5.5.3' id='wp-embed-js'></script>
<!--[if lt IE 9]>
<script type='text/javascript' src='http://ezran.my/ACES/wp-content/themes/oceanwp/assets/js/third/html5.min.js?ver=1.9.0' id='html5shiv-js'></script>
<![endif]-->
<script type='text/javascript' src='http://ezran.my/ACES/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.0.13' id='elementor-frontend-modules-js'></script>
<script type='text/javascript' src='http://ezran.my/ACES/wp-includes/js/jquery/ui/position.min.js?ver=1.11.4' id='jquery-ui-position-js'></script>
<script type='text/javascript' src='http://ezran.my/ACES/wp-content/plugins/elementor/assets/lib/dialog/dialog.min.js?ver=4.8.1' id='elementor-dialog-js'></script>
<script type='text/javascript' src='http://ezran.my/ACES/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min.js?ver=4.0.2' id='elementor-waypoints-js'></script>
<script type='text/javascript' src='http://ezran.my/ACES/wp-content/plugins/elementor/assets/lib/swiper/swiper.min.js?ver=5.3.6' id='swiper-js'></script>
<script type='text/javascript' src='http://ezran.my/ACES/wp-content/plugins/elementor/assets/lib/share-link/share-link.min.js?ver=3.0.13' id='share-link-js'></script>
<script type='text/javascript' id='elementor-frontend-js-before'>
var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","download":"Download","downloadImage":"Download image","fullscreen":"Fullscreen","zoom":"Zoom","share":"Share","playVideo":"Play Video","previous":"Previous","next":"Next","close":"Close"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"version":"3.0.13","is_static":false,"legacyMode":{"elementWrappers":true},"urls":{"assets":"http:\/\/ezran.my\/ACES\/wp-content\/plugins\/elementor\/assets\/"},"settings":{"page":[],"editorPreferences":[]},"kit":{"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description"},"post":{"id":1147,"title":"Header%20%E2%80%93%20ACES","excerpt":"","featuredImage":false}};
</script>
<script type='text/javascript' src='http://ezran.my/ACES/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.0.13' id='elementor-frontend-js'></script>
<script type='text/javascript' src='http://ezran.my/ACES/wp-content/plugins/elementskit-lite/widgets/init/assets/js/elementor.js?ver=2.0.9.1' id='elementskit-elementor-js'></script>
<script type='text/javascript' src='http://ezran.my/ACES/wp-content/plugins/elementskit-lite/modules/controls/assets/js/widgetarea-editor.js?ver=2.0.9.1' id='elementskit-js-widgetarea-control-editor-js'></script>
</body>
</html>

            @yield('content')

            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer" style="background-color:#232121";>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                             Copyright © 2020 Artanis Cloud. All rights reserved. Dashboard by Warga Artanis.
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                            <div class="text-md-right footer-links d-none d-sm-block">
                                <a href="javascript: void(0);">About</a>
                                <a href="javascript: void(0);">Support</a>
                                <a href="javascript: void(0);">Contact Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- ============================================================== -->
            <!-- end footer -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- end wrapper  -->
        <!-- ============================================================== -->
      </div>
        </main>
    </div>
</body>

  <script src="{{ asset('concept/vendor/jquery/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('concept/vendor/bootstrap/js/bootstrap.bundle.js') }}"></script>

  <!-- slimscroll js -->
  <script src="{{ asset('concept/vendor/slimscroll/jquery.slimscroll.js') }}"></script>
  <!-- main js -->
  <script src="{{ asset('concept/libs/js/main-js.js  ') }}"></script>
  <!-- chart chartist js -->
  <script src="{{ asset('concept/vendor/charts/chartist-bundle/chartist.min.js') }}"></script>
  <!-- sparkline js -->
  <script src="{{ asset('concept/vendor/charts/sparkline/jquery.sparkline.js') }}"></script>
  <!-- morris js -->
  <script src="{{ asset('concept/vendor/charts/morris-bundle/raphael.min.js') }}"></script>
  <script src="{{ asset('concept/vendor/charts/morris-bundle/morris.js') }}"></script>
  <!-- chart c3 js -->
  <script src="{{ asset('concept/vendor/charts/c3charts/c3.min.js') }}"></script>
  <script src="{{ asset('concept/vendor/charts/c3charts/d3-5.4.0.min.js') }}"></script>
  <script src="{{ asset('concept/vendor/charts/c3charts/C3chartjs.js') }}"></script>
  <script src="{{ asset('concept/libs/js/dashboard-ecommerce.js') }}"></script>

</html>
