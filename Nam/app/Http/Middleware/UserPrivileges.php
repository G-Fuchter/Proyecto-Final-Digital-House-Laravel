<?php

namespace App\Http\Middleware;

use Closure;

class UserPrivileges
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
        if (auth()->user()->roll !== 'admin') {
            return redirect('/home');
        }
        return $next($request);
    }
}
