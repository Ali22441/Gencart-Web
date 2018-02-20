<?php

namespace App\Http\Controllers\api;

 
 
use App\Http\Controllers\Controller; 
use Illuminate\Support\Facades\Auth;

use App\Product;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Store;
use App\Shelf;
use App\Department;
use App\Brand;
use Validator;
use LukePOLO\LaraCart\Facades\LaraCart;
use Maatwebsite\Excel\Facades\Excel;


class ProductController extends Controller
{
    public $successStatus = 200;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $user = Auth::user(); 
        
        if($user->can('create')){

        }

        $product = Product::create($request->all());

              if($product) {

                        if (!empty($request->input('image'))) {
                            $product->image =  image_decoder($request->input('image') , 'Products',$product->id);
                            $product->save();  
                        }

                    return response()->json(['success' => $store], $this->successStatus);
                    }
            else{
                    return response()->json(['error'=>'Unauthorised'], 401);
            }   
    }

    public function storeBulk(Requests\BulkProductsUpload $request, $store){
        
        $products = Excel::load($request->products)->get();
        $errors = 0;
        $store = Store::find($store);
        foreach($products as $product){
           
            if($product->department){
                $department = Department::firstOrCreate(
                    ['name' => $product->department],
                    ['store_id' => $store->id]
                );
                $product->department_id = (int)$department->id;
            }
            
            if($product->department_id && $product->shelf){
                $data =  array(
                        'name' => $product->shelf,
                        'department_id' => $product->department_id,
                        'store_id' => $store->id
                             );
                $shelf = Shelf::firstOrCreate($data);
                $product->shelf_id = (int)$shelf->id;
            }

            if ($product->brand) {
                $brand = Brand::firstOrCreate(
                    ['name' => $product->brand]
                );

                $product->brand_id = $brand->id;
            }
            
            if(starts_with($product->price, 'SAR ')){
                $product->price = (float)str_after($product->price, "SAR ");
            }


            $validator = Validator::make($product->toArray(), [
                "name" => "required",
                "price" => "required",
                "image_url" => "required",
                "tax" => "nullable",
                "quantity" => "nullable|numeric|min:1",
                "unit" => "nullable",
                // "department" => "nullable|exists:departments,id",
                // "shelf" => "nullable|exists:shelves,id",
                // "brand" => "nullable|exists:brands,id",
                "description" => "nullable",
                "options" => "nullable",
                "options_limit" => "nullable",
                "options_value" => "nullable",
                "option_prices" => "nullable"
            ]);


            if($validator->fails()) {
                $errors++; 
            }else{
                $image = $product->image_url;
                $data = array(  
                    'name' => $product->name,
                    'image' => '',
                    'quantity' => $product->quantity ? $product->quantity : 1,
                    'price' => $product->price ,
                    'promo_price' => 50,
                    'description' => $product->description,
                    'total_sale' => 100,
                    'store_id' => $store->id,
                    'department_id' =>  $product->department_id,
                    'shelf_id' => $product->shelf_id,
                    'brand_id' => $product->brand_id,
                    'unit' => $product->unit,
                    'tax' => $product->tax ? $product->tax : 0,
                    'status' => 1
                );
                $product = Product::firstOrCreate($data);
             
                image_decoder($image, 'products',$product->id); //decode image url

            }
    
        }
        if($errors == 0){


            return response()->json(['success' => 'data uploaded'], $this->successStatus);
        }
        else{

            $error = $validator->errors();
            return response()->json(['failure' => $error], 402);
        }
        
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        //
    }

    public function addToCart(Request $request, Product $product){

        $qty = $request->has('qty') ? $request->qty : 1;
        $instruction = $request->has('instruction') ? $request->description . '<br> Additional Instruction: ' . $request->instruction : $request->description;
        $item = LaraCart::add($product->id, $product->name, $qty, $product->price, ['description' => $product->description, 'image' => $product->image]);

        $totalItems = count(LaraCart::getItems());
        $total      = LaraCart::total();
        $itemQty    = $item->qty;
        $itemPrice  = $item->price($formatted = true);
        $itemID     = $item->id;
        
        if(!str_is('http*', $product->image)){
            $product->image = 'storage/' . $product->image;
        }
        return json_encode(['id' => $itemID, 'price' => $itemPrice, 'qty' => $itemQty, 'total' => $total, 'totalItems' => $totalItems, 'image' => $product->image, 'name' => $product->name]);
    }

    public function details($id){

        $product = Product::with()->whereId($id)->first();

        return $product->toJson();
    }
   
}
