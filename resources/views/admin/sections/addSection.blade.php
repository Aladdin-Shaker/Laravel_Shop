<!-- Add Section page /content/ -->

@extends('admin.layouts.layout')

@section('title', 'Create Section')


<!-- CSS -->

@section('style')

<link rel="stylesheet" type="text/css" href="{{ asset('asset/css/imageUpload.css') }}">

@endsection


<!-- HTML -->

@section('content')

<div class="text-center">
	<!-- section input -->
	<div class="card-body">
		<div class="basic-form container-fluid">

			<!-- form -->
			<form action="/admin/add-sections/create" method="post" enctype="multipart/form-data">
				<!-- cross-site request forgery (CSRF) make unique id for each insert operation -->
				{{ csrf_field() }}
				<div class="form-group">
					<p class="text-muted m-b-15 f-s-18">Add A New <code>Section</code></p>

					<!-- section name input -->
					<input  name='inputName' type="text" class="form-control input-default w-50 p-3 " placeholder="section name" style="display: inline;">
					
					<!-- image upload -->
					<p class="text-muted m-b-15 m-t-15 f-s-18">Section Photo</p>
					<div class="wrapper">
					  <div class="box">
					    <div class="js--image-preview"></div>
						    <div class="upload-options">
						      <label>
						        <input name='inputPhoto' type="file" class="image-upload" accept="image/*" />
						      </label>      
					        </div>
					   </div>
					</div>

					<!-- save button -->
					<button type="submit" name="submit" value="add" class="btn btn-lg m-b-10">
						<i class="ti-plus"></i>
						Save
					</button>
			                       
				</div>
			</form>
			
		</div>
	</div>
</div>

@endsection

<!-- JAVA SCRIPT -->

@section('script')

<script type="text/javascript" src="{{ asset('asset/js/imageUpload.js') }}"></script>

<!-- script to hide the place holder in the form -->
<script>
	
	$(function () {

    'use strict';

    // hide place holder on form focus

    $('[placeholder]').focus(function (){

      $(this).attr('data-text', $(this).attr('placeholder'));

      $(this).attr('placeholder', '');

    }).blur(function (){

      $(this).attr('placeholder', $(this).attr('data-text'));
    })

  });

</script>

@endsection