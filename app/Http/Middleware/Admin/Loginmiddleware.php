<?php

namespace App\Http\Middleware\Admin;

use Closure;

class Loginmiddleware
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
    	//验证用户是否登陆
//  	if()
//  	{
//  		
//  	}
        return $next($request);
    }
}
