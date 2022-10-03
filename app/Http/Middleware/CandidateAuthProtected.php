<?php

namespace App\Http\Middleware;

use App\Models\Candidate;
use App\Models\Supervisor;
use Closure;
use Illuminate\Http\Request;

class CandidateAuthProtected
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {

        $token = $request->cookie('token');
        if ($token == null) {
            abort(403, 'Access denied');
        }
        $candidates = Candidate::where('api_token', $token)->get();

        if (count($candidates) == 0) {
            abort(403, 'Access denied');
        }


        $request->attributes->add(['candidate' => $candidates[0]]);

        return $next($request);
    }
}
