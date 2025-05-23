<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Enums\UserRole;

class CompanyUserMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if(!\Illuminate\Support\Facades\Auth::check() || \Illuminate\Support\Facades\Auth::user()->role != UserRole::CompanyUser){
            return redirect()->route("home")->with('error', 'You do not have Company access.');
        }

        return $next($request);
    }
}
