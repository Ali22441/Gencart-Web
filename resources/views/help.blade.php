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
    .card-body > p{
        font-size:16px;
    }
    </style>


</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg sticky-top navbar-dark nav-border bg-dark">

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
                        <!-- <li class="nav-item"><a class="nav-link" href="{{route('faq')}}">FAQ</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('about')}}">About Us</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('help')}}">help</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('privacy')}}">privacy</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{route('terms')}}">terms</a></li> -->
                        <li class="nav-item"><a class="nav-link btn btn-dark" href="http://">become a shopper</a></li>
                    </ul>
               
            </div>
        </nav>

        
         <div class="container-fluid">
            <div class="row  bg-dark p-5">
                <div class="col align-self-end text-center">
                    <div class="text-light p-4">
                            <h2 > Gencart Help Center </h2>
                            <p class="display-4">Hava a question? start by searching <br> here</p>
                    </div>
                    
                </div>
                <div class="w-100"></div>
                <div class="col-md-8 offset-md-2 text-center">
                    <form action="">
                        <div class="form-group">
                            <label class="sr-only">search question or keyword</label>
                            <input class="form-control form-control-lg text-center p-3" type="text" name="" id="" placeholder="search question, keyword, or topic">
                        </div>
                    </form>
                </div>
              
            </div>
        </div>


         <div class="container">
            <div class="row mt-5 justify-content-center">
                <div class="col">
                    <p>Frequently Asked Questions</p>
                    <hr>
                </div>
            
        
                <div class="w-100"></div>
                <div class="col">
                    
                    <div id="accordion" role="tablist">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="card rounded-0 border-0">
                                    <div class="card-header  border-0" role="tab" id="headingOne">
                                    <h5 class="mb-0 ">
                                        <a class="btn btn-link btn-block text-left text-uppercase text-secondary" data-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <i class="fa fa-caret-down"></i>&nbsp;How can I become a shopper
                                        </a>
                                    </h5>
                                    </div>

                                    <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                    </div>
                                </div>
                                <div class="card rounded-0  border-0">
                                    <div class="card-header border-0" role="tab" id="headingTwo">
                                    <h5 class="mb-0">
                                        <a class="collapsed btn btn-link btn-block text-left text-uppercase text-secondary"  data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <i class="fa fa-caret-down"></i>&nbsp;How can i change my address
                                        </a>
                                    </h5>
                                    </div>
                                    <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                    </div>
                                </div>
                                <div class="card rounded-0  border-0">
                                    <div class="card-header border-0" role="tab" id="headingThree">
                                    <h5 class="mb-0">
                                        <a class="collapsed btn btn-link btn-block text-left text-uppercase text-secondary" data-toggle="collapse" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                        <i class="fa fa-caret-down"></i>&nbsp;what are coupons
                                        </a>
                                    </h5>
                                    </div>
                                    <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                    </div>
                                </div>

                                <div class="card rounded-0  border-0">
                                    <div class="card-header border-0" role="tab" id="headingFour">
                                    <h5 class="mb-0">
                                        <a class="collapsed btn btn-link btn-block text-left text-uppercase text-secondary" data-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="collapsFour">
                                        <i class="fa fa-caret-down"></i>&nbsp;what happens if there is a delivery mishap on my goods
                                        </a>
                                    </h5>
                                    </div>
                                    <div id="collapseFour" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                    </div>
                                </div>
                            
                            </div>
                            <div class="col-md-6">

                                <div class="card rounded-0  border-0">
                                    <div class="card-header border-0" role="tab" id="headingFive">
                                    <h5 class="mb-0">
                                        <a class="collapsed btn btn-link btn-block text-left text-uppercase text-secondary" data-toggle="collapse" href="#collapseFive" aria-expanded="false" aria-controls="collapsFive">
                                        <i class="fa fa-caret-down"></i>&nbsp;what are the payments method available
                                        </a>
                                    </h5>
                                    </div>
                                    <div id="collapseFive" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                    </div>
                                </div>

                                <div class="card rounded-0  border-0">
                                    <div class="card-header border-0" role="tab" id="headingsix">
                                    <h5 class="mb-0">
                                        <a class="collapsed btn btn-link btn-block text-left text-uppercase text-secondary" data-toggle="collapse" href="#collapsesix" aria-expanded="false" aria-controls="collapssix">
                                        <i class="fa fa-caret-down"></i>&nbsp;How can I cancel my order before i make payment
                                        </a>
                                    </h5>
                                    </div>
                                    <div id="collapsesix" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                    </div>
                                </div>

                                <div class="card rounded-0  border-0">
                                    <div class="card-header border-0" role="tab" id="headingseven">
                                    <h5 class="mb-0">
                                        <a class="collapsed btn btn-link  text-left text-uppercase text-secondary" data-toggle="collapse" href="#collapseseven" aria-expanded="false" aria-controls="collapsseven">
                                        <i class="fa fa-caret-down"></i>&nbsp;How long will it take for my product to arrive payment
                                        </a>
                                    </h5>
                                    </div>
                                    <div id="collapseseven" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                                    <div class="card-body">
                                        Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                                    </div>
                                    </div>
                                </div>
                            
                            </div>
                        
                        </div>
                    </div>
                </div>
            </div>

            
        </div>

        <div class="container-fluid">
            <div class="row bg-dark mb-5 p-4">
                <div class="col-12 text-center text-light p-4">
                    <h2>for more information and clarity Contact us</h2>
                    <small>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</small>
                </div>
               <div class="w-100"></div>
               <div class="col-md-4">
                   <div class="card text-center">
                       <div class="card-body">
                            <i class="fa fa-exclamation-circle fa-5x text-warning"></i>
                            <h4 class="card-title">Problem with an order?</h4>
                            <p class="card-text pb-3">Do you have an issue with previous order, or do you want a refund or redelivery</p>
                            <a href="#" class="btn btn-outline-success btn-lg">report problem</a>
                       </div>
                   </div>
               </div>
               <div class="col-md-4">
                   <div class="card text-center">
                       <div class="card-body">
                             <i class="fa fa-envelope fa-5x text-primary"></i>
                            <h4 class="card-title">Email us</h4>
                            <p class="card-text pb-3">you can also send direct messages <br>to our mail</p>

                            <a href="#" class="btn btn-outline-success btn-lg">email us</a>
                       </div>
                   </div>
               </div>
               <div class="col-md-4">
                   <div class="card text-center">
                       <div class="card-body">
                            <i class="fa fa-mobile fa-5x text-info"></i>
                            <h4 class="card-title">Call us</h4>
                            <p class="card-text pb-3">we are availble 24/7 <br> for you</p>
                            <a href="#" class="btn btn-outline-success btn-lg">+2348034522542</a>
                       </div>
                   </div>
               </div>

            </div>
        </div>

    
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


