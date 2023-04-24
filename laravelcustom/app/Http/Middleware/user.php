<?php

namespace App\Http\Middleware;

use Closure;
use Auth;
use Illuminate\Http\Request;

class user
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
        if (Auth::user() &&  Auth::user()->isAdmin == 1) {
            return $next($request);
        }
        return redirect('login')->with('error','You have not user access');
    }
}
