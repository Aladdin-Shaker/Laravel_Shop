<!-- Laptops page /content/ -->

@extends('admin.layouts.layout')

@section('title', 'Laptops')

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
							<h4 class="card-title">Laptops Export</h4>
						</div>
						<div class="col-md-1">
							<button type="button" class="btn btn-success btn-circle btn-lg">
								<a href="/admin/laptops/create"><i class="fa fa-plus " aria-hidden="true"></i></a>
                            </button>
						</div>	
					</div>

		            <h6 class="card-subtitle">Export section data to Copy, CSV, Excel, PDF & Print</h6>
		            <div class="table-responsive m-t-40">
		                <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
		                    <thead>
		                        <tr>
		                            <th>ID</th>
                                    <th>Laptop Type</th>
		                            <th>Name</th>
		                            <th>CPU: Cori</th>
		                            <th>GPU</th>
                                    <th>RAM</th>
		                            <th>Hard Disk</th>
		                            <th>Color</th>
		                            <th>Price</th>  
									<th>Action</th>               
		                        </tr>
		                    </thead>

		                    <tfoot>
		                        <tr>
                                    <th>ID</th>
                                    <th>Laptop Type</th>
		                            <th>Name</th>
		                            <th>CPU: Cori</th>
		                            <th>GPU</th>
                                    <th>RAM</th>
		                            <th>Hard Disk</th>
		                            <th>Color</th>
		                            <th>Price</th>
									<th>Action</th>  
		                        </tr>
		                    </tfoot>

		                    <tbody>  
		                    	@foreach($laptops as $laptop)   
		                        <tr>
		                            <td>{{ $laptop->id }}</td>
                                    <!-- get section name instead of id by make function in the laptop model -->
		                            <td>{{ $laptop->getSetionName($laptop->sectionId) }}</td>
                                    <td>{{ $laptop->name }}</td>
                                    <td>{{ $laptop->cpu }}</td>
                                    <td>{{ $laptop->gpu }}</td>
                                    <td>{{ $laptop->ram }}</td>
                                    <td>{{ $laptop->hard }}</td>
                                    <td>{{ $laptop->color }}</td>
                                    <td>{{ $laptop->price }}</td>
		                            <td>
										<!-- delete form-->
										<form action="{{ Request::root()}}/admin/laptops/delete/{{$laptop->id}}" method="post" style="display:inline-block">
											{{ csrf_field() }}
											<button type="submit" class="btn btn-danger m-b-10 m-l-5"> 
												<i class="ti-close"></i> Delete
											</button>
										</form>

										<!-- edite button-->
										<button type="button" class="btn btn-warning m-b-10 m-l-5"> 
											<i class="ti-settings"></i> 
											<a href="{{Request::root()}}/admin/laptops/edit/{{$laptop->id}}" style="color:white;" >Edit</a>
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
