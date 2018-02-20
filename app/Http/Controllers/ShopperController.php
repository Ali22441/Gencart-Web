<?php

namespace App\Http\Controllers;
use App\Store;
use App\Category;
use App\Http\Requests;
use Illuminate\Http\Request;
use LukePOLO\LaraCart\Facades\LaraCart;

class ShopperController extends Controller{
    public function dashboard(){
       return view('shopper.dashboard');
    }
   
    public function delivered(){
        return view('shopper.delivered');
    }

    public function available(){
        return view('shopper.available');
    }

    public function statistics(){
        return view('shopper.statistics');
    }

    public function settings(){
        return view('shopper.settings');
    }

    public function showTerms(){
        $stores = Store::all();
        $categories = Category::all();
		$cartItems = LaraCart::getItems();
        return view('shopper.terms', compact(['stores', 'categories','cartItems']));
    }

    public function shopperRequest(Requests\BecomeShopperRequest $request){
          auth()->user()->become_a_shopper = 1;
          auth()->user()->save();  
          return back()->withMessage('Request sent');
    }

    public function showCheckoutPage(){
        return view('stores.checkout');
    }


}