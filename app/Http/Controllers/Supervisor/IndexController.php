<?php

namespace App\Http\Controllers\Supervisor;

use App\Http\Controllers\Controller;
use App\Models\Supervisor;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $supervisors = Supervisor::all();
        return $supervisors;
    }
}
