<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CheckIsVerified
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!$request->user() || !$request->user()->is_verified) {
            // If the user is not logged in or 'is_verify' is false, redirect them
            return redirect()->to(route('dashboard'))->with('Error', 'Your account is not verified.');
        }

        return $next($request);
    }
}
