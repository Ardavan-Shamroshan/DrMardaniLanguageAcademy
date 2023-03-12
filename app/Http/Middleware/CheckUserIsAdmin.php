<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class CheckUserIsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        // if not authenticated, redirect to login route
        if(!Auth::check()){
            return to_route('login');
        }

        // if authenticated user has admin role
        if(Auth::user()?->hasRole('admin')){
            return $next($request);
        }

        return to_route('welcome');
    }
}
