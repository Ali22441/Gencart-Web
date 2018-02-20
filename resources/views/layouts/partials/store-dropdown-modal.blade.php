    <!-- Modal -->

    <div class="modal fade modal-left-pane" id="modalSidePaneLeft" tabindex="-1" role="dialog" aria-labelledby="sidePaneLeftModal" aria-hidden="true">
        <span class="arrow-up"></span>
      <div class="modal-dialog" role="document">    

        <div class="modal-content">    

            <div class="modal-header">

                <h5 class="modal-title" id="sidePaneLeftModal"> Store List</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                    <span class="modal-close" aria-hidden="true">&times; Close</span>

                </button>


            </div>

    

            <div class="modal-body">

                <div id="store-dropdown-modal">

                        <header class="store-lists-header">


                            <div class="list-group">
                                <li class="list-group-item text-center">
                                    <img src="{{ asset('/images/home-logo.png')}}" width="57" alt="gencart logo" srcset="">
                                </li>
                            </div>

                            <div class="container-fluid">
                                <ul class="list-group">
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
     
                </div>

            </div>

            <!-- modal body -->

        </div>

      </div> <!-- modal dialog -->

    </div> <!-- modal fade -->

<!-- store-dropdown-modal -->
