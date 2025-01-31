<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class CheckLogedOut
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
        if (Auth::guest()) {
            # code...
            return redirect()->intended('login');
        }
        return $next($request);
    }
}
