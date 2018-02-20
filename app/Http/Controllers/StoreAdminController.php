<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoreAdminController extends Controller{
    public function dashboard(){
       return view('storeAdmin.dashboard');
    }
    public function departments(){
       return view('storeAdmin.departments');
    }

    public function products(){
       return view('storeAdmin.products');
    }
    public function product(){
       return view('storeAdmin.product');
    }

    public function product_edit(){
       return view('storeAdmin.product-edit');
    }
    
    public function old_orders(){
        return view('storeAdmin.old-orders');
    }

    public function new_orders(){
        return view('storeAdmin.new-orders');
    }

    public function statistics(){
        return view('storeAdmin.statistics');
    }

    public function settings(){
        return view('storeAdmin.settings');
    }


}