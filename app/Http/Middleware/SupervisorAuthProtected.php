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
            return response(['error' => 'Не найдено'], 404);
        }
        $supervisor = Supervisor::firstWhere('api_token', $token);

        if (!isset($supervisor)) {
            return response(['error' => 'Не найдено'], 404);
        }

        $request->attributes->add(['supervisor' => $supervisor]);

        return $next($request);
    }
}
