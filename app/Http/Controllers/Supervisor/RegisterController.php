<?php

namespace App\Http\Controllers\Supervisor;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function __invoke()
    {
        // User::create (
        //     [
        //         'username' => $request->login,
        //         'password' => Hash::make($request->password),
        //         'fio'=> $request->fio,
        //         'email'=> $request->email,
        //         'position'=> $request->position
        //     ]
        // );
        // return response()
        //     ->json(["status"=>true])
        //     ->setStatusCode(201,"Supervisor has been registered");
    }
}
