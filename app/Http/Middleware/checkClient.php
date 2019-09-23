<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class checkClient
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
        // if (Auth::level() == 1) {
        //     # code...
        //     return redirect('admin/home');
        // }
        // return $next($request);
        if (Auth::check() && Auth::user()->getLevel()== 1 ) {
            # code...
            return redirect('admin/home');
        }
        return $next($request);
    }
}
