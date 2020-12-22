@extends('layouts.app-index-admin-dashboard')

@section('content')

        <div class="dashboard-ecommerce">
            <div class="container-fluid dashboard-content ">
                  <div class="card" style="padding: 10px;">

                    @if ($message = Session::get('success'))
                    <div id=alert>
                        <div class="alert alert-card  alert-success" role="alert">
                            <strong>Operation Successful! </strong>
                            {{$message}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    </div>
                    @elseif ($message = Session::get('error'))
                    <div id="alert">
                      <div class="alert alert-card  alert-danger" role="alert">
                          <strong>Error! </strong>
                          {{$message}}
                          <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                          </button>
                      </div>
                    </div>
                    @endif

                    <!-- <div style="padding: 5px;"></div> -->
                      <h2 class="card-header" style="text-align: center;"><i class="fa fa-book" aria-hidden="true"></i>&nbsp Tambah Pelajaran Baru</h2>
                      <div class="card-body p-0">
                        <div style="padding: 10px;"></div>

                        <form action="{{route('admin.activities.lesson.add.save')}}" method="post">
                          @csrf

                          <div class="row">
                            <div class="col-md-2">

                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                 <label>Jenis Pelajaran</label>
                                 <input type="text" name="lesson_type" class="form-control bg-light" required>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                 <label>Subjek Pelajaran</label>
                                 <input type="text" name="lesson_subject" class="form-control bg-light" required>
                              </div>
                            </div>
                            <div class="col-md-2">

                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-2">

                            </div>
                            <div class="col-md-8">
                              <button type="submit" class="btn btn-block btn-primary" name="button">Simpan Pelajaran</button>
                            </div>
                            <div class="col-md-2">

                            </div>
                          </div>


                      </form>

                      </div>
                  </div>
            </div>
        </div>
        <script type="text/javascript">
        $("document").ready(function(){
          setTimeout(function(){
             $("div.alert").remove();
          }, 5000 ); // 5 secs

        });
        </script>
@endsection
