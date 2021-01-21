@extends('layouts.app-student-qbadminui')
@section('content')

<!DOCTYPE html>
<html lang="en" style="background-color: #232121;">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Liga Permainan</title>

    <meta name="description" content="Source code generated using layoutit.com">
    <meta name="author" content="LayoutIt!">

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <!-- <link rel="stylesheet" href="{{ asset('css/permainan.css') }} "> -->

<style>
@-webkit-keyframes slidein {
0% {
  top: -400px;
  opacity: 0;
}
100% {
  opacity: 1;
  top: 0px;
}
}
@keyframes slidein {
0% {
  top: -400px;
  opacity: 0;
}
100% {
  opacity: 1;
  top: 0px;
}
}
@-webkit-keyframes slideout {
0% {
  top: 0;
  opacity: 1;
}
100% {
  top: -400px;
  opacity: 0;
}
}
@keyframes slideout {
0% {
  top: 0;
  opacity: 1;
}
100% {
  top: -400px;
  opacity: 0;
}
}
/* body {
background: #eee;
font-family: "Tahoma";
-moz-user-select: none;
-webkit-user-select: none;
-ms-user-select: none;
user-select: none;
} */
body #scene {
display: flex;
align-items: center;
justify-content: left;
width: 900px;
height: 400px;
position: absolute;
top: 0;
bottom: 0;
left: 0;
right: 0;
margin: auto;
background-color: #4C6367;
box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
overflow: hidden;
}
body #scene #left-zone {
background: #4C6367;
height: 75%;
flex-grow: 0;
/* display: flex; */
width: 350px;
align-items: center;
justify-content: left;
}
body #scene #left-zone .list {
display: flex;
list-style: none;
align-content: stretch;
flex-direction: column;
flex-grow: 1;
margin: 0;
padding: 0;
}
body #scene #left-zone .list li.item input[type=radio] {
display: none;
}
body #scene #left-zone .list li.item input[type=radio] ~ label {
display: block;
opacity: 0.5;
height: 50px;
text-align: center;
line-height: 50px;
}
body #scene #left-zone .list li.item input[type=radio] ~ label:first-letter {
text-transform: uppercase;
}
body #scene #left-zone .list li.item input[type=radio] ~ label:hover {
opacity: 0.75;
cursor: pointer;
}
/* body #scene #left-zone .list li.item input[type=radio] ~ label.label_strawberry:before {
content: " ";
display: block;
position: absolute;
width: 50px;
height: 50px;
margin-left: 15px;
background-image: url("https://d30y9cdsu7xlg0.cloudfront.net/png/83067-200.png");
background-position: center;
background-size: 75% 75%;
background-repeat: no-repeat;
} */
/* body #scene #left-zone .list li.item input[type=radio] ~ label.label_banana:before {
content: " ";
display: block;
position: absolute;
width: 50px;
height: 50px;
margin-left: 15px;
background-image: url("https://d30y9cdsu7xlg0.cloudfront.net/png/53209-200.png");
background-position: center;
background-size: 75% 75%;
background-repeat: no-repeat;
} */
/* body #scene #left-zone .list li.item input[type=radio] ~ label.label_Litar3:before {
content: " ";
display: block;
position: absolute;
width: 50px;
height: 50px;
margin-left: 15px;
background-image: url("https://d30y9cdsu7xlg0.cloudfront.net/png/14333-200.png");
background-position: center;
background-size: 75% 75%;
background-repeat: no-repeat;
} */
/* body #scene #left-zone .list li.item input[type=radio] ~ label.label_Litar4:before {
content: " ";
display: block;
position: absolute;
width: 50px;
height: 50px;
margin-left: 15px;
background-image: url("https://d30y9cdsu7xlg0.cloudfront.net/png/9636-200.png");
background-position: center;
background-size: 75% 75%;
background-repeat: no-repeat;
} */
body #scene #left-zone .list li.item input[type=radio] ~ .content {
position: absolute;
left: 200px;
top: -400px;
width: 100%;
height: 400px;
-webkit-animation-duration: 0.75s;
        animation-duration: 0.75s;
-webkit-animation-name: slideout;
        animation-name: slideout;
-webkit-animation-timing-function: ease-out;
        animation-timing-function: ease-out;
display: flex;
align-items: center;
justify-content: center;
flex-direction: column;
}
body #scene #left-zone .list li.item input[type=radio] ~ .content.content_Litar1 .picto {
height: 300px;
width: 300px;
background-image: url(http://aces.test/concept/images/permainan/Picture1.png);
background-position: center;
background-size: cover;
background-repeat: no-repeat;
border: solid 5px;
border-color: #960202;
/* background-image: linear-gradient(to right top, #ff9b00, #ff8300, #ff6900, #ff4800, #ff0000); */
}
body #scene #left-zone .list li.item input[type=radio] ~ .content.content_Litar1 h1 {
color: #D64541;
}
body #scene #left-zone .list li.item input[type=radio] ~ .content.content_Litar2 .picto {
height: 300px;
width: 300px;
background-image: url(http://aces.test/concept/images/permainan/Picture2.png);
background-position: center;
background-size: cover;
background-repeat: no-repeat;
border: solid 5px;
border-color: #960202;
}
body #scene #left-zone .list li.item input[type=radio] ~ .content.content_Litar2 h1 {
color: #D64541;
}
body #scene #left-zone .list li.item input[type=radio] ~ .content.content_Litar3 .picto {
  height: 300px;
  width: 300px;
  background-image: url(http://aces.test/concept/images/permainan/Picture3.png);
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;
  border: solid 5px;
  border-color: #960202;
}
body #scene #left-zone .list li.item input[type=radio] ~ .content.content_Litar3 h1 {

color: #D64541;

}
body #scene #left-zone .list li.item input[type=radio] ~ .content.content_Litar4 .picto {
  height: 300px;
  width: 300px;
  background-image: url(http://aces.test/concept/images/permainan/Picture4.png);
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;
  border: solid 5px;
  border-color: #960202;
}

body #scene #left-zone .list li.item input[type=radio] ~ .content.content_Litar4 h1 {

color: #D64541;

}
body #scene #left-zone .list li.item input[type=radio] ~ .content.content_Litar5 .picto {
  height: 300px;
  width: 300px;
  background-image: url(http://aces.test/concept/images/permainan/Picture4.png);
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;
  border: solid 5px;
  border-color: #960202;
}
body #scene #left-zone .list li.item input[type=radio] ~ .content.content_Litar5 h1 {

color: #D64541;

}
body #scene #left-zone .list li.item input[type=radio] ~ .content.content_Litar6 .picto {
  height: 300px;
  width: 300px;
  background-image: url(http://aces.test/concept/images/permainan/Picture5.png);
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;
  border: solid 5px;
  border-color: #960202;
}
body #scene #left-zone .list li.item input[type=radio] ~ .content.content_Litar6 h1 {

color: #D64541;

}
body #scene #left-zone .list li.item input[type=radio] ~ .content.content_Litar7 .picto {
  height: 300px;
  width: 300px;
  background-image: url(http://aces.test/concept/images/permainan/Picture5.png);
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;
  border: solid 5px;
  border-color: #960202;
}
body #scene #left-zone .list li.item input[type=radio] ~ .content.content_Litar7 h1 {

color: #D64541;

}
body #scene #left-zone .list li.item input[type=radio] ~ .content.content_Litar8 .picto {
  height: 300px;
  width: 300px;
  background-image: url(http://aces.test/concept/images/permainan/Picture6.png);
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;
  border: solid 5px;
  border-color: #960202;
}
body #scene #left-zone .list li.item input[type=radio] ~ .content.content_Litar8 h1 {

color: #D64541;

}
body #scene #left-zone .list li.item input[type=radio] ~ .content.content_Litar9 .picto {
  height: 300px;
  width: 300px;
  background-image: url(http://aces.test/concept/images/permainan/Picture7.png);
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;
  border: solid 5px;
  border-color: #960202;
}
body #scene #left-zone .list li.item input[type=radio] ~ .content.content_Litar9 h1 {

color: #D64541;

}
body #scene #left-zone .list li.item input[type=radio] ~ .content.content_Litar10 .picto {
  height: 300px;
  width: 300px;
  background-image: url(http://aces.test/concept/images/permainan/Picture8.png);
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;
  border: solid 5px;
  border-color: #960202;
}
body #scene #left-zone .list li.item input[type=radio] ~ .content.content_Litar10 h1 {

color: #D64541;

}
body #scene #left-zone .list li.item input[type=radio] ~ .content.content_Litar11 .picto {
  height: 300px;
  width: 300px;
  background-image: url(http://aces.test/concept/images/permainan/Picture8.png);
  background-position: center;
  background-size: cover;
  background-repeat: no-repeat;
  border: solid 5px;
  border-color: #960202;
}
body #scene #left-zone .list li.item input[type=radio] ~ .content.content_Litar11 h1 {

color: #D64541;
}
body #scene #left-zone .list li.item input[type=radio] ~ .content h1:first-letter {
text-transform: uppercase;
}
body #scene #left-zone .list li.item input[type=radio] ~ .content p {
max-width: 50%;
text-align: center;
}
body #scene #left-zone .list li.item input[type=radio]:checked ~ label {
opacity: 1;
-webkit-animation: all 1s cubic-bezier(0.455, 0.03, 0.515, 0.955);
        animation: all 1s cubic-bezier(0.455, 0.03, 0.515, 0.955);
}
body #scene #left-zone .list li.item input[type=radio]:checked ~ label.label_Litar1 {

color: white;
border-right: solid 4px #D64541;
background-color: #D64541
}
body #scene #left-zone .list li.item input[type=radio]:checked ~ label.label_Litar2 {
  color: white;
  border-right: solid 4px #D64541;
  background-color: #D64541
}
body #scene #left-zone .list li.item input[type=radio]:checked ~ label.label_Litar3 {
  color: white;
  border-right: solid 4px #D64541;
  background-color: #D64541
}
body #scene #left-zone .list li.item input[type=radio]:checked ~ label.label_Litar4 {
  color: white;
  border-right: solid 4px #D64541;
  background-color: #D64541
}
body #scene #left-zone .list li.item input[type=radio]:checked ~ label.label_Litar5 {
  color: white;
  border-right: solid 4px #D64541;
  background-color: #D64541
}
body #scene #left-zone .list li.item input[type=radio]:checked ~ label.label_Litar6 {
  color: white;
  border-right: solid 4px #D64541;
  background-color: #D64541
}
body #scene #left-zone .list li.item input[type=radio]:checked ~ label.label_Litar7 {
  color: white;
  border-right: solid 4px #D64541;
  background-color: #D64541
}
body #scene #left-zone .list li.item input[type=radio]:checked ~ label.label_Litar8 {
  color: white;
  border-right: solid 4px #D64541;
  background-color: #D64541
}
body #scene #left-zone .list li.item input[type=radio]:checked ~ label.label_Litar9 {
  color: white;
  border-right: solid 4px #D64541;
  background-color: #D64541
}
body #scene #left-zone .list li.item input[type=radio]:checked ~ label.label_Litar10 {
  color: white;
  border-right: solid 4px #D64541;
  background-color: #D64541
}
body #scene #left-zone .list li.item input[type=radio]:checked ~ label.label_Litar11 {
  color: white;
  border-right: solid 4px #D64541;
  background-color: #D64541
}
body #scene #left-zone .list li.item input[type=radio]:checked ~ .content {
-webkit-animation-duration: 0.75s;
        animation-duration: 0.75s;
-webkit-animation-name: slidein;
        animation-name: slidein;
-webkit-animation-fill-mode: forwards;
        animation-fill-mode: forwards;
-webkit-animation-timing-function: cubic-bezier(0.455, 0.03, 0.515, 0.955);
        animation-timing-function: cubic-bezier(0.455, 0.03, 0.515, 0.955);
}
body #scene #middle-border {
background-color: #eee;
height: 75%;
flex-grow: 1;
max-width: 2px;
z-index: 0;
}
body #scene #right-zone {

background: #232121;
height: 100%;
flex-grow: 3;
}
</style>
  </head>
  <body>

    <div class="container-fluid" style="background-image: url({{asset('concept/images/mascot.jpg')}}); background-position: 50% 50%;background-repeat: no-repeat;background-size: cover;">
	<div class="row">
		<div class="col-md-12" style="padding-top: 10%;">

			<h3 style="color: red;font-size: 35px;font-weight: bold; margin-left: 50px;">
				Permainan
			</h3>
		</div>
		<!-- <div class="col-md-4">
			<img alt="Bootstrap Image Preview" src="https://www.layoutit.com/img/sports-q-c-140-140-3.jpg">
		</div> -->
	</div>

  <div class="row">
    <div class="col-md-12" style="padding-top: 50%;">
      <div id="scene">
   <div id="left-zone" style="overflow-y:auto;height: 400px;width:40%;">
     <ul class="list">
       <li class="item" style="background-color: white !important; border: 1px solid white;">
         <input type="radio" id="radio_The garden Litar1 (or simply strawberry /ˈstrɔːbᵊri/; Fragaria × ananassa) is a widely grown hybrid species of the genus Fragaria (collectively known as the strawberries)" name="basic_carousel" value="The garden strawberry (or simply strawberry /ˈstrɔːbᵊri/; Fragaria × ananassa) is a widely grown hybrid species of the genus Fragaria (collectively known as the strawberries)" checked="checked"/>
         <label class="label_Litar1" for="radio_The garden Litar1 (or simply strawberry /ˈstrɔːbᵊri/; Fragaria × ananassa) is a widely grown hybrid species of the genus Fragaria (collectively known as the strawberries)">Pengenalan</label>
         <div class="content content_Litar1"><span class="picto"></span>
           <a href="{{route('lesson.karakter')}}"><h1>Pengenalan</h1></a>

         </div>
       </li>

       <li class="item" style="background-color: white !important; border: 1px solid white;">
         <input type="radio" id="radio_A Litar2 is an edible fruit, botanically a berry, produced by several kinds of large herbaceous flowering plants in the genus Musa." name="basic_carousel" value="A banana is an edible fruit, botanically a berry, produced by several kinds of large herbaceous flowering plants in the genus Musa."/>
         <label class="label_Litar2" for="radio_A Litar2 is an edible fruit, botanically a berry, produced by several kinds of large herbaceous flowering plants in the genus Musa.">Litar 2</label>
         <div class="content content_Litar2"><span class="picto"></span>
           <h1>Litar 2</h1>

         </div>
       </li>

       <li class="item" style="background-color: white !important; border: 1px solid white;">
         <input type="radio" id="radio_The Litar3 tree (Malus domestica) is a deciduous tree in the rose family best known for its sweet, pomaceous fruit, the apple. It is cultivated worldwide as a fruit tree, and is the most widely grown species in the genus Malus." name="basic_carousel" value="The apple tree (Malus domestica) is a deciduous tree in the rose family best known for its sweet, pomaceous fruit, the apple. It is cultivated worldwide as a fruit tree, and is the most widely grown species in the genus Malus."/>
         <label class="label_Litar3" for="radio_The Litar3 tree (Malus domestica) is a deciduous tree in the rose family best known for its sweet, pomaceous fruit, the apple. It is cultivated worldwide as a fruit tree, and is the most widely grown species in the genus Malus.">Litar 3</label>
         <div class="content content_Litar3"><span class="picto"></span>
           <h1>Litar 3</h1>

         </div>
       </li>

       <li class="item" style="background-color: white !important; border: 1px solid white;">
         <input type="radio" id="radio_The Litar4 (specifically, the sweet orange) is the fruit of the citrus species Citrus × sinensis in the family Rutaceae." name="basic_carousel" value="The orange (specifically, the sweet orange) is the fruit of the citrus species Citrus × sinensis in the family Rutaceae."/>
         <label class="label_Litar4" for="radio_The Litar4 (specifically, the sweet orange) is the fruit of the citrus species Citrus × sinensis in the family Rutaceae.">Litar 4</label>
         <div class="content content_Litar4"><span class="picto"></span>
           <h1>Litar 4</h1>

         </div>
       </li>

       <li class="item" style="background-color: white !important; border: 1px solid white;">
         <input type="radio" id="radio_The Litar5 (specifically, the sweet orange) is the fruit of the citrus species Citrus × sinensis in the family Rutaceae." name="basic_carousel" value="The orange (specifically, the sweet orange) is the fruit of the citrus species Citrus × sinensis in the family Rutaceae."/>
         <label class="label_Litar5" for="radio_The Litar5 (specifically, the sweet orange) is the fruit of the citrus species Citrus × sinensis in the family Rutaceae.">Litar 5</label>
         <div class="content content_Litar5"><span class="picto"></span>
           <h1>Litar 5</h1>

         </div>
       </li>

       <li class="item" style="background-color: white !important; border: 1px solid white;">
         <input type="radio" id="radio_The Litar6 (specifically, the sweet orange) is the fruit of the citrus species Citrus × sinensis in the family Rutaceae." name="basic_carousel" value="The orange (specifically, the sweet orange) is the fruit of the citrus species Citrus × sinensis in the family Rutaceae."/>
         <label class="label_Litar6" for="radio_The Litar6 (specifically, the sweet orange) is the fruit of the citrus species Citrus × sinensis in the family Rutaceae.">Litar 6</label>
         <div class="content content_Litar6"><span class="picto"></span>
           <h1>Litar 6</h1>

         </div>
       </li>

       <li class="item" style="background-color: white !important; border: 1px solid white;">
         <input type="radio" id="radio_The Litar7 (specifically, the sweet orange) is the fruit of the citrus species Citrus × sinensis in the family Rutaceae." name="basic_carousel" value="The orange (specifically, the sweet orange) is the fruit of the citrus species Citrus × sinensis in the family Rutaceae."/>
         <label class="label_Litar7" for="radio_The Litar7 (specifically, the sweet orange) is the fruit of the citrus species Citrus × sinensis in the family Rutaceae.">Litar 7</label>
         <div class="content content_Litar7"><span class="picto"></span>
           <h1>Litar 7</h1>

         </div>
       </li>

       <li class="item" style="background-color: white !important; border: 1px solid white;">
         <input type="radio" id="radio_The Litar8 (specifically, the sweet orange) is the fruit of the citrus species Citrus × sinensis in the family Rutaceae." name="basic_carousel" value="The orange (specifically, the sweet orange) is the fruit of the citrus species Citrus × sinensis in the family Rutaceae."/>
         <label class="label_Litar8" for="radio_The Litar8 (specifically, the sweet orange) is the fruit of the citrus species Citrus × sinensis in the family Rutaceae.">Litar 8</label>
         <div class="content content_Litar8"><span class="picto"></span>
           <h1>Litar 8</h1>

         </div>
       </li>

       <li class="item" style="background-color: white !important; border: 1px solid white;">
         <input type="radio" id="radio_The Litar9 (specifically, the sweet orange) is the fruit of the citrus species Citrus × sinensis in the family Rutaceae." name="basic_carousel" value="The orange (specifically, the sweet orange) is the fruit of the citrus species Citrus × sinensis in the family Rutaceae."/>
         <label class="label_Litar9" for="radio_The Litar9 (specifically, the sweet orange) is the fruit of the citrus species Citrus × sinensis in the family Rutaceae.">Litar 9</label>
         <div class="content content_Litar9"><span class="picto"></span>
           <h1>Litar 9</h1>

         </div>
       </li>

       <li class="item" style="background-color: white !important; border: 1px solid white;">
         <input type="radio" id="radio_The Litar10 (specifically, the sweet orange) is the fruit of the citrus species Citrus × sinensis in the family Rutaceae." name="basic_carousel" value="The orange (specifically, the sweet orange) is the fruit of the citrus species Citrus × sinensis in the family Rutaceae."/>
         <label class="label_Litar10" for="radio_The Litar10 (specifically, the sweet orange) is the fruit of the citrus species Citrus × sinensis in the family Rutaceae.">Litar 10</label>
         <div class="content content_Litar10"><span class="picto"></span>
           <h1>Litar 10</h1>

         </div>
       </li>
       <li class="item" style="background-color: white !important; border: 1px solid white;">
         <input type="radio" id="radio_The Litar11 (specifically, the sweet orange) is the fruit of the citrus species Citrus × sinensis in the family Rutaceae." name="basic_carousel" value="The orange (specifically, the sweet orange) is the fruit of the citrus species Citrus × sinensis in the family Rutaceae."/>
         <label class="label_Litar11" for="radio_The Litar11 (specifically, the sweet orange) is the fruit of the citrus species Citrus × sinensis in the family Rutaceae.">Litar 11</label>
         <div class="content content_Litar11"><span class="picto"></span>
           <h1>Litar 11</h1>

         </div>
       </li>
     </ul>
   </div>
   <div id="middle-border"></div>
   <div id="right-zone"></div>
 </div>
    </div>
  </div>
</div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>

@endsection
