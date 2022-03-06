<?php

namespace App\Http\Controllers\Supervisor;

use App\Http\Controllers\Controller;
use App\Models\Supervisor;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Supervisor $supervisor)
    {
        return $supervisor;
    }
}
