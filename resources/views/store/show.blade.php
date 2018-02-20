@extends('layouts.store')

@section('content')

<div class="cartModal">
    @include('layouts.partials.cart_modal')
</div> <!-- cart modal -->

<div class="store-dropdown-modal">
    @include('layouts.partials.store-dropdown-modal')
</div>

@include('layouts.partials.single-product-display-modal')

<div class="content">

<section class="store-ads">
    <div class="container">
    
        <!-- <div id="ads-carousel" class="owl-carousel owl-theme">
            <div>
                <img src="{{ asset('images/recipe.jpg') }}" alt="">
            </div>
            <div>
                <img src="{{ asset('images/recipe.jpg') }}" alt="">
            </div>
            <div>
                <img src="{{ asset('images/recipe.jpg') }}" alt="">
            </div>
            <div>
                <img src="{{ asset('images/recipe.jpg') }}" alt="">
            </div>
            <div>
                <img src="{{ asset('images/recipe.jpg') }}" alt="">
            
            </div>
            <div>                
                <img src="{{ asset('images/recipe.jpg') }}" alt="">
            </div>
        </div> -->
    </div>

</section>



<section class="store-new-arrival">
    <div class="container">
        <div class="jumbotron">
            <p class="new-arrival-title">New Arrivals</p>
            
                <div id="new-arrival" class="owl-carousel owl-theme">

                    @foreach($newProducts as $product)
                    <div id="{{ $product->slug }}" class="product-details">
                        <div class="card" style="width: 12rem;">
                            <div class="card-img-top">
                                @if($product->image)
                                    @if(starts_with($product->image, 'http://'))        
                                    <img class="item-img" src="{{ $product->image }}" alt="{{$product->name}}">
                                    @else
                                    <img class="item-img" src="{{ asset('storage/' .$product->image) }}" alt="{{$product->name}}">
                                    @endif
                                
                                @else
                                <img src="{{ asset('images/sameday.jpg') }}" alt="">
                                @endif
                            </div>
                            <div class="card-body">

                                <div class="item-add-btn">
                                    <div class="favourite float-left" id="fav-{{ $product->slug }}">
                                        <i class="fa fa-heart-o fa-lg"></i>
                                    </div>
                                    <div class="add-btn float-right">
                                        <button type="submit" class="btn btn-success" id="{{ $product->slug }}"> <i class="fa fa-plus"></i> Add</button>
                                    </div>
                                </div>

                                <h4 class="card-title">{{ 'SAR' .$product->price}}</h4>
                                <p class="card-text">
                                    <a class="" role="button" data-toggle ="modal" data-target=".bd-example-modal-lg">{{ $product->name }}</a>
                                </p>
                                <span class="item-size muted">{{$product->unit}}</span>

                            </div>
                        </div>
                    </div>
                    @endforeach

                </div>
                        
        </div>
    </div>
</section>
<!-- end new arrivals -->


<section class="featured-products">
    <div class="container">
        <div class="jumbotron">
            <p class="featured-products-title">Featured Products</p>
            
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
                                <img src="{{ asset('images/sameday.jpg') }}" alt="">
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

<section class="store-department">
    <div class="container">
        <div class="jumbotron">
            <p class="dept-title">Browse Departments</p>
            <div class="department-cards">
                @foreach($departments as $dept)
                <a href="{{ route('show_store_department', ['store' => $store->slug, 'department' => $dept->id]) }}" class="dept-link" style="max-width: 176px; min-width: 176px; max-height: 176px; min-height: 176px;">
                    <div class="dept-img">
                        @if($dept->image)
                        <img src="{{ asset('storage/' .$dept->image)}}" alt="{{ isset($dept) ? $dept->name : ''}}" style="height: 120px;">
                        @else
                        <img src="{{ asset('images/pantry.jpg')}}" alt="pantry" style="height: 120px;">
                        @endif
                    </div>
                    <div class="dept-name">{{ ucfirst($dept->name) }}</div>
                </a>
                @endforeach                     
            </div>
        </div>
    </div>
</section>

    <!-- store department ends -->

</div>

@endsection

@section('script')
    <script>
        $(document).ready(function(){


            $(window).scroll(function () {
                var scroll = $(window).scrollTop();
                if (scroll > 200) {                    
                    $("#navbar").removeClass('bg-light').css('backgroundColor', '#fff');
                    $("#navbar-search").removeClass("hidden");
                    $(".navbar-nav .nav-link:not(#myTab .nav-link)").css('color', 'rgb(67, 176, 42)');
                    $('#nav-tabs-outer').addClass('fixed').css('top', '65px');            
                }else {
                    $('#navbar').addClass('bg-light');
                    $("#navbar-search").addClass("hidden");
                    $(".navbar-nav .nav-link:not(#myTab .nav-link)").css('color', 'rgb(255, 255, 255)');
                    $("#nav-tabs-outer").removeClass('fixed').css('top', '0');
                }
            });

            

            $(".owl-prev").html('<i class="fa fa-chevron-left"></i>');
            $(".owl-prev").css({
                'z-index': '100',
                'border': '0px',
                'width': '48px',
                'height': '48px',
                'padding': '15px 7px',
                'border-radius': '50%',
                'box-shadow': 'rgba(0, 0, 0, 0.26) 0px 1px 2px 0px, rgba(0, 0, 0, 0.16) 0px 1px 4px 0px',
                'transition': 'opacity 200ms linear',
                'text-align': 'center',
                'line-height': '1',
                'background-color': 'rgb(60, 158, 38)',
                'color': 'rgb(255, 255, 255)',
                'position': 'absolute',
                'top': '110px',
                'display': 'block',
                'left': '8px',
                'right': '8px',
                'opacity': '0',
            });
            $(".owl-next").html('<i class="fa fa-chevron-right"></i>');
            $(".owl-next").css({
                'z-index': '100',
                'border': '0px',
                'width': '48px',
                'height': '48px',
                'padding': '15px 7px',
                'border-radius': '50%',
                'box-shadow': 'rgba(0, 0, 0, 0.26) 0px 1px 2px 0px, rgba(0, 0, 0, 0.16) 0px 1px 4px 0px',
                'transition': 'opacity 200ms linear',
                'text-align': 'center',
                'line-height': '1',
                'background-color': 'rgb(67, 176, 42)',
                'color': 'rgb(255, 255, 255)',
                'position': 'absolute',
                'top': '110px',
                'display': 'block',
                'right': '8px',
                'opacity': '0'
            });


            // $("#store-modal").click(function(){
            //     $(this).find(".fa-chevron-down").css('transform', 'rotateX(150deg)');
            // }, function() {
            //     $(this).find(".fa-chevron-down").css('transform', 'rotateX(150deg)');
            // });


            

        });
    </script>
@endsection