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
    
                <div class="text-center">
                    <i class="fa fa-shopping-cart fa-5x"></i>
                    <p><strong>Your Cart is Empty</strong></p>
                </div>
    
                <div class="box"> 

                    <!-- <table class="table table-hover">
                        <thead>
                            <tr>
                                <th scope="col">product</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Unit Price</th>
                                <th scope="col">Discount</th>
                                <th scope="col">Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">
                                    <a href="">product name</a>
                                </th>
                                <td>
                                    <form action="">
                                        <input type="number" name="qty" id="qty" value="2" class="form-control form-control-sm">
                                    </form>
                                </td>
                                <td>$1.98</td>
                                <td>0.00</td>
                                <td>$1.90</td>
                            </tr>
                        </tbody>
                    </table> -->              

                    <table class="table table-striped table-hover table-responsive">
                        <thead>
                            <tr>
                                <th scope="col">Product</th>
                                <th scope="col">Quantity</th>
                                <th scope="col">Unit price</th>
                                <th scope="col">Discount</th>
                                <th colspan="2">Total</th>
                            </tr>
                        </thead>

                        <tbody>
                            <tr scope="row">
                                <td>
                                    <a href="">Urban Remedy</a>
                                </td>
    
                                <td>
                                    <form id="" method="POST" action="">
                                        <input type="hidden" name="_method" value="PUT">
                                        <input type="number" min="1" name="qty" value="2" class="form-control form-control-sm">
                                    </form>
                                </td>
                                <td>$1.9</td>
                                <td>$0.00</td>
                                <td>$1.9</td>
                                <td>
                                    <button title="Update Item Quantity" class="btn btn-default">
                                        <i class="fa fa-refresh"></i>
                                    </button>
                                    <button title="Remove Item from Cart" class="btn btn-danger">
                                        <i class="fa fa-trash-o"></i>
                                        
                                    </button>
    
    
                                    <form id="" action="" method="POST" style="display: none;">
                                        <input type="hidden" name="_token" value="">
                                        <input type="hidden" name="_method" value="DELETE">
                                        
                                    </form> 
                                </td>
                            </tr>
                            <tr scope="row">
                                <td>
                                    <a href="">Urban Remedy</a>
                                </td>
    
                                <td>
                                    <form id="" method="POST" action="">
                                        <input type="hidden" name="_method" value="PUT">
                                        <input type="number" min="1" name="qty" value="2" class="form-control form-control-sm">
                                    </form>
                                </td>
                                <td>$1.9</td>
                                <td>$0.00</td>
                                <td>$1.9</td>
                                <td>
                                    <button title="Update Item Quantity" class="btn btn-default">
                                        <i class="fa fa-refresh"></i>
                                    </button>
                                    <button title="Remove Item from Cart" class="btn btn-danger">
                                        <i class="fa fa-trash-o"></i>
                                        
                                    </button>
    
    
                                    <form id="" action="" method="POST" style="display: none;">
                                        <input type="hidden" name="_token" value="">
                                        <input type="hidden" name="_method" value="DELETE">
                                        
                                    </form> 
                                </td>
                            </tr>
                                                       
                        </tbody>
                        <tfoot>
                            <tr>
                                <th colspan="5">Total</th>
                                <th colspan="2">$1000.00</th>
                            </tr>
                        </tfoot>
                    </table>
                    <!-- /.table-responsive -->
    
                </div>        
    
            </div>
    
            <div class="modal-footer" >
                <button type="button" class="btn btn-default btn-block" style="display:flex; justify-content: space-between;">
                    Checkout
                    <h1><span class="badge badge-secondary">$45</span></h1>
                </button>
            </div>
    
    
        </div>
    
    
    
      </div> <!-- modal dialog -->
    </div> <!-- modal fade -->