<?php

namespace App\Http\Middleware;

use Closure;
use DB;
class InjectPasswordGrantCredentials
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->grant_type == 'password') {
            
            $client = DB::table('oauth_clients')
                        ->where('password_client', 1)
                        ->first();

            $request->request->add([
                'client_id' => $client->id,
                'client_secret' => $client->secret,
                '_token' => csrf_token(),
            ]);
        }

        return $next($request);
    }
}
