<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
class Freelancer 
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next,$role='freelancer')
    {
        if(Auth::guard('freelancer')->guest()){
            return redirect()->route('home');
        }
        return $next($request);
    }
}
