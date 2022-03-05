<?php

namespace App\Http\Controllers\Supervisor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __invoke()
    {
        // $supervisor = User::where('username',$request->login)->first();
        // if ($supervisor && Hash::check($request->password,$supervisor->password)) {
        //     $supervisor->api_token = Str::random(100);
        //     $supervisor->save();
        //     return response()->json([
        //         "status" => true,
        //         "supervisor" => $supervisor
        //     ])->setStatusCode(200, 'Supervisor Authenticated');
        // }
        // else {
        //     return response()->json([
        //         "status"=>false,
        //         ],401);
        // }
    }
}
