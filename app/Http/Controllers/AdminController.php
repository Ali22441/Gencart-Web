<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Store;
use App\Brand;
use App\Department;
use App\User;
use App\Http\Helpers\Statistics;

class AdminController extends Controller
{
    public function dashboard(){

        $statistics = new Statistics();
        return view('admin.dashboard', compact('statistics'));

    }

    public function showUsers(){
        return view('admin.users');
    }

    public function customers(){
        $users = User::paginate(30);
    	return view('admin.customers', compact('users'));
    }

    public function add_shopper(){
        return view('admin.add_shopper');
    }
    public function edit_shopper(){
        return view('admin.edit_shopper');
    }

    public function shopper(){
    	return view('admin.shopper');
    }
    public function shoppers(){
    	return view('admin.shoppers');
    }
   public function stores(){
       return view('admin.stores');
   }

   public function showStore(Store $store){
       $brands = Brand::all();
       return view('admin.store', compact(['store', 'brands']));
   }
   
   public function showStoreDepartment(Store $store, Department $department){
       return view('admin.store.department', compact(['store', 'department']));
   }

   public function add_store(){
       return view('admin.add_store');
   }


   public function edit_store(){
       return view('admin.edit_store');
   }
   public function add_department(){
       return view('admin.add_department');
   }
   public function add_shelve(){
       return view('admin.add_shelve');
   }
   public function add_product(){
       return view('admin.add_product');
   } 

    public function showStoreDepartments(Store $store){
    	return view('admin.store.departments', compact(['store']));
    }
    public function products(){
    	return view('admin.products');
    }

    public function add_city(){
        return view('admin.add_city');
    }
    public function edit_city(){
        return view('admin.edit_city');
    }
    public function cities(){
    	return view('admin.cities');
    }

    public function old_orders(){
    	return view('admin.old_orders');
    }
    public function new_orders(){
    	return view('admin.new_orders');
    }

    public function statistics(){
    	return view('admin.statistics');
    }

    public function settings(){
    	return view('admin.settings');
    }

}
