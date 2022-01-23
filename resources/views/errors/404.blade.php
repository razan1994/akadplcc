{{-- @extends('errors::minimal') --}}

@section('title', __('Not Found'))
<!DOCTYPE html>
<html class="no-js" lang="en">
	<head>

		<meta charset="UTF-8">
		<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="description" content="Medz - Medical Directory HTML Template">
		<meta name="author" content="Spruko Technologies Private Limited">
		<meta name="keywords" content="appointments, booking, bootstrap list template,  directory listing html template,  directory website template, doctor directory, doctor search, health template, healthcare directory, hospital,  html css templates, html directory listing, listing, medical bootstrap template, medical directory, medical html template , medical template,  medical web templates, medical website templates, pharma website templates, responsive html template,template html css, online directory website,  html5 template, themeforest html,  online directory, simple html templates ">

		<!-- Favicon -->
		<link rel="icon" href="{{ asset('front_end_style/assets/images/brand/favicon.ico') }}" type="image/x-icon"/>
		<link rel="shortcut icon" type="image/x-icon" href="{{ asset('front_end_style/assets/images/brand/favicon.ico') }}" />

		<!-- Title -->
		<title>Medz - Medical Directory HTML Template</title>

		<!-- Bootstrap Css -->
		<link href="{{ asset('front_end_style/assets/plugins/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet" />

		<!-- Style Css -->
		<link href="{{ asset('front_end_style/assets/css/style.css') }}" rel="stylesheet" />

		<!--Icons  Css -->
		<link href="{{ asset('front_end_style/assets/css/icons.css') }}" rel="stylesheet"/>

		<!--Select2 Css -->
		<link href="{{ asset('front_end_style/assets/plugins/select2/select2.min.css') }}" rel="stylesheet" />

		<!-- Countdown css-->
		<link href="{{ asset('front_end_style/assets/plugins/jquery-countdown/countdown.css') }}" rel="stylesheet">

		<!-- Custom scroll bar css-->
		<link href="{{ asset('front_end_style/assets/plugins/scroll-bar/jquery.mCustomScrollbar.css') }}" rel="stylesheet" />

		<!--Color-Skin Css -->
		<link href="{{ asset('front_end_style/assets/color-skins/color10.css') }}" id="theme" media="all" rel="stylesheet">

	</head>

	<body class="construction-image">

		<!--Loader-->
		<div id="global-loader">
			<img alt="" class="loader-img" src="{{ asset('front_end_style/assets/images/loader.svg') }}">
		</div>
		<!--/Loader-->

		<!-- Page -->
		<div class="page page-h">
			<div class="page-content z-index-10">
				<div class="container text-center">
					<div class="display-1 text-white mb-5">400</div>
					<h1 class="h2 text-white  mb-3">Page Not Found</h1>
					<p class="h4 font-weight-Automatic mb-7 leading-Automatic text-white">Oops!!!! you tried to access a page which is not available. go back to Vehicle</p>
					<a class="btn btn-orange" href="{{ route('welcome') }}">
						Back To Home
					</a>
				</div>
			</div>
		</div>
		<!-- End Page -->

		<!--Back to top -->
		<a href="#top" id="back-to-top"><i class="fa fa-angle-double-up"></i></a>

		<!-- JQuery js-->
		<script src="{{ asset('front_end_style/assets/js/jquery-3.2.1.min.js') }}"></script>

		<!-- Bootstrap js -->
		<script src="{{ asset('front_end_style/assets/plugins/bootstrap/js/popper.min.js') }}"></script>
		<script src="{{ asset('front_end_style/assets/plugins/bootstrap/js/bootstrap.min.js') }}"></script>

		<!--JQueryVehiclerkline Js-->
		<script src="{{ asset('front_end_style/assets/js/jquery.sparkline.min.js') }}"></script>

		<!-- Circle Progress Js-->
		<script src="{{ asset('front_end_style/assets/js/circle-progress.min.js') }}"></script>

		<!-- Star Rating Js-->
		<script src="{{ asset('front_end_style/assets/plugins/rating/jquery.rating-stars.js') }}"></script>

		<!--Owl Carousel js -->
		<script src="{{ asset('front_end_style/assets/plugins/owl-carousel/owl.carousel.js') }}"></script>

		<!--JQuery TouchSwipe js-->
		<script src="{{ asset('front_end_style/assets/js/jquery.touchSwipe.min.js') }}"></script>

		<!--Select2 js -->
		<script src="{{ asset('front_end_style/assets/plugins/select2/select2.full.min.js') }}"></script>
		<script src="{{ asset('front_end_style/assets/js/select2.js') }}"></script>

		<!-- Cookie js -->
		<script src="{{ asset('front_end_style/assets/plugins/cookie/jquery.ihavecookies.js') }}"></script>
		<script src="{{ asset('front_end_style/assets/plugins/cookie/cookie.js') }}"></script>

		<!-- Custom scroll bar Js-->
		<script src="{{ asset('front_end_style/assets/plugins/scroll-bar/jquery.mCustomScrollbar.concat.min.js') }}"></script>

		<!-- sticky Js-->
		<script src="{{ asset('front_end_style/assets/js/sticky.js') }}"></script>

		<!-- Swipe Js-->
		<script src="{{ asset('front_end_style/assets/js/swipe.js') }}"></script>

		<!--Owl-Carousel Js-->
		<script src="{{ asset('front_end_style/assets/js/owl-carousel.js') }}"></script>

		<!-- Custom Js-->
		<script src="{{ asset('front_end_style/assets/js/custom.js') }}"></script>

	</body>
</html>
