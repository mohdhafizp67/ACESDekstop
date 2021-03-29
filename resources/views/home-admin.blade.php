@extends('layouts.app-index-admin-dashboard')

@section('content')

        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
                <!-- ============================================================== -->
                <!-- pageheader  -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">ACES Dashboard</h2>

                            <!-- <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="#" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Admin Dashboard</li>
                                    </ol>
                                </nav>
                            </div> -->
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader  -->
                <!-- ============================================================== -->
                <div class="ecommerce-widget">

                  <div class="row">
                    <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                             <div class="card border-3 border-top" style="border-radius: 25px";>
                                 <div class="card-body border-radius" style="background-color: #fff";>
                                     <h5 class="text-muted">Number of all users</h5>
                                     <div class="metric-value d-inline-block">
                                         <h1 class="mb-1">{{$totalUser}}</h1>
                                     </div>
                                     <!-- <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                         <span class="icon-circle-small icon-box-xs text-success bg-success-light"><i class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1">5.86%</span>
                                     </div> -->
                                 </div>
                             </div>
                         </div>
                         <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                  <div class="card border-3 border-top" style="border-radius: 25px";>
                                      <div class="card-body border-radius" style="background-color: #fff";>
                                          <h5 class="text-muted">Number of Students</h5>
                                          <div class="metric-value d-inline-block">
                                              <h1 class="mb-1">{{$totalStudent}}</h1>
                                          </div>
                                          <!-- <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                              <span class="icon-circle-small icon-box-xs text-success bg-success-light"><i class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1">10%</span>
                                          </div> -->
                                      </div>
                                  </div>
                              </div>
                              <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                      <div class="card border-3 border-top" style="border-radius: 25px";>
                                          <div class="card-body border-radius" style="background-color: #fff";>
                                              <h5 class="text-muted">Number of ECERDB Staffs</h5>
                                              <div class="metric-value d-inline-block">
                                                  <h1 class="mb-1">{{$totalStaffecerd}}</h1>
                                              </div>
                                              <!-- <div class="metric-label d-inline-block float-right text-success font-weight-bold">
                                                  <span class="icon-circle-small icon-box-xs text-success bg-success-light"><i class="fa fa-fw fa-arrow-up"></i></span><span class="ml-1">5%</span>
                                              </div> -->
                                          </div>
                                      </div>
                                  </div>
                                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-12 col-12">
                                            <div class="card border-3 border-top" style="border-radius: 25px";>
                                                <div class="card-body border-radius" style="background-color: #fff";>
                                                    <h5 class="text-muted">Numbers of Administrators</h5>
                                                    <div class="metric-value d-inline-block">
                                                        <h1 class="mb-1">{{$totalAdmin}}</h1>
                                                    </div>
                                                    <!-- <div class="metric-label d-inline-block float-right text-danger font-weight-bold">
                                                        <span class="icon-circle-small icon-box-xs text-danger bg-danger-light bg-danger-light "><i class="fa fa-fw fa-arrow-down"></i></span><span class="ml-1">4%</span>
                                                    </div> -->
                                                </div>
                                            </div>
                                        </div>
                  </div>
                    <div class="row">
                        <!-- ============================================================== -->

                        <!-- ============================================================== -->

                                      <!-- recent orders  -->
                        <!-- ============================================================== -->

                        <div class="container-fluid dashboard-content ">
                              <div class="card" style="border-radius: 25px";>
                                <div style="padding: 10px;"></div>
                                  <h2 class="card-header"><i class="fa fa-trophy" aria-hidden="true"></i>LEADERBOARD</h2>

                                  <div class="card-body">
                                      <div class="table-responsive">
                                          <table class="table">
                                              <thead class="bg-light">
                                                  <tr class="border-0">
                                                      <th class="border-0">Ranking</th>
                                                      <th class="border-0">Avatar</th>
                                                        <th class="border-0">Name</th>
                                                      <th class="border-0">School</th>
                                                      <th class="border-0">State</th>
                                                      <th class="border-0">Points</th>


                                                  </tr>
                                              </thead>
                                              <tbody>
                                                @foreach($student as $data)
                                                  <tr>
                                                    <td style="color: #000; font-size: 200%; text-align: left;font-weight: bold;">
                                                      {{ $loop->index + 1  }}
                                                    </td>
                                                    <td style="text-align: left;">
                                                      @if($data->profile_picture!= null)
                                                      <img src="{{ asset( $image_path = str_replace('public', 'storage',  $data->profile_picture)) }}" onError="this.src='http://161.35.227.188/ACES{{ ( $image_path = str_replace('public', 'storage',  $data->profile_picture)) }}';" class="profile-avatar" style="height:40px; width:40px;">
                                                      @else
                                                      <img src="{{ asset('https://i.redd.it/z394307odi741.png') }}"  class="profile-avatar" style="height:40px; width:40px;">
                                                      @endif <br>
                                                    </td>
                                                    <td style="color: #000; font-size: 100%;">
                                                      {{$data->name}}
                                                    </td>
                                                    <td style="color: #000; font-size: 100%;">
                                                      {{$data->school}}
                                                    </td>
                                                    <td style="color: #000; font-size: 100%;">
                                                      {{$data->state}}
                                                    </td>
                                                    <td style="color: #000; font-size: 100%; font-weight: bold;">
                                                      {{ $data->total_points ? $data->total_points : 0 }}
                                                    </td>
                                                  </tr>
                                                  @endforeach
                                              </tbody>
                                          </table>
                                      </div>
                                  </div>
                              </div>
                        </div>

                    </div>
                    <div class="row">

                    </div>

                    <div class="row">

                    </div>
                    <div class="row">

                        {{-- <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12">
                          <div class="card" style="border-radius: 25px";>
                              <h5 class="card-header">Active and Inactive Student</h5>
                              <div class="card-body">
                                  <div id="c3chart_donut"></div>
                              </div>
                          </div>
                      </div> --}}

                      {{-- <div class="col-xl-8 col-lg-6 col-md-6 col-sm-12 col-12">
                         <div class="card" style="border-radius: 25px";>
                             <h5 class="card-header">Number of Students</h5>
                             <div class="card-body">
                                 <div id="c3chart_spline"></div>
                             </div>
                         </div>
                     </div> --}}

                    </div>

                    <div class="row">
                    <div class="row">
                        <div class="col-xl-5 col-lg-6 col-md-6 col-sm-12 col-12">

                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-sm-12 col-12">

                        </div>

                    </div>
                </div>
            </div>
        </div>
@endsection
