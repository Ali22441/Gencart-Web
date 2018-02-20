<nav id="navbar" class="navbar navbar-expand-lg fixed-top navbar-light bg-light">
    <a class="navbar-brand" href="#">
    <img src="{{ asset('images/cart-logo.png')}}" width="57" class="d-inline-block align-middle" alt="">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">

            <li class="nav-item">

                <a id="store-modal" class="nav-link" data-toggle="modal" data-target="#modalSidePaneLeft" role="button">
                 Cart <i class="fa fa-chevron-down"></i>                  
                    <span class="sr-only">lists of stores</span>
                </a>               

            </li>

        </ul>

        <div id="navbar-search" class="search-bar primary-nav-search-bar hidden" aria-hidden="false" style="flex-grow: 1;">
            <form>
                <span class="twitter-typeahead" style="position: relative; display: inline-block;">
                    <input type="search" class="tt-input search-field" placeholder="Search {{ isset($store) ? $store->name : "" }}..." style="position: relative; vertical-align: top;">
                </span>
                <button class="search-btn" type="submit" aria-label="start search" style="color: rgb(67, 176, 42);"><i class="fa fa-search"></i></button>
            </form>
        </div>

        <ul class="navbar-nav">
            <li class="nav-item">
                <a href="#" class="nav-link"><i class="fa fa-map-marker" aria-hidden="true"></i> {{ auth()->user()->zipcode }}</a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Account<span class="sr-only">(Account)</span>
                </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Hi, {{ auth()->user()->name }}</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"><i class="fa fa-user-circle"></i> Your Account</a>
                        @if(auth()->user()->role !== 'customer' )
                            <a class="dropdown-item" href="{{ route(auth()->user()->role . '_dashboard') }}"><i class="fa fa-user-circle"></i> Dashboard</a>
                        @endif
                        <a class="dropdown-item" href="#">Your Order</a>
                        <a class="dropdown-item" href="#">Add Promo Code</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#"><i class="fa fa-cart-plus"></i> Group Carts</a>
                        <a class="dropdown-item" href="#"><i class="fa fa-gift"></i> Buy Gift Cards</a>
                        <a class="dropdown-item" href="#">GenCart Express</a>
                        <a class="dropdown-item" href="#"><i class="fa fa-sliders"></i> How GenCart Works</a>
                        <a class="dropdown-item" href="#">Lists and Recipes</a>
                        <div class="dropdown-divider"></div>
                        @if(auth()->user()->role != 'shopper')
                            <a class="dropdown-item" href="{{ route('become_shopper') }}">Become a shopper</a>
                            
                        @endif
                        <a class="dropdown-item" href="{{ route('logout') }}"
                                onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                                <i class="fa fa-sign-out"></i>&nbsp;Logout
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form> 
                    </div>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link">Help</a>
            </li>

        </ul>
            <!-- button to trigger cart modal -->
            <button type="button" class="btn btn-success my-2 my-sm-0" data-toggle="modal" data-target="#modalSidePaneRight" id="trigger-cart">
                <i class="fa fa-shopping-cart fa-lg"></i> Cart
                 
            </button>
    </div>
</nav> 