<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use User;

class Admin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth()->user()->role_id == 1){
            return $next($request);
        }
        return redirect('login')->with('error','You have not admin access');
    }

}