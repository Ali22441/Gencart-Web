<?php

namespace App\Policies;

use App\User;
use App\Store;
use App\Department; 
use Illuminate\Auth\Access\HandlesAuthorization;

class DepartmentPolicy
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
    public function create(User $user)
    {
        
    }
    public function update(User $user, Department $department)
    {
        $store =Store::find($department->store_id);
      
        if($user->id === $store->user_id){
      
            return true;
        }
        return false;
    }
       public function delete(User $user, $department)
    {
        $store =Store::find($department->store_id);
      
        if($user->id === $store->user_id ){
      
            return true;
        }
        return false;
    }
}
