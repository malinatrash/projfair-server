<?php

namespace App\Http\Middleware;

use App\Models\Supervisor;
use Closure;
use Illuminate\Http\Request;

class SupervisorAuthProtected
{
    public function handle(Request $request, Closure $next)
    {
        $token = $request->cookie('token') ?? $request->header('token');
        if ($token == null) {
            abort(403, 'Access denied');
        }
        $supervisor = Supervisor::firstWhere('api_token', $token);

        if (!isset($supervisor)) {
            abort(403, 'Access denied');
        }

        $request->attributes->add(['supervisor' => $supervisor]);

        return $next($request);
    }
}
