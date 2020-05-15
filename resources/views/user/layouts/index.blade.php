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
	<link rel="stylesheet" type="text/css"
		href="{{ asset('frontEnd/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
	<!--=======================================================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('frontEnd/fonts/themify/themify-icons.css') }}">
	<!--=======================================================================================================================-->
	<link rel="stylesheet" type="text/css"
		href="{{ asset('frontEnd/fonts/Linearicons-Free-v1.0.0/icon-font.min.css') }}">
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

	<!-- Slider -->
	<section class="slide1">
		<div class="wrap-slick1">
			<div class="slick1">

				<div class="item-slick1 item1-slick1"
					style="background-image: url('{{ asset('frontEnd/images/slider/img3.JPG')}}');">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15"
							data-appear="fadeInDown">
							MAC Collection 2018
						</span>

						<h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37"
							data-appear="fadeInUp">
							High Performance
						</h2>

						<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="zoomIn">
							<!-- Button -->
							<a href="{{Request::root()}}/laptops"
								class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
								Shop Now
							</a>
						</div>
					</div>
				</div>

				<div class="item-slick1 item2-slick1" style="background-image: url('frontEnd/images/slider/img5.JPG');">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15"
							data-appear="rollIn">
							HP Collection 2018
						</span>

						<h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37"
							data-appear="lightSpeedIn">
							New arrivals
						</h2>

						<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="slideInUp">
							<!-- Button -->
							<a href="{{Request::root()}}/laptops"
								class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
								Shop Now
							</a>
						</div>
					</div>
				</div>

				<div class="item-slick1 item3-slick1"
					style="background-image: url(frontEnd/images/slider/img1.JPEG   );">
					<div class="wrap-content-slide1 sizefull flex-col-c-m p-l-15 p-r-15 p-t-150 p-b-170">
						<span class="caption1-slide1 m-text1 t-center animated visible-false m-b-15"
							data-appear="rotateInDownLeft">
							ASUS Collection 2018
						</span>

						<h2 class="caption2-slide1 xl-text1 t-center animated visible-false m-b-37"
							data-appear="rotateInUpRight">
							New Types
						</h2>

						<div class="wrap-btn-slide1 w-size1 animated visible-false" data-appear="rotateIn">
							<!-- Button -->
							<a href="{{Request::root()}}/laptops"
								class="flex-c-m size2 bo-rad-23 s-text2 bgwhite hov1 trans-0-4">
								Shop Now
							</a>
						</div>
					</div>
				</div>

			</div>
		</div>
	</section>

	<!-- Banner All Sections-->
	<div class="banner bgwhite p-t-40 p-b-40 text-center">
		<div class="container">
			<div class="row">
				@foreach($sections as $section)
				<div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
					<!-- block1 -->
					<div class="block1 hov-img-zoom pos-relative m-b-30">
						<a href="{{Request::root()}}/section/getLaptop/{{$section->id}}">
							<img class="img-thumbnail img-responsive"
								src="{{Request::root()}}/images/new-sections/{{$section->imageName}}" alt="IMG-PRODUCT"
								style="max-width: 300px; height: 230px;">
						</a>
						<div class="block1-wrapbtn w-size2">
							<!-- Button -->
							<a href="/section/getLaptop/{{$section->id}}"
								class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
								{{ $section->name }}
							</a>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>

	<!-- Banner photo -->
	<section class="parallax0 parallax100"
		style="background-image: url('{{Request::root()}}/frontEnd/images/banner-photo/banner1.JPG');">
		<div class="overlay0 p-t-190 p-b-200 text-center">
			<div class="flex-col-c-m p-l-15 p-r-15">
				<h3 class="l-text1 fs-35-sm">
					Experience the extraordinary
				</h3>

				<span class="m-text9 p-t-45 fs-20-sm">
					Take charge of your destiny
				</span>

				<span class="m-text9 p-t-45 fs-20-sm">
					Choose wisely
				</span>


			</div>
		</div>
	</section>

	<!-- New Product -->
	<section class="newproduct bgwhite p-t-45 p-b-105">
		<div class="container">

			<div class="sec-title p-b-60">
				<h3 class="m-text5 t-center">
					The Latest 10 Laptops We Have
				</h3>
			</div>

			<!-- Slide2 -->
			<div class="wrap-slick2">
				<div class="slick2">
					@foreach($laptops as $laptop)
					<div class="item-slick2 p-l-15 p-r-15">

						<!-- Block2 -->
						<div class="block2">
							<div class="block2-img wrap-pic-w of-hidden pos-relative block2-labelnew">
								<img src="{{Request::root()}}/images/new-laptops/{{$laptop->image1}}" alt="IMG-PRODUCT"
									style="height: 250px;">

								<div class="block2-overlay trans-0-4">
									<a href="#" class="block2-btn-addwishlist hov-pointer trans-0-4">
										<i class="icon-wishlist icon_heart_alt" aria-hidden="true"></i>
										<i class="icon-wishlist icon_heart dis-none" aria-hidden="true"></i>
									</a>

									<div class="block2-btn-addcart w-size1 trans-0-4">
										<!-- Button id => to store the id of this laptop-->
										<button id="{{$laptop->id}}" data-toggle="modal" data-target="#cartModel"
											data-whatever="@fat"
											class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4 crud-submit">
											Add to Cart
										</button>

										<!-- stripe payments -->
										<form action="/make-payment" method="POST"
											class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
											{{ csrf_field() }}
											<script src="https://checkout.stripe.com/checkout.js" class="stripe-button"
												data-key="{{ config('services.stripe.key') }}" data-amount="1000"
												data-name="Demo Book" data-description="This is good start up book."
												data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
												data-locale="auto">
											</script>
										</form>


									</div>
								</div>
							</div>

							<div class="block2-txt p-t-20">
								<a href="product-detail.html" class="block2-name dis-block s-text3 p-b-5">
									{{ $laptop->name }}
								</a>

								<span class="block2-price m-text6 p-r-5">
									{{ $laptop->price }}$
								</span>
							</div>

						</div>

					</div>
					@endforeach
				</div>
			</div>

		</div>
	</section>

	<!-- Shipping -->
	<section class="shipping bgwhite p-t-62 p-b-46">
		<div class="flex-w p-l-15 p-r-15">
			<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
				<h4 class="m-text12 t-center">
					Free Delivery Worldwide
				</h4>

				<span class="s-text11 t-center">
					Welcome in Everytime
				</span>
			</div>

			<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 bo2 respon2">
				<h4 class="m-text12 t-center">
					30 Days Return
				</h4>

				<span class="s-text11 t-center">
					Simply return it within 30 days for an exchange.
				</span>
			</div>

			<div class="flex-col-c w-size5 p-l-15 p-r-15 p-t-16 p-b-15 respon1">
				<h4 class="m-text12 t-center">
					Store Opening
				</h4>

				<span class="s-text11 t-center">
					Shop open from Monday to Sunday
				</span>
			</div>
		</div>
	</section>

	<!-- Modal -->
	<div class="modal fade" id="cartModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
		aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">

				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">New message</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>

				<div class="modal-body">
					<form method="post" action="{{Request::root()}}/order">
						<div class="form-group">
							<label for="name" class="col-form-label">Username:</label>
							<input type="text" class="form-control" id="name">
						</div>
						<div class="form-group">
							<label for="email" class="col-form-label">Email:</label>
							<input type="text" class="form-control" id="email">
						</div>
						<div class="form-group">
							<label for="phone" class="col-form-label">Phone:</label>
							<input type="number" class="form-control" id="phone">
						</div>
						<div class="form-group">
							<label for="address" class="col-form-label">Address:</label>
							<input type="text" class="form-control" id="address">
						</div>
						<div class="form-group">
							<label for="message" class="col-form-label">Message:</label>
							<textarea class="form-control" id="message"></textarea>
						</div>

						<!-- hidden input to store the comming id from the pressed button in the value attribute-->
						<input type="hidden" id="laptopId" name="laptopId" value="">

					</form>
				</div>

				<div class="modal-footer">
					<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
					<button id="submitModel" type="button" class="btn btn-primary">Send message</button>
				</div>

			</div>
		</div>
	</div>


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
	<!--=======================================================================================================================-->
	<script type="text/javascript" src="{{ asset('frontEnd/vendor/bootstrap/js/bootstrap.min.js') }}"></script>
	<!--=======================================================================================================================-->
	<script type="text/javascript" src="{{ asset('frontEnd/vendor/select2/select2.min.js') }}"></script>
	<!--=======================================================================================================================-->
	<script type="text/javascript">
		$(".selection-1").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect1')
		});
	</script>
	<!--=======================================================================================================================-->
	<script type="text/javascript" src="{{ asset('frontEnd/vendor/slick/slick.min.js') }}"></script>
	<!--=======================================================================================================================-->
	<script type="text/javascript" src="{{ asset('frontEnd/js/slick-custom.js') }}"></script>
	<!--=======================================================================================================================-->
	<script type="text/javascript" src="{{ asset('frontEnd/vendor/countdowntime/countdowntime.js') }}"></script>
	<!--=======================================================================================================================-->
	<script type="text/javascript" src="{{ asset('frontEnd/vendor/lightbox2/js/lightbox.min.js') }}"></script>
	<!--=======================================================================================================================-->
	<script type="text/javascript" src="{{ asset('frontEnd/vendor/sweetalert/sweetalert.min.js') }}"></script>
	<!--=======================================================================================================================-->
	<!--<script type="text/javascript">
		$('.block2-btn-addcart').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to cart !", "success");
			});
		});

		$('.block2-btn-addwishlist').each(function(){
			var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
			$(this).on('click', function(){
				swal(nameProduct, "is added to wishlist !", "success");
			});
		});
	</script> -->

	<!--=======================================================================================================================-->
	<script type="text/javascript" src="{{ asset('frontEnd/js/main.js') }}"></script>
	<!--=======================================================================================================================-->
	<script>
		/* Refer To The (Add To Cart) button to show the model */
		$(".crud-submit").click(function(e){
			$('.modal').modal("show");
			//this id from hidden input from clicked button in the laptops sections ^^^
			var id = this.id;
			// fill the hidden input in the model by laptop id selected
			$("#laptopId").attr("value", id);
			e.preventDefault();
		});

		/* after model display to send the values of the inputs in the model  */
		$("#submitModel").click(function(e){
			
			// assign values of the inputs
			var laptopId = $("#laptopId").val();
			var name = $("#name").val();
			var email = $("#email").val();
			var address = $("#address").val();
			var phone = $("#phone").val();
			var message = $("#message").val();

			// send these values by AJAX by using JASON code
			$.ajax({
				dataType: 'json',
				type:'POST',
				url: 'order', // url to send the information by Route
				// data => to send data to method in the HomeController with TOKEN foe validation 
				data:{laptopId:laptopId, name:name, email:email, address:address, phone:phone, message:message, _token: "{{ csrf_token() }}", }
			}).done(function(data){

				$(".modal").modal('hide');
				toastr.success('Item Created Successfully.', 'Success Alert', {timeOut: 5000});
			});


		});

	</script>
	<!--=======================================================================================================================-->



</body>

</html>