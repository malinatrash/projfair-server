<?php

namespace App\Http\Middleware;

use App\Models\Candidate;
use App\Models\Supervisor;
use Closure;
use Illuminate\Http\Request;

class AdminApiAuth
{
    public function handle(Request $request, Closure $next)
    {
        $token = $request->cookie('token');
        if ($token == null && Supervisor::where('api_token', $token) == null) {
            abort(403, 'Access denied');
        }

        $request->attributes->add(['api_token' => $token]);

        return $next($request);
    }
}
