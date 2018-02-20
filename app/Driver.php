<?php

namespace App;
 
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Driver extends Authenticatable
{
    use HasApiTokens, Notifiable;
	
	protected $fillable = [
        'name', 'email', 'password', 'address', 'phone', 'zipcode', 'place_id', 'lat_long'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
}
