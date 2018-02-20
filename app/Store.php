<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Store extends Model
{
    use Sluggable;

    protected $table = 'stores';

    protected $fillable = ['name','name','logo','banner','zipcode','address','phone','status','user_id', 'slug', 'lat_long', 'place_id'];

    protected $hidden = ['user_id'];

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

    public function departments(){
        return $this->hasMany('App\Department');
    }

    public function categories()
    {
        return $this->belongsToMany('App\Category');
    }

    public function hasCategory($category_id){
        return $this->belongsToMany('App\Category')->wherePivot('category_id', $category_id);
    }
    public function orders()
    {
        return $this->belongsToMany('App\Order', 'order_store', 'store_id')->withPivot('amount', 'fulfilment_status');;
    }

    // public function hasOrder($store_id){
    //     return $this->belongsToMany('App\Order')->wherePivot('store_id', $store_id); 
    // }

    public function shelves(){
        return $this->hasMany('App\Shelf');
    }
    
    public function products(){
        return $this->hasMany('App\Product');
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function manager(){
        return $this->belongsTo('App\User');
    }
}
