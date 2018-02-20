@extends('layouts.store')

@section('content')

<div class="content">

    <div class="container">
        <div class="owl-carousel owl-theme" style="position:relative;">
            <div>
                <img src="{{ asset('images/sameday.jpg') }}" alt="">
            </div>
            <div>
                <img src="{{ asset('images/recipe.jpg') }}" alt="">
            </div>
            <div>
                <img src="{{ asset('images/product.jpg') }}" alt="">
            </div>
            <div>
                <img src="{{ asset('images/time.jpg') }}" alt="">
            </div>
            <div>
                <img src="{{ asset('images/sameday.jpg') }}" alt="">
            </div>
            <div>                
                <img src="{{ asset('images/sameday.jpg') }}" alt="">
            </div>
        </div>
    </div>


    <section class="store-new-arrival">
        <div class="container">
            <div class="jumbotron">
                <p class="featured-products">New Arrivals</p>
                
                    <div class="owl-carousel owl-theme">

                        <div>
                            <img src="{{ asset('images/sameday.jpg') }}" alt="">
                        </div>
                        <div>
                            <img src="{{ asset('images/recipe.jpg') }}" alt="">
                        </div>
                        <div>
                            <img src="{{ asset('images/product.jpg') }}" alt="">
                        </div>
                        <div>
                            <img src="{{ asset('images/time.jpg') }}" alt="">
                        </div>
                        <div>
                            <img src="{{ asset('images/sameday.jpg') }}" alt="">
                        
                        </div>
                        <div>                
                            <img src="{{ asset('images/sameday.jpg') }}" alt="">
                        </div>
                    </div>
                           
            </div>
        </div>
    </section>
    <!-- end new arrivals -->

    <section class="store-sales">
        <div class="container">
            <div class="jumbotron">
                <p class="featured-products">Sales</p>
                    <div class="owl-carousel owl-theme">

                        <div>
                            <img src="{{ asset('images/sameday.jpg') }}" alt="">
                        </div>
                        <div>
                            <img src="{{ asset('images/recipe.jpg') }}" alt="">
                        </div>
                        <div>
                            <img src="{{ asset('images/product.jpg') }}" alt="">
                        </div>
                        <div>
                            <img src="{{ asset('images/time.jpg') }}" alt="">
                        </div>
                        <div>
                            <img src="{{ asset('images/sameday.jpg') }}" alt="">
                        
                        </div>
                        <div>                
                            <img src="{{ asset('images/sameday.jpg') }}" alt="">
                        </div>
                    </div>
                           
            </div>
        </div>
    </section>
    <!-- end new sales -->


    <section class="store-featured-product">
        <div class="container">
            <div class="jumbotron">
                <p class="featured-products">Featured Products</p>
                <div class="card-columns">
                        <div class="card">
                            <a href="#">
                                <img class="card-img-top card-img-rounded text-center" src="/images/recipe.jpg" alt="">
                            </a>
                            <div class="card-body">
                            <h4 class="card-title">$9.5</h4>
                            <p class="card-text"><small class="text-muted" style="font-size: 13px">dish washer premium </small></p>
                            <p class="card-text"><small class="text-muted" style="font-size: 13px">57 oz </small></p>
                            <a href="#" class="btn btn-success">Add</a>
                            </div>
                        </div>             
                        <div class="card">
                            <a href="#">
                                <img class="card-img-top card-img-rounded text-center" src="/images/recipe.jpg" alt="">
                            </a>
                            <div class="card-body">
                            <h4 class="card-title">$9.5</h4>
                            <p class="card-text"><small class="text-muted" style="font-size: 13px">dish washer premium </small></p>
                            <p class="card-text"><small class="text-muted" style="font-size: 13px">57 oz </small></p>
                            <a href="#" class="btn btn-success">Add</a>
                            </div>
                        </div>             
                        <div class="card">
                            <a href="#">
                                <img class="card-img-top card-img-rounded text-center" src="/images/recipe.jpg" alt="">
                            </a>
                            <div class="card-body">
                            <h4 class="card-title">$9.5</h4>
                            <p class="card-text"><small class="text-muted" style="font-size: 13px">dish washer premium </small></p>
                            <p class="card-text"><small class="text-muted" style="font-size: 13px">57 oz </small></p>
                            <a href="#" class="btn btn-success">Add</a>
                            </div>
                        </div>             
                        <div class="card">
                            <a href="#">
                                <img class="card-img-top card-img-rounded text-center" src="/images/recipe.jpg" alt="">
                            </a>
                            <div class="card-body">
                            <h4 class="card-title">$9.5</h4>
                            <p class="card-text"><small class="text-muted" style="font-size: 13px">dish washer premium </small></p>
                            <p class="card-text"><small class="text-muted" style="font-size: 13px">57 oz </small></p>
                            <a href="#" class="btn btn-success">Add</a>
                            </div>
                        </div>             
                        <div class="card">
                            <a href="#">
                                <img class="card-img-top card-img-rounded text-center" src="/images/recipe.jpg" alt="">
                            </a>
                            <div class="card-body">
                            <h4 class="card-title">$9.5</h4>
                            <p class="card-text"><small class="text-muted" style="font-size: 13px">dish washer premium </small></p>
                            <p class="card-text"><small class="text-muted" style="font-size: 13px">57 oz </small></p>
                            <a href="#" class="btn btn-success">Add</a>
                            </div>
                        </div>             
                        <div class="card">
                            <a href="#">
                                <img class="card-img-top card-img-rounded text-center" src="/images/recipe.jpg" alt="">
                            </a>
                            <div class="card-body">
                            <h4 class="card-title">$9.5</h4>
                            <p class="card-text"><small class="text-muted" style="font-size: 13px">dish washer premium </small></p>
                            <p class="card-text"><small class="text-muted" style="font-size: 13px">57 oz </small></p>
                            <a href="#" class="btn btn-success">Add</a>
                            </div>
                        </div>             
                </div>
            </div>
        </div>
    </section>
    <!-- end store feature products -->


    <section class="store-department">
        <div class="container">
            <div class="jumbotron">
                <p class="dept-title">Browse Departments</p>


                <div class="department-cards">

                    <div class="card" style="width: 15rem;">
                        <div class="card-body">
                            <h4 class="card-title">Special title treatment</h4>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="/store/rainbow-grocery/departments/pantry">Pantry</a>
                        </div>
                    </div>
                    <div class="card" style="width: 15rem;">
                        <div class="card-body">
                            <h4 class="card-title">Special title treatment</h4>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="">Toiletries</a>
                        </div>
                    </div>
                    <div class="card" style="width: 15rem;">
                        <div class="card-body">
                            <h4 class="card-title">Special title treatment</h4>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="">Beverages</a>
                        </div>
                    </div>
                    <div class="card" style="width: 15rem;">
                        <div class="card-body">
                            <h4 class="card-title">Special title treatment</h4>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="">Deli</a>
                        </div>
                    </div>
                    <div class="card" style="width: 15rem;">
                        <div class="card-body">
                            <h4 class="card-title">Special title treatment</h4>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="">Frozen</a>
                        </div>
                    </div>
                    <div class="card" style="width: 15rem;">
                        <div class="card-body">
                            <h4 class="card-title">Special title treatment</h4>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="">Meat & Seefood</a>
                        </div>
                    </div>
                    <div class="card" style="width: 15rem;">
                        <div class="card-body">
                            <h4 class="card-title">Special title treatment</h4>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="">Diary & Egg</a>
                        </div>
                    </div>
                    <div class="card" style="width: 15rem;">
                        <div class="card-body">
                            <h4 class="card-title">Special title treatment</h4>
                            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>

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
                    $('#nav-tabs-outer').addClass('fixed').css('top', '56px');            
                }else {
                    $('#navbar').addClass('bg-light');
                    $("#navbar-search").addClass("hidden");
                    $("#nav-tabs-outer").removeClass('fixed').css('top', '0');
                }
            });
        });
    </script>
@endsection