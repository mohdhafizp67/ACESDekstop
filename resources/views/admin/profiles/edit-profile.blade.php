@extends('layouts.app-index-admin')
@section('content')
           <!--Page Body part -->
           <div class="dashboard-ecommerce">
               <div class="container-fluid dashboard-content ">
                     <div class="card" style="padding: 10px;">
                       <div style="padding: 5px;"></div>
                         <h2 class="card-header" style="text-align: center;"><i class="fas fa-edit"></i>Edit Profile</h2>
                         <div class="card-body p-0">
                           <div style="padding: 10px;"></div>

                           <form action="{{route('user.update', $user->id)}}" method="POST">
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
                                    <label>IC Number</label>
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
                                    <label>Phone Number</label>
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
                                    <label>Address</label>
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
                                    <label>Negeri</label>
                                    <select class="custom-select  bg-light @error('state') is-invalid @enderror" name="state" value="{{ $user->state }}"  required>
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
                                 <button class="btn btn-block btn-primary" type="submit">Update Profile</button>
                               </div>
                               <div class="col-md-2">

                               </div>
                             </div>
                             <!-- <div style="padding: 10px;"></div> -->


                      </form>
                    </div>
                </div>
         </div>

       </div>
       <div style="padding: 100px;"></div>
       <script type="text/javascript">
       //input text ONLY
       function onlyNumberKey(evt) {

         // Only ASCII charactar in that range allowed
         var ASCIICode = (evt.which) ? evt.which : evt.keyCode
         if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
             return false;
         return true;
       }
       </script>
@endsection