<?php

namespace App\Http\Middleware;

use App\Models\Supervisor;
use Closure;
use Illuminate\Http\Request;

class SupervisorAuthProtected
{
    public function handle(Request $request, Closure $next)
    {
        $token = $request->cookie('token');
        if ($token == null) {
            abort(403, 'Access denied');
        }
        $supervisors = Supervisor::where('api_token', $token)->get();

        if (count($supervisors) == 0) {
            abort(403, 'Access denied');
        }

        $request->attributes->add(['supervisor' => $supervisors[0]]);

        return $next($request);
    }
}
