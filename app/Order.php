<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    protected $fillable = ['customer_id','shopper_id','address_id','amount','delivery_charge','status'];

    // protected $hidden = ['customer_id', 'shopper_id'];

    public function stores(){
        return $this->belongsToMany('App\Store');
    }

    public function products(){
        return $this->belongsToMany('App\Product');
    }

    public function hasCategory($category_id){
        return $this->belongsToMany('App\Category')->wherePivot('category_id', $category_id);
    }

}
