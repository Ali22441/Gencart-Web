@extends('layouts.admin')

@section('content')

    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Store</h2>
            <ol class="breadcrumb">
                <li>
                    <a >Home</a>
                </li>
                <li>
                    <a href="{{route('admin_stores')}}">stores</a>
                </li>
                <li class="active">
                    <a>add store</a>
                </li>

            </ol>
        </div>
    </div>

    <div class="row wrapper wrapper-content">
        <div class="col-lg-12">
            <div class="ibox">
                <div class="ibox-title">
                    <h2><i class="fa fa-cart-plus"></i>&nbsp;Add Store</h2>
                </div>
                <div class="ibox-content">

                @if(Session::has('message'))
                    <div class="alert alert-info">
                        <p>{{ Session::get('message') }}</p>
                    </div>
                @endif

                    <form action="{{ route('admin_store_store')}}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="row">

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <div class="input-group input-group-lg">
                                        <span class="input-group-addon">
                                            <i class="fa fa-user"></i>
                                        </span>
                                        <input type="text" name="name" value="{{ old('name') }}" class="form-control" placeholder="store name">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group input-group-lg">
                                        <span class="input-group-addon">
                                            <i class="fa fa-map-marker"></i>
                                        </span>
                                        <input type="text" name="address" value="{{ old('address') }}" class="form-control" placeholder="address">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group input-group-lg">
                                        <span class="input-group-addon">
                                            <i class="fa fa-phone"></i>
                                        </span>
                                        <input type="tel" name="phone" value="{{ old('phone') }}" class="form-control" placeholder="phone number">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group input-group-lg">
                                        <span class="input-group-addon">
                                            <i class="fa fa-map"></i>
                                        </span>
                                        <input type="text" name="zip" value="{{ old('zip') }}" class="form-control" placeholder="zip code">
                                    </div>
                                </div>
                                    
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <span class="btn btn-default btn-file"><span class="fileinput-new ">Select store logo</span>
                                        <span class="fileinput-exists">Change</span><input type="file" name="logo" id="logo"></span>
                                        <span class="fileinput-filename"></span>
                                        <a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">×</a>
                                    </div> 
                                </div>

                                <div class="form-group">
                                   
                                   
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <span class="btn btn-default btn-file"><span class="fileinput-new">Select store banner</span>
                                        <span class="fileinput-exists">Change</span><input type="file" name="banner" id="banner"></span>
                                        <span class="fileinput-filename"></span>
                                        <a href="#" class="close fileinput-exists" data-dismiss="fileinput" style="float: none">×</a>
                                    </div> 
                                </div>
                                
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <button name="submit" type="submit" value="" class="btn btn-lg btn-primary">add store</button>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('script')
    <script>
        Dropzone.options.dropzoneForm = {
            paramName: "file", // The name that will be used to transfer the file
            maxFilesize: 2, // MB
            dictDefaultMessage: "<strong>Drop files here or click to upload. </strong></br> (This is just a demo dropzone. Selected files are not actually uploaded.)"
        };

        $(document).ready(function(){

            var editor_one = CodeMirror.fromTextArea(document.getElementById("code1"), {
                lineNumbers: true,
                matchBrackets: true
            });

            var editor_two = CodeMirror.fromTextArea(document.getElementById("code2"), {
                lineNumbers: true,
                matchBrackets: true
            });

            var editor_two = CodeMirror.fromTextArea(document.getElementById("code3"), {
                lineNumbers: true,
                matchBrackets: true
            });

       });
    </script>

@endsection