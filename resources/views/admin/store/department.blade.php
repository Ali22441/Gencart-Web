@extends('layouts.admin')

@section('content')

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-9">
            <h2> {{ $store->name }} -  {{ $department->name }} Department</h2>
            <ol class="breadcrumb">
                <li>
                    <a href="{{ route('admin_stores') }}">Home</a>
                </li>
                <li>
                    <a href="{{ route('admin_show_store', ['store' => $store->slug ]) }}">{{ $store->name }}</a>
                </li>
                <li>
                    <a href="{{ route('admin_store_departments', ['store' => $store->slug ]) }}">Departments</a>
                </li>
                <li class="active">
                    <a href="#">{{ $department->name }}</a>
                </li>
                

            </ol>
        </div>
        <div class="col-lg-3 m-t-lg">
                <button type="button" class="btn btn-primary btn-lg" data-toggle="modal" data-target="#add-shelf-modal">
                    Add Shelve
                </button>
        </div>

        <!-- Start Add department modal -->
                <div class="modal inmodal" id="add-shelf-modal" tabindex="-1" role="dialog" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content animated bounceInRight">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                                <i class="fa fa-shopping-cart modal-icon"></i>
                                <h4 class="modal-title">Add new shelf</h4>
                            </div>
                            <div class="modal-body">
                                <form method="post" action="{{ route('admin_add_store_shelf', ['store' => $store->slug, 'department' => $department->slug]) }}">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="store_id" value="{{ $store->id }}">
                                    <input type="hidden" name="department_id" value="{{ $department->id }}">
                                    <div class="form-group">
                                        <label>Shelf Label</label> 
                                        <input type="text" placeholder="enter shelf lable" class="form-control" name="name">
                                    </div>

                                    <div class="form-group">
                                        <label>Shelf description</label> 
                                        <textarea name="description" cols="30" rows="4" placeholder="shelf description" class="form-control"></textarea>
                                    </div>

                                    <button type="submit" class="btn btn-primary">Save changes</button>
                                </form>
                                
                            </div>
                        </div>
                    </div>
                </div>
        <!-- End Add department modal -->
    </div>

    <div class="row wrapper wrapper-content">
        <div class="col-lg-12">
            <div class="ibox">
                <div class="ibox-content">
                    <h2> Shelves </h2>
                    <p> Shelves in {{ $department->name }} </p>
                    
                    <div class="row ">
                        <div class="col-lg-3">
                            <select name="" id="" class="form-control">
                                <option value="" disabled selected>records per page</option>
                                <option value="10">10</option>
                                <option value="20">20</option>
                                <option value="30">30</option>
                            </select>
                        </div>
                        <div class="col-lg-offset-3 col-lg-6">
                            <div class="input-group">
    
                                <input type="text" placeholder="Search... " class="input form-control">
                                <span class="input-group-btn">
                                    <button type="button" class="btn btn btn-primary">
                                        <i class="fa fa-search"></i> Search</button>
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="table-responsive m-t-lg">
    
                        <table class="table table-bordered table-striped">
                            <tbody>
                                <tr>
    
                                    <th>Name</th>
                                    <th>Products</th>
                                    <th>action</th>
                                </tr>
                                @foreach($department->shelves as $shelf)
                                <tr>
                                        <td>{{ $shelf->name }}</td>
                                        <td>{{ 0 }}</td>
                                        <td>
                                            <div class="btn-group" role="group" aria-label="...">
                                                <a href="{{ route('admin_store_department', ['store' =>  $store->slug, 'department' => $department->slug]) }}" type="button" class="btn btn-default btn-xs">
                                                    <i class="fa fa-angle-double-right"></i>&nbsp;view</a>
                                                <a href="" type="button" class="btn btn-success btn-xs">
                                                    <i class="fa fa-edit"></i>&nbsp;edit</a>
                                                <a href="" type="button" class="btn btn-danger btn-xs">
                                                    <i class="fa fa-trash"></i>&nbsp;delete</a>
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