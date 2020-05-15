<!-- order page /content/ -->

@extends('admin.layouts.layout')

@section('title', 'Orders')

@section('style')
 
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
							<h4 class="card-title">Orders Export</h4>
						</div>	
					</div>

		            <h6 class="card-subtitle">Export order data to Copy, CSV, Excel, PDF & Print</h6>
		            <div class="table-responsive m-t-40">
		                <table id="example23" class="display nowrap table table-hover table-striped table-bordered" cellspacing="0" width="100%">
		                    <thead>
		                        <tr>
                                    <th>ID</th>
		                            <th>Laptop Name</th>
		                            <th>Email</th>
		                            <th>Address</th>
                                    <th>Phone</th>
		                            <th>Message</th>
                                    <th>ORDER STATE</th>
		                        </tr>
		                    </thead>

		                    <tfoot>
		                        <tr>
                                    <th>ID</th>
		                            <th>Laptop Name</th>
		                            <th>Email</th>
		                            <th>Address</th>
                                    <th>Phone</th>
		                            <th>Message</th>
                                    <th>ORDER STATE</th>
		                        </tr>
		                    </tfoot>

		                    <tbody>  
		                    	@foreach($orders as $order)   
		                        <tr>
		                            <td>{{ $order->id }}</td>
		                            <td>{{ $order->getLaptopName($order->laptopId) }}</td>
                                    <td>{{ $order->email }}</td>
                                    <td>{{ $order->address }}</td>
                                    <td>{{ $order->phone }}</td>
                                    <td>{{ $order->message }}</td>
		                            <td>
										<div class="dropdown">
											<button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">
											
											@if($order->state == 0)
											<span class="caret">Pending</span>
											@endif

											@if($order->state == 1)
											<span class="caret">Accept</span>
											@endif

											@if($order->state == 2)
											<span class="caret">Reject</span>
											@endif
												
											</button>
											<ul class="dropdown-menu">
												<li> <i class="ti-pin2"></i> <a href="{{Request::root()}}/admin/order/pindding/{{$order->id}}">Pending</a></li>
												<li> <i class="ti-thumb-up"></i> <a href="{{Request::root()}}/admin/order/accept/{{$order->id}}">Accept</a></li>
												<li> <i class="ti-trash"></i> <a href="{{Request::root()}}/admin/order/reject/{{$order->id}}">Reject</a> </li>
											</ul>
										</div>
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
