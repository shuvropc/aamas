<?php

namespace App\Http\Middleware;

use Closure;

class CheckVendorLogin
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

       
        if ($request->session()->has('vendor')) {
            return $next($request);
        }else{
            return redirect()->route('vendor.login');
        }
    }
    
}
