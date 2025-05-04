<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CursoPagoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */


public function handle($request, Closure $next)
{
    if (!auth()->check() || auth()->user()->cursos->isEmpty()) {
        return redirect()->route('home')->with('error', 'Você precisa comprar um curso para acessar esta área.');
    }

    return $next($request);
}


}
