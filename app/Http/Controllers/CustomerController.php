<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function index(){
        $storename = "Chinedu ohambele";
        return view('store', compact(['storename']));
    
    }
}
