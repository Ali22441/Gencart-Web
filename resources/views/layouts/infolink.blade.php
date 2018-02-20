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
    <!-- boostrap -->
    <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
    <!-- font awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Custom stylesheet - for your changes -->
    <link href="{{ asset('/css/custom.css') }}" rel="stylesheet">
    <style>
    .navbar-nav .nav-item .nav-link{
         color: rgba(255, 255, 255,0.8) !important;
        font-weight:200;
        font-size: 17px;
    }
    .navbar-nav .nav-item .nav-link:hover{
        color:rgb(255,255,255) !important;
    }
    .bg-primary{
        background-color:#0a8a78 !important;
    }
    .text-primary{
        color:#0a8a78;
    }
    .nav-border{
        border-bottom:0.5px solid rgba(255,255,255,0.1);
    }

    .card-body > p{
        font-size:16px;
    }
    </style>

    @yield('stylesheets')


</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg sticky-top navbar-primary nav-border bg-primary">

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                           <img src="{{asset('/images/cart-logo.png')}}" alt="" height="50">
                        <!-- {{ config('app.name', 'GenCart') }} -->
                    </a>
                     <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>



            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    
                     <!-- Authentication Links -->
                     @guest
                         <li class="nav-item" ><a class="nav-link" href="{{ route('login') }}">Login</a></li>
                         <li class="nav-item"><a class="nav-link" href="{{ route('register') }}">Register</a></li>
                     @else
                         <li class="dropdown nav-item">
                             <a  href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                 {{ Auth::user()->name }} <span class="caret"></span>
                             </a>
    
                             <ul class="dropdown-menu">
                                 <li>
                                     <a href="{{ route('logout') }}"
                                         onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">
                                         Logout
                                     </a>
    
                                     <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                         {{ csrf_field() }}
                                     </form>
                                 </li>
                             </ul>
                         </li>
                     @endguest
                    &nbsp;
                </ul>
                <ul class="navbar-nav ">
                        <!-- other links -->
                        <li class="nav-item"><a class="nav-link" href="{{route('faq')}}">FAQ</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('about')}}">About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('help')}}">help</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('privacy')}}">privacy</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('terms')}}">terms</a></li>
                        <li class="nav-item"><a class="nav-link btn btn-dark" href="http://">become a shopper</a></li>
                    </ul>
               
            </div>
        </nav>

        





        @yield('content')

        <div class="container-fluid">
            <footer class="mt-2">
                <hr>
                 @include('layouts.partials.links')
            </footer>
        </div>
    </div>

    <!-- Scripts -->
     <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="{{ asset('js/bootstrap.min.js')}}"></script>

    @yield('scripts')
</body>
</html>
