<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoController extends Controller{

    public function faq(){
        return view('faq');
    }
    public function about(){
        return view('about');
    }
    public function terms(){
        return view('terms');
    }
    public function privacy(){
        return view('privacy');
    }
    public function help(){
        return view('help');
    }

}