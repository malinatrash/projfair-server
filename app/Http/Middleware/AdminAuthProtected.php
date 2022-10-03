<?php

namespace App\Http\Middleware;

use App\Models\Admin;
use App\Models\Candidate;
use App\Models\Supervisor;
use Closure;
use Illuminate\Http\Request;

class AdminApiAuthProtected
{
    public function handle(Request $request, Closure $next)
    {
        $token = $request->cookie('token');
        if ($token == null) {
            return abort(403, 'Access denied');
        }
        $admins = Admin::where('username', $token)->get(); // TODO Придумать как авторизовать админа
        if (count($admins) == 0) {
            abort(403, 'Access denied');
        }
        $request->attributes->add(['admin' => $admins[0]]);

        return $next($request);
    }
}