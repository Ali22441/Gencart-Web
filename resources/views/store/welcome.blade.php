<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'GenCart') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Bootstrap maxcdn -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">

    <!-- font awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- OwlCarousel2 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.min.css">



    <!-- Custom stylesheet - for your changes -->
    <link href="{{ asset('/css/custom.css') }}" rel="stylesheet">




</head>
<body>
    <div id="app">

        <header class="store-lists-header">
            <div class="list-group">
                <li class="list-group-item text-center">
                    <img src="{{ asset('/images/home-logo.png')}}" width="57" alt="gencart logo" srcset="">
                </li>
            </div>
            <div class="container-fluid">
                <ul class="list-group">
                    <li class="list-group-item text-center">
                        <h2>Choose a Store to Begin shopping</h2>
                    </li>
                    <li class="list-group-item text-center">
                        <h3><strong>Available stores around you</strong></h3>
                    </li>

                    <li class="list-group-item">
                        Filter by:
                        <ul class="nav nav-tabs" id="myTab" role="tablist" style="display: inline-flex;">
                            <li class="nav-item">
                                <a class="nav-link active" id="all-tab" data-toggle="tab" href="#all" role="tab" aria-controls="all" aria-selected="true">All</a>
                            </li>
                            @if(auth()->user()->zipcode)
                            <li class="nav-item">
                                <a class="nav-link" id="zipcode-tab" data-toggle="tab" href="#zipcode" role="tab" aria-controls="zipcode" aria-selected="true">{{ 'In ' . auth()->user()->zipcode }}</a>
                            </li>
                            @endif
                            @foreach($categories as $category)
                            <li class="nav-item">
                                <a class="nav-link" id="{{ $category->slug }}-tab" data-toggle="tab" href="#{{ $category->slug }}" role="tab" aria-controls="{{ $category->slug }}" aria-selected="false">{{ $category->name }}</a>
                            </li>
                            @endforeach
                        </ul>
                    </li>

                    <li class="list-group-item" style="background: #f7f7f7;">Recommended stores</li>
                </ul>
            </div>
        </header> <!-- store list header ends -->

        
        <div class="container">
            <div class="tab-content" id="myTabContent">
    
                <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                    @if(count($stores))
                       <div class="row">
                        @foreach($stores as $store)
                        <div class="col-md-3">
                            <div class="card" style="width: 15rem;">
                                <div class="card text-center">
                                    @if($store->logo)
                                    <a href="#">
                                        <img class="card-img-top card-img-rounded" src="{{ asset('storage/' . $store->logo) }}" alt="{{$store->name}}">
                                    </a>
                                    @else
                                    <a href="#">
                                        <img class="card-img-top card-img-rounded" src="{{ asset('images/cart-logo.png') }}" alt="{{$store->name}}">
                                    </a>
                                    @endif


                                    <div class="card-body">
                                        <a href="{{route('show_store', $store->slug)}}">
                                            <h4 class="card-title">{{ $store->name }}</h4>
                                        </a>
                                        <p class="card-text"><small class="text-muted" style="font-size: 13px"> 
                                            @foreach($store->categories as $store_category) 
                                                @if($loop->last) 
                                                    {{ $store_category->name }} 
                                                @else 
                                                    {{ $store_category->name }} &middot;
                                                @endif 
                                            @endforeach</small>
                                        </p>
                                    </div>
                                </div>               
                            </div>
                        </div>
                        @endforeach
                       </div>
                    @else
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <i class="fa fa-shopping-cart fa-5x"></i>
                            <h1>No Stores Currently, please check back later</h1>
                        </div>
                    </div>
                    @endif
                </div>

                <div class="tab-pane fade show" id="zipcode" role="tabpanel" aria-labelledby="zipcode-tab">
                    @if(count($stores = $stores->where('zipcode', auth()->user()->zipcode)))
                       <div class="row">
                        @foreach($stores as $store)
                            <div class="col-md-3">
                            <div class="card" style="width: 15rem;">
                                <div class="card text-center">
                                    @if($store->logo)
                                    <a href="#">
                                        <img class="card-img-top card-img-rounded" src="{{ asset('storage/' . $store->logo) }}" alt="{{$store->name}}">
                                    </a>
                                    @else
                                    <a href="#">
                                        <img class="card-img-top card-img-rounded" src="{{ asset('images/cart-logo.png') }}" alt="{{$store->name}}">
                                    </a>
                                    @endif


                                    <div class="card-body">
                                    <a href="{{route('show_store', $store->slug)}}">
                                        <h4 class="card-title">{{ $store->name }}</h4>
                                    </a>
                                    <p class="card-text"><small class="text-muted" style="font-size: 13px"> 
                                        @foreach($store->categories as $store_category) 
                                            @if($loop->last) 
                                                {{ $store_category->name }} 
                                            @else 
                                                {{ $store_category->name }} &middot;
                                            @endif 
                                        @endforeach</small>
                                    </p>
                                    </div>
                                </div>              
                                
                            </div>
                            </div>
                        @endforeach
                       </div>
                    @else
                    <div class="row">
                        <div class="col-lg-12 text-center">
                            <i class="fa fa-shopping-cart fa-5x"></i>
                            <h1>No Stores Currently in {{ auth()->user()->zipcode }}, please check back later</h1>
                        </div>
                    </div>
                    @endif
                </div>

                @foreach($categories as $category)
                <div class="tab-pane fade" id="{{ $category->slug }}" role="tabpanel" aria-labelledby="{{ $category->slug }}-tab">
                    
                    @foreach($stores as $store)
                    
                    @if($store->hasCategory($category->id))
                        <div class="card-columns">
                            <div class="card text-center">
                                @if($store->logo)
                                    <a href="#">
                                        <img class="card-img-top card-img-rounded" src="{{ asset('storage/' . $store->logo) }}" alt="{{$store->name}}">
                                    </a>
                                    @else
                                    <a href="#">
                                        <img class="card-img-top card-img-rounded" src="{{ asset('images/cart-logo.png') }}" alt="{{$store->name}}">
                                    </a>
                                    @endif


                                    <div class="card-body">
                                    <a href="{{route('show_store', $store->slug)}}">
                                        <h4 class="card-title">{{ $store->name }}</h4>
                                    </a>
                                    <p class="card-text"><small class="text-muted" style="font-size: 13px"> 
                                        @foreach($store->categories as $store_category) 
                                            @if($loop->last) 
                                                {{ $store_category->name }} 
                                            @else 
                                                {{ $store_category->name }} &middot;
                                            @endif 
                                        @endforeach</small>
                                    </p>    
                            </div>
                        </div>
                    @endif
                    @endforeach
                    
                </div>
                @endforeach

            </div> <!-- tab ends here -->
        </div> <!-- container ends here -->


        <footer class="store-lists-footer">
            <div class="list-group">
                <li class="list-group-item text-center">
                    <p class="disclaimer">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Sapiente vel nulla inventore illum minima exercitationem! Expedita, quod maiores facilis tempora nisi asperiores libero! Provident, neque ipsum veniam labore ratione sint? </p>
                </li>
            </div>
        </footer> <!-- store list footer ends -->

    </div> <!-- app ends here -->
    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('js/cart.js')}}"></script>
    <script src="{{ asset('js/main.js')}}"></script>
</body>
</html>
