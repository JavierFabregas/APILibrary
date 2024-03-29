<?php

namespace App\Http\Middleware;

use Closure;
use App\User;
use App\Helper\Token;
class checkAuth
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
        /*
        $user = new User();

        if($user->is_authorized($request))
        {
            return $next($request);
        }
        
        var_dump('no tienes permisos'); exit;
        */

        $header_token = $request->header('Authentication');

        if(isset($header_token)){
            $token = new Token();
            $data_token = $token->decode($header_token);
            
            $user = User::where('email',$data_token->email)->first();
         
            if(isset($user)){
                return $next($request);
            }
        }               
        var_dump('no tienes permisos'); exit;
    }
}
