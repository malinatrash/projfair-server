<?php

namespace App\Http\Middleware;

use App\Models\Candidate;
use App\Models\Supervisor;
use Closure;
use Illuminate\Http\Request;

/** Защищенный роут кандидата (студента) */
class CandidateAuthProtected
{
    /**
     * Проверить авторизирован ли пользователь. Если нет, то вернуть 403 
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        $token = $request->cookie('token') ?? $request->header('token');
        if ($token == null) {
            return response(['error' => 'Не найдено'], 404);
        }
        $candidate = Candidate::firstWhere('api_token', $token);

        if (!isset($candidate)) {
            return response(['error' => 'Не найдено'], 404);
        }


        $request->attributes->add(['candidate' => $candidate]);

        return $next($request);
    }
}
