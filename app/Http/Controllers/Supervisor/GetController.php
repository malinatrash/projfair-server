<?php

namespace App\Http\Controllers\Supervisor;

use App\Http\Controllers\Controller;
use App\Models\Supervisor;
use Illuminate\Http\Request;

class GetController extends Controller
{
    public function __invoke(Request $request) // DEPRECATED получить информацию о преподавателе по токену
    {
        $token = $request->get('api_token');
        $data = Supervisor::where('api_token', $token)->get()[0];
        if (!$data) {
            return response('Не найдего', 404);
        }
        return response()->json($data, 200);
    }
}
