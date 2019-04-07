<?php

namespace App\Http\Middleware;

use Closure;
// use Illuminate\Auth\Middleware\Auth;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
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
        if (Auth::check() && Auth::user()->Role->id==1) {
            return $next($request);
        }else{
            return redirect('login');
        }
    }
}