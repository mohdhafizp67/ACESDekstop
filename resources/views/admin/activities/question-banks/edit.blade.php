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

                    <div style="padding: 5px;"></div>
                      <h2 class="card-header" style="text-align: center;"><i class="fa fa-university" aria-hidden="true"></i>&nbsp Edit Question</h2>
                      <div class="card-body p-0">
                        <div style="padding: 10px;"></div>

                        <form class="" action="{{route('admin.activities.question-banks.edit.updating')}}" method="post">
                          @csrf
                          <div class="row">
                            <div class="col-md-2">

                            </div>
                            <div class="col-md-8">
                              <div class="form-group">
                                 <label>Chapter</label>
                                 <input type="text" name="chapter" class="form-control bg-light" placeholder="Input Chapter" value="{{$question->chapter}}" required>
                              </div>
                            </div>
                            <div class="col-md-2">

                            </div>
                          </div>

                        <div class="row">
                          <div class="col-md-2">

                          </div>
                          <div class="col-md-8">
                            <div class="form-group">
                               <label>Question</label>
                               <textarea name="question" rows="3" class="form-control bg-light" required>{{$question->question}}</textarea>
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
                               <label>Answer</label>
                               <input type="text" name="answer" class="form-control bg-light" placeholder="Input Answer" value="{{$answer[0]->answer}}" required>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                               <label>Option 1</label>
                               <input type="text" name="option[]" class="form-control bg-light" placeholder="Input Option 1" value="{{$option[0]->answer}}" required>
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
                               <label>Option 2</label>
                               <input type="text" name="option[]" class="form-control bg-light" placeholder="Input Option 2" value="{{$option[1]->answer}}" required>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-group">
                               <label>Option 3</label>
                               <input type="text" name="option[]" class="form-control bg-light" placeholder="Input Option 3" value="{{$option[2]->answer}}" required>
                            </div>
                          </div>
                          <div class="col-md-2">

                          </div>
                        </div>

                        <input type="hidden" name="question_id" value="{{$question->id}}">
                        <input type="hidden" name="answer_id" value="{{$answer[0]->id}}">
                        @foreach($option as $data )
                        <input type="hidden" name="option_id[]" value="{{$data->id}}">
                        @endforeach


                        <div class="row">
                          <div class="col-md-2">

                          </div>
                          <div class="col-md-8">
                            <!-- <button class="btn btn-block btn-primary" type="submit">Change Password</button> -->
                            <a href="#" class="btn btn-block btn-primary" data-toggle="modal" data-target="#exampleModal">Save Question</a>
                          </div>
                          <div class="col-md-2">

                          </div>
                        </div>

                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                                        <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </a>
                                    </div>
                                    <div class="modal-body">
                                        <p>Do you want to save this question?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <a href="#" class="btn btn-secondary" data-dismiss="modal">Cancel</a>
                                        <!-- <a href="#" class="btn btn-primary">Yes</a> -->
                                        <button type="submit" name="button" class="btn btn-primary">Save Question</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                      </form>

                      </div>
                  </div>
            </div>
        </div>
@endsection
