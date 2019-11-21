<?php

namespace App\Http\Middleware;

use Closure;
use App\Helper\Token;
use Firebase\JWT\JWT;

class Admin
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
        $token = $request->header('Authorization');
        
        //return $next($token.decode());
        return $next($request);
    }
}
