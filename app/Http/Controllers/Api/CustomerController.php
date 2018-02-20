<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{
    public function index(){
        $storename = "Chinedu ohambele";
        return view('store', compact(['storename']));
    
    }
}

