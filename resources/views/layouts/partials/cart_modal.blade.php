<!-- Modal -->
<div class="modal fade modal-right-pane" id="modalSidePaneRight" tabindex="-1" role="dialog" aria-labelledby="sidePaneRightModal" aria-hidden="true">

    <div class="modal-dialog" role="document">    

    <div class="modal-content rounded-0">



        <div class="modal-header">

        <h5 class="modal-title" id="sidePaneRightModal"> My Cart</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

            <span class="modal-close" aria-hidden="true">&times; Close</span>

        </button>

        </div>

        <div class="modal-body">

            <div class="ibox">

                <div class="ibox-title">
                    <span class="float-right" id="total-items-in-cart">(<strong>{{ count($cartItems) }}</strong>) items</span>
                    <h5>Items in your cart</h5>
                </div>
                
                
                <div class="ibox-content">
                    <div class="table-responsive">
                        <table class="table shoping-cart-table">

                            <tbody>
                            
                            @foreach($cartItems as $item)
                            <tr id="side-cart-product-{{$item->id}}">
                                <td width="90">
                                    <div class="cart-product-imitation">
                                        <img src="{{ $item->image }}" alt="image" width="80px">
                                    </div>
                                </td>
                                <td class="desc">
                                    <h3>
                                        <a href="#" class="text-navy">
                                            {{ $item->name }}
                                        </a>
                                    </h3>
                                    <p class="small">
                                        {{ $item->message }}
                                    </p>
                                    <!-- <dl class="small m-b-none">
                                        <dt>Description lists</dt>
                                        <dd>A description list is perfect for defining terms.</dd>
                                    </dl> -->

                                    <div class="m-t-sm">
                                        <a href="#" class="text-muted"><i class="fa fa-edit"></i> instructions</a>
                                        |
                                        <a href="#" id="{{$item->getHash()}}" class="text-muted" ><i class="fa fa-trash"></i> Remove</a>
                                    </div>
                                </td>

                                <td width="65">
                                    <input name="qty" type="text" class="form-control" value="{{ $item->qty }}" id="side-item-cart-qty-{{ $item->id }}">
                                </td>

                                <td>
                                    {{ $item->price($formatted = true) }}
                                </td>

                            </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
               
                
            </div>




        </div>



        <div class="modal-footer" >

            <a class="btn btn-default btn-block btn-lg" style="display:flex; justify-content: space-between;" href={{ route('checkout') }}>

                Checkout <span class="badge badge-secondary cart-total">{{ LaraCart::total() }}</span>

            </a>

        </div>

    </div>

    </div> <!-- modal dialog -->

</div> <!-- modal fade -->
