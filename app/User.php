<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;


class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'address', 'phone', 'zipcode', 'place_id', 'lat_long','country_code','authy_id','verified'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    /** 
     * Return true if is admin
     * 
     * @var $this
    */

    public function isAdmin(){
        return $this->role == 'admin';
    }


    public function findForPassport($username)
    {
        return $this->where('phone', $username)->first();
    }


}
