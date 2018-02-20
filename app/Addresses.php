<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Addresses extends Model
{
    protected $table = "addresses";
    
    protected $fillable = ["label", 'address', 'zipcode', 'lat_long', 'lat','lang'];

    protected $hidden   =   ['user_id'];


   // SELECT id, ( 6371 * acos( cos( radians(33.5961113) ) * cos( radians( lat ) ) * cos( radians( lang ) - radians(73.05380969999999) ) + sin( radians(33.5961113) ) * sin( radians( lat ) ) ) ) AS distance FROM addresses HAVING distance < 8 ORDER BY distance LIMIT 0 , 20
}
