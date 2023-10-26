<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

class isMahasiswa
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response

    {
        dd(Auth::guard('mhs')->user());
        if(!Auth::guard('mhs')->check() || Auth::guard('mhs')->user()->role !== 'mahasiswa'){
            abort(403);
        }

        return $next($request);
    }
}
