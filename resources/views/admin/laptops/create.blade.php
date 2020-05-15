<!-- Laptops page /content/ -->

@extends('admin.layouts.layout')

@section('title', 'Laptops')

@section('style')
<link rel="stylesheet" type="text/css" href="{{ asset('asset/css/create-laptop.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('asset/css/imageUpload.css') }}">
@endsection

@section('content')


<form method="post" action="{{Request::root()}}/admin/laptops/save" enctype="multipart/form-data">   
{{ csrf_field() }}
    <!-- start inputs  -->
    <div class="row">
        <div class="container">
            <h2>Add A New Laptop</h2>

                <div class="col-3">
                    <input class="effect-4" type="text" name="name" placeholder="Name">
                    <span class="focus-border"></span>
                </div>

                <div class="col-3">
                    <input class="effect-5" type="text" name="cpu" placeholder="CPU">
                    <span class="focus-border"></span>
                </div>

                <div class="col-3">
                    <input class="effect-6" type="text" name="gpu" placeholder="GPU">
                    <span class="focus-border"></span>
                </div>

                <div class="col-3">
                    <input class="effect-6" type="text" name="ram" placeholder="RAM">
                    <span class="focus-border"></span>
                </div>

                <div class="col-3">
                    <input class="effect-4" type="text" name="hard" placeholder="HARD DISK">
                    <span class="focus-border"></span>
                </div>
                
                <div class="col-3">
                    <input class="effect-5" type="text" name="color" placeholder="COLOR">
                    <span class="focus-border"></span>
                </div>

                <div class="col-3">
                    <input class="effect-4" type="text" name="price" placeholder="PRICE">
                    <span class="focus-border"></span>
                </div>
            
                <div class="col-3 form-group">
                    <label>Select Section</label>
                    <select class="form-control" name="sectionId" >
                        @foreach($allSections as $section) <!-- show all sections -->
                        <option value="{{ $section->id }}">{{ $section->name }}</option>
                        @endforeach
                    </select>
                </div>
        </div>
    </div>
    <!-- end inputs -->

    <!-- start pictures upload -->
    <div class="wrapper">
        <div class="row">
            <div class="container">

                <div class="box col-md-3">
                    <div class="js--image-preview"></div>
                        <div class="upload-options">
                        <label>
                            <input name="inputimage1" type="file" class="image-upload" accept="image/*" />
                        </label>
                    </div>
                </div>

                <div class="box col-md-3">
                    <div class="js--image-preview"></div>
                        <div class="upload-options">
                        <label>
                            <input name="inputimage2" type="file" class="image-upload" accept="image/*" />
                        </label>
                    </div>
                </div>

                <div class="box col-md-3">
                    <div class="js--image-preview"></div>
                        <div class="upload-options">
                        <label>
                            <input name="inputimage3" type="file" class="image-upload" accept="image/*" />
                        </label>
                    </div>
                </div>

                
            </div>
        </div>

    </div>

    <!-- save button -->
    <div class="text-center">
        <button type="submit" value="add" class="btn btn-lg m-b-10">
            <i class="ti-plus"></i>
                Save
        </button>
    </div>

</form>

@endsection

@section('script')
<script type="text/javascript" src="{{ asset('asset/js/create-laptop.js') }}"></script>
<script type="text/javascript" src="{{ asset('asset/js/imageUpload.js') }}"></script>
@endsection