<?php

namespace App\Http\Controllers\Campus;

use App\Http\Controllers\Controller;
use App\Models\Candidate;
use App\Models\Supervisor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class LogoutController extends Controller
{
    public function __invoke(Request $request)
    {
        $token = $request->get('api_token');

        Supervisor::where('api_token', $token)->update(['api_token' => null]);
        Candidate::where('api_token', $token)->update(['api_token' => null]);
        $cookie = Cookie::queue(Cookie::forget('token'));
        $cookie = Cookie::queue(Cookie::forget('is_student'));
        return redirect()->away('https://int.istu.edu/?logout=yes');
    }
}
