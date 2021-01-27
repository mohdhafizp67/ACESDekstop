@extends('layouts.app-student-qbadminui')

@section('content')


<style media="screen">
  label{
    color: #2e2f39 !important;
  }
  .button {
  background-color: #fff; /* Green */
  border-color: : solid 5px #000;
  color: black;
  padding: 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
.button5 {border-radius: 80%;}
</style>


<div class="container-fluid">
	<div class="row">
		<div class="col-md-12">
			<h3 style="padding-top: 10%; padding-bottom: 3%; font-size: 35px; font-weight: bold;">
				KUIZ
			</h3>
			<h3 style="font-size: 20px; padding-bottom: 2%;">
				Pengenalan I 4.0
			</h3>
		</div>
	</div>
  <div class="row" style="padding-bottom: 2%;">
    <div class="col-md-2">

    </div>
    <div class="col-md-8">
      <div style="background-color: white !important; color: red !important; font-align: center !important; font-size: 20px;">&nbsp&nbsp&nbsp Masa menjawab quiz akan tamat dalam <span id="time"></span> minit!</div>
    </div>
    <div class="col-md-2">

    </div>
  </div>

</div>

<div class="dashboard-ecommerce">
    <div class="container-fluid dashboard-content ">
        <div class="ecommerce-widget">
          <div class="card" style="padding: 10px; background-color: #232121 !important;">

            <div style="padding: 5px;"></div>
              <!-- <h2 class="card-header" style="text-align: center;"><i class="fa fa-unlock-alt mr-2" aria-hidden="true"></i>Mula menjawab kuiz</h2> -->
              <div class="card-body p-0">

                <form id="submit_quiz" name="submit_quiz" action="{{route('quiz.submit-result')}}" method="post">

                  @csrf
                  <input type="hidden" name="quiz_id" value="{{$quiz->id}}">
                <div class="pills-regular">
                    <ul class="nav nav-pills m-1" id="pills-tab" role="tablist">

                        @foreach($question as $data)
                          @if ($loop->first)
                            <li class="nav-item">

                              <a class="button button5" id="pills-{{$loop->iteration}}-tab" data-toggle="pill" href="#pills-{{$loop->iteration}}" role="tab" aria-controls="{{$loop->iteration}}" aria-selected="false"> {{$loop->iteration}}</a>
                            </li>
                          @else
                              @if($loop->iteration > 9)
                              <li class="nav-item">
                                  <a class="button button5" id="pills-{{$loop->iteration}}-tab" data-toggle="pill" href="#pills-{{$loop->iteration}}" role="tab" aria-controls="{{$loop->iteration}}" aria-selected="false"> {{$loop->iteration}}</a>
                              </li>
                              @else
                              <li class="nav-item">
                                <a class="button button5" id="pills-{{$loop->iteration}}-tab" data-toggle="pill" href="#pills-{{$loop->iteration}}" role="tab" aria-controls="{{$loop->iteration}}" aria-selected="false"> {{$loop->iteration}}</a>
                              </li>
                              @endif
                          @endif
                        @endforeach
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                      @foreach($question as $data)


                        @if ($loop->first)
                        <div class="tab-pane fade show active" id="pills-{{$loop->iteration}}" role="tabpanel" aria-labelledby="pills-{{$loop->iteration}}-tab">

                          <div class="row">
                            <div class="col-md-2">

                            </div>
                            <div class="col-md-8">
                              <h3>Soalan {{$loop->iteration}}</h3>

                            </div>
                            <div class="col-md-2">

                            </div>
                          </div>

                          <div class="row">
                            <div class="col-md-2">

                            </div>
                            <div class="col-md-8">

                              <div class="form-group">
                                 <label>{{$data->question}}</label>
                              </div>
                            </div>
                            <div class="col-md-2">

                            </div>
                          </div>

                          @foreach($answer as $ans)
                            @for($i=0;$i<count($ans);$i++)
                            @if($ans[$i]->question_id == $data->id)

                            <div class="row">
                              <div class="col-md-2">
                              </div>
                              <div class="col-md-4">
                                @if($i == 0)
                                <label class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" name="answer[{{$loop->iteration}}]" value="{{$ans[$i]->id}}"  class="custom-control-input"><span class="custom-control-label">{{$ans[$i]->answer}}</span>
                                </label>
                                <br>
                                @elseif($i == 1)
                                <label class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" name="answer[{{$loop->iteration}}]" value="{{$ans[$i]->id}}" class="custom-control-input"><span class="custom-control-label">{{$ans[$i]->answer}}</span>
                                </label>
                              </div>
                              <div class="col-md-4">
                                @elseif($i == 2)
                                <label class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" name="answer[{{$loop->iteration}}]" value="{{$ans[$i]->id}}" class="custom-control-input"><span class="custom-control-label">{{$ans[$i]->answer}}</span>
                                </label>
                                <br>
                                @elseif($i == 3)
                                <label class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" name="answer[{{$loop->iteration}}]" value="{{$ans[$i]->id}}" class="custom-control-input"><span class="custom-control-label">{{$ans[$i]->answer}}</span>
                                </label>
                                @endif

                              </div>
                              <div class="col-md-2">
                              </div>
                            </div>
                            @endif

                            @endfor
                          @endforeach


                          <div class="row">
                            <div class="col-md-9">

                            </div>
                            <div class="col-md">

                              <button class="btn btn-primary btnNext" type="button" >Seterusnya</button>

                            </div>
                          </div>


                        </div>


                        @else

                          <div class="tab-pane fade" id="pills-{{$loop->iteration}}" role="tabpanel" aria-labelledby="pills-{{$loop->iteration}}-tab">
                            <div class="row">
                              <div class="col-md-2">

                              </div>
                              <div class="col-md-8">
                                <h3>Soalan {{$loop->iteration}}</h3>

                              </div>
                              <div class="col-md-2">

                              </div>
                            </div>

                            <div class="row">
                              <div class="col-md-2">

                              </div>
                              <div class="col-md-8">

                                <div class="form-group">
                                   <label>{{$data->question}}</label>
                                </div>
                              </div>
                              <div class="col-md-2">

                              </div>
                            </div>
                            @foreach($answer as $ans)
                              @for($i=0;$i<count($ans);$i++)
                              @if($ans[$i]->question_id == $data->id)

                              <div class="row">
                                <div class="col-md-2">

                                </div>
                                <div class="col-md-4">
                                  @if($i == 0)
                                  <label class="custom-control custom-radio custom-control-inline">
                                      <input type="radio" name="answer[{{$loop->iteration}}]" value="{{$ans[$i]->id}}"  class="custom-control-input"><span class="custom-control-label">{{$ans[$i]->answer}}</span>
                                  </label>
                                  <br>
                                  @elseif($i == 1)
                                  <label class="custom-control custom-radio custom-control-inline">
                                      <input type="radio" name="answer[{{$loop->iteration}}]" value="{{$ans[$i]->id}}" class="custom-control-input"><span class="custom-control-label">{{$ans[$i]->answer}}</span>
                                  </label>
                                </div>
                                <div class="col-md-4">
                                  @elseif($i == 2)
                                  <label class="custom-control custom-radio custom-control-inline">
                                      <input type="radio" name="answer[{{$loop->iteration}}]" value="{{$ans[$i]->id}}" class="custom-control-input"><span class="custom-control-label">{{$ans[$i]->answer}}</span>
                                  </label>
                                  <br>
                                  @elseif($i == 3)
                                  <label class="custom-control custom-radio custom-control-inline">
                                      <input type="radio" name="answer[{{$loop->iteration}}]" value="{{$ans[$i]->id}}" class="custom-control-input"><span class="custom-control-label">{{$ans[$i]->answer}}</span>
                                  </label>
                                  @endif

                                </div>
                                <div class="col-md-2">

                                </div>
                              </div>
                              @endif

                              @endfor
                            @endforeach



                            @if ($loop->last)

                            <div class="row">
                              <div class="col-md-7">

                              </div>
                              <div class="col-md">
                                <button class="btn btn-primary btnPrevious" type="button" >Sebelumnya</button>
                                <button class="btn btn-success" type="button" data-toggle="modal" data-target="#exampleModal">Hantar Quiz</button>
                              </div>
                            </div>

                            @else

                            <div class="row">
                              <div class="col-md-7">

                              </div>
                              <div class="col-md">
                                <button class="btn btn-primary btnNext" type="button" >Seterusnya</button>
                                <button class="btn btn-primary btnPrevious" type="button" >Sebelumnya</button>
                              </div>
                            </div>

                            @endif


                            <!-- <div class="row">
                              <div class="col-md-2">

                              </div>
                              <div class="col-md-4">
                                <label class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" name="answer[{{$loop->iteration}}]"  class="custom-control-input"><span class="custom-control-label">Option 1</span>
                                </label>
                                <br>
                                <label class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" name="answer[{{$loop->iteration}}]" class="custom-control-input"><span class="custom-control-label">Option 2</span>
                                </label>


                              </div>
                              <div class="col-md-4">
                                <label class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" name="answer[{{$loop->iteration}}]" class="custom-control-input"><span class="custom-control-label">Option 3</span>
                                </label>
                                <br>
                                <label class="custom-control custom-radio custom-control-inline">
                                    <input type="radio" name="answer[{{$loop->iteration}}]" class="custom-control-input"><span class="custom-control-label">Option 4</span>
                                </label>
                              </div>
                              <div class="col-md-2">

                              </div>
                            </div> -->
                          </div>

                        @endif
                      @endforeach


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
                                <p>Anda pasti mahu menghantar quiz ini?</p>
                            </div>
                            <div class="modal-footer">
                                <a href="#" class="btn btn-secondary" data-dismiss="modal">Batal</a>
                                <form action="{{route('quiz.start-quiz')}}" method="post">
                                @csrf
                                <button type="submit" name="button" class="btn btn-primary">Hantar Kuiz</button>
                              </form>
                            </div>
                        </div>
                    </div>
                </div>

                  </form>
              </div>
          </div>
        </div>
    </div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>


<script type="text/javascript">
$('.btnNext').click(function() {
  $('.nav-pills .active').parent().next('li').find('a').trigger('click');
});

$('.btnPrevious').click(function() {
  $('.nav-pills .active').parent().prev('li').find('a').trigger('click');
});
</script>



<!-- quiz display timer -->
<script type="text/javascript">
function startTimer(duration, display) {
  var timer = duration, minutes, seconds;
  setInterval(function () {
      minutes = parseInt(timer / 60, 10);
      seconds = parseInt(timer % 60, 10);

      minutes = minutes < 10 ? "0" + minutes : minutes;
      seconds = seconds < 10 ? "0" + seconds : seconds;

      display.textContent = minutes + ":" + seconds;

      if (--timer < 0) {
          timer = duration;
      }
  }, 1000);
}

window.onload = function () {
  //display timer
  var fiveMinutes = 60 * {{$quiz->time}},
      display = document.querySelector('#time');
  startTimer(fiveMinutes, display);

  //timer for auto submit form/quiz
  var setTimer = ({{$quiz->time}} * 60) * 1000;
  // var setTimer = 5000;
  window.setTimeout(function() { document.submit_quiz.submit(); }, setTimer);
};


// window.onbeforeunload = function() { return "Your examination will be lost."; };
// window.onbeforeunload = function() {
//         return "Dude, are you sure you want to leave? Think of the kittens!";
//     }
</script>

<!-- disable back button during quiz -->
<script>
    window.location.hash = "no-back-button";

    window.location.hash = "Again-No-back-button";

    window.onhashchange = function(){
        window.location.hash = "no-back-button";
    }
</script>

<!-- disable F5 button for refresh -->
<script type="text/javascript">
function disableF5(e) { if ((e.which || e.keyCode) == 116 || (e.which || e.keyCode) == 82) e.preventDefault(); };

$(document).ready(function(){
     $(document).on("keydown", disableF5);
});
</script>







@endsection