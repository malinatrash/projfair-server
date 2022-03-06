<?php

namespace App\Http\Controllers\Participation;

use App\Http\Controllers\Controller;
use App\Models\Participation;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Participation $participation)
    {
        return $participation;
    }
}
