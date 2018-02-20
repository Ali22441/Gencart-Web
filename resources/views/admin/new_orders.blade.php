@extends('layouts.admin')

@section('content')

 <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Orders</h2>
                    <ol class="breadcrumb">
                        <li>Home</li>
                        <li>orders</li>
                        <li class="active">
                            <a>new orders</a>
                        </li>

                    </ol>
                </div>
            </div>
            
            <div class="row wrapper wrapper-content">
                <div class="col-lg-12">
                    <div class="ibox">
                        <div class="ibox-content">
                            <span class="text-muted small pull-right">Last modification:
                                <i class="fa fa-clock-o"></i> 2:10 pm - 12.06.2014</span>
                            <h2>
                                <i class="fa fa-shopping-bag"></i>&nbsp;recent Orders</h2>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            </p>
                            <div class="row">
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
                                    <tr>
                                        <th>order id</th>
                                        <th>customer name</th>
                                        <th>email</th>
                                        <th>contact</th>
                                        <th>total products</th>
                                        <th>amount</th>
                                        <th>status</th>
                                        <th>order date</th>
                                        <th>action</th>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            
            </div>

@endsection