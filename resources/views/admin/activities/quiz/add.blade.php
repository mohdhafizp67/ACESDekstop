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
                      <h2 class="card-header" style="text-align: center;"><i class="fa fa-question-circle" aria-hidden="true"></i>&nbsp Tambah Kuiz Baru</h2>
                      <div class="card-body p-0">
                        <div style="padding: 10px;"></div>

                        <form class="" action="{{route('admin.activities.quiz.add.save')}}" method="post">
                          @csrf
                          <div class="row">
                            <div class="col-md-2">

                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                 <label>Pelajaran</label>
                                 <!-- <input type="text" name="chapter" class="form-control bg-light" required> -->
                                 <select class="custom-select  bg-light @error('state') is-invalid @enderror" name="lesson_id" value="{{ old('lesson_id') }}"  >
                                       <option value="" selected disabled hidden>Pilih pelajaran</option>
                                       @foreach($lesson as $data)
                                       <option value="{{$data->id}}" {{ old('lesson_id') == $data->id ? 'selected' : '' }}>{{$data->lesson_type}} | {{$data->lesson_subject}}</option>
                                       @endforeach
                                 </select>
                              </div>
                            </div>
                            <div class="col-md-4">
                              <div class="form-group">
                                 <label>Masa Diperuntukkan (Minit)</label>
                                 <input type="input" name="time" class="form-control bg-light" onkeypress="return onlyNumberKey(event)" maxlength="3" required>
                                <!-- <select class="custom-select  bg-light @error('state') is-invalid @enderror" name="time" value="{{ old('time') }}"  >
                                      <option value="" selected disabled hidden>Pilih masa yang diperuntukkan</option>
                                      <option value="10" {{ old('time') == 10 ? 'selected' : '' }}>10 Minit</option>
                                      <option value="20" {{ old('time') == 20 ? 'selected' : '' }}>20 Minit</option>
                                      <option value="30" {{ old('time') == 30 ? 'selected' : '' }}>30 Minit</option>
                                      <option value="40" {{ old('time') == 40 ? 'selected' : '' }}>40 Minit</option>
                                      <option value="50" {{ old('time') == 50 ? 'selected' : '' }}>50 Minit</option>
                                      <option value="60" {{ old('time') == 60 ? 'selected' : '' }}>60 Minit</option>
                                </select> -->
                              </div>
                            </div>
                            <div class="col-md-2">

                            </div>
                          </div>



                        <div class="row">
                          <div class="col-md-2">

                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                               <label>Jumlah Soalan</label>
                               <input type="text" name="number_of_question" maxlength="3" class="form-control bg-light" onkeypress="return onlyNumberKey(event)" required>
                               <!-- <small>Jumlah soalan tidak kurang dari 10 dan tidak melebihi 99</small> -->
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                               <label>Peratus Kelulusan</label>
                               <!-- <input type="text" name="percentage_to_pass" class="form-control bg-light" required> -->
                               <select class="custom-select  bg-light @error('state') is-invalid @enderror" name="percentage_to_pass" value="{{ old('percentage_to_pass') }}"  >
                                     <option value="" selected disabled hidden>Pilih peratus kelulusan</option>
                                     <option value="10" {{ old('percentage_to_pass') == 10 ? 'selected' : '' }}>10 %</option>
                                     <option value="20" {{ old('percentage_to_pass') == 20 ? 'selected' : '' }}>20 %</option>
                                     <option value="30" {{ old('percentage_to_pass') == 30 ? 'selected' : '' }}>30 %</option>
                                     <option value="40" {{ old('percentage_to_pass') == 40 ? 'selected' : '' }}>40 %</option>
                                     <option value="50" {{ old('percentage_to_pass') == 50 ? 'selected' : '' }}>50 %</option>
                                     <option value="60" {{ old('percentage_to_pass') == 60 ? 'selected' : '' }}>60 %</option>
                                     <option value="70" {{ old('percentage_to_pass') == 70 ? 'selected' : '' }}>70 %</option>
                                     <option value="80" {{ old('percentage_to_pass') == 80 ? 'selected' : '' }}>80 %</option>
                                     <option value="90" {{ old('percentage_to_pass') == 90 ? 'selected' : '' }}>90 %</option>
                               </select>
                            </div>
                          </div>
                          <div class="col-md-2">

                          </div>
                        </div>



                        <div class="row">
                          <div class="col-md-2">

                          </div>
                          <div class="col-md-8">
                            <!-- <button class="btn btn-block btn-primary" type="submit">Change Password</button> -->
                            <a href="#" class="btn btn-block btn-primary" data-toggle="modal" data-target="#exampleModal">Simpan Tetapan Quiz</a>
                          </div>
                          <div class="col-md-2">

                          </div>
                        </div>

                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Pengesahan</h5>
                                        <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </a>
                                    </div>
                                    <div class="modal-body">
                                        <p>Anda pasti mahu menyimpan tetapan ini?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="#" class="btn btn-secondary" data-dismiss="modal">Batal</a>
                                        <!-- <a href="#" class="btn btn-primary">Yes</a> -->
                                        <button type="submit" name="button" class="btn btn-primary">Simpan Tetapan Quiz</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </form>

                      </div>
                  </div>
            </div>
        </div>
        <script type="text/javascript">
        function onlyNumberKey(evt) {

          // Only ASCII charactar in that range allowed
          var ASCIICode = (evt.which) ? evt.which : evt.keyCode
          if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
              return false;
          return true;
        }
        </script>
@endsection
