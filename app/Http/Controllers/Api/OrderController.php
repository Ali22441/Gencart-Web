<?php

namespace App\Http\Controllers\Api;
use App\Order;
use App\OrderStore;
use App\OrderProduct;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class OrderController extends Controller
{
    public $successStatus = 200;
    public function store(Request $request)
    {
        DB::beginTransaction();

        $order = Order::create($request->all());
       
        if($order){ 
            foreach($request['detail'] as $key=>$value){
              
                $store_order['store_id'] =  $value['store_id'];
                $store_order['order_id'] =  $order->id;
                $store_order['amount']   =  $value['store_id'];
                $orderstore = OrderStore::create($store_order); 
                
                foreach($value['products'] as $pvalue){
                 
                    $store_product['store_id']      =  $value['store_id'];
                    $store_product['order_id']      =  $order->id;
                    $store_product['quantity']      =  $pvalue['quantity'];
                    $store_product['product_id']    =  $pvalue['product_id'];
                    $storeproduct = OrderProduct::create($store_product); 
                }

            }
        }
        DB::commit();
        return response()->json(['success' => ''], $this->successStatus);
        
        return response()->json(['failure' => $store], 404);
    }

    public function update(){

    }

    public function destroy(Order $order){
      
        if($order->status == 'Initiated')
        {
       
            DB::beginTransaction();

            $orderproduct = OrderProduct::where('order_id', $order->id)->delete();

            $orderstore = OrderStore::where('order_id' , $order->id)->delete();
            
            $order->delete();

            DB::commit();
            return response()->json(['success' => ''], 200);
        }
        else
        {
            return response()->json(['failure' => ''], 404);
        }
        print_r($order->toArray());

    }

}
