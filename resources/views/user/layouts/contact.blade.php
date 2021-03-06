<!DOCTYPE html>
<html lang="en">
<head>
	<title>Contact</title>
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
	<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url('{{Request::root()}}/frontEnd/images/contact-page/contact3.JPEG');">
		<h2 class="l-text2 t-center">
			Contact
		</h2>
	</section>

	<!-- content page -->
	<section class="bgwhite p-t-66 p-b-60 ">
		<div class="container">
			<div class="row">
				<div class="col-md-12 p-b-30">
					<form class="leave-comment">
						<h4 class="m-text26 p-b-36 p-t-15">
							Send us your message
						</h4>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="name" placeholder="Full Name">
						</div>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="phone" placeholder="Phone Number">
						</div>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="email" placeholder="Email Address">
						</div>

						<div class="bo4 of-hidden size15 m-b-20">
							<input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="address" placeholder="Address">
						</div>

						<textarea class="dis-block s-text7 size20 bo4 p-l-22 p-r-22 p-t-13 m-b-20" name="message" placeholder="Message"></textarea>

						<div class="w-size25">
							<!-- Button -->
							<button type="submit" id="submit" class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4">
								Send
							</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</section>


	<!-- Footer -->
	@include('user.layouts.footer')


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
