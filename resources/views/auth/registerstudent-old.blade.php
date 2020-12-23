@extends('layouts.app-login-register')

@section('content')


<!DOCTYPE html>
<html class="html" lang="en-US">
<head>
	<meta charset="UTF-8">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<!-- Manifest added by SuperPWA - Progressive Web Apps Plugin For WordPress -->
<link rel="manifest" href="/ACES/superpwa-manifest.json">
<meta name="theme-color" content="#2fbf92">
<!-- / SuperPWA.com -->
<title>Register Page &#8211; ACES</title>
<meta name="viewport" content="width=device-width, initial-scale=1"><link rel='dns-prefetch' href='//s.w.org' />
<link rel="alternate" type="application/rss+xml" title="ACES &raquo; Feed" href="http://ezran.my/ACES/feed/" />
<link rel="alternate" type="application/rss+xml" title="ACES &raquo; Comments Feed" href="http://ezran.my/ACES/comments/feed/" />
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.0.0\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/13.0.0\/svg\/","svgExt":".svg","source":{"concatemoji":"http:\/\/ezran.my\/ACES\/wp-includes\/js\/wp-emoji-release.min.js?ver=5.5.3"}};
			!function(e,a,t){var r,n,o,i,p=a.createElement("canvas"),s=p.getContext&&p.getContext("2d");function c(e,t){var a=String.fromCharCode;s.clearRect(0,0,p.width,p.height),s.fillText(a.apply(this,e),0,0);var r=p.toDataURL();return s.clearRect(0,0,p.width,p.height),s.fillText(a.apply(this,t),0,0),r===p.toDataURL()}function l(e){if(!s||!s.fillText)return!1;switch(s.textBaseline="top",s.font="600 32px Arial",e){case"flag":return!c([127987,65039,8205,9895,65039],[127987,65039,8203,9895,65039])&&(!c([55356,56826,55356,56819],[55356,56826,8203,55356,56819])&&!c([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]));case"emoji":return!c([55357,56424,8205,55356,57212],[55357,56424,8203,55356,57212])}return!1}function d(e){var t=a.createElement("script");t.src=e,t.defer=t.type="text/javascript",a.getElementsByTagName("head")[0].appendChild(t)}for(i=Array("flag","emoji"),t.supports={everything:!0,everythingExceptFlag:!0},o=0;o<i.length;o++)t.supports[i[o]]=l(i[o]),t.supports.everything=t.supports.everything&&t.supports[i[o]],"flag"!==i[o]&&(t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&t.supports[i[o]]);t.supports.everythingExceptFlag=t.supports.everythingExceptFlag&&!t.supports.flag,t.DOMReady=!1,t.readyCallback=function(){t.DOMReady=!0},t.supports.everything||(n=function(){t.readyCallback()},a.addEventListener?(a.addEventListener("DOMContentLoaded",n,!1),e.addEventListener("load",n,!1)):(e.attachEvent("onload",n),a.attachEvent("onreadystatechange",function(){"complete"===a.readyState&&t.readyCallback()})),(r=t.source||{}).concatemoji?d(r.concatemoji):r.wpemoji&&r.twemoji&&(d(r.twemoji),d(r.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
	<link rel='stylesheet' id='gtranslate-style-css'  href='http://ezran.my/ACES/wp-content/plugins/gtranslate/gtranslate-style24.css?ver=5.5.3' type='text/css' media='all' />
<link rel='stylesheet' id='wp-block-library-css'  href='http://ezran.my/ACES/wp-includes/css/dist/block-library/style.min.css?ver=5.5.3' type='text/css' media='all' />
<link rel='stylesheet' id='wp-block-library-theme-css'  href='http://ezran.my/ACES/wp-includes/css/dist/block-library/theme.min.css?ver=5.5.3' type='text/css' media='all' />
<link rel='stylesheet' id='wpb-ea-bootstrap-grid-css'  href='http://ezran.my/ACES/wp-content/plugins/wpb-elementor-addons/inc/../assets/css/grid.min.css?ver=4.0.0' type='text/css' media='' />
<link rel='stylesheet' id='wpb-ea-owl-carousel-css'  href='http://ezran.my/ACES/wp-content/plugins/wpb-elementor-addons/inc/../assets/css/owl.carousel.css?ver=2.3.4' type='text/css' media='' />
<link rel='stylesheet' id='fancybox-css'  href='http://ezran.my/ACES/wp-content/plugins/wpb-elementor-addons/inc/../assets/css/jquery.fancybox.min.css?ver=3.0.47' type='text/css' media='' />
<link rel='stylesheet' id='wpb-lineicons-css-css'  href='http://ezran.my/ACES/wp-content/plugins/wpb-elementor-addons/inc/../assets/icons/lineicons/lineicons.min.css?ver=1.0' type='text/css' media='' />
<link rel='stylesheet' id='wpb_ea_main_css-css'  href='http://ezran.my/ACES/wp-content/plugins/wpb-elementor-addons/inc/../assets/css/main.css?ver=1.0' type='text/css' media='' />
<style id='wpb_ea_main_css-inline-css' type='text/css'>

        .wpb-ea-team-member .social-buttons,
        .wpb-ea-service-box-image .wpb-ea-service-box-btn:hover {
            background: #3878ff;
        }
        .wpb-ea-service-box-icon .wpb-ea-service-box-btn:hover {
            color: #3878ff;
        }
        .wpb-ea-service-box-image .wpb-ea-service-box-btn:hover {
            border-color: #3878ff;
        }

</style>
<link rel='stylesheet' id='dashicons-css'  href='http://ezran.my/ACES/wp-includes/css/dashicons.min.css?ver=5.5.3' type='text/css' media='all' />
<link rel='stylesheet' id='font-awesome-css'  href='http://ezran.my/ACES/wp-content/themes/oceanwp/assets/fonts/fontawesome/css/all.min.css?ver=5.11.2' type='text/css' media='all' />
<link rel='stylesheet' id='simple-line-icons-css'  href='http://ezran.my/ACES/wp-content/themes/oceanwp/assets/css/third/simple-line-icons.min.css?ver=2.4.0' type='text/css' media='all' />
<link rel='stylesheet' id='magnific-popup-css'  href='http://ezran.my/ACES/wp-content/themes/oceanwp/assets/css/third/magnific-popup.min.css?ver=1.0.0' type='text/css' media='all' />
<link rel='stylesheet' id='slick-css'  href='http://ezran.my/ACES/wp-content/themes/oceanwp/assets/css/third/slick.min.css?ver=1.6.0' type='text/css' media='all' />
<link rel='stylesheet' id='oceanwp-style-css'  href='http://ezran.my/ACES/wp-content/themes/oceanwp/assets/css/style.min.css?ver=1.9.0' type='text/css' media='all' />
<link rel='stylesheet' id='wpdreams-asl-basic-css'  href='http://ezran.my/ACES/wp-content/plugins/ajax-search-lite/css/style.basic.css?ver=4.8.4' type='text/css' media='all' />
<link rel='stylesheet' id='wpdreams-ajaxsearchlite-css'  href='http://ezran.my/ACES/wp-content/plugins/ajax-search-lite/css/style-curvy-black.css?ver=4.8.4' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-icons-ekiticons-css'  href='http://ezran.my/ACES/wp-content/plugins/elementskit-lite/modules/controls/assets/css/ekiticons.css?ver=5.9.0' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-icons-css'  href='http://ezran.my/ACES/wp-content/plugins/elementor/assets/lib/eicons/css/elementor-icons.min.css?ver=5.9.1' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-animations-css'  href='http://ezran.my/ACES/wp-content/plugins/elementor/assets/lib/animations/animations.min.css?ver=3.0.13' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-frontend-legacy-css'  href='http://ezran.my/ACES/wp-content/plugins/elementor/assets/css/frontend-legacy.min.css?ver=3.0.13' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-frontend-css'  href='http://ezran.my/ACES/wp-content/plugins/elementor/assets/css/frontend.min.css?ver=3.0.13' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-11-css'  href='http://ezran.my/ACES/wp-content/uploads/elementor/css/post-11.css?ver=1604546378' type='text/css' media='all' />
<link rel='stylesheet' id='powerpack-frontend-css'  href='http://ezran.my/ACES/wp-content/plugins/powerpack-lite-for-elementor/assets/css/frontend.css?ver=2.2.1' type='text/css' media='all' />
<link rel='stylesheet' id='elementskit-css-widgetarea-control-editor-css'  href='http://ezran.my/ACES/wp-content/plugins/elementskit-lite/modules/controls/assets/css/widgetarea-editor.css?ver=2.0.9.1' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-global-css'  href='http://ezran.my/ACES/wp-content/uploads/elementor/css/global.css?ver=1604548018' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-post-1164-css'  href='http://ezran.my/ACES/wp-content/uploads/elementor/css/post-1164.css?ver=1608284627' type='text/css' media='all' />
<link rel='stylesheet' id='ekit-widget-styles-css'  href='http://ezran.my/ACES/wp-content/plugins/elementskit-lite/widgets/init/assets/css/widget-styles.css?ver=2.0.9.1' type='text/css' media='all' />
<link rel='stylesheet' id='ekit-widget-styles-pro-css'  href='http://ezran.my/ACES/wp-content/plugins/elementskit-lite/widgets/init/assets/css/widget-styles-pro.css?ver=2.0.9.1' type='text/css' media='all' />
<link rel='stylesheet' id='ekit-responsive-css'  href='http://ezran.my/ACES/wp-content/plugins/elementskit-lite/widgets/init/assets/css/responsive.css?ver=2.0.9.1' type='text/css' media='all' />
<link rel='stylesheet' id='oe-widgets-style-css'  href='http://ezran.my/ACES/wp-content/plugins/ocean-extra/assets/css/widgets.css?ver=5.5.3' type='text/css' media='all' />
<link rel='stylesheet' id='oceanwp-custom-css'  href='http://ezran.my/ACES/wp-content/uploads/oceanwp/custom-style.css?ver=5.5.3' type='text/css' media='all' />
<link rel='stylesheet' id='google-fonts-1-css'  href='https://fonts.googleapis.com/css?family=Roboto%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic%7CRoboto+Slab%3A100%2C100italic%2C200%2C200italic%2C300%2C300italic%2C400%2C400italic%2C500%2C500italic%2C600%2C600italic%2C700%2C700italic%2C800%2C800italic%2C900%2C900italic&#038;ver=5.5.3' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-icons-shared-0-css'  href='http://ezran.my/ACES/wp-content/plugins/elementor/assets/lib/font-awesome/css/fontawesome.min.css?ver=5.12.0' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-icons-fa-regular-css'  href='http://ezran.my/ACES/wp-content/plugins/elementor/assets/lib/font-awesome/css/regular.min.css?ver=5.12.0' type='text/css' media='all' />
<link rel='stylesheet' id='elementor-icons-fa-solid-css'  href='http://ezran.my/ACES/wp-content/plugins/elementor/assets/lib/font-awesome/css/solid.min.css?ver=5.12.0' type='text/css' media='all' />
<script type='text/javascript' id='jquery-core-js-extra'>
/* <![CDATA[ */
var pp = {"ajax_url":"http:\/\/ezran.my\/ACES\/wp-admin\/admin-ajax.php"};
/* ]]> */
</script>
<script type='text/javascript' src='http://ezran.my/ACES/wp-includes/js/jquery/jquery.js?ver=1.12.4-wp' id='jquery-core-js'></script>
<link rel="https://api.w.org/" href="http://ezran.my/ACES/wp-json/" /><link rel="alternate" type="application/json" href="http://ezran.my/ACES/wp-json/wp/v2/pages/1164" /><link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://ezran.my/ACES/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://ezran.my/ACES/wp-includes/wlwmanifest.xml" />
<meta name="generator" content="WordPress 5.5.3" />
<link rel="canonical" href="http://ezran.my/ACES/register-page/" />
<link rel='shortlink' href='http://ezran.my/ACES/?p=1164' />
<link rel="alternate" type="application/json+oembed" href="http://ezran.my/ACES/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fezran.my%2FACES%2Fregister-page%2F" />
<link rel="alternate" type="text/xml+oembed" href="http://ezran.my/ACES/wp-json/oembed/1.0/embed?url=http%3A%2F%2Fezran.my%2FACES%2Fregister-page%2F&#038;format=xml" />
                <link href='//fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
                <style type="text/css">.recentcomments a{display:inline !important;padding:0 !important;margin:0 !important;}</style>                <style type="text/css">
                    <!--

            @font-face {
                font-family: 'aslsicons2';
                src: url('//ezran.my/ACES/wp-content/plugins/ajax-search-lite/css/fonts/icons2.eot');
                src: url('//ezran.my/ACES/wp-content/plugins/ajax-search-lite/css/fonts/icons2.eot?#iefix') format('embedded-opentype'),
                     url('//ezran.my/ACES/wp-content/plugins/ajax-search-lite/css/fonts/icons2.woff2') format('woff2'),
                     url('//ezran.my/ACES/wp-content/plugins/ajax-search-lite/css/fonts/icons2.woff') format('woff'),
                     url('//ezran.my/ACES/wp-content/plugins/ajax-search-lite/css/fonts/icons2.ttf') format('truetype'),
                     url('//ezran.my/ACES/wp-content/plugins/ajax-search-lite/css/fonts/icons2.svg#icons') format('svg');
                font-weight: normal;
                font-style: normal;
            }
            div[id*='ajaxsearchlitesettings'].searchsettings .asl_option_inner label {
                font-size: 0px !important;
                color: rgba(0, 0, 0, 0);
            }
            div[id*='ajaxsearchlitesettings'].searchsettings .asl_option_inner label:after {
                font-size: 11px !important;
                position: absolute;
                top: 0;
                left: 0;
                z-index: 1;
            }
            div[id*='ajaxsearchlite'].wpdreams_asl_container {
                width: 100%;
                margin: 0px 0px 0px 0px;
            }
            div[id*='ajaxsearchliteres'].wpdreams_asl_results div.resdrg span.highlighted {
                font-weight: bold;
                color: rgba(217, 49, 43, 1);
                background-color: rgba(238, 238, 238, 1);
            }
            div[id*='ajaxsearchliteres'].wpdreams_asl_results .results div.asl_image {
                width: 70px;
                height: 70px;
            }
            div.asl_r .results {
                max-height: none;
            }

                .asl_m .probox svg {
                    fill: rgba(0, 0, 0, 1) !important;
                }
                .asl_m .probox .innericon {
                    background-color: rgba(255, 255, 255, 1) !important;
                    background-image: none !important;
                    -webkit-background-image: none !important;
                    -ms-background-image: none !important;
                }

                div.asl_r.asl_w.vertical .results .item::after {
                    display: block;
                    position: absolute;
                    bottom: 0;
                    content: '';
                    height: 1px;
                    width: 100%;
                    background: #D8D8D8;
                }
                div.asl_r.asl_w.vertical .results .item.asp_last_item::after {
                    display: none;
                }
                                    -->
                </style>
                            <script type="text/javascript">
                if ( typeof _ASL !== "undefined" && _ASL !== null && typeof _ASL.initialize !== "undefined" )
                    _ASL.initialize();
            </script>
            <link rel="icon" href="http://ezran.my/ACES/wp-content/uploads/2020/11/cropped-WhatsApp-Image-2020-11-04-at-10.56.03-AM-32x32.jpeg" sizes="32x32" />
<link rel="icon" href="http://ezran.my/ACES/wp-content/uploads/2020/11/cropped-WhatsApp-Image-2020-11-04-at-10.56.03-AM-192x192.jpeg" sizes="192x192" />
<link rel="apple-touch-icon" href="http://ezran.my/ACES/wp-content/uploads/2020/11/cropped-WhatsApp-Image-2020-11-04-at-10.56.03-AM-180x180.jpeg" />
<meta name="msapplication-TileImage" content="http://ezran.my/ACES/wp-content/uploads/2020/11/cropped-WhatsApp-Image-2020-11-04-at-10.56.03-AM-270x270.jpeg" />
<style type="text/css">/** Mega Menu CSS: fs **/</style>
</head>

<body class="page-template page-template-elementor_header_footer page page-id-1164 wp-embed-responsive wpb-elementor-addons oceanwp-theme dropdown-mobile no-header-border default-breakpoint has-sidebar content-right-sidebar page-header-disabled has-breadcrumbs elementor-default elementor-template-full-width elementor-kit-11 elementor-page elementor-page-1164" itemscope="itemscope" itemtype="https://schema.org/WebPage">



	<div id="outer-wrap" class="site clr">

		<a class="skip-link screen-reader-text" href="#main">Skip to content</a>


		<div id="wrap" class="clr">




			<main id="main" class="site-main clr"  role="main">

						<div data-elementor-type="wp-page" data-elementor-id="1164" class="elementor elementor-1164" data-elementor-settings="[]">
						<div class="elementor-inner">
							<div class="elementor-section-wrap">
							<section class="elementor-section elementor-top-section elementor-element elementor-element-7c564df elementor-section-full_width elementor-section-height-default elementor-section-height-default" data-id="7c564df" data-element_type="section" data-settings="{&quot;ekit_has_onepagescroll_dot&quot;:&quot;yes&quot;}">
						<div class="elementor-container elementor-column-gap-default">
							<div class="elementor-row">
					<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-48ab2e0" data-id="48ab2e0" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;gradient&quot;}">
			<div class="elementor-column-wrap elementor-element-populated">
							<div class="elementor-widget-wrap">
						<div class="elementor-element elementor-element-fb983d9 elementor-widget elementor-widget-spacer" data-id="fb983d9" data-element_type="widget" data-widget_type="spacer.default">
				<div class="elementor-widget-container">
					<div class="elementor-spacer">
			<div class="elementor-spacer-inner"></div>
		</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-f89f2e9 elementor-widget elementor-widget-image" data-id="f89f2e9" data-element_type="widget" data-widget_type="image.default">
				<div class="elementor-widget-container">
					<div class="elementor-image">
										<img width="150" height="150" src="http://ezran.my/ACES/wp-content/uploads/2020/11/WhatsApp-Image-2020-11-04-at-10.56.03-AM-150x150.jpeg" class="attachment-thumbnail size-thumbnail" alt="" loading="lazy" srcset="http://ezran.my/ACES/wp-content/uploads/2020/11/WhatsApp-Image-2020-11-04-at-10.56.03-AM-150x150.jpeg 150w, http://ezran.my/ACES/wp-content/uploads/2020/11/WhatsApp-Image-2020-11-04-at-10.56.03-AM-300x300.jpeg 300w, http://ezran.my/ACES/wp-content/uploads/2020/11/WhatsApp-Image-2020-11-04-at-10.56.03-AM-100x100.jpeg 100w" sizes="(max-width: 150px) 100vw, 150px" />											</div>
				</div>
				</div>
				<div class="elementor-element elementor-element-60fabac elementor-widget elementor-widget-text-editor" data-id="60fabac" data-element_type="widget" data-widget_type="text-editor.default">
				<div class="elementor-widget-container">
					<div class="elementor-text-editor elementor-clearfix"><p>Pusat Kecemerlangan Teknologi Pintar Asia (ACES) di bawah Majlis Pembangunan Wilayah Ekonomi Pantai Timur (ECERDC) merancang untuk mengembangkan aplikasi berdasarkan karya sebagai alat untuk menyebabkan kesedaran dan juga berfungsi sebagai pengenalan kepada industri 4.0 (IR 4.0) kepada pelajar Tingkatan 5 yang terpilih.</p></div>
				</div>
				</div>
				<div class="elementor-element elementor-element-2e8bdd6 pp-icon-list-traditional pp-icon-left elementor-widget elementor-widget-pp-icon-list" data-id="2e8bdd6" data-element_type="widget" data-widget_type="pp-icon-list.default">
				<div class="elementor-widget-container">
					<div class="pp-list-container">
			<ul class="pp-list-items">
																					<li class="pp-icon-list-item">
										<span class="pp-icon-wrapper">
				<span class="pp-icon-list-icon pp-icon "><i aria-hidden="true" class="far fa-question-circle"></i></span>			</span>
			<span class="pp-icon-list-text">Pertolongan</span>						</li>
																											<li class="pp-icon-list-item">
										<span class="pp-icon-wrapper">
				<span class="pp-icon-list-icon pp-icon "><i aria-hidden="true" class="fas fa-book"></i></span>			</span>
			<span class="pp-icon-list-text">Syarat</span>						</li>
																											<li class="pp-icon-list-item">
										<span class="pp-icon-wrapper">
				<span class="pp-icon-list-icon pp-icon "><i aria-hidden="true" class="fas fa-lock-open"></i></span>			</span>
			<span class="pp-icon-list-text">Kerahsiaan</span>						</li>
													</ul>
		</div>
				</div>
				</div>
						</div>
					</div>
		</div>
				<div class="elementor-column elementor-col-50 elementor-top-column elementor-element elementor-element-42b7301" data-id="42b7301" data-element_type="column" data-settings="{&quot;background_background&quot;:&quot;classic&quot;}">
			<div class="elementor-column-wrap elementor-element-populated">
					<div class="elementor-background-overlay"></div>
							<div class="elementor-widget-wrap">
						<section class="elementor-section elementor-inner-section elementor-element elementor-element-9c58c77 elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="9c58c77" data-element_type="section" data-settings="{&quot;ekit_has_onepagescroll_dot&quot;:&quot;yes&quot;}">
<br><br>
              <div class="container">
                  <div class="row justify-content-center">
                      <div class="col-md-12">
                        <form class="splash-container" method="POST" action="{{ route('register') }}">
                          @csrf
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="mb-1">Registrations Form</h3>
                                    <p>Please enter your user information.</p>
                                </div>
                                <div class="card-body">
                                  <div class="input-group mb-3">
                                      <input
                                      type="text"
                                      name="name"
                                      class="form-control {{ $errors->has('name') ? 'is-invalid' : '' }}"
                                      value="{{ old('name') }}"
                                      placeholder="Full Name"
                                      oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);"
                                      autofocus
                                      >
                                      <div class="input-group-append">
                                          <div class="input-group-text">
                                              <span class="fas fa-user"></span>
                                          </div>
                                      </div>
                                      @if($errors->has('name'))
                                          <div class="invalid-feedback">
                                              <strong>{{ $errors }}</strong>
                                          </div>
                                      @endif
                                  </div>

                                {{-- Kad Pengenalan field --}}
                                <div class="input-group mb-3">
                                    <input type="text"
                                           name="ic_number"
                                           class="form-control {{ $errors->has('ic_number') ? 'is-invalid' : '' }}"
                                           value="{{ old('ic_number') }}"
                                           placeholder="IC-Number"
                                           minlength="12"
                                           maxlength="12"
                                           onkeypress="return onlyNumberKey(event)"
                                           autofocus
                                           >
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="far fa-id-card"></span>
                                        </div>
                                    </div>
                                    @if($errors->has('ic_number'))
                                        <div class="invalid-feedback">
                                            <strong>{{ $errors->first('ic_number') }}</strong>
                                        </div>
                                    @endif
                                </div>

                                {{-- Email field --}}
                                <div class="input-group mb-3">
                                    <input
                                    type="email"
                                    name="email"
                                    class="form-control {{ $errors->has('email') ? 'is-invalid' : '' }}"
                                    value="{{ old('email') }}"
                                    placeholder="Email"
                                    >
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-envelope"></span>
                                        </div>
                                    </div>
                                    @if($errors->has('email'))
                                        <div class="invalid-feedback">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </div>
                                    @endif
                                </div>

                                {{-- Phone field --}}
                                <div class="input-group mb-3">
                                    <input
                                    type="text"
                                    name="phone"
                                    class="form-control {{ $errors->has('phone') ? 'is-invalid' : '' }}"
                                    value="{{ old('phone') }}"
                                    onkeypress="return onlyNumberKey(event)"
                                    minlength="10"
                                    maxlength="11"
                                    placeholder="Phone Number"
                                    >
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-phone"></span>
                                        </div>
                                    </div>
                                    @if($errors->has('phone'))
                                        <div class="invalid-feedback">
                                            <strong>{{ $errors->first('phone') }}</strong>
                                        </div>
                                    @endif
                                </div>

                                {{-- Address field --}}
                                <div class="input-group mb-3">
                                    <textarea
                                    name="address"
                                    rows="3"
                                    cols="50"
                                    oninput="let p=this.selectionStart;this.value=this.value.toUpperCase();this.setSelectionRange(p, p);"
                                    class="form-control {{ $errors->has('address') ? 'is-invalid' : '' }}"
                                    placeholder="Address"
                                    >{{ old('address') }}</textarea>
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-map-marker"></span>
                                        </div>
                                    </div>
                                    @if($errors->has('address'))
                                        <div class="invalid-feedback">
                                            <strong>{{ $errors->first('address') }}</strong>
                                        </div>
                                    @endif
                                </div>

                                {{-- Postcode field --}}
                                <div class="input-group mb-3">
                                    <input type="text"
                                    name="postcode"
                                    class="form-control {{ $errors->has('postcode') ? 'is-invalid' : '' }}"
                                    minlength="5"
                                    maxlength="5"
                                    value="{{ old('postcode') }}"
                                    onkeypress="return onlyNumberKey(event)"
                                    placeholder="Postcode"
                                    >
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-map-signs"></span>
                                        </div>
                                    </div>
                                    @if($errors->has('postcode'))
                                        <div class="invalid-feedback">
                                            <strong>{{ $errors->first('postcode') }}</strong>
                                        </div>
                                    @endif
                                </div>

                                {{-- State field --}}
                                <div class="input-group mb-3">
                                 <select class="custom-select  bg-light @error('state') is-invalid @enderror" name="state" value="{{ old('state') }}"  >
                                       <option value="" selected disabled hidden>Choose State</option>
                                       <option value="Johor" {{ old('state') == "Johor" ? 'selected' : '' }}>Johor</option>
                                       <option value="Kedah" {{ old('state') == "Kedah" ? 'selected' : '' }}>Kedah</option>
                                       <option value="Kelantan" {{ old('state') == "Kelantan" ? 'selected' : '' }}>Kelantan</option>
                                       <option value="Melaka" {{ old('state') == "Melaka" ? 'selected' : '' }}>Melaka</option>
                                       <option value="Negeri Sembilan" {{ old('state') == "Negeri Sembilan" ? 'selected' : '' }}>Negeri Sembilan</option>
                                       <option value="Pahang" {{ old('state') == "Pahang" ? 'selected' : '' }}>Pahang</option>
                                       <option value="Pulau Pinang" {{ old('state') == "Pulau Pinang" ? 'selected' : '' }}>Pulau Pinang</option>
                                       <option value="Perak" {{ old('state') == "Perak" ? 'selected' : '' }}>Perak</option>
                                       <option value="Perlis" {{ old('state') == "Perlis" ? 'selected' : '' }}>Perlis</option>
                                       <option value="Sabah" {{ old('state') == "Sabah" ? 'selected' : '' }}>Sabah</option>
                                       <option value="Sarawak" {{ old('state') == "Sarawak" ? 'selected' : '' }}>Sarawak</option>
                                       <option value="Selangor" {{ old('state') == "Selangor" ? 'selected' : '' }}>Selangor</option>
                                       <option value="Terengganu" {{ old('state') == "Terengganu" ? 'selected' : '' }}>Terengganu</option>
                                       <option value="WP Kuala Lumpur" {{ old('state') == "WP Kuala Lumpur" ? 'selected' : '' }}>WP Kuala Lumpur</option>
                                       <option value="WP Putrajaya" {{ old('state') == "WP Putrajaya" ? 'selected' : '' }}>WP Putrajaya</option>
                                       <option value="WP Labuan" {{ old('state') == "WP Labuan" ? 'selected' : '' }}>WP Labuan</option>
                                   </select>
                                    <div class="input-group-append">
                                        <div class="input-group-text">
                                            <span class="fas fa-flag"></span>
                                        </div>
                                    </div>
                                    @if($errors->has('state'))
                                        <div class="invalid-feedback">
                                            <strong>{{ $errors->first('state') }}</strong>
                                        </div>
                                    @endif
                                </div>
                                    {{-- Password field --}}

                                      <div class="input-group mb-3">
                                          <input type="password"
                                                 id="password"
                                                 name="password"
                                                 class="form-control {{ $errors->has('password') ? 'is-invalid' : '' }}"
                                                 placeholder="Password">
                                          <div class="input-group-append">
                                            <a onclick="visiblePass()">

                                              <div class="input-group-text">
                                                  <span id="icon_eye_pass" class="fa fa-eye" ></span>
                                              </div>
                                            </a>

                                          </div>
                                          @if($errors->has('password'))
                                              <div class="invalid-feedback">
                                                  <strong>{{ $errors->first('password') }}</strong>
                                              </div>
                                          @endif
                                      </div>

                                    {{-- Confirm password field --}}
                                    <div class="input-group mb-3">
                                        <input type="password"
                                               id="password_confirmation"
                                               name="password_confirmation"
                                               class="form-control {{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}"
                                               placeholder="Re-type Password">
                                        <div class="input-group-append">
                                          <a onclick="visiblePassConfirm()">

                                            <div class="input-group-text">
                                                <span id="icon_eye_confirm" class="fa fa-eye" ></span>
                                            </div>
                                          </a>

                                        </div>
                                        @if($errors->has('password_confirmation'))
                                            <div class="invalid-feedback">
                                                <strong>{{ $errors->first('password_confirmation') }}</strong>
                                            </div>
                                        @endif
                                    </div>

                                    <div class="form-group pt-2">
                                        <button class="btn btn-block btn-primary" type="submit">Register My Account</button>
                                    </div>
                                    <!-- <div class="form-group">
                                        <label class="custom-control custom-checkbox">
                                            <input class="custom-control-input" type="checkbox"><span class="custom-control-label">By creating an account, you agree the <a href="#">terms and conditions</a></span>
                                        </label>
                                    </div> -->
                                    <!-- <div class="form-group row pt-0">
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2">
                                            <button class="btn btn-block btn-social btn-facebook " type="button">Facebook</button>
                                        </div>
                                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                            <button class="btn  btn-block btn-social btn-twitter" type="button">Twitter</button>
                                        </div>
                                    </div> -->
                                </div>
                                <div class="card-footer bg-white">
                                    <p>Already member? <a href="{{route('login')}}" class="text-secondary">Login Here.</a></p>
                                </div>
                            </div>
                        </form>
                      </div>
                  </div>
              </div>
		</section>



						</div>
					</div>
		</div>
								</div>
					</div>
		</section>
						</div>
						</div>
					</div>

	</main><!-- #main -->







</div><!-- #wrap -->


</div><!-- #outer-wrap -->



<a id="scroll-top" class="scroll-top-right" href="#"><span class="fa fa-angle-up" aria-label="Scroll to the top of the page"></span></a>

<script type="text/javascript">
    //input text ONLY
    function onlyNumberKey(evt) {

      // Only ASCII charactar in that range allowed
      var ASCIICode = (evt.which) ? evt.which : evt.keyCode
      if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
          return false;
      return true;
    }
    //visible Password
    function visiblePass() {
      var x = document.getElementById("password");
      if (x.type === "password") {
        x.type = "text";
        document.getElementById("icon_eye_pass").style.color = "#007bff";
      } else {
        x.type = "password";
        document.getElementById("icon_eye_pass").style.color = "grey";

      }
    }

    function visiblePassConfirm() {
      var x = document.getElementById("password_confirmation");
      if (x.type === "password") {
        x.type = "text";
        document.getElementById("icon_eye_confirm").style.color = "#007bff";
      } else {
        x.type = "password";
        document.getElementById("icon_eye_confirm").style.color = "grey";

      }
    }
</script>


<script type='text/javascript' id='superpwa-register-sw-js-extra'>
/* <![CDATA[ */
var superpwa_sw = {"url":"\/ACES\/superpwa-sw.js"};
/* ]]> */
</script>
<script type='text/javascript' src='http://ezran.my/ACES/wp-content/plugins/super-progressive-web-apps/public/js/register-sw.js' id='superpwa-register-sw-js'></script>
<script type='text/javascript' src='http://ezran.my/ACES/wp-includes/js/imagesloaded.min.js?ver=4.1.4' id='imagesloaded-js'></script>
<script type='text/javascript' src='http://ezran.my/ACES/wp-content/plugins/powerpack-lite-for-elementor/assets/lib/magnific-popup/jquery.magnific-popup.min.js?ver=2.2.1' id='magnific-popup-js'></script>
<script type='text/javascript' src='http://ezran.my/ACES/wp-content/themes/oceanwp/assets/js/third/lightbox.min.js?ver=1.9.0' id='oceanwp-lightbox-js'></script>
<script type='text/javascript' id='oceanwp-main-js-extra'>
/* <![CDATA[ */
var oceanwpLocalize = {"isRTL":"","menuSearchStyle":"drop_down","sidrSource":null,"sidrDisplace":"1","sidrSide":"left","sidrDropdownTarget":"link","verticalHeaderTarget":"link","customSelects":".woocommerce-ordering .orderby, #dropdown_product_cat, .widget_categories select, .widget_archive select, .single-product .variations_form .variations select","ajax_url":"http:\/\/ezran.my\/ACES\/wp-admin\/admin-ajax.php"};
/* ]]> */
</script>
<script type='text/javascript' src='http://ezran.my/ACES/wp-content/themes/oceanwp/assets/js/main.min.js?ver=1.9.0' id='oceanwp-main-js'></script>
<script type='text/javascript' id='wpdreams-ajaxsearchlite-js-extra'>
/* <![CDATA[ */
var ajaxsearchlite = {"ajaxurl":"http:\/\/ezran.my\/ACES\/wp-admin\/admin-ajax.php","backend_ajaxurl":"http:\/\/ezran.my\/ACES\/wp-admin\/admin-ajax.php","js_scope":"jQuery"};
var ASL = {"ajaxurl":"http:\/\/ezran.my\/ACES\/wp-admin\/admin-ajax.php","backend_ajaxurl":"http:\/\/ezran.my\/ACES\/wp-admin\/admin-ajax.php","js_scope":"jQuery","detect_ajax":"0","scrollbar":"1","js_retain_popstate":"0","version":"4741","fix_duplicates":"1","analytics":{"method":0,"tracking_id":"","string":"?ajax_search={asl_term}","event":{"focus":{"active":1,"action":"focus","category":"ASL","label":"Input focus","value":"1"},"search_start":{"active":0,"action":"search_start","category":"ASL","label":"Phrase: {phrase}","value":"1"},"search_end":{"active":1,"action":"search_end","category":"ASL","label":"{phrase} | {results_count}","value":"1"},"magnifier":{"active":1,"action":"magnifier","category":"ASL","label":"Magnifier clicked","value":"1"},"return":{"active":1,"action":"return","category":"ASL","label":"Return button pressed","value":"1"},"facet_change":{"active":0,"action":"facet_change","category":"ASL","label":"{option_label} | {option_value}","value":"1"},"result_click":{"active":1,"action":"result_click","category":"ASL","label":"{result_title} | {result_url}","value":"1"}}}};
/* ]]> */
</script>
<script type='text/javascript' src='http://ezran.my/ACES/wp-content/plugins/ajax-search-lite/js/min/jquery.ajaxsearchlite.min.js?ver=4.8.4' id='wpdreams-ajaxsearchlite-js'></script>
<script type='text/javascript' src='http://ezran.my/ACES/wp-content/plugins/elementskit-lite/libs/framework/assets/js/frontend-script.js?ver=2.0.9.1' id='elementskit-framework-js-frontend-js'></script>
<script type='text/javascript' id='elementskit-framework-js-frontend-js-after'>
		var elementskit = {
            resturl: 'http://ezran.my/ACES/wp-json/elementskit/v1/',
        }


</script>
<script type='text/javascript' src='http://ezran.my/ACES/wp-content/plugins/elementskit-lite/widgets/init/assets/js/widget-scripts.js?ver=2.0.9.1' id='ekit-widget-scripts-js'></script>
<script type='text/javascript' src='http://ezran.my/ACES/wp-includes/js/hoverIntent.min.js?ver=1.8.1' id='hoverIntent-js'></script>
<script type='text/javascript' id='megamenu-js-extra'>
/* <![CDATA[ */
var megamenu = {"timeout":"300","interval":"100"};
/* ]]> */
</script>
<script type='text/javascript' src='http://ezran.my/ACES/wp-content/plugins/megamenu/js/maxmegamenu.js?ver=2.9.1' id='megamenu-js'></script>
<script type='text/javascript' src='http://ezran.my/ACES/wp-includes/js/wp-embed.min.js?ver=5.5.3' id='wp-embed-js'></script>
<!--[if lt IE 9]>
<script type='text/javascript' src='http://ezran.my/ACES/wp-content/themes/oceanwp/assets/js/third/html5.min.js?ver=1.9.0' id='html5shiv-js'></script>
<![endif]-->
<script type='text/javascript' src='http://ezran.my/ACES/wp-content/plugins/elementor/assets/js/frontend-modules.min.js?ver=3.0.13' id='elementor-frontend-modules-js'></script>
<script type='text/javascript' src='http://ezran.my/ACES/wp-includes/js/jquery/ui/position.min.js?ver=1.11.4' id='jquery-ui-position-js'></script>
<script type='text/javascript' src='http://ezran.my/ACES/wp-content/plugins/elementor/assets/lib/dialog/dialog.min.js?ver=4.8.1' id='elementor-dialog-js'></script>
<script type='text/javascript' src='http://ezran.my/ACES/wp-content/plugins/elementor/assets/lib/waypoints/waypoints.min.js?ver=4.0.2' id='elementor-waypoints-js'></script>
<script type='text/javascript' src='http://ezran.my/ACES/wp-content/plugins/elementor/assets/lib/swiper/swiper.min.js?ver=5.3.6' id='swiper-js'></script>
<script type='text/javascript' src='http://ezran.my/ACES/wp-content/plugins/elementor/assets/lib/share-link/share-link.min.js?ver=3.0.13' id='share-link-js'></script>
<script type='text/javascript' id='elementor-frontend-js-before'>
var elementorFrontendConfig = {"environmentMode":{"edit":false,"wpPreview":false},"i18n":{"shareOnFacebook":"Share on Facebook","shareOnTwitter":"Share on Twitter","pinIt":"Pin it","download":"Download","downloadImage":"Download image","fullscreen":"Fullscreen","zoom":"Zoom","share":"Share","playVideo":"Play Video","previous":"Previous","next":"Next","close":"Close"},"is_rtl":false,"breakpoints":{"xs":0,"sm":480,"md":768,"lg":1025,"xl":1440,"xxl":1600},"version":"3.0.13","is_static":false,"legacyMode":{"elementWrappers":true},"urls":{"assets":"http:\/\/ezran.my\/ACES\/wp-content\/plugins\/elementor\/assets\/"},"settings":{"page":[],"editorPreferences":[]},"kit":{"global_image_lightbox":"yes","lightbox_enable_counter":"yes","lightbox_enable_fullscreen":"yes","lightbox_enable_zoom":"yes","lightbox_enable_share":"yes","lightbox_title_src":"title","lightbox_description_src":"description"},"post":{"id":1164,"title":"Register%20Page%20%E2%80%93%20ACES","excerpt":"","featuredImage":false}};
</script>
<script type='text/javascript' src='http://ezran.my/ACES/wp-content/plugins/elementor/assets/js/frontend.min.js?ver=3.0.13' id='elementor-frontend-js'></script>
<script type='text/javascript' src='http://ezran.my/ACES/wp-content/plugins/elementskit-lite/widgets/init/assets/js/elementor.js?ver=2.0.9.1' id='elementskit-elementor-js'></script>
<script type='text/javascript' src='http://ezran.my/ACES/wp-content/plugins/elementskit-lite/modules/controls/assets/js/widgetarea-editor.js?ver=2.0.9.1' id='elementskit-js-widgetarea-control-editor-js'></script>
</body>
</html>


@endsection
