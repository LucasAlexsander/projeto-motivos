<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ValidateAdmin
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
        $result = $request->session()->all();
        
        echo '<pre>';
        print_r($result);
        echo '</pre>';

        /* if(session()->get('profileType') != 1) {
            redirect()->route('motivos.home');
        } */
        return $next($request);
    }
}
