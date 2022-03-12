<?php

namespace App\Http\Controllers\Campus;

use App\Http\Controllers\Controller;
use App\Models\Candidate;
use App\Models\Supervisor;
use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function __invoke(Request $request)
    {
        $token = $request->get('api_token');

        Supervisor::where('api_token', $token)->update(['api_token' => null]);
        Candidate::where('api_token', $token)->update(['api_token' => null]);

        return redirect()->away('https://int.istu.edu/?logout=yes');
    }
}
