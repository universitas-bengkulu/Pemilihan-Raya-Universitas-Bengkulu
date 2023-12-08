<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class isPandaLogin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (session()->has('isLogin') && session('isLogin') == 1) {
            return $next($request);
        }
        return redirect()->route('panda.login')->with(['error'    =>  'Mohon maaf, anda tidak memiliki akses halaman ini']);
    }
}
