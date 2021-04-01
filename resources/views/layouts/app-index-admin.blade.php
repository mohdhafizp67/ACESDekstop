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
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">


    <link rel="stylesheet" href="{{ asset('concept/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link href="{{ asset('concept/vendor/fonts/circular-std/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('concept/libs/css/style.css') }}">
    <link rel="stylesheet" href=" {{ asset('concept/vendor/fonts/fontawesome/css/fontawesome-all.css') }}">


</head>
<body>
    <div id="app">
        <main class="py-4">
          <div class="dashboard-main-wrapper">
              <!-- ============================================================== -->
              <!-- navbar -->
              <!-- ============================================================== -->
              <div class="dashboard-header">
                <nav class="navbar navbar-expand-lg bg-white fixed-top">
                    <a class="navbar-brand" href="{{ route('home-admin') }}">ACES</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse " id="navbarSupportedContent">
                        <ul class="navbar-nav ml-auto navbar-right-top">

                            <!-- <div style="border-left:1px solid #000;height:65px"></div> -->
                            <li class="nav-item dropdown nav-user">
                                <a class="nav-link nav-user-img" href="#" id="navbarDropdownMenuLink2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <!-- <i class="fa fa-cog" aria-hidden="true" style="font-size: 180%;"></i> -->
                                  @if(Auth::user()->profile_picture != null)
                                  <img src="{{ asset( $image_path = str_replace('public', 'storage',  Auth::user()->profile_picture)) }}"  class="profile-avatar" style="height:40px; width:40px; ">
                                  @else
                                  <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRD5iROb1TgJ_rcl-6r-68v1yjtID052zxSkw&usqp=CAU"  class="profile-avatar" style="height:40px; width:40px; ">
                                  @endif
                                </a>

                                <div class="dropdown-menu dropdown-menu-right nav-user-dropdown" aria-labelledby="navbarDropdownMenuLink2">
                                    <div class="nav-user-info">
                                        <!-- <h4 class="mb-0 text-white nav-user-name">{{explode(' ',trim(ucwords(strtolower((Auth::user()->name)))))[0]}}</h4> -->
                                        <h6 class="mb-0 text-white nav-user-name">{{Auth::user()->name}}</h6>
                                        <div style="padding: 5px;"></div>
                                        @if(Auth::user()->is_admin == 1)
                                        <h6 class="mb-0 text-white nav-user-name" style="font-weight: bold;"><i class="fa fa-certificate" aria-hidden="true"></i>Admin Sistem</h6>
                                        @else
                                        <h6 class="mb-0 text-white nav-user-name" style="font-weight: bold;"><i class="fa fa-certificate" aria-hidden="true"></i>ECERDB Personnel</h6>
                                        @endif
                                        <!-- <span><i class="fa fa-certificate" aria-hidden="true"></i> Admin </span> -->
                                    </div>
                                    <a class="dropdown-item" href="{{route('admin.profiles.edit-profile')}}"><i class="fas fa-user mr-2"></i>USER PROFILE</a>
                                    <a class="dropdown-item" href="{{ route('admin.profiles.change-password') }}"><i class="fa fa-unlock-alt mr-2" aria-hidden="true"></i>CHANGE PASSWORD</a>
                                    <a class="dropdown-item"  href="#" class="btn btn-block btn-danger" data-toggle="modal" data-target="#logOutModal"><i class="fas fa-power-off mr-2"></i>LOG OUT</a>
                                    <!-- <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                    <i class="fas fa-power-off mr-2"></i>Logout</a>
                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                    </form> -->
                                </div>
                            </li>

                            <li class="nav-item dropdown connection">
                                <!-- <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="fas fa-fw fa-th"></i> </a> -->
                                <a href="#" class="btn btn-block btn-danger" data-toggle="modal" data-target="#logOutModal" style="font-size: 200%;"><i class="fa fa-power-off" aria-hidden="true"></i></a>

                            </li>

                        </ul>
                    </div>
                </nav>
                <div class="modal fade" id="logOutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                                <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </a>
                            </div>
                            <div class="modal-body">
                                <p>Are you sure to log out?</p>
                            </div>
                            <div class="modal-footer">
                                <a href="#" class="btn btn-secondary" data-dismiss="modal">Cancel</a>
                                <!-- <a href="#" class="btn btn-primary">Yes</a> -->
                                <form id="logout-form" action="{{ route('logout') }}" method="POST">
                                @csrf
                                <button type="submit" name="button" class="btn btn-primary">Log Out</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
              <!-- ============================================================== -->
              <!-- end navbar -->
              <!-- ============================================================== -->
              <!-- ============================================================== -->
              <!-- left sidebar -->
              <!-- ============================================================== -->
              <div class="nav-left-sidebar sidebar-dark">
                  <div class="menu-list">
                      <nav class="navbar navbar-expand-lg navbar-light">
                          <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                              <span class="navbar-toggler-icon"></span>
                          </button>
                          <div class="collapse navbar-collapse" id="navbarNav">
                            <ul class="navbar-nav flex-column">
                                <div style="padding: 5%"></div>

                                <!-- <li class="nav-divider">
                                  <img class="logo-img" src="{{ asset('concept/images/aces-removebg-preview.png') }}" alt="logo">
                                </li> -->
                                  <!-- <li class="nav-divider">
                                      Menu Utama
                                  </li> -->
                                  <li class="nav-item ">
                                    <a class="nav-link" href="{{ route('home-admin') }}"><i class="fa fa-home" aria-hidden="true"></i>Dashboard</a>
                                  </li>
                                  <!-- <li class="nav-divider">
                                      Aktiviti
                                  </li> -->
                                  <!-- <li class="nav-item ">
                                    <a class="nav-link" href="#"><i class="fa fa-tasks" aria-hidden="true"></i>Kemajuan Pelajar</a>
                                  </li> -->
                                  <!-- <li class="nav-item ">
                                    <a class="nav-link" href="#"><i class="fa fa-line-chart" aria-hidden="true"></i>Statistik Pelajar</a>
                                  </li> -->
                                  <!-- <li class="nav-item ">

                                    <a class="nav-link" href="{{route('admin.activities.lesson.list')}}"><i class="fa fa-book" aria-hidden="true"></i> Pelajaran</a>

                                  </li> -->
                                  <li class="nav-item ">

                                    <a class="nav-link" href="{{ route('admin.activities.quiz.list') }}"><i class="fa fa-question-circle" aria-hidden="true"></i> Quiz</a>

                                  </li>
                                  <!-- <li class="nav-item ">
                                    <a class="nav-link" href="#"><i class="fa fa-trophy" aria-hidden="true"></i>Carta Johan</a>

                                  </li> -->
                                  <li class="nav-item ">
                                    <a class="nav-link" href="{{ route('admin.others.announcement.list') }}"><i class="fa fa-bullhorn" aria-hidden="true"></i>Annoucement</a>
                                  </li>

                                  <li class="nav-item ">
                                    <a class="nav-link" href="{{route('admin.others.feedback.list')}}"><i class="fa fa-bullhorn" aria-hidden="true"></i>User's Feedback</a>
                                  </li>



                                  <!-- <li class="nav-divider">
                                      Lain-lain
                                  </li> -->
                                  <li class="nav-item ">
                                    <a class="nav-link" href="{{ route('admin.others.user-list.list') }}"><i class="fa fa-users" aria-hidden="true"></i>Users List</a>
                                  </li>

                                  <li class="nav-item ">
                                    <a class="nav-link" href="{{ route('admin.others.audit-trail.audit-trail-log') }}"><i class="fas fa-signal" aria-hidden="true"></i> Log Audit Trail </a>
                                  </li>

                                  <li class="nav-item ">
                                    <a class="nav-link" href="{{ route('admin.profiles.graph') }}"><i class="fas fa-signal" aria-hidden="true"></i>Statistic</a>
                                  </li>
                                  <!-- <li class="nav-item ">
                                    <a class="nav-link" href="#"><i class="fas fa-comments" aria-hidden="true"></i>Maklum balas</a>
                                  </li> -->
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
                @yield('content')
            <!-- ============================================================== -->
            <!-- footer -->
            <!-- ============================================================== -->
            <div class="footer" style="background-color:#060026; position: absolute";>
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 col-12">
                             Copyright © 2020 Artanis Cloud. All rights reserved.
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

</html>
