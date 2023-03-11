<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class AdminAuthProtected
{
    public function handle(Request $request, Closure $next)
    {
        // $token = $request->cookie('token');
        // if ($token == null) {
        //     return response(['error' => 'Не найдено'], 404);
        // }
        // $admins = Admin::where('username', $token)->get(); // TODO Придумать как авторизовать админа
        // if (count($admins) == 0) {
        return response(['error' => 'Не найдено'], 404);
        // }
        // $request->attributes->add(['admin' => $admins[0]]);

        // return $next($request);
    }
}
