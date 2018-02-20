<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderStore extends Model
{
    protected $table = 'order_store';

    protected $fillable = ['store_id','order_id','amount','fulfilment_status'];

    public function orders(){
        return $this->belongsToMany('App\Orders');
    }

    public function stores(){
        return $this->belongsToMany('App\Stores');
    }

}
