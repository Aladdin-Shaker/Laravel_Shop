<!-- Laptops page /content/ -->

@extends('admin.layouts.layout')

@section('title', 'Laptops')

@section('style')
<link rel="stylesheet" type="text/css" href="{{ asset('asset/css/create-laptop.css') }}">
<link rel="stylesheet" type="text/css" href="{{ asset('asset/css/imageUpload.css') }}">
@endsection

@section('content')


<form method="post" action="{{Request::root()}}/admin/laptops/update/{{$editLaptop->id}}" enctype="multipart/form-data">   
{{ csrf_field() }}
    <!-- start inputs  -->
    <div class="row">
        <div class="container">
            <h2>Add A New Laptop</h2>

                <div class="col-3">
                    <span>Name</span>
                    <input class="effect-4" value="{{$editLaptop->name}}" type="text" name="name" placeholder="Name">
                    <span class="focus-border"></span>
                </div>

                <div class="col-3">
                    <span>CPU</span>
                    <input class="effect-5" value="{{$editLaptop->cpu}}" type="text" name="cpu" placeholder="CPU">
                    <span class="focus-border"></span>
                </div>

                <div class="col-3">
                    <span>GPU</span>
                    <input class="effect-6" value="{{$editLaptop->gpu}}" type="text" name="gpu" placeholder="GPU">
                    <span class="focus-border"></span>
                </div>

                <div class="col-3">
                    <span>RAM</span>
                    <input class="effect-6" value="{{$editLaptop->ram}}" type="text" name="ram" placeholder="RAM">
                    <span class="focus-border"></span>
                </div>

                <div class="col-3">
                    <span>HARD DISK</span>
                    <input class="effect-4" value="{{$editLaptop->hard}}" type="text" name="hard" placeholder="HARD DISK">
                    <span class="focus-border"></span>
                </div>
                
                <div class="col-3">
                    <span>COLOR</span>
                    <input class="effect-5" value="{{$editLaptop->color}}" type="text" name="color" placeholder="COLOR">
                    <span class="focus-border"></span>
                </div>

                <div class="col-3">
                    <span>PRICE</span>
                    <input class="effect-4" value="{{$editLaptop->price}}" type="text" name="price" placeholder="PRICE">
                    <span class="focus-border"></span>
                </div>
            
                <div class="col-3 form-group">
                    <label>Select Section</label>
                    <select class="form-control" name="sectionId" >
                        @foreach($sections as $section) <!-- show all sections -->
                        <option value="{{ $section->id }}" <?php if($editLaptop->sectionId == $section->id) echo "selected"; ?> > {{ $section->name }} </option>
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

                <!-- image 1 -->
                <div class="box">
                    <img class="js--image-preview" style=" background-image: url('{{Request::root()}}/images/new-laptops/{{$editLaptop->image1}}') " >
                    <div class="upload-options">
                        <label for="image1">
                            <input name='inputPhoto' type="file" id="image1" class="image-upload" accept="image/*" />
                        </label>      
                    </div>
                </div>
               
                <!-- image 2 -->
                <div class="box">
                    <img class="js--image-preview" style=" background-image: url('{{Request::root()}}/images/new-laptops/{{$editLaptop->image2}}') " >
                    <div class="upload-options">
                        <label for="image2">
                            <input name='inputPhoto' type="file" id="image2" class="image-upload" accept="image/*" />
                        </label>      
                    </div>
                </div>
                 
                <!-- image 3 -->
                <div class="box">
                    <img class="js--image-preview" style=" background-image: url('{{Request::root()}}/images/new-laptops/{{$editLaptop->image3}}') " >
                    <div class="upload-options">
                        <label for="image3">
                            <input name='inputPhoto' type="file" id="image3" class="image-upload" accept="image/*" />
                        </label>      
                    </div>
                </div> 

            </div><!--end container-->
        </div><!--end row-->
        
    </div><!--end wrapper-->
    <!-- end pictures upload -->

    <!-- start save button -->
    <div class="text-center">
        <button type="submit" value="update" class="btn btn-lg m-b-10">
            <i class="ti-plus"></i>
                Save
        </button>
    </div>
    <!-- end save button -->

</form>
@endsection

@section('script')
<script type="text/javascript" src="{{ asset('asset/js/create-laptop.js') }}"></script>
<script type="text/javascript" src="{{ asset('asset/js/imageUpload.js') }}"></script>
@endsection