@extends('layouts.app-student')
@section('content')
<style media="screen">
.infographic-title {
  font-size: 36px;
  display: inline-block;
  line-height: 32px;
  font-weight: 100;
  width: 100%;
  text-align: center;
  text-transform: uppercase;
  margin-bottom: 100px;
  margin-top: 50px;

}
.infographic-title .inner-title {
color: #86bd27;
display: inline-block;
letter-spacing: -2.5px;
text-align: left;
}
.infographic-title .inner-title span {
padding-left: 60px;
padding-right: 10px;
}
.infographic-title .inner-title strong {
padding-right: 10px;
}
.infographic {
margin-top: 50px;
text-align: center;
transition: all 0.75s ease-in-out;
}
.infographic img {
display: none;
}
.infographic .item {
background-color: #fff;
border-radius: 10px;
box-shadow: 0 0 30px rgba(0, 0, 0, 0.2);
display: inline-block;
margin-right: 25px;
padding: 20px;
width: 150px;
height: 200px;
list-style: none;
line-height: 100px;
text-align: left;
font-size: 160%;
color: #555;
/*position: absolute;*/
position: relative;
transition: all 0.75s ease;
background: #fff;
z-index: 1;
}
.infographic .item:after {
background-position: left top;
background-repeat: no-repeat;
/* background-size: 100%; */
content: "";
display: block;
height: 100%;
left: 0;
opacity: 1;
position: absolute;
top: 0;
width: 100%;
height: : 100%;
}

