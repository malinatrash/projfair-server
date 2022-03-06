<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $projects = Project::all();
        return $projects;
    }
}
