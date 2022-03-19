<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Project $project)
    {

        $project['skills'] = $project->skills;
        $project['state'] = $project->state;
        $project['supervisor'] = $project->supervisor;
        $project['type'] = $project->type;
        return $project;
    }
}
