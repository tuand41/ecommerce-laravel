<?php

namespace App\Http\Middleware;

use Closure;
use Auth;


class checkAdmin
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
        if (Auth::check() && Auth::user()->getLevel() == 0 ) {
            # code...
            return redirect('/');          
        }        
        return $next($request); 
    }
}
