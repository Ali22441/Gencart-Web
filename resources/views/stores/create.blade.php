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
                    <a href="{{ route('admin_stores') }}">stores</a>
                </li>
                <li class="active">
                    <a>Add store</a>
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
                @include('layouts.partials.errors_list') 

                @if (session('message'))
                    <div class="alert alert-success">
                        {{ session('message') }}
                    </div>
                @endif


                    <form action="{{ route('admin_store_store') }}" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <div class="input-group input-group-lg">
                                        <span class="input-group-addon">
                                            <i class="fa fa-user"></i>
                                        </span>
                                        <input type="text" name="name" id="" class="form-control" placeholder="store name">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group input-group-lg">
                                        <span class="input-group-addon">
                                            <i class="fa fa-map-marker"></i>
                                        </span>
                                        <input type="text" name="address" id="pac-input" class="form-control" placeholder="addresses">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group input-group-lg">
                                        <span class="input-group-addon">
                                            <i class="fa fa-phone"></i>
                                        </span>
                                        <input type="tel" name="phone" id="" class="form-control" placeholder="phone number">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group input-group-lg">
                                        <span class="input-group-addon">
                                            <i class="fa fa-map"></i>
                                        </span>
                                        <input type="text" name="zipcode" id="zipcode" class="form-control" placeholder="zip code">
                                        <input type="hidden" name="place_id" id="placeId">
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
                                <button name="submit" type="submit" value="" class="btn btn-lg btn-primary">Add store</button>
                            </div>
                        </div>
                        
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection


@section('scripts')
    
    <script>
      
        function initAutocomplete() {
            
            var options = {
                // types: ['(sublocality)'],
                componentRestrictions: {country: 'sa'},
                strictBounds: true
            };

            // Create the search box and link it to the UI element.
            var input = document.getElementById('pac-input');
            
            var autocomplete = new google.maps.places.Autocomplete(input, options);
                    
            // Listen for the event fired when the user selects a prediction and retrieve
            // more details for that place.
            autocomplete.addListener('place_changed', function() {
            var place = autocomplete.getPlace();
            place.address_components.forEach(element => {
                    
                    address_type = element.types ;
                    //if(address_type.find(zip_code)){
                        $('input#zipcode').val(element.short_name);
                        $('input#placeId').val(place.id);
                   // }
                });

            });

        }

        function zip_code(address){
                return address == 'postal_code';
        }

        $(document).ready(function(){

            initAutocomplete();  

       });

       
    </script>

    <script src="{{ 'https://maps.googleapis.com/maps/api/js?key=' .env('GOOGLE_API_KEY') . '&libraries=places&callback=initAutocomplete' }}"
         async defer></script>
@endsection