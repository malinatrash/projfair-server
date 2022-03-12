<?php

namespace App\Http\Controllers\Supervisor;

use App\Http\Controllers\Controller;
use App\Models\Supervisor;
use Illuminate\Http\Request;

class UpdateAboutController extends Controller
{
    public function __invoke(Request $request)
    {
        $token = $request->get('api_token');
        $id = Supervisor::where('api_token', $token)->select('id')->get()[0]['id'];

        if (isset($request['about'])) {
            Supervisor::where('id', $id)->update(['about' => $request['about']]);
        }

        return response()->json(['success' => 'OK'], 200);
    }
}
