@extends("layouts.admin")

@section('styles')
	<link href="{{ asset('css/admin/plugins/dataTables/datatables.min.css')}}" rel="stylesheet">
@endsection

@section('content')
  <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Customers</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="{{ route('admin_dashboard') }}">Home</a>
                        </li>
                        <li class="active">
                            <a>Customers</a>
                        </li>
                    </ol>
                </div>
  </div>

	<div class="row wrapper wrapper-content">
	    <div class="col-lg-12">
	        <div class="ibox">
	            <div class="ibox-content">
	                <h2>Customers</h2>

	                <div class="clients-list">
						<div class="full-height-scroll">
							<div class="table-responsive" style="margin-top:10px;">
							
								<table class="table table-striped table-bordered table-hover customers-datatable">
										<thead>
											<th>#</th>
											<th>Name</th>
											<th>Address</th>
											<th>Phone</th>
											<th>Email</th>
											<th>Zipcode</th>
											<th>Total orders</th>
										</thead>
										<tbody>
											@foreach($users as $user)
											<tr>
												<td>{{ $loop->iteration }}</td>
												<td><a href="#" title="View {{ $user->name}}">{{ $user->name }}</a></td>
												<td>{{ $user->address }}</td>
												<td>{{ $user->phone }}</td>
												<td>{{ $user->email }}</td>
												<td>{{ $user->zipcode }}</td>
												<td>{{ "2" }}</td>
											</tr>
											@endforeach
										</tbody>
								</table>
								<div class="">
									{{ $users->links() }}	
								</div>
							</div>
							
						</div>
	                </div>

	            </div>
	        </div>
	    </div>
	</div>
@endsection

@section('scripts')

<script src="{{ asset('js/admin/plugins/dataTables/datatables.min.js')}}"></script>


 <script>
        $(document).ready(function(){
            $('.customers-datatable').DataTable({
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    {extend: 'excel', title: 'Customers'},
                    {extend: 'pdf', title: 'Customers'},
                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                    }
                ]

            });
		});	
</script>

@endsection