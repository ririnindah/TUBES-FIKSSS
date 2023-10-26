<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class isOperator
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next): Response
    {
        // dd(!Auth::guard('opt')->check() || Auth::guard('opt')->user()->role !== 'operator');
        if (!Auth::guard('opt')->check() || Auth::guard('opt')->user()->role !== 'operator') {
            abort(403);
        }

        return $next($request);
    }
}