.infographic .item1 {
top: -20px;
}
.infographic .item1:after {
/* background-color: blue; */
background-image: url(https://i.pinimg.com/736x/96/36/c4/9636c433de5f835772c862515a064a68.jpg);
}
.infographic .item2 {
margin-left: -30px;
top: -80px;
z-index: 3;
}
.infographic .item2:after {
/* background-color: white; */
background-image: url(data:image/jpeg;base64,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);
}
.infographic .item3 {
margin-left: -30px;
top: 10px;
z-index: 2;
}
.infographic .item3:after {
/* background-color: blue; */
background-image: url(data:image/jpeg;base64,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);
}
.infographic .item4 {
margin-left: -30px;
top: -30px;
z-index: 1;
}
.infographic .item4:after {
/* background-color: white; */
background-image: url(https://enterprisetalk.com/wp-content/uploads/2019/06/3D-Printing-Is-Changing-the-Global-Manufacturing-Landscape.jpg);
}
.infographic .item5 {
margin-left: -30px;
top: 60px;
z-index: 2;
}
.infographic .item5:after {
background-color: blue;
/* background-image: url(http://dev.startupsmartup.com/wp-content/themes/divi%20child/images/infographic/slide5.png); */
}
.infographic .item6 {
margin-left: -30px;
top: -80px;
z-index: 3;
}
.infographic .item6::after {
background-color: white;
/* background-image: url(https://d2gg9evh47fn9z.cloudfront.net/800px_COLOURBOX33644512.jpg); */
}

.infographic .item7 {
margin-left: -30px;
top: 30px;
z-index: 1;
}
.infographic .item7::after {
background-color: blue;
/* background-image: url(http://startupsmartup.com/wp-content/themes/divi%20child/images/infographic/slide7.jpg); */
}
.infographic .item8 {
margin-left: -30px;
top: -30px;
z-index: 2;
}
.infographic .item8::after {
background-color: white;
/* background-image: url(https://aeroreport.de/content/2-innovation/10-industrie-4-0-in-der-luftfahrt/1-artikel-kopf/zukunftdigital_header.jpg); */
}
.infographic .item9 {
margin-left: -30px;
top: 30px;
z-index: 1;
}
.infographic .item9::after {
background-color: blue;
/* background-image: url(https://aeroreport.de/content/2-innovation/10-industrie-4-0-in-der-luftfahrt/1-artikel-kopf/zukunftdigital_header.jpg); */
}
.infographic .item10 {
margin-left: -30px;
top: -30px;
z-index: 2;
}
.infographic .item10::after {
background-color: white;
/* background-image: url(https://aeroreport.de/content/2-innovation/10-industrie-4-0-in-der-luftfahrt/1-artikel-kopf/zukunftdigital_header.jpg); */
}
.infographic .item11 {
margin-left: -30px;
top: 30px;
z-index: 1;
}
.infographic .item11::after {
background-color: blue;
/* background-image: url(https://aeroreport.de/content/2-innovation/10-industrie-4-0-in-der-luftfahrt/1-artikel-kopf/zukunftdigital_header.jpg); */
}

.item4,
.item.5,
.item.6,
.item.7,
.item,8 {
/*prepared for tablet view -top: height 100% + 20 */
}

.infographic .uppercase {
color: #00d5fc;
text-transform: uppercase;
}
.infographic .lowercase {
color: #00d5fc;
text-transform: lowercase;
}

.infographic .item span {
bottom: -10px;
position: absolute;
transition: all 0.75s ease-in-out;
z-index: 9;
font-size: 14px;
font-weight: bold;
}
.infographic .item span.uppercase {
bottom: -25px;
}
.infographic .item object {
display: none;
}

.infographic .item:hover {
cursor: pointer;
background-color: #fff;
padding: 40px;
top: -10px;
z-index: 4;
}
.infographic .item1:hover,
.infographic .item2:hover,
.infographic .item3:hover,
.infographic .item4:hover {
margin-left: 0px;
margin-right: 60px;
}
.infographic .item5:hover,
.infographic .item6:hover,
.infographic .item7:hover,
.infographic .item8:hover {
margin-left: 0px;
margin-right: 60px;
}
.infographic .item:hover:after {
opacity: 0;
}
.infographic .item:hover > object {
display: block;
}
.infographic .item:hover > .lowercase {
bottom: 56%;
color: #6c6c6c;
font-size: 16px;
font-weight: 100;
left: 10px;
}
.infographic .item:hover > .uppercase {
bottom: 50%;
color: #6c6c6c;
font-size: 18px;
left: 10px;
letter-spacing: -1px;
}

@media (max-width:768px) {
.infographic .item {
  height: 90px;
  width: 40%;
}
}
@media (max-width:480px) {
.infographic .item {
  height: 60px;
  width: 90%;
}
}
</style>
<div class="dashboard-ecommerce">
    <div class="container-fluid dashboard-content ">
          <div class="card">
              <div class="infographic-title"><span class="inner-title"><strong>Lesson</strong>IR 4.0<br><span>and the</span><strong>9 pillar of IR 4.0</strong></span></div>
              <ul class="infographic">
                <li href="https://static.healthcare.siemens.com/siemens_hwem-hwem_ssxa_websites-context-root/wcm/idc/groups/public/@global/documents/image/mda3/mzux/~edisp/digitalization_16-9nr-04366762/~renditions/digitalization_16-9nr-04366762~8.jpg" class="item item1 et_pb_lightbox_image">
                  <img src="https://static.healthcare.siemens.com/siemens_hwem-hwem_ssxa_websites-context-root/wcm/idc/groups/public/@global/documents/image/mda3/mzux/~edisp/digitalization_16-9nr-04366762/~renditions/digitalization_16-9nr-04366762~8.jpg">
              <span class="lowercase">Introduction </span>
                  <!-- <object id="line-svg" type="image/svg+xml" data="http://startupsmartup.com/wp-content/uploads/2015/12/rightarrow-1.svg" height="60" width="60"></object> -->
                </li>
                <li href="http://startupsmartup.com/wp-content/themes/divi%20child/images/infographic/info_2.jpg" class="item item2 et_pb_lightbox_image">
                  <img src="http://startupsmartup.com/wp-content/themes/divi%20child/images/infographic/info_2.jpg">
                  <span class="lowercase">pillar of</span>
                  <span class="uppercase"> IR 4.0</span>
                  <object data="" type="" class="hidden"></object>
                </li>
                <li href="http://startupsmartup.com/wp-content/themes/divi%20child/images/infographic/info_3.jpg" class="item item3 et_pb_lightbox_image">
                  <img src="http://startupsmartup.com/wp-content/themes/divi%20child/images/infographic/info_3.jpg">
                  <span class="lowercase">1) Big Data</span>
                  <object data="" type="" class="hidden"></object>
                </li>
                <li href="http://startupsmartup.com/wp-content/themes/divi%20child/images/infographic/info_4.jpg" class="item item4 et_pb_lightbox_image">
                  <img src="http://startupsmartup.com/wp-content/themes/divi%20child/images/infographic/info_4.jpg">
                  <!-- <span class="lowercase">Food progression </span> -->
                  <span class="lowercase">2) Cyber Security </span>
                  <object data="" type="" class="hidden"></object>
                </li>
                <li href="http://startupsmartup.com/wp-content/themes/divi%20child/images/infographic/info_5.jpg" class="item item5 et_pb_lightbox_image">
                  <img src="http://startupsmartup.com/wp-content/themes/divi child/images/infographic/info_5.jpg">
                  <!-- <span class="lowercase">Food progression </span> -->
                  <span class="lowercase">3) Integration</span>
                  <object data="" type="" class="hidden"></object>
                </li>
                <li href="http://startupsmartup.com/wp-content/themes/divi child/images/infographic/info_6.jpg" class="item item6 et_pb_lightbox_image">
                  <img src="http://startupsmartup.com/wp-content/themes/divi child/images/infographic/info_6.jpg">
                  <span class="uppercase">Things </span>
                  <span class="lowercase"> 4) Internet of</span>
                  <object data="" type="" class="hidden"></object>
                </li>
              </ul>
              <br>
              <ul class="infographic">
                <li href="http://startupsmartup.com/wp-content/themes/divi child/images/infographic/info_7.jpg" class="item item7 et_pb_lightbox_image">
                  <img src="http://startupsmartup.com/wp-content/themes/divi child/images/infographic/info_7.jpg">
                  <span class="lowercase">5) Autonomous </span>
                  <span class="uppercase">Robots </span>
                  <object data="" type="" class="hidden"></object>
                </li>
                <li href="http://startupsmartup.com/wp-content/themes/divi child/images/infographic/info_8.jpg" class="item item8 et_pb_lightbox_image">
                  <img src="http://startupsmartup.com/wp-content/themes/divi child/images/infographic/info_8.jpg">
                  <span class="lowercase">6) Augmented </span>
                  <span class="uppercase">Reality</span>
                  <object data="" type="" class="hidden"></object>
                </li>
                <li href="http://startupsmartup.com/wp-content/themes/divi child/images/infographic/info_7.jpg" class="item item9 et_pb_lightbox_image">
                  <img src="http://startupsmartup.com/wp-content/themes/divi child/images/infographic/info_7.jpg">
                  <span class="lowercase">7) Simulation </span>
                  <!-- <span class="uppercase">for kids</span> -->
                  <object data="" type="" class="hidden"></object>
                </li>
                <li href="http://startupsmartup.com/wp-content/themes/divi child/images/infographic/info_8.jpg" class="item item10 et_pb_lightbox_image">
                  <img src="http://startupsmartup.com/wp-content/themes/divi child/images/infographic/info_8.jpg">
                  <span class="lowercase">8) The Cloud </span>
                  <!-- <span class="uppercase">about babies</span> -->
                  <object data="" type="" class="hidden"></object>
                </li>
                <li href="http://startupsmartup.com/wp-content/themes/divi child/images/infographic/info_7.jpg" class="item item11 et_pb_lightbox_image">
                  <img src="http://startupsmartup.com/wp-content/themes/divi child/images/infographic/info_7.jpg">
                  <span class="lowercase">9) 3D Printing </span>
                  <!-- <span class="uppercase">for kids</span> -->
                  <object data="" type="" class="hidden"></object>
                </li>
              </ul>
              <br>
          </div>
    </div>
</div>
@endsection
