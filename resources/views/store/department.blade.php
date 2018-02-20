<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'GenCart') }} - @yield('title') </title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


     <!-- admin style for shopping cart -->
    <link rel="stylesheet" href="{{asset('/css/admin/style.css')}}" >


    <!-- Bootstrap maxcdn -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" 
    integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" 
    crossorigin="anonymous">

    <!-- OwlCarousel2 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/assets/owl.theme.default.min.css">


   

    <!-- Custom stylesheet - for your changes -->
    <link href="{{ asset('/css/custom.css') }}" rel="stylesheet">
    @routes
</head>
<body style="background-color: #f7f7f7;">
    <div id="app">


        
        @include('layouts.partials.storenavbar')
        <div class="" style="position: relative; top: 77px;">
            @include('layouts.partials.storenavbar-secondary')
        </div>
      


        <section class="content">
            <div class="container-fluid" style="width:95% !important; margin-top: 100px;">
                <div class="wrapper" style="display:grid !important; grid-template-columns: repeat(12, 104px) !important;">

                    <div class="dept-sidebar" style="grid-column: span 2 !important;">
                        <h6 style="font-weight: 700;">Department</h6>
                        <p style="font-size: 15px; font-weight: 600; color: rgb(67, 176, 42);">{{ ucfirst($department->name) }}</p>

                        <ul class="nav flex-column">
                                @foreach($shelves as $shelf)
                                    <li class="nav-item">
                                        <a class="nav-link" href="#">{{ $shelf->name }}</a>
                                    </li>
                                @endforeach
                        </ul>
                    </div>

                    <div class="dept-main" style="grid-column: span 10 !important;">

                        <div class="title">
                            <div class="plain-header header">
                                <div style="color: rgb(0, 0, 0);">
                                    <div class="module-wrapper" style="position: relative;">
                                        <h1 class="" style="color: rgb(0, 0, 0); font-size: 44px; font-weight: 600;">{{ ucfirst($department->name) }}</h1>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <section class="featured-products">
                            <div class="container">
                                <div class="jumbotron">
                                    <p class="featured-products-title">{{ $department->name }}</p>
                                    
                                        <div id="featured-products" class="owl-carousel owl-theme">
                                            @foreach($store->products as $product)
                                            <div>
                                                <div class="card" style="width: 12rem;">
                                                    <div class="card-img-top">
                                                        @if($product->image)
                                                            @if(starts_with($product->image, 'http://'))        
                                                            <img class="item-img" src="{{ $product->image }}" alt="{{$product->name}}">
                                                            @else
                                                            <img class="item-img" src="{{ asset('storage/' .$product->image) }}" alt="{{$product->name}}">
                                                            @endif
                                                        
                                                        @else
                                                        <img src="{{ asset('images/missing-item.png') }}" alt="">
                                                        @endif
                                                    </div>
                                                    <div class="card-body">

                                                        <div class="item-add-btn">
                                                            <div class="favourite float-left">
                                                                <i class="fa fa-heart-o fa-lg"></i>
                                                            </div>
                                                            <div class="add-btn float-right">
                                                                <button type="submit" class="btn btn-success"> <i class="fa fa-plus"></i> Add</button>
                                                            </div>
                                                        </div>

                                                        <h4 class="card-title">{{'SAR'.$product->price}}</h4>
                                                        <p class="card-text">
                                                            <a role="button" data-toggle ="modal" data-target=".bd-example-modal-lg">{{$product->name }}</a> </p>
                                                        <span class="item-size muted">{{$product->unit}}</span>

                                                    </div>
                                                </div>
                                            </div>
                                            @endforeach
                                        </div>
                                                
                                </div>
                            </div>
                        </section>
                        <!-- end featured products -->


                        
                    </div>
                </div>
            </div>
        </section>

        
        
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="{{ asset('js/cart.js')}}"></script>
    <script src="{{ asset('js/main.js')}}"></script>

    <script>
        
    </script>

</body>
</html>
