@extends('layouts.app-index-admin-dashboard')
@section('content')
           <!--Page Body part -->

           <div class="dashboard-ecommerce">
               <div class="container-fluid dashboard-content ">
                 @if ($message = Session::get('success'))
                 <div id=alert>
                     <div class="alert alert-card alert-success" role="alert">
                         <strong>Operation Successful! </strong>
                         {{$message}}
                         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                         <span aria-hidden="true">&times;</span>
                         </button>
                     </div>
                 </div>
                 @elseif ($message = Session::get('error'))
                 <div id="alert">
                   <div class="alert alert-card alert-danger" role="alert">
                       <strong>Error! </strong>
                       {{$message}}
                       <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                       <span aria-hidden="true">&times;</span>
                       </button>
                   </div>
                 </div>
                 @endif

                     <div class="card" style="padding: 10px;">

                       <div style="padding: 5px;"></div>
                         <h2 class="card-header" style="text-align: center;"><i class="fas fa-edit"></i>Update User Profile</h2>
                         <div class="p-0 card-body">
                           <div style="padding: 10px;"></div>

                           <form action="{{route('admin.profiles.edit-profile.updating')}}" method="POST" enctype="multipart/form-data">
                             @csrf
                             <div class="row">
                               <div class="col-md-2">

                               </div>
                               <div class="col-md-4">
                                 <div class="form-group">
                                    <label>Name</label>
                                    <input type="text" name="name" class="form-control bg-light" placeholder="Input Full Name" value="{{$user->name}}" oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);" required>
                                 </div>
                               </div>
                               <div class="col-md-4">
                                 <div class="form-group">
                                    <label>Identification Card</label>
                                    <input type="text" name="ic_number" class="form-control bg-light" placeholder="Input IC Number" maxlength="12" minlength="12" value="{{$user->ic_number}}" onkeypress="return onlyNumberKey(event)" required>
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
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control bg-light" placeholder="Input Email Address" value="{{$user->email}}" required>
                                 </div>
                               </div>
                               <div class="col-md-4">
                                 <div class="form-group">
                                    <label>Mobile Phone</label>
                                    <input type="text" name="phone" class="form-control bg-light" placeholder="Input Phone Number" maxlength="11" minlength="10" value="{{$user->phone}}" onkeypress="return onlyNumberKey(event)" required>
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
                                    <label>Addresss</label>
                                    <!-- <input type="text" name="phone" class="form-control bg-light" placeholder="Input Phone Number" value=""> -->
                                    <textarea name="address" class="form-control bg-light" rows="2" cols="20" oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);" required>{{$user->address}}</textarea>
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
                                    <label>Postcode</label>
                                    <input type="text" name="postcode" class="form-control bg-light" placeholder="Input Postcode" maxlength="5" minlength="5" value="{{$user->postcode}}" onkeypress="return onlyNumberKey(event)" required>
                                 </div>
                               </div>
                               <div class="col-md-4">
                                 <div class="form-group">
                                    <label>State</label>
                                    <select id="state" class="custom-select  bg-light @error('state') is-invalid @enderror" name="state" value="{{ $user->state }}"  required>
                                          <option value="" selected disabled hidden>Choose State</option>
                                          <option value="Johor" {{ $user->state == "Johor" ? 'selected' : '' }}>Johor</option>
                                          <option value="Kedah" {{ $user->state == "Kedah" ? 'selected' : '' }}>Kedah</option>
                                          <option value="Kelantan" {{ $user->state == "Kelantan" ? 'selected' : '' }}>Kelantan</option>
                                          <option value="Melaka" {{ $user->state == "Melaka" ? 'selected' : '' }}>Melaka</option>
                                          <option value="Negeri Sembilan" {{ $user->state == "Negeri Sembilan" ? 'selected' : '' }}>Negeri Sembilan</option>
                                          <option value="Pahang" {{ $user->state == "Pahang" ? 'selected' : '' }}>Pahang</option>
                                          <option value="Pulau Pinang" {{ $user->state == "Pulau Pinang" ? 'selected' : '' }}>Pulau Pinang</option>
                                          <option value="Perak" {{ $user->state == "Perak" ? 'selected' : '' }}>Perak</option>
                                          <option value="Perlis" {{ $user->state == "Perlis" ? 'selected' : '' }}>Perlis</option>
                                          <option value="Sabah" {{ $user->state == "Sabah" ? 'selected' : '' }}>Sabah</option>
                                          <option value="Sarawak" {{ $user->state == "Sarawak" ? 'selected' : '' }}>Sarawak</option>
                                          <option value="Selangor" {{ $user->state == "Selangor" ? 'selected' : '' }}>Selangor</option>
                                          <option value="Terengganu" {{ $user->state == "Terengganu" ? 'selected' : '' }}>Terengganu</option>
                                          <option value="WP Kuala Lumpur" {{ $user->state == "WP Kuala Lumpur" ? 'selected' : '' }}>WP Kuala Lumpur</option>
                                          <option value="WP Putrajaya" {{ $user->state == "WP Putrajaya" ? 'selected' : '' }}>WP Putrajaya</option>
                                          <option value="WP Labuan" {{ $user->state == "WP Labuan" ? 'selected' : '' }}>WP Labuan</option>
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
                                <div class="form-group">

                                    <label for="exampleInputEmail1">
                                      DISTRICT
                                    </label>
                                    <input type="text" name="district" placeholder="District" value="{{ old('district') }}" class="u-border-1 u-border-grey-80 u-grey-75 u-input u-input-rectangle form-control {{ $errors->has('district') ? 'is-invalid' : '' }}" required>
                                    <!-- <select id="district" name="district" class="u-border-1 u-border-grey-75 u-grey-75 u-input u-input-rectangle u-text-body-alt-color u-input-7 custom-select @error('state') is-invalid @enderror" value="{{ old('district') }}">
                                      <option value="" selected disabled hidden>Select District</option>
                                    </select> -->
                                    @if($errors->has('district'))
                                        <div class="invalid-feedback">
                                            <strong>{{ $errors->first('district') }}</strong>
                                        </div>
                                    @endif
                                  </div>
                               </div>
                               <div class="col-md-2">

                               </div>
                             </div>

                             <hr>

                             <div class="row">
                               <div class="col-md-2">

                               </div>
                               <div class="col-md">
                                 <div class="form-group">
                                     <label >Upload Profile Picture</label>
                                     <div class="custom-file">
                                         <input type="file" class="custom-file-input" id="gambar_profile" onchange="return fileValidation('gambar_profile')" name="gambar_profile">
                                         <label class="custom-file-label bg-light" for="inputGroupFile02" aria-describedby="inputGroupFileAddon02">Upload a file</label>
                                     </div>
                                     <small id="saiz_data" class="form-text text-secondary">Upload a photo does not exceed 50MB</small>

                                     @error('gambar_profile')
                                     <div class="alert alert-danger">
                                       <strong>{{ $message }}</strong>
                                     </div>
                                     @enderror
                                 </div>
                               </div>
                               <div class="col-md-2">

                               </div>
                             </div>

                             <div class="row">
                               <div class="col-md-2">

                               </div>
                               <div class="col-md-8">
                                 <!-- <button class="btn btn-block btn-primary" type="submit">Update Profile</button> -->
                                 <a href="#" class="btn btn-block btn-primary" data-toggle="modal" data-target="#exampleModal">Update Profile</a>
                               </div>
                               <div class="col-md-2">

                               </div>
                             </div>

                             <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                 <div class="modal-dialog modal-dialog-centered" role="document">
                                     <div class="modal-content">
                                         <div class="modal-header">
                                             <h5 class="modal-title" id="exampleModalLabel">Confirmation</h5>
                                             <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                                         <span aria-hidden="true">&times;</span>
                                                     </a>
                                         </div>
                                         <div class="modal-body">
                                             <p>Are you sure you want to update your profile?</p>
                                         </div>
                                         <div class="modal-footer">
                                             <a href="#" class="btn btn-secondary" data-dismiss="modal">Cancel</a>
                                             <!-- <a href="#" class="btn btn-primary">Yes</a> -->
                                             <button type="submit" name="button" class="btn btn-primary">Update Profile</button>
                                         </div>
                                     </div>
                                 </div>
                             </div>


                      </form>
                    </div>
                </div>
         </div>

       </div>
       <div style="padding: 100px;"></div>

       <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

       <script type="text/javascript">
       //input text ONLY
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
             var numb = $(this)[0].files[0].size/51200 /51200 ;
             numb = numb.toFixed(2);
             if(numb > 2){
             alert('Ralat! Gambar anda melebihi 50MB. Saiz fail anda adalah: ' + numb +' MB');
             document.getElementById("attachment_permohonan").value = "";
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

       <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>

       <script type="text/javascript">
       $("document").ready(function(){
         setTimeout(function(){
            $("div.alert").remove();
         }, 5000 ); // 5 secs

       });
       </script>
@endsection
