<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AlreadyLoggedIn
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $path = $request->path();
        if(($path == "login" || $path == "register" || $path == "/") && (Session()->has('loginId'))){
            return redirect('dashboard');
        }
        // if(Session()->has('loginId') && (url('login')==$request->url('dashboard')) || (url('register')==$request->url('dashboard')) || 
        // (url('')==$request->url('dashboard'))){
        //     return back();
        // }
        return $next($request);
    }
}
