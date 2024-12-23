<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class SuperAdminMiddleware
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
        // Check if the user is authenticated and has the role of 'super-admin'
        if (auth()->check() && auth()->user()->role === 'super-admin') {
            return $next($request);
        }

        // Abort with a 403 Forbidden error for unauthorized users
        abort(403, 'Access denied. Only Super Admins are allowed.');
    }
}
