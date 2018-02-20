<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Shelf extends Model
{
    use Sluggable;

    protected $table = "shelves";

    protected $fillable = ['name', 'store_id', 'department_id', 'description'];

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

    public function department() {
        return $this->belongsTo('App\Department');
    }
    public function store() {
        return $this->belongsTo('App\Store');
    }
    
    public function getRouteKeyName()
    {
        return 'slug';
    }
}
