<?php

namespace App\Http\Middleware;

use Auth;
use Closure;

class AdminMiddl
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
        if (! Auth::check()) {
            return redirect()->route('login');
        }

        if (Auth::user()->rol_id == 1) {
            return redirect()->route('usuario');
        }

        if (Auth::user()->rol_id == 2) {
            return $next($request);
        }
    }
}
