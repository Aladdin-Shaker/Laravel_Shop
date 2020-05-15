<!-- Section page /content/ -->

@extends('admin.layouts.layout')

@section('title', 'Sections')

@section('style')

<style>

.card a { color:white; }

</style>

@endsection

@section('content')


<!-- Container fluid  -->
<div class="container-fluid">
	<!-- Start Page Content -->
	<div class="row">
		<div class="col-12">

		    <div class="card">
		        <div class="card-body">
					<div class="row">
						<div class="col-md-11">
							<h4 class="card-title">Sections Export</h4>
						</div>
						<div class="col-md-1">
							<button type="button" class="btn btn-success btn-circle btn-lg">
								<a href="/admin/add-sections"><i class="fa fa-plus " aria-hidden="true"></i></a>
                            </button>
						</div>	
					</div>

		            <h6 class="card-subtitle">Export section data to Copy, CSV, Excel, PDF & Print</h6>
		            <div class="table-responsive m-t-40">
		                <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
		                    <thead>
		                        <tr>
		                            <th style="width: 300px;">ID</th>
		                            <th style="width: 300px;">Name</th>
		                            <th style="width: 300px;">Image</th>
		                            <th style="width: 300px;">Action</th>
		                        </tr>
		                    </thead>

		                    <tfoot>
		                        <tr>
									<th style="width: 300px;">ID</th>
		                            <th style="width: 300px;">Name</th>
		                            <th style="width: 300px;">Image</th>
		                            <th style="width: 300px;">Action</th>
		                        </tr>
		                    </tfoot>

		                    <tbody>  
		                    	@foreach($sections as $section)   
		                        <tr>
		                            <td>{{ $section->id }}</td>
		                            <td>{{ $section->name }}</td>
		                            <td><img class="img-responsive img-thumbnail" src="{{Request::root()}}/images/new-sections/{{$section->imageName}}" style="max-width: 100px; height: 80px;"></td>
		                            <td>
										<!-- delete form-->
										<form action="{{ Request::root()}}/admin/section/delete/{{$section->id}}" method="post" style="display:inline-block">
											{{ csrf_field() }}
											<button type="submit" class="btn btn-danger m-b-10 m-l-5"> 
												<i class="ti-close"></i> Delete
											</button>
										</form>

										<!-- edite button-->
										<button type="button" class="btn btn-warning m-b-10 m-l-5"> 
											<i class="ti-pencil-alt"></i> 
											<a href="{{Request::root()}}/admin/section/edit/{{$section->id}}" style="color:white;" >Edit</a>
										</button> 
									</td>
		                        </tr>
		                        @endforeach
		                    </tbody>
		                </table>
		            </div>
		        </div>
		    </div>
		    
		</div>
	</div>
	<!-- End Page Content -->
</div>
<!-- End Container fluid  -->



@endsection

@section('script')

<script type="text/javascript" src="{{ asset('asset/js/lib/datatables/datatables.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('asset/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('asset/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('asset/js/lib/datatables/cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('asset/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('asset/js/lib/datatables/cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js') }}"></script>
<script type="text/javascript" src="{{ asset('asset/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('asset/js/lib/datatables/cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('asset/js/lib/datatables/datatables-init.js') }}"></script>

@endsection
