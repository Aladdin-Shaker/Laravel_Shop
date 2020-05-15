<!DOCTYPE html>
<html lang="en">
<head>
	<title>Home</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--=======================================================================================================================-->
    <link rel="stylesheet" type="image/png" href="{{ asset('frontEnd/images/icons/favicon.png') }}">
<!--=======================================================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontEnd/vendor/bootstrap/css/bootstrap.min.css') }}">
<!--=======================================================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontEnd/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--=======================================================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontEnd/fonts/themify/themify-icons.css') }}">
<!--=======================================================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontEnd/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
<!--=======================================================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontEnd/fonts/elegant-font/html-css/style.css') }}">
<!--=======================================================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontEnd/vendor/animate/animate.css') }}">
<!--=======================================================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontEnd/vendor/css-hamburgers/hamburgers.min.css') }}">
<!--=======================================================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontEnd/vendor/animsition/css/animsition.min.css') }}">
<!--=======================================================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontEnd/vendor/select2/select2.min.css') }}">
<!--=======================================================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontEnd/vendor/daterangepicker/daterangepicker.css') }}">
<!--=======================================================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontEnd/vendor/slick/slick.css') }}">
<!--=======================================================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontEnd/vendor/lightbox2/css/lightbox.min.css') }}">
<!--=======================================================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontEnd/css/util.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('frontEnd/css/main.css') }}">
<!--=======================================================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('frontEnd/css/addTocart.css') }}">
<!--=======================================================================================================================-->
	@yield('style')
<!--=======================================================================================================================-->

</head>
<body>

	<!-- Header -->
	@include("user.layouts.header")
	
	<!-- Title Page -->
	<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url('{{Request::root()}}/frontEnd/images/about-page/about2.JPEG');">
		<h2 class="l-text2 t-center">
			About
		</h2>
	</section>

	<!-- content page -->
	<section class="bgwhite p-t-66 p-b-38">
		<div class="container">
			<div class="row">
				<div class="col-md-4 p-b-30">
					<div class="hov-img-zoom">
						<img src="/frontEnd/images/about-page/about.JPEG" alt="IMG-ABOUT">
					</div>
				</div>

				<div class="col-md-8 p-b-30">
					<h3 class="m-text26 p-t-15 p-b-16">
						Our story
					</h3>

					<p class="p-b-28">
						Phasellus egestas nisi nisi, lobortis ultricies risus semper nec. Vestibulum pharetra ac ante ut pellentesque. Curabitur fringilla dolor quis lorem accumsan, vitae molestie urna dapibus. Pellentesque porta est ac neque bibendum viverra. Vivamus lobortis magna ut interdum laoreet. Donec gravida lorem elit, quis condimentum ex semper sit amet. Fusce eget ligula magna. Aliquam aliquam imperdiet sodales. Ut fringilla turpis in vehicula vehicula. Pellentesque congue ac orci ut gravida. Aliquam erat volutpat. Donec iaculis lectus a arcu facilisis, eu sodales lectus sagittis. Etiam pellentesque, magna vel dictum rutrum, neque justo eleifend elit, vel tincidunt erat arcu ut sem. Sed rutrum, turpis ut commodo efficitur, quam velit convallis ipsum, et maximus enim ligula ac ligula. Vivamus tristique vulputate ultricies. Sed vitae ultrices orci.
					</p>

					<div class="bo13 p-l-29 m-l-9 p-b-10">
						<p class="p-b-11">
							Creativity is just connecting things. When you ask creative people how they did something, they feel a little guilty because they didn't really do it, they just saw something. It seemed obvious to them after a while.
						</p>

						<span class="s-text7">
							- Steve Job’s
						</span>
					</div>
				</div>
			</div>
		</div>
	</section>


	<!-- Footer -->
	@include("user.layouts.footer")


	<!-- Back to top -->
	<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
	</div>

	<!-- Container Selection1 -->
	<div id="dropDownSelect1"></div>






<!--=======================================================================================================================-->
    <script type="text/javascript" src="{{ asset('frontEnd/vendor/jquery/jquery-3.2.1.min.js') }}"></script>
<!--=======================================================================================================================-->
	<script type="text/javascript" src="{{ asset('frontEnd/vendor/animsition/js/animsition.min.js') }}"></script>
<!--=======================================================================================================================-->
    <script type="text/javascript" src="{{ asset('frontEnd/vendor/bootstrap/js/popper.js') }}"></script>
    <script type="text/javascript" src="{{ asset('frontEnd/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
<!--=======================================================================================================================-->
    <script type="text/javascript" src="{{ asset('frontEnd/vendor/select2/select2.min.js') }}"></script>
<!--=======================================================================================================================-->
	<script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});

		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect2')
		});
	</script>
<!--=======================================================================================================================-->
    <script type="text/javascript" src="{{ asset('frontEnd/js/main.js') }}"></script>

</body>
</html>
