<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Product extends Model
{
    use Sluggable;

    protected $fillable = ['name', 'image', 'quantity', 'price', 'promo_price', 'description', 'total_sale', 'store_id', 'department_id', 'shelf_id', 'brand_id', 'unit', 'tax', 'status'];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

    public function store()
    {
        return $this->belongsTo('App\Store');
    }
    public function department()
    {
        return $this->belongsTo('App\Department');
    }


    public function shelf()
    {
        return $this->belongsTo('App\Shelf');
    }
    
    public function brand()
    {
        return $this->belongsTo('App\Brand');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
