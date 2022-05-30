<?php

namespace App\Http\Middleware;

use App\Models\Candidate;
use App\Models\Supervisor;
use Closure;
use Illuminate\Http\Request;

class ApiAuth
{
    const API_KEY_HEADER = 'x-api-key';
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $token = $request->header(self::API_KEY_HEADER) ?? $request->cookie('token');

        if ($token == null || (Candidate::where('api_token', $token) == null) && Supervisor::where('api_token', $token) == null) {
            abort(403, 'Access denied');
        }

        $request->attributes->add(['api_token' => $token]);

        return $next($request);
    }
}
