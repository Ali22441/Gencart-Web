<?php

namespace App\Http\Controllers;

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
        $product = Product::create($request->all());

        if($product) {
            if($request->hasFile('image') && $request->file('image')->isValid()){
                $path = $request->image->store('public/products');
                $product->image = str_replace('public/', '', $path);
				$product->save(); 
            }
        }
        
        return back()->with('message', $product->name . " Added successfully");
    }

    public function storeBulk(Requests\BulkProductsUpload $request, Store $store){
        
        $products = Excel::load($request->products)->get();

        $errors = 0;
        
        foreach($products as $product){

            if($product->department){
                $department = Department::firstOrCreate(
                    ['name' => $product->department],
                    ['store_id' => $store->id]
                );
                $product->department = (int)$department->id;
            }
            
            if($product->department && $product->shelf){
                $shelf = Shelf::firstOrCreate(
                    ['name' => $product->shelf],
                    ['store_id' => $store->id],
                    ['department_id' => $department->id]
                );

                $product->shelf = (int)$shelf->id;
            }

            if ($product->brand) {
                $brand = Brand::firstOrCreate(
                    ['name' => $product->brand]
                );

                $product->brand = $brand->id;
            }
            
            if(starts_with($product->price, 'SAR ')){
                $product->price = (float)str_after($product->price, "SAR ");
            }


            $validator = Validator::make($product->toArray(), [
                "name" => "required",
                "price" => "required",
                "image_url" => "nullable",
                "tax" => "nullable",
                "quantity" => "nullable|numeric|min:1",
                "unit" => "nullable",
                // "department" => "nullable|exists:departments,id",
                "shelf" => "nullable|exists:shelves,id",
                "brand" => "nullable|exists:brands,id",
                "description" => "nullable",
                "options" => "nullable",
                "options_limit" => "nullable",
                "options_value" => "nullable",
                "option_prices" => "nullable"
            ]);


            if($validator->fails()) {
                $errors++; 
            }else{
                $product = Product::firstOrCreate([
                    'name' => $product->name,
                    'store_id' => $store->id,
                    'image' => $product->image_url,
                    'quantity' => $product->quantity ? $product->quantity : 1,
                    'price' => $product->price,
                    'description' => $product->description,
                    'unit' => $product->unit,
                    'tax' => $product->tax ? $product->tax : 0,
                    'department_id' => $product->deparment,
                    'shelf_id' => $product->shelf,
                    'brand_id' => $product->brand,
                    'description' => $product->description
                ]);
            }

    
        }
        
        return back()->with('message', "uploads done with " . $errors . " errors");
        
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

    public function details(Product $product){
        return $product->toJson();
    }
   
}
