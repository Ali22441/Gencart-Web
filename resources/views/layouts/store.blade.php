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

        <header class="store-header" style="background: url('{{ asset('storage/'.$store->banner) }}'), transparent; background-repeat: no-repeat;background-position: 50% 50%;background-size: cover;">

            @include('layouts.partials.storenavbar')
            

            <div class="store-header-inner-wrapper" style="opacity: 1;">
                <div class="store-header-logo" aria-hidden="true">
                    @if($store->logo)
                        <img src="{{ asset('storage/'.$store->logo)}}" width="96" height="96" alt="{{isset($store) ? $store->name : ""}}">
                    @else
                        <img src="{{ asset('images/cart-logo.png')}}" width="96" height="96" alt="{{isset($store) ? $store->name : ""}}">
                    @endif
                </div>
                <h1>{{ isset($store) ? $store->name : "" }}</h1>
                <div class="store-header-retailer-info">
                    <p class="store-header-price-transparency text-center same">
                        <a href="#" class="store-header-price-transparency-pricing-link">Everyday store prices</a>
                        <span class="middot m-y undefined">&nbsp;·&nbsp;</span>
                        <a href="#">More info</a>
                    </p>
                </div>
                <div class="search-bar primary-nav-search-bar" aria-hidden="false" style="flex-grow: 1;">
                    <form>
                        <span class="twitter-typeahead" style="position: relative; display: inline-block;">
                            <input type="search" class="tt-input search-field" placeholder="Search {{isset($store) ? $store->name : "" }}..." style="position: relative; vertical-align: top;">
                        </span>
                        <button class="search-btn" type="submit" aria-label="start search" style="color: rgb(67, 176, 42);"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>

        </header>


        


        @include('layouts.partials.storenavbar-secondary')
      



        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.2.1/owl.carousel.min.js"></script>
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>
    <script src="{{ asset('js/cart.js')}}"></script>
    <script src="{{ asset('js/main.js')}}"></script>

    @yield('script')

</body>
</html>
