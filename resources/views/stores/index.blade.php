@extends('layouts.admin')

@section('styles')
	<link href="{{ asset('css/admin/plugins/dataTables/datatables.min.css')}}" rel="stylesheet">
@endsection

@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
            
            <div class="col-lg-10">
                    <h2>Stores</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="{{ route('admin_dashboard') }}">Home</a>
                        </li>
                        <li class="active">
                            <a>stores</a>
                        </li>
                        
                    </ol>
                </div>
            </div>


<div class="row wrapper wrapper-content">
    
    <div class="col-lg-12">
        <div class="ibox">
            <div class="ibox-content">
                <h2><i class="fa fa-laptop"></i>&nbsp; Manage stores</h2>

                <p>
                    <a href=" {{ route('admin_create_store') }}" class="btn btn-primary"><i class="fa fa-cart-plus"></i>&nbsp; add store</a>
                </p>
                
                <div class="table-responsive m-t-lg">
                    <table class="table table-bordered table-striped stores-datatable">
                        
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Address</th>
                                <th>Zipcode</th>
                                <th>Phone</th>
                                <th>Products</th>
                                <th>Store manager</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach($stores as $store)
                            <tr>
                                <td>{{ $store->name }}</td>
                                <td><i class="fa fa-map-marker"></i>&nbsp;{{ $store->address }}</td>
                                <td><i class="fa fa-map-marker"></i>&nbsp;{{ $store->zipcode }}</td>
                                <td><i class="fa fa-phone"></i>&nbsp;{{ $store->phone }}</td>
                                <td><i class="fa fa-"></i>&nbsp;{{ $store->products->count() }}</td>
                                <td><i class="fa fa-user"></i>&nbsp;{{ $store->manager->name or 'N/A' }}</td>
                                <td>
                                    <div class="btn-group" role="group" aria-label="...">
                                        <a href="{{ route('admin_show_store', ['store' => $store->slug]) }}"  type="button" class="btn btn-default btn-xs"><i class="fa fa-angle-double-right"></i>&nbsp;view</a>
                                        <a href="{{route('admin_edit_store', ['store' => $store->slug])}}" type="button" class="btn btn-success btn-xs"><i class="fa fa-edit"></i>&nbsp;edit</a>
                                        <a href="#" type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i>&nbsp;delete</a>
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

@endsection

@section('scripts')

<script src="{{ asset('js/admin/plugins/dataTables/datatables.min.js')}}"></script>


 <script>
        $(document).ready(function(){
            $('.stores-datatable').DataTable({
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