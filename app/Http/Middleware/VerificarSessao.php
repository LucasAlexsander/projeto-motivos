<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class VerificarSessao
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
        if(!(session()->has('profile_type'))) {
            return redirect()->route('motivos.login')->with('warning', 'Precisa fazer o login para acessar as páginas');
        }
        return $next($request);
    }
}
