<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class AdminAuthenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $y = session()->get('isAdmin');
        if($y){
            return redirect()->route('mat.create'); 
        } else {
            return $request->expectsJson() ? null : route('login');
        }
      
        return $next($request);
    }
}
