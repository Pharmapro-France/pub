<?php

namespace App\Http\Middleware;

use Closure;
use Redirect;
use Session;

class CheckAuth
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
        if(empty(session('user_name'))){
            return Redirect::to('/')->with('error','Before login you can\'t access any page');
        }
        
        return $next($request);
    }
}
