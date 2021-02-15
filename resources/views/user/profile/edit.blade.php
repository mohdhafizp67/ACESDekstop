@extends('layouts.app-student-qbadminui')

@section('content')
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>ACES I 4.0</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- <link href="css/style.css" rel="stylesheet"> -->

  </head>
  <body>

    <div class="container-fluid">
    	<div class="row">
    		<div class="col-md-12" style=" background-color: transparent !important; background-image: url({{asset('concept/images/galaxy/background_blue.png')}}); background-repeat: no-repeat;background-size: cover;">

          <!-- <div style="padding: 30px;"></div> -->

          <div class="row">
            <div class="col-md-2">

            </div>
            <div class="col-md" style="padding-top: 2%;">

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


              <div class="card border-dark" style="background-color: transparent !important; border: transparent; background-image: url({{asset('concept/images/galaxy/cards2.png')}}); background-repeat: no-repeat;background-size: 100% 100%">
                <div class="card-header" style="padding-bottom: 1px; border: transparent !important; padding-top: 4%; font-size: 160%; color: white; text-align: center;">EDIT PROFILE</div>
                <hr style="width: 70%; margin: 0 auto; ">
                <form action="{{route('user.update', $user->id)}}" method="POST" enctype="multipart/form-data">
                  @csrf
                <div class="card-body" style="padding-top: 1px;">
                  <div class="row">
                    <div class="col-md-1">

                    </div>
                    <div class="col-md">
                      <div class="form-group" style="color: white !important;">
                        <label class="col-form-label">NAME</label>
                        <input id="name" type="text"name="name" value="{{Auth::user()->name}}" class="form-control" oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);">
                      </div>
                    </div>
                    <div class="col-md-1">

                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-1">

                    </div>
                    <div class="col-md">
                        <div class="form-group" style="color: white !important;">
                          <label class="col-form-label">IDENTIFICATION NUMBER</label>
                          <input id="email" type="text"name="ic_number" maxlength="12" minlength="12" onkeypress="return onlyNumberKey(event)" value="{{Auth::user()->ic_number}}" class="form-control" >
                        </div>
                    </div>
                    <div class="col-md-1">

                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-1">

                    </div>
                    <div class="col-md-5">
                      <div class="form-group" style="color: white !important;">
                        <label class="col-form-label">EMAIL</label>
                        <input id="name" type="text"name="email" value="{{Auth::user()->email}}" class="form-control" >
                      </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group" style="color: white !important;">
                          <label class="col-form-label">PHONE NUMBER</label>
                          <input id="email" type="text"name="phone" maxlength="11" minlength="10" value="{{Auth::user()->phone}}" onkeypress="return onlyNumberKey(event)" class="form-control" >
                        </div>
                    </div>
                    <div class="col-md-1">

                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-1">

                    </div>
                    <div class="col-md">
                      <div class="form-group" style="color: white !important;">
                        <label class="col-form-label">ADDRESS</label>
                        <textarea class="form-control" id="feedback" name="address" rows="2" oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);" required>{{Auth::user()->address}}</textarea>
                      </div>
                    </div>
                    <div class="col-md-1">

                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-1">

                    </div>
                    <div class="col-md-5">
                      <div class="form-group" style="color: white !important;">
                        <label class="col-form-label">POSTCODE</label>
                        <input id="name" type="text"name="postcode" maxlength="5" minlength="5" value="{{Auth::user()->postcode}}" onkeypress="return onlyNumberKey(event)" class="form-control" >
                      </div>
                    </div>
                    <div class="col-md-5">
                        <div class="form-group" style="color: white !important;">
                          <label class="col-form-label">STATE</label>
                          <select class="custom-select  bg-light @error('state') is-invalid @enderror" id="state" name="state" value="{{ Auth::user()->state }}"  required>
                                <option value="" selected disabled hidden>Choose State</option>
                                <option value="Johor" {{ Auth::user()->state == "Johor" ? 'selected' : '' }}>Johor</option>
                                <option value="Kedah" {{ Auth::user()->state == "Kedah" ? 'selected' : '' }}>Kedah</option>
                                <option value="Kelantan" {{ Auth::user()->state == "Kelantan" ? 'selected' : '' }}>Kelantan</option>
                                <option value="Melaka" {{ Auth::user()->state == "Melaka" ? 'selected' : '' }}>Melaka</option>
                                <option value="Negeri Sembilan" {{ Auth::user()->state == "Negeri Sembilan" ? 'selected' : '' }}>Negeri Sembilan</option>
                                <option value="Pahang" {{ Auth::user()->state == "Pahang" ? 'selected' : '' }}>Pahang</option>
                                <option value="Pulau Pinang" {{ Auth::user()->state == "Pulau Pinang" ? 'selected' : '' }}>Pulau Pinang</option>
                                <option value="Perak" {{ Auth::user()->state == "Perak" ? 'selected' : '' }}>Perak</option>
                                <option value="Perlis" {{ Auth::user()->state == "Perlis" ? 'selected' : '' }}>Perlis</option>
                                <option value="Sabah" {{ Auth::user()->state == "Sabah" ? 'selected' : '' }}>Sabah</option>
                                <option value="Sarawak" {{ Auth::user()->state == "Sarawak" ? 'selected' : '' }}>Sarawak</option>
                                <option value="Selangor" {{ Auth::user()->state == "Selangor" ? 'selected' : '' }}>Selangor</option>
                                <option value="Terengganu" {{ Auth::user()->state == "Terengganu" ? 'selected' : '' }}>Terengganu</option>
                                <option value="WP Kuala Lumpur" {{ Auth::user()->state == "WP Kuala Lumpur" ? 'selected' : '' }}>WP Kuala Lumpur</option>
                                <option value="WP Putrajaya" {{ Auth::user()->state == "WP Putrajaya" ? 'selected' : '' }}>WP Putrajaya</option>
                                <option value="WP Labuan" {{ Auth::user()->state == "WP Labuan" ? 'selected' : '' }}>WP Labuan</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-1">

                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-1">

                    </div>
                    <div class="col-md">
                      <div class="form-group" style="color: white !important;">
                        <label class="col-form-label">DISTRICT</label>
                        <select class="custom-select  bg-light @error('district') is-invalid @enderror" id="district" name="district" value="{{ Auth::user()->district }}"  required>
                              <option value="" selected disabled hidden>Choose District</option>
                              <!-- <option value="Johor" {{ Auth::user()->district == "Banggu" ? 'selected' : '' }}>Banggu</option> -->
                              @foreach($district as $data)
                                @if($data->negeri == Auth::user()->state)
                                  <option value="{{$data->daerah}}" {{ Auth::user()->district == $data->daerah ? 'selected' : '' }}>{{$data->daerah}}</option>
                                @endif
                              @endforeach
                          </select>
                      </div>
                    </div>
                    <div class="col-md-1">

                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-1">

                    </div>
                    <div class="col-md">
                      <div class="form-group" style="color: white !important;">
                        <label class="col-form-label">SCHOOL NAME</label>
                        <select class="custom-select  bg-light @error('school') is-invalid @enderror" id="school" name="school" value="{{ Auth::user()->school }}"  required>
                              <option value="" selected disabled hidden>Choose School</option>
                              <!-- <option value="Johor" {{ Auth::user()->district == "Banggu" ? 'selected' : '' }}>Banggu</option> -->
                              @foreach($school as $data)
                                @if($data->sekolah == Auth::user()->school)
                                  <option value="{{$data->sekolah}}" {{ Auth::user()->school == $data->sekolah ? 'selected' : '' }}>{{$data->sekolah}}</option>
                                @endif
                              @endforeach
                          </select>
                      </div>
                    </div>
                    <div class="col-md-1">

                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-1">

                    </div>
                    <div class="col-md">
                      <div class="form-group" style="color: white !important;">
                        <label class="col-form-label">UPLOAD PROFILE PICTURE <span style="font-size: 80%;"> : 150 x 150 pixels</span></label>

                          <div class="custom-file">
                              <input type="file" class="custom-file-input" id="gambar_profile" onchange="return fileValidation('gambar_profile')" name="gambar_profile">
                              <label class="custom-file-label bg-light" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">UPLOAD FILE</label>
                          </div>
                      </div>
                    </div>
                    <div class="col-md-1">

                    </div>
                  </div>



                  <div class="row">
                    <div class="col-md-3">

                    </div>
                    <div class="col-md-6" style="text-align: center;">
                        <button type="submit" class="btn " name="button" style="background-image: url({{asset('concept/images/galaxy/button_submit.png')}}); background-position: 50% 50%;background-repeat: no-repeat;background-size: cover;">
                          UPDATE PROFILE
                        </button>


                    </div>
                    <div class="col-md-3">

                    </div>
                  </div>
                  <div style="padding: 10px;"></div>

                </div>
              </form>
              </div>
            </div>
            <div class="col-md-2">

            </div>
          </div>
          <div style="padding: 1%;"></div>
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

    //upload file validation
    function fileValidation(name){
      var fileInput = document.getElementById(name);
      var filePath = fileInput.value;
      var allowedExtensions = /(\.jpeg|\.jpg|\.png)$/i;
      if(!allowedExtensions.exec(filePath)){
          alert('Sila muatnaik gambar dalam format .jpeg , .jpg dan .png sahaja.');
          fileInput.value = '';
          return false;
      }
    }

    //display upload file name in input
    $('#gambar_profile').on('change',function(){
            //get the file name
            var fileName = $(this).val();
            //replace the "Choose a file" label
            $(this).next('.custom-file-label').html(fileName);
        })

    //validatio file size
    $('#gambar_profile').on('change', function() {
          var numb = $(this)[0].files[0].size/1024 /1024 ;
          console.log($(this)[0].files[0]);
          console.log("Nilai" + numb);
          numb = numb.toFixed(2);
          if(numb > 2){
          alert('Ralat! Gambar anda melebihi 1MB. Saiz fail anda adalah: ' + numb +' MB');
          document.getElementById("gambar_profile").value = "";
          var fileName = "";
          $(this).next('.custom-file-label').html(fileName);
          return false;
          }
        });
    </script>
    <script type="text/javascript">
    $('#state').change(function(){
      //fetch data from jenis_dokumen
      var negeri = $(this).val();
      //clear jenis_data selection
      $("#district").empty();
      //initialize selection
      $("#district").append('<option value="" selected disabled hidden>Select District</option>');
      //ajax

      if(negeri){
        $.ajax({
          type:"get",
           url:"/ACES/register/ajax/get-district/"+negeri,

          success: function(respond){
            //console.log(respond);
            var data = JSON.parse(respond);
            data.forEach(function(data)
            {
              // console.log(data.daerah);
              $("#district").append('<option value="'+data.daerah+'" >'+data.daerah+'</option>');
            });
                // $.each(JSON.parse(respond),function(key,value){
                //     $("#jenis_data").append('<option value="'+value+'">'+value+'</option>');
                // });
          },
          error: function(XMLHttpRequest, textStatus, errorThrown) {
              console.log("Status: " + textStatus);
              console.log("Error: " + errorThrown);
          }
        })

      }
    });
    </script>

    <script type="text/javascript">
    $('#district').change(function(){
      //fetch data from jenis_dokumen
      var daerah = $(this).val();
      //clear jenis_data selection
      $("#school").empty();
      //initialize selection
      $("#school").append('<option value="" selected disabled hidden>Select School</option>');
      //ajax

      if(daerah){
        $.ajax({
          type:"get",
           url:"/ACES/register/ajax/get-school/"+daerah,

          success: function(respond){
            //console.log(respond);
            var data = JSON.parse(respond);
            data.forEach(function(data)
            {
              // console.log(data.daerah);
              $("#school").append('<option value="'+data.sekolah+'" >'+data.sekolah+'</option>');
            });
                // $.each(JSON.parse(respond),function(key,value){
                //     $("#jenis_data").append('<option value="'+value+'">'+value+'</option>');
                // });
          },
          error: function(XMLHttpRequest, textStatus, errorThrown) {
              console.log("Status: " + textStatus);
              console.log("Error: " + errorThrown);
          }
        })

      }
    });
    </script>


    <!-- <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script> -->
  </body>
</html>
@endsection
