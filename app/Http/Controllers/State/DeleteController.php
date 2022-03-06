<?php

namespace App\Http\Controllers\State;

use App\Http\Controllers\Controller;
use App\Models\State;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(State $state)
    {
        $state->delete();
        return response([]);
    }
}
