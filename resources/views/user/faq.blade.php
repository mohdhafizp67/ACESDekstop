@extends('layouts.app-student-qbadminui')

@section('content')
<!DOCTYPE html>
<html lang="en" style="background-color: #000a11 !important;">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="target-densitydpi=device-dpi">


    <title>ACES I 4.0</title>



    <!-- <link href="css/bootstrap.min.css" rel="stylesheet"> -->
    <!-- <link href="css/style.css" rel="stylesheet"> -->
    <style media="screen">
    #warning-message { display: none; }
     @media only screen and (orientation:portrait){
         #wrapper { display:none; }
         #warning-message {
           display:block;
           background-color: #000c15;
           text-align: center;
           font-size: 150%;
         }
     }
     @media only screen and (orientation:landscape){
         #warning-message { display:none; }
     }

     .accordion {
      background-color: #011329;
      color: #fff;
      cursor: pointer;
      padding: 10px;
      width: 100%;
      border: none;
      text-align: left;
      outline: none;
      font-size: 100%;
      transition: 0.4s;
      font-size: 12px;
    }

    .active, .accordion:hover {
      background-color: #02142c;
    }

    .panel {
      padding-top: 5px;
      padding: 5px;
      /* padding: 0 18px; */
      display: none;
      background-color: #02142c4d;
      /* overflow: hidden; */
      color: white;
      font-size: 100%;
    }
    </style>
  </head>
  <body>

<div id="wrapper">
    <div class="container-fluid">

      <h1 style="padding-top: 2%; text-align: center;font-size: 300%; color: #fff; font-weight: bold;; padding-bottom: 0%;padding-left: 3%;">FREQUENTLY ASKED QUESTIONS</h1>

    	<div class="row">
    		<div class="col-md-12">



          <div class="row" style="padding-top: 10px;">
            <div class="col-md-2">

            </div>
            <div class="col-md" style="overflow-y: auto; height: 350px;">

              @if ($message = Session::get('success'))
              <div id=alert>
                  <div class="alert alert-card  alert-success" role="alert">
                      <strong>Operation Succesful! </strong>
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
              <button class="accordion">NOTA PENTING!</button>
              <div class="panel">
                <p style="color: red;">**Progress Bar Quiz di halaman Dashboard</p>
                <p>Untuk Quiz kalau pelajar jawab dan <font color="red">LULUS Progress Bar di halaman Dashboard akan naik 10% bagi setiap Quiz yang di jawab</font>.</p>
                <p>Tapi apabila pelajar tersebut cuba mengambil semula Quiz tersebut dan <font color="red">GAGAL Progress Bar di halaman Dashboard akan turun sebanyak 10% semula bagi setiap Quiz</font>.</p>
                <p>Markah Quiz yang tertinggi sahaja akan direkodkan di Leaderboard.</p>
                <p style="color: red;">**Perbezaan diantara Progress Bar di halaman Dashboard dan Leaderboard</p>
                <p>Progress Bar di halaman Dashboard <font color="red">memaparkan progress pelajar setelah melihat Lesson, menjawab Quiz dan juga telah memainkan Game</font>.</p>
                <p>Leaderboard <font color="red">memaparkan markah keseluruhan antara Lesson, Quiz dan Game yang telah digabungkan</font>.</p>
              </div>

              <button class="accordion">1. Macam mana saya nak masukkan nombor kad pengenalan semasa pendaftaran?</button>
              <div class="panel">
                <p>Masukkan <font color="red">12 digit nombor</font> kad pengenalan anda <font color="red">sahaja tanpa sebarang simbol atau huruf seperti "-".</font></p>
              </div>

              <button class="accordion">2. Saya sudah masukkan nombor kad pengenalan dan kata laluan yang betul tapi keluar error semasa log masuk. Apa yang saya perlu buat?</button>
              <div class="panel">
                <p>Tekan butang forget password <font color="red"><b>SEKALI SAHAJA</b></font> dan semak emel <font color="red">selepas 10 saat</font> untuk set semula kata laluan and.</p>
                <p>Jika anda masih tidak boleh log masuk dengan kata laluan yang baru, sila hubungi pihak developer.</p>
              </div>

              <button class="accordion">3. Kenapa markah untuk bahagian Lesson tidak berubah di halaman Dashboard?</button>
              <div class="panel">
                <p>Anda perlu menonton dua video penuh di bahagian setiap Lesson secara berterusan untuk mendapatkan markah di halaman Dashboard.</p>
                <p style="color: red">Contoh: Cloud Computing, ada dua video wajib di tonton sampai habis iaitu Introduction dan Public vs Private vs Hybrid.</p>
              </div>

              <button class="accordion">4. Saya refresh semula page video Lesson semasa saya menonton video tersebut, adakah saya perlu menonton semula video tersebut?</button>
              <div class="panel">
                <p>Ya anda perlu menonton semula kedua-dua video tersebut untuk mendapatkan markah di halaman Dashboard.</p>
              </div>

              <button class="accordion">5. Berapa markah untuk saya lulus bahagian Quiz?</button>
              <div class="panel">
                <p>Markah lulus untuk bahagian Quiz adalah <font color="red">50% dan ke atas</font>.</p>
              </div>

              <button class="accordion">6.  Berapa kali saya boleh menjawab Quiz?</button>
              <div class="panel">
                <p>Anda boleh menjawab Quiz seberapa banyak yang anda mahu.</p>
              </div>

              <button class="accordion">7.  Adakah markah akan menurun jika saya gagal dalam Quiz tersebut?</button>
              <div class="panel">
                <p>Hanya markah yang lulus sahaja akan dipaparkan ke halaman Leaderboard. Jika anda mendapat markah yang lebih tinggi dari Quiz sebelumnya, markah tersebut akan dipaparkan di halaman Leaderboard sahaja/</p>
              </div>

              <button class="accordion">8. Adakah progress bar Quiz di halaman akan turun?</button>
              <div class="panel">
                <p>Kalau pelajar tersebut menjawab pertama kali dan <font color="green"><b>LULUS</b></font> <font color="red">Progress Bar akan naik sebanyak 10% bagi setiap Quiz</font>.</p>
                <p>Kalau pelajar tersebut menjawab semula Quiz dan <font color="red"><b>GAGAL</b></font>, <font color="red">Progress Bar Quiz di akan turun sebanyak 10% setiap Quiz</font>.</p>
              </div>

              <button class="accordion">9. Mengapa saya tidak boleh membuka Game di halaman Permainan pada iPhone saya?</button>
              <div class="panel">
                <p>Game buat masa ini hanya boleh dimainkan oleh pengguna <font color="red">Android dan PC</font> sahaja.</p>
              </div>

              <button class="accordion">10. Berapa kali saya boleh bermain Game?</button>
              <div class="panel">
                <p>Anda boleh bermain Game seberapa banyak yang anda mahu.</p>
              </div>

              <button class="accordion">11. Bagaimana paparan markah untuk bahagian Game?</button>
              <div class="panel">
                <p>Markah tertinggi akan dipaparkan di halaman Leaderboard.</p>
                <p style="color: red">Progress Bar Game akan naik sebanyak 10% bagi setiap Game yang telah habis dimainkan.</p>
              </div>

              <button class="accordion">12. Saya tidak boleh muat turun Game di Android.</button>
              <div class="panel">
                <p>Pelajar perlu membenarkan access third party installation di setting telefon masing-masing.</p>
              </div>


            </div>
            <div class="col-md-2">

            </div>
          </div>
          <div style="padding: 6%;"></div>

    		</div>
    	</div>
    </div>

  </div>
  <div id="warning-message">
      <img class="logo-img" src="{{ asset('concept/images/StudentDashboard/Logo.png') }}" alt="logo" style="width: 100%;padding-top: 20%;padding-bottom: 20%;">
      <img src="{{asset('concept/images/galaxy/mascot.gif')}}" width="100%" height="auto" style="margin-top: -10%;background-position: 100% 100%;background-repeat: no-repeat;background-size: cover;">


      <span style="color: #fff;text-transform: uppercase;">Best View is in Landscape Mode</span>
      <br><br>
      <span style="color: #fff;text-transform: uppercase;">Please rotate your device to view ACES WEB APP</span>
  </div>

  <script>
  var acc = document.getElementsByClassName("accordion");
  var i;

  for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function() {
      this.classList.toggle("active");
      var panel = this.nextElementSibling;
      if (panel.style.display === "block") {
        panel.style.display = "none";
      } else {
        panel.style.display = "block";
      }
    });
  }
  </script>
  </body>
</html>


@endsection
