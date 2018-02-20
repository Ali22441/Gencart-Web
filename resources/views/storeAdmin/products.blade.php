@extends('layouts.storeAdmin')

@section('content')
     <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Products</h2>
                    <ol class="breadcrumb">
                        <li>Home</li>
                        <li class="active">
                            <a>products</a>
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
                                <i class="fa fa-shopping-basket"></i>&nbsp; products</h2>
                            <p>
                                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            </p>
                            <a href="#" class="btn btn-primary">
                                <i class="fa fa-plus"></i>&nbsp; add product</a>
                            <p></p>
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
            
                                            <th>product</th>
                                            <th>quantity</th>
                                            <th>price</th>
                                            <th>total sales</th>
                                            <th>store name</th>
                                            <th>added on</th>
                                            <th>action</th>
            
                                        </tr>
                                        <tr>
                                            <td>milk</td>
                                            <td>20</td>
                                            <td><i class="fa fa-dollar"></i>&nbsp;20</td>
                                            <td>lorem stores</td>
                                            <td>
                                                10
                                            </td>
                                            <td>14 Dec 2017</td>
                                            <td>
                                                <div class="btn-group" role="group" aria-label="...">
                                                    <a href="{{route('storeAdmin_product')}}" type="button" class="btn btn-default btn-xs">
                                                        <i class="fa fa-angle-double-right"></i>&nbsp;view</a>
                                                    <a href="{{route('storeAdmin_product_edit')}}" type="button" class="btn btn-success btn-xs">
                                                        <i class="fa fa-edit"></i>&nbsp;edit</a>
                                                    <a href="" type="button" class="btn btn-danger btn-xs">
                                                        <i class="fa fa-trash"></i>&nbsp;delete</a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection