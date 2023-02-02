<?php

namespace App\Http\Middleware;

use App\Models\Candidate;
use Closure;
use Illuminate\Http\Request;

/** Добавляет в запрос информацию о студенте, если авторизован */
class CandidateAuth
{
    /**
     * Проверить авторизирован ли пользователь. Если да, то добавить в запрос данные пользователя
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        $token = $request->cookie('token');

        if ($token != null) {
            $candidates = Candidate::where('api_token', $token)->get();

            if (count($candidates) != 0) {
                $request->attributes->add(['candidate' => $candidates[0]]);
            }
        }

        return $next($request);
    }
}
