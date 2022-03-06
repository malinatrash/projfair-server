<?php

namespace App\Http\Controllers\Participation;

use App\Http\Controllers\Controller;
use App\Models\Participation;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $participations = Participation::all();
        return $participations;
    }
}
