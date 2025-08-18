<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

use Symfony\Component\HttpFoundation\Response;

class isAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::user()->jabatan=='Admin') {
            return $next($request);
        }else{
            return redirect()->route('dashboard')->with('error', 'LU GA ADA AKSES IZIN BRAYYY🤙🤙🤙');
        }

    }
}
