@extends('layouts.storeAdmin')

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Settings</h2>
                    <ol class="breadcrumb">
                        <li>Home</li>

                        <li class="active">
                            <a>settings</a>
                        </li>

                    </ol>
                </div>
            </div>

            <div class="row wrapper wrapper-content">
                <div class="col-lg-12">
                    <div class="tabs-container">
                        <ul class="nav nav-tabs">
                            <li class="active">
                                <a data-toggle="tab" href="#tab-1">
                                    <h3>
                                        <i class="fa fa-shopping-cart"></i>&nbsp;store setting</h3>
                                </a>
                            </li>
                            <li class="">
                                <a data-toggle="tab" href="#tab-2">
                                    <h3>
                                        <i class="fa fa-money"></i>&nbsp;Transaction setting</h3>
                                </a>
                            </li>
                            <li class="">
                                <a data-toggle="tab" href="#tab-3">
                                    <h3>
                                        <i class="fa fa-envelope-o"></i>&nbsp;email setting</h3>
                                </a>
                            </li>
            
                        </ul>
                        <div class="tab-content">
                            <div id="tab-1" class="tab-pane active">
                                <div class="panel-body">
                                    <form action="" method="">
                                        <div class="form-group">
                                            <div class="input-group input-group-lg">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-shopping-cart"></i>
                                                </span>
                                                <input type="text" class="form-control" placeholder="store name">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="input-group input-group-lg">
                                                <span class="input-group-addon"><i class="fa fa-map-marker"></i></span>
                                                <input class="form-control" placeholder="location" list="browsers">
                                                <datalist id="browsers">
                                                    <option value="Internet Explorer">
                                                    <option value="Firefox">
                                                    <option value="Chrome">
                                                    <option value="Opera">
                                                    <option value="Safari">
                                                </datalist>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="m-t-lg">
                                        <a href="" class="btn btn-danger btn-md pull-left">
                                            <i class="fa fa-close"></i>&nbsp;cancel</a>
                                        <a href="" class="btn btn-primary btn-md pull-right">
                                            <i class="fa fa-check"></i>&nbsp;submit
                                        </a>
                                    
                                    </div>
                                </div>
                            </div>
                            <div id="tab-2" class="tab-pane">
                                <div class="panel-body">
                                    <form action="" method="">
                                        <div class="form-group">
                                            <div class="input-group input-group-lg">
                                                <span class="input-group-addon">
                                                   max orders
                                                </span>
                                                
                                                <select name="" class="form-control">
                                                    <option>1</option>
                                                    <option>2</option>
                                                    <option>3</option>
                                                    <option>4</option>
                                                    <option>5</option>
                                                </select>

                                            </div>
                                        </div>
                            
                                     
                                    </form>
                                    <div class="m-t-lg">
                                        <a href="" class="btn btn-danger btn-md pull-left">
                                            <i class="fa fa-close"></i>&nbsp;cancel</a>
                                        <a href="" class="btn btn-primary btn-md pull-right">
                                            <i class="fa fa-check"></i>&nbsp;submit
                                        </a>
                            
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

@endsection