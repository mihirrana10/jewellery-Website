<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class IsLoggedIn
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next, $guard)
    {

        if($guard=='user' ){
            if(!Auth::guard($guard)->check())
                 return response()->redirectTo('/login');
        }

       if($guard=='admin' ){

            if(!Auth::guard($guard)->check())
                return response()->redirectTo('/admin/login');
        }

        return $next($request);
    }
}
