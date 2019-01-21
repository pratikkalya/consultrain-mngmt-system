<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class AdminEmployeeMiddleware
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
        if(Auth::user()->isUserAdmin() || Auth::user()->isUserEmployee()) {
            return $next($request);
        }
      return redirect()->route('dashboard.index');          
    }
}
