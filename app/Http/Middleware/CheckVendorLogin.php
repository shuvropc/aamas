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
<<<<<<< HEAD
        if ($request->session()->has('vendorId')) {
           //return redirect()->back();
=======
        if ($request->session()->has('vendor')) {
>>>>>>> 4d85fea189c0f3eece9a9e7870bf4d71e2d6b59c
            return $next($request);
        }else{
            return redirect()->route('vendor.login');
        }
    }
}
