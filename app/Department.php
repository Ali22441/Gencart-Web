<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Department extends Model
{
    use Sluggable;
    
    protected $table = "departments";
    
    protected $fillable = ["name", 'slug', 'store_id', 'description', 'image'];

    protected $hidden   =   ['store_id'];

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

    public function store(){
        return $this->belongsTo('App\Store');
    }

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
}
