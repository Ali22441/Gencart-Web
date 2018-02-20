<?php

namespace App\Http\Helpers;

use App\Store;
use App\Product;
use App\User;
use App\Order;

class Statistics{


    public function totalUsers(){
        return User::all()->count();
    }
    
    public function totalOrders(){
        return Order::all()->count();
    }

    public function monthlyTotalSales(){
        return "9000";
    }

    public function totalProducts(){
        return Product::all()->count();
    }
    
    public function totalStores(){
        return Store::all()->count();
    }

	
}