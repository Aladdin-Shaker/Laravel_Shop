<!-- Edit Section page /content/ -->

@extends('admin.layouts.layout')

@section('title', 'Edit Section')


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
			<form action="{{Request::root()}}/admin/section/update/{{$EditSection->id}}" method="post" enctype="multipart/form-data">
				<!-- cross-site request forgery (CSRF) make unique id for each insert operation -->
				{{ csrf_field() }}
				<div class="form-group">
					<p class="text-muted m-b-15 f-s-18">Edit Exist<code> Section</code></p>

					<!-- section name input -->
					<input  value="{{$EditSection->name}}" name='inputName' type="text" class="form-control input-default w-50 p-3 " placeholder="input section name" style="display: inline;">
					
					<!-- image upload -->
					<p class="text-muted m-b-15 m-t-15 f-s-18">Section Photo</p>
					<div class="wrapper">
					  <div class="box">
						<img class="js--image-preview" style="background-image: url('{{Request::root()}}/images/new-sections/{{$EditSection->imageName}}')" >
						    <div class="upload-options">
						      <label for="image">
									<input name='inputPhoto' type="file" id="image" class="image-upload" accept="image/*" />
						      </label>      
					        </div>
					   </div>
					</div>

					 <!-- save buttons -->
					<button type="submit" name="submit" value="save" class="btn btn-lg m-b-10">
						<i class="ti-settings"></i>
						Edit
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