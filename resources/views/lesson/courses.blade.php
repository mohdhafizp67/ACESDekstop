@extends('layouts.app-index')
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
background-size: contain;
content: "";
display: block;
height: 100%;
left: 0;
opacity: 1;
position: absolute;
top: 0;
width: 100%;
}

.infographic .item1 {
top: -20px;
}
.infographic .item1:after {
background-color: blue;
/* background-image: url(https://lh3.googleusercontent.com/proxy/iemRI1Mf6HkjsVpiEzd2FrFM_ykj-tnlI5y8JWygw8UQ91N8-11DPwBRaH6j5PtHelPfehCyBml4lfgoX4-O9Vl_GI-Pv0FV9fEUPKA1O0i-NVkYu2UajlMztvdu2QvCiDAwStN8v_irrg); */
}
.infographic .item2 {
margin-left: -30px;
top: -80px;
z-index: 3;
}
.infographic .item2:after {
background-color: white;
/* background-image: url(https://static.healthcare.siemens.com/siemens_hwem-hwem_ssxa_websites-context-root/wcm/idc/groups/public/@global/documents/image/mda3/mzux/~edisp/digitalization_16-9nr-04366762/~renditions/digitalization_16-9nr-04366762~8.jpg); */
}
.infographic .item3 {
margin-left: -30px;
top: 10px;
z-index: 2;
}
.infographic .item3:after {
background-color: blue;
/* background-image: url(https://images-na.ssl-images-amazon.com/images/I/61cmjEbLK7L._AC_UL1200_.jpg); */
}
.infographic .item4 {
margin-left: -30px;
top: -30px;
z-index: 1;
}
.infographic .item4:after {
background-color: white;
/* background-image: url(https://aeroreport.de/content/2-innovation/10-industrie-4-0-in-der-luftfahrt/1-artikel-kopf/zukunftdigital_header.jpg); */
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
                  <object id="line-svg" type="image/svg+xml" data="http://startupsmartup.com/wp-content/uploads/2015/12/rightarrow-1.svg" height="60" width="60"></object>
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
