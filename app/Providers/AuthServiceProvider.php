<?php

namespace App\Providers;

use App\Store;
use App\Product;
use App\Department;
use App\Policies\StorePolicy;
use App\Policies\DepartmentPolicy;
use Laravel\Passport\Passport;
use Carbon\Carbon;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Model' => 'App\Policies\ModelPolicy',
         Store::class => StorePolicy::class,
         Product::class => ProductPolicy::class,
         Department::class => DepartmentPolicy::class
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Passport::routes();
        
        \Route::post('oauth/token', [
            'middleware' => 'password-grant',
            'uses' => '\Laravel\Passport\Http\Controllers\AccessTokenController@issueToken'
        ]);
        
        \Route::post('oauth/token/refresh', [
            'middleware' => ['web', 'auth', 'password-grant'],
            'uses' => '\Laravel\Passport\Http\Controllers\TransientTokenController@refresh'
        ]);

	Passport::tokensExpireIn(Carbon::now()->addDays(7));
    Passport::refreshTokensExpireIn(Carbon::now()->addDays(14));
    
    }
}
