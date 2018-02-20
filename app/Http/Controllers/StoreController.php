<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Store;
use App\Shelf;
use App\Category;
use App\Product;
use App\Department;
use LukePOLO\LaraCart\Facades\LaraCart;

class StoreController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $stores = Store::with(['departments', 'products', 'shelves'])->get();
        return view('stores.index', compact('stores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('stores.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Requests\CreateStoreRequest $request)
    {
    
        $store = Store::create($request->all());

        if($store) {

           if ($request->hasFile('logo') && $request->file('logo')->isValid()) {
                $path = $request->logo->store('public/logos');
                $store->logo = str_replace('public/', '', $path);
				$store->save();  
            }

           if ($request->hasFile('banner') && $request->file('banner')->isValid()) {
                $path = $request->banner->store('public/banners');
                $store->banner = str_replace('public/', '', $path);
				$store->save();  
            }
       }  
        

        return back()->with('message', $store->name . ' Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $store
     * @return \Illuminate\Http\Response
     */
    public function show(Store $store)
    {
        // $new_products = Store::with('products')->where('created_at', '<=', now())
        $newProducts = $store->products->sortByDesc('created_at')->take(15);
        $stores = Store::all();
        $categories = Category::all();
        $cartItems = LaraCart::getItems();
        $departments = $store->departments->take(10);
        return view('store.show', compact(['store', 'categories', 'stores', 'cartItems', 'newProducts', 'departments']));
    }
    
    /**
     * Display the specified resource departments.
     *
     * @param  string  $store
     * @return \Illuminate\Http\Response
     */
    public function departments(Store $store)
    {
        $stores = Store::all();
        $categories = Category::all();
        $cartItems = LaraCart::getItems();
        $departments = $store->departments;
        return view('store.departments', compact(['store', 'categories', 'stores', 'cartItems', 'newProducts', 'departments']));
    }

    public function department(Store $store, $department) {
        $newProducts = $store->products->sortByDesc('created_at')->take(15);
        $stores = Store::all();
        $categories = Category::all();
        $cartItems = LaraCart::getItems();
        $departments = $store->departments;
        $department = Department::where('id', $department)->first();
        $shelves = $department->shelves;
        return view('store.department', compact([
            'store',
            'categories',
            'stores', 
            'cartItems', 
            'newProducts', 
            'departments',  
            'department',  
            'shelves'])
            );
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('store.edit', compact('store'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $store->delete();
        return back()->with('message', 'Store deleted');
    }

    public function checkout(){
        return view('store.checkout');
    }
    public function payment(){
        
        return view('store.payment');
    }
}
