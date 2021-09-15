<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Session;

class checkSession
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $dddc = url()->current();
        Session::put('urlval',$dddc);
        // Session::save();
        if ($request->session()->has('uid')) {
            return $next($request);
        }else {
            
            return redirect('login');
        }
    }
}
