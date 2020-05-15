<!DOCTYPE html>
<html lang="en">
<head>
	<title>Laptop Section</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--=======================================================================================================================-->
    <link rel="stylesheet" type="image/png" href="{{ asset('frontEnd/images/icons/favicon.png') }}">
<!--=======================================================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('frontEnd/vendor/bootstrap/css/bootstrap.min.css') }}">
<!--=======================================================================================================================-->
    <link rel="stylesheet" type="text/css" href="{{ asset('frontEnd/fonts/font-awesome-4.7.0/css/font-awesome.min.css') }}">
<!--=======================================================================================================================-->
	<link rel="stylesheet" type="text/css" href="{{ asset('frontEnd/css/util.css') }}">
<!--=======================================================================================================================-->
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
	<section class="bg-title-page p-t-50 p-b-40 flex-col-c-m" style="background-image: url('{{Request::root()}}/frontEnd/images/shop/shop4.jpeg'); ">
			<h2 class="l-text2 t-center">
				Your Laptop
			</h2>
			<p class="m-text13 t-center">
				New Laptops Collection 2018
			</p>
	</section>
						
	<!-- New Product -->
	<section class="newproduct bgwhite p-t-45 p-b-105">
		<div class="container"> 

			<!-- header -->
			<div class="sec-title p-b-60">
				<h3 class="m-text5 t-center">
					Laptops Of Your Category
				</h3>
			</div>

			<!-- laptops/add to cart -->
			<div class="product-grid product-grid--flexbox">
				<div class="product-grid__wrapper">

					<!-- Product list start here -->
					@foreach($allLaptops as $laptop)
					<!-- Single product -->
					<div class="product-grid__product-wrapper">
						<div class="product-grid__product">
							<div class="product-grid__img-wrapper">			
								<img src="{{Request::root()}}/images/new-laptops/{{$laptop->image1}}" alt="Img" class="product-grid__img" />
							</div>
							<span class="product-grid__title">{{$laptop->name}}</span>
							<span class="product-grid__price">{{$laptop->price}}$</span>
							<div class="product-grid__extend-wrapper">
								<div class="product-grid__extend">
									<p class="product-grid__description"><b>CPU</b>: cori{{$laptop->cpu}} / <b>GPU</b>: {{$laptop->gpu}} / <b>RAM</b>: {{$laptop->cpu}}GB / <b>STORAGE</b>: {{$laptop->hard}} / <b>COLOR</b>: {{$laptop->color}}   </p>
									<form action="{{Request::root()}}/order/{{$laptop->id}}"  method="get" style=" display: inline;">
									{!! csrf_field() !!}
										<span id="{{$laptop->id}}" data-toggle="modal" data-target="#cartModel" data-whatever="@fat" class="product-grid__btn product-grid__add-to-cart crud-submit" <i class="fa fa-cart-arrow-down"></i> Add to cart</span>

										<!-- stripe payments -->
										<form action="/make-payment" method="POST" class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">
												{{ csrf_field() }}
											<script
												src="https://checkout.stripe.com/checkout.js" class="stripe-button"
												data-key="{{ config('services.stripe.key') }}"
												data-amount="1000"
												data-name="Demo Book"
												data-description="This is good start up book."
												data-image="https://stripe.com/img/documentation/checkout/marketplace.png"
												data-locale="auto">
											</script>
										</form>
											
									</form>			
								</div>
							</div>
						</div>
					</div>
					<!-- end Single product -->	
					@endforeach

				</div>		
			</div>
					
		</div>
	</section>

	<!-- Footer -->
	@include('user.layouts.footer')

	<!-- Modal -->
	<div class="modal fade" id="cartModel" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
							<input type="email" class="form-control" id="email">
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

		$(".selection-2").select2({
			minimumResultsForSearch: 20,
			dropdownParent: $('#dropDownSelect2')
		});
	</script>
<!--=======================================================================================================================-->
	<script type="text/javascript" src="{{ asset('frontEnd/vendor/daterangepicker/moment.min.js') }}"></script>
<!--=======================================================================================================================-->
	<script type="text/javascript" src="{{ asset('frontEnd/vendor/daterangepicker/daterangepicker.js') }}"></script>
<!--=======================================================================================================================-->
	<script type="text/javascript" src="{{ asset('frontEnd/vendor/slick/slick.min.js') }}"></script>
<!--=======================================================================================================================-->
    <script type="text/javascript" src="{{ asset('frontEnd/js/slick-custom.js') }}"></script>
<!--=======================================================================================================================-->
    <script type="text/javascript" src="{{ asset('frontEnd/vendor/sweetalert/sweetalert.min.js') }}"></script>
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
	<script type="text/javascript" src="{{ asset('frontEnd/vendor/noui/nouislider.min.js') }}"></script>	
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
				url: '/order', // url to send the information by Route
				// data => to send data to method in the HomeController with TOKEN foe validation 
				data:{laptopId:laptopId, name:name, email:email, address:address, phone:phone, message:message, _token: "{{ csrf_token() }}", }
			}).done(function(data){

				$(".modal").modal('hide');
				console.log('test');
				toastr.success('Item Created Successfully.', 'Success Alert', {timeOut: 5000});
			});


		});

	</script>

	@yield('script')

</body>
</html>
