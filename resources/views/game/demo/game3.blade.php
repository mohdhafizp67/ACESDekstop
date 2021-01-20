@extends('layouts.app-student')
@section('content')

<!DOCTYPE html>
<html lang="en">
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
    <style media="screen">
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
      body {
      background: #eee;
      /* font-family: "Tahoma"; */
      -moz-user-select: none;
      -webkit-user-select: none;
      -ms-user-select: none;
      user-select: none;
      }
      body #scene {
      display: flex;
      align-items: center;
      justify-content: left;
      width: 1000px;
      height: 400px;
      position: absolute;
      top: 0;
      bottom: 0;
      left: 0;
      right: 0;
      margin: auto;
      background-color: #fff;
      box-shadow: 0 1px 3px rgba(0, 0, 0, 0.12), 0 1px 2px rgba(0, 0, 0, 0.24);
      overflow: hidden;
      }
      body #scene #left-zone {
      background: #fff;
      height: 75%;
      flex-grow: 0;
      display: flex;
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
      body #scene #left-zone .list li.item input[type=radio] ~ label.label_strawberry:before {
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
      }
      body #scene #left-zone .list li.item input[type=radio] ~ label.label_banana:before {
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
      }
      body #scene #left-zone .list li.item input[type=radio] ~ label.label_apple:before {
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
      }
      body #scene #left-zone .list li.item input[type=radio] ~ label.label_orange:before {
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
      }
      body #scene #left-zone .list li.item input[type=radio] ~ .content {
      position: absolute;
      left: 350px;
      top: -400px;
      width: 650px;
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
      body #scene #left-zone .list li.item input[type=radio] ~ .content.content_strawberry .picto {
      height: 100px;
      width: 100px;
      background-image: url("https://d30y9cdsu7xlg0.cloudfront.net/png/83067-200.png");
      background-position: center;
      background-size: cover;
      background-repeat: no-repeat;
      }
      body #scene #left-zone .list li.item input[type=radio] ~ .content.content_strawberry h1 {
      color: #D64541;
      }
      body #scene #left-zone .list li.item input[type=radio] ~ .content.content_banana .picto {
      height: 100px;
      width: 100px;
      background-image: url("https://d30y9cdsu7xlg0.cloudfront.net/png/53209-200.png");
      background-position: center;
      background-size: cover;
      background-repeat: no-repeat;
      }
      body #scene #left-zone .list li.item input[type=radio] ~ .content.content_banana h1 {
      color: #F5D76E;
      }
      body #scene #left-zone .list li.item input[type=radio] ~ .content.content_apple .picto {
      height: 100px;
      width: 100px;
      background-image: url("https://d30y9cdsu7xlg0.cloudfront.net/png/14333-200.png");
      background-position: center;
      background-size: cover;
      background-repeat: no-repeat;
      }
      body #scene #left-zone .list li.item input[type=radio] ~ .content.content_apple h1 {
      color: #00B16A;
      }
      body #scene #left-zone .list li.item input[type=radio] ~ .content.content_orange .picto {
      height: 100px;
      width: 100px;
      background-image: url("https://d30y9cdsu7xlg0.cloudfront.net/png/9636-200.png");
      background-position: center;
      background-size: cover;
      background-repeat: no-repeat;
      }
      body #scene #left-zone .list li.item input[type=radio] ~ .content.content_orange h1 {
      color: #F27935;
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
      body #scene #left-zone .list li.item input[type=radio]:checked ~ label.label_strawberry {
      color: #D64541;
      border-right: solid 4px #D64541;
      }
      body #scene #left-zone .list li.item input[type=radio]:checked ~ label.label_banana {
      color: #F5D76E;
      border-right: solid 4px #F5D76E;
      }
      body #scene #left-zone .list li.item input[type=radio]:checked ~ label.label_apple {
      color: #00B16A;
      border-right: solid 4px #00B16A;
      }
      body #scene #left-zone .list li.item input[type=radio]:checked ~ label.label_orange {
      color: #F27935;
      border-right: solid 4px #F27935;
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
      background: #fff;
      height: 100%;
      flex-grow: 3;
      }
    </style>
  </head>
  <body>

    <div class="container-fluid" style="background-image: url({{asset('concept/images/permainan/drone1.jpg')}}); background-position: 50% 50%;background-repeat: no-repeat;background-size: cover;">
    	<div class="row">
    		<div class="col-md-12" style="padding-top: 5%;">
    			<h3 style="color: #fff;font-size: 35px;font-weight: bold;">
    				Liga Permainan
    			</h3>
    		</div>
    		<!-- <div class="col-md-4">
    			<img alt="Bootstrap Image Preview" src="https://www.layoutit.com/img/sports-q-c-140-140-3.jpg">
    		</div> -->
    	</div>


      <div id="scene">
        <div id="left-zone">
          <ul class="list">
            <li class="item">
              <input type="radio" id="radio_The garden strawberry (or simply strawberry /ˈstrɔːbᵊri/; Fragaria × ananassa) is a widely grown hybrid species of the genus Fragaria (collectively known as the strawberries)" name="basic_carousel" value="The garden strawberry (or simply strawberry /ˈstrɔːbᵊri/; Fragaria × ananassa) is a widely grown hybrid species of the genus Fragaria (collectively known as the strawberries)" checked="checked"/>
              <label class="label_strawberry" for="radio_The garden strawberry (or simply strawberry /ˈstrɔːbᵊri/; Fragaria × ananassa) is a widely grown hybrid species of the genus Fragaria (collectively known as the strawberries)">strawberry</label>
              <div class="content content_strawberry"><span class="picto"></span>
                <h1>strawberry</h1>
                <p>The garden strawberry (or simply strawberry /ˈstrɔːbᵊri/; Fragaria × ananassa) is a widely grown hybrid species of the genus Fragaria (collectively known as the strawberries)</p>
              </div>
            </li>
            <li class="item">
              <input type="radio" id="radio_A banana is an edible fruit, botanically a berry, produced by several kinds of large herbaceous flowering plants in the genus Musa." name="basic_carousel" value="A banana is an edible fruit, botanically a berry, produced by several kinds of large herbaceous flowering plants in the genus Musa."/>
              <label class="label_banana" for="radio_A banana is an edible fruit, botanically a berry, produced by several kinds of large herbaceous flowering plants in the genus Musa.">banana</label>
              <div class="content content_banana"><span class="picto"></span>
                <h1>banana</h1>
                <p>A banana is an edible fruit, botanically a berry, produced by several kinds of large herbaceous flowering plants in the genus Musa.</p>
              </div>
            </li>
            <li class="item">
              <input type="radio" id="radio_The apple tree (Malus domestica) is a deciduous tree in the rose family best known for its sweet, pomaceous fruit, the apple. It is cultivated worldwide as a fruit tree, and is the most widely grown species in the genus Malus." name="basic_carousel" value="The apple tree (Malus domestica) is a deciduous tree in the rose family best known for its sweet, pomaceous fruit, the apple. It is cultivated worldwide as a fruit tree, and is the most widely grown species in the genus Malus."/>
              <label class="label_apple" for="radio_The apple tree (Malus domestica) is a deciduous tree in the rose family best known for its sweet, pomaceous fruit, the apple. It is cultivated worldwide as a fruit tree, and is the most widely grown species in the genus Malus.">apple</label>
              <div class="content content_apple"><span class="picto"></span>
                <h1>apple</h1>
                <p>The apple tree (Malus domestica) is a deciduous tree in the rose family best known for its sweet, pomaceous fruit, the apple. It is cultivated worldwide as a fruit tree, and is the most widely grown species in the genus Malus.</p>
              </div>
            </li>
            <li class="item">
              <input type="radio" id="radio_The orange (specifically, the sweet orange) is the fruit of the citrus species Citrus × sinensis in the family Rutaceae." name="basic_carousel" value="The orange (specifically, the sweet orange) is the fruit of the citrus species Citrus × sinensis in the family Rutaceae."/>
              <label class="label_orange" for="radio_The orange (specifically, the sweet orange) is the fruit of the citrus species Citrus × sinensis in the family Rutaceae.">orange</label>
              <div class="content content_orange"><span class="picto"></span>
                <h1>orange</h1>
                <p>The orange (specifically, the sweet orange) is the fruit of the citrus species Citrus × sinensis in the family Rutaceae.</p>
              </div>
            </li>
          </ul>
        </div>
        <div id="middle-border"></div>
        <div id="right-zone"></div>
      </div>
  </div>

    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/scripts.js"></script>
  </body>
</html>

@endsection
