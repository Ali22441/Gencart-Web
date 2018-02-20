@extends('layouts.admin')

@section('content')

    <div class="row wrapper border-bottom white-bg page-heading">
       <div class="col-lg-10">
           <h2>Settings</h2>
           <ol class="breadcrumb">
                <li>
                    <a>Home</a>
                </li>
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
                                <h3><i class="fa fa-laptop"></i>&nbsp;site setting</h3>
                            </a>
                        </li>
                        <li class="">
                            <a data-toggle="tab" href="#tab-2">
                                <h3><i class="fa fa-money"></i>&nbsp;payment setting</h3>
                            </a>
                        </li>
                        <li class="">
                            <a data-toggle="tab" href="#tab-3">
                                <h3><i class="fa fa-envelope-o"></i>&nbsp;email setting</h3>
                            </a>
                        </li>
                       
                    </ul>
                    <div class="tab-content">
                        <div id="tab-1" class="tab-pane active">
                            <div class="panel-body">
                               
                                <form action="" method="post" >
                                    <div class="form-group">
                                        <div class="input-group input-group-lg">
                                            <span class="input-group-addon">
                                                <i class="fa fa-laptop"></i>
                                            </span>
                                            <input type="text" class="form-control" placeholder="site name">
                                        </div>
                                    </div>
                                    
                                    
                                </form>

                                <form action="" class="dropzone" id="dropzoneForm">
                                    <div class="fallback">
                                        <input name="file" type="file" multiple />
                                    </div>
                                </form>

                                <div class="m-t-lg" >
                                    <button type="submit" class="btn btn-danger btn-md pull-left"><i class="fa fa-close"></i>&nbsp;cancel</a>
                                    <button type="submit" class="btn btn-primary btn-md pull-right">
                                        <i class="fa fa-check"></i>&nbsp;submit
                                    </a>
                                    
                                </div>
                            </div>
                           
                        </div>
                        <div id="tab-2" class="tab-pane">
                            <div class="panel-body">
                                <form action="" method="post">
                                    <div class="form-group">
                                        <div class="input-group input-group-lg">
                                            <span class="input-group-addon">
                                                <i class="fa fa-lock"></i>
                                            </span>
                                            <input type="text" class="form-control" placeholder="stripe security key">
                                        </div>
                                    </div>
                                    
                                    <div class="form-group">
                                        <div class="input-group input-group-lg">
                                            <span class="input-group-addon">
                                                <i class="fa fa-key"></i>
                                            </span>
                                            <input type="text" class="form-control" placeholder="publishing key">
                                        </div>
                                    </div>
                                    

                                    <div class="radio">
                                        <p class="lead text-bold"><strong>stripe mode</strong></p>
                                        <label>
                                            <input type="radio" name="" id="" value="option1"> Option one
                                            
                                        </label>
                                        <label>
                                            <input type="radio" name="" id="" value="option2"> Option two
                                        
                                        </label>
                                        
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
                        <div id="tab-3" class="tab-pane">
                            <div class="panel-body">
                                <form action="" method="">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group input-group-lg">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-server"></i>
                                                </span>
                                                <input type="text" class="form-control" placeholder="MAIL SERVER">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="input-group input-group-lg">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-database"></i>
                                                </span>
                                                <input type="text" class="form-control" placeholder="MAIL HOST">
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <div class="input-group input-group-lg">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-user"></i>
                                                </span>
                                                <input type="text" class="form-control" placeholder="MAIL USERNAME">
                                            </div>
                                        </div>

                                        
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="input-group input-group-lg">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-lock"></i>
                                                </span>
                                                <input type="text" class="form-control" placeholder="MAIL PASSOWORD">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="input-group input-group-lg">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-life-buoy"></i>
                                                </span>
                                                <input type="text" class="form-control" placeholder="MAIL PORT">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <div class="input-group input-group-lg">
                                                <span class="input-group-addon">
                                                    <i class="fa fa-key"></i>
                                                </span>
                                                <input type="text" class="form-control" placeholder="MAIL ENCRYPTION">
                                            </div>
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