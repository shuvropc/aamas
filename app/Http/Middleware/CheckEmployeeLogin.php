<?php

namespace App\Http\Middleware;

use Closure;

class CheckEmployeeLogin
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
        
        if ($request->session()->has('employee')) {
            return $next($request);
        }
        else{
            return redirect()->route('employee.login');
        }

    }
}