<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    protected $table = 'order_product';

    protected $fillable = ['quantity','fulfilment_status','product_id','order_id','store_id'];
}
