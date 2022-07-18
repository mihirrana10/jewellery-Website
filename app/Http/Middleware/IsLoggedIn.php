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
        if( $guard=='user' && !Auth::guard($guard)->check()){
            return response()->json("Back off!!", 200);;
           // return new Response("<h1>Not found</h1>",404);
       }

       if(!Auth::guard($guard)->check()){
           return response()->json("Back off!!", 200);;
          // return new Response("<h1>Not found</h1>",404);
      }
        return $next($request);
    }
}
