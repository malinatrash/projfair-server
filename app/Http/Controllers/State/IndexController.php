<?php

namespace App\Http\Controllers\State;

use App\Http\Controllers\Controller;
use App\Models\State;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $states = State::all();
        return $states;
    }
}
