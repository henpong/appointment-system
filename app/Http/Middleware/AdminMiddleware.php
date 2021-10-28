<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

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
        //Redirect User to Login Page if Not Login
        if(!Auth::guard('admin')->check()){
            return redirect('/admin');
        }
        return $next($request);
    }
}
