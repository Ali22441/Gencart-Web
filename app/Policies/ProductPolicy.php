<?php

namespace App\Policies;

use App\User;
use App\Store;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProductPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function before($user, $ability)
    {
       

        if ($user->role == 'admin' || $user->role ==  'shopper') {

         return true;
        }
        return false;
    }
    public function create(User $user, Store $store)
    {
        print_r($user);
        exit;
        return $user->id === $store->user_id; 
    }
}
