@extends('layouts.app-studentheader')

@section('content')



<div class="dashboard-ecommerce">
    <div class="container-fluid dashboard-content ">
        <div class="ecommerce-widget">
          <div class="card" style="padding: 10px; background-color: #9966ff !important;">

            <div style="padding: 5px;"></div>
              <h2 class="card-header" style="text-align: center;"><i class="fa fa-question-circle mr-2" aria-hidden="true"></i>Keputusan</h2>
              <div class="card-body p-0">
                <div style="padding: 10px;"></div>
                <div class="row">
                  <div class="col-md-2">

                  </div>
                  <div class="col-md-3">
                    <label>Markah :</label>
                  </div>
                  <div class="col-md-3">
                    <label> 5/10 (50%) </label>
                  </div>
                  <div class="col-md-2">

                  </div>
                </div>

                <div class="row">
                  <div class="col-md-2">

                  </div>
                  <div class="col-md-3">
                    <label>Soalan yang telah dijawab :</label>
                  </div>
                  <div class="col-md-3">
                    <label> 10 </label>
                  </div>
                  <div class="col-md-2">

                  </div>
                </div>

                <div class="row">
                  <div class="col-md-2">

                  </div>
                  <div class="col-md-3">
                    <label>Status :</label>
                  </div>
                  <div class="col-md-3">
                    <label> Lulus </label>
                  </div>
                  <div class="col-md-2">

                  </div>
                </div>

                <div class="row">
                  <div class="col-md-2">

                  </div>
                  <div class="col-md-4">

                  </div>
                  <div class="col-md-4">

                  </div>
                  <div class="col-md-2">

                  </div>
                </div>
              </div>
          </div>
        </div>
    </div>
</div>
<script type="text/javascript">
function pass_quiz_id(id){
 $(".modal-footer #quiz_id").val( id );
}
</script>

@endsection
