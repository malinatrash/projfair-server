<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use App\Models\Participation;
use App\Models\Project;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function __invoke(Project $project)
    {
        $participations = Participation::where('project_id', '=', $project->id)->get();
        $participations->load('candidate');
        $project->load('skills', 'specialities', 'type', 'state', 'supervisor');
        $project['skills'] = $project->skills;
        $project['state'] = $project->state;
        $project['supervisor'] = $project->supervisor;
        if (isset($project['supervisors'])) {
            $project['supervisors'] = explode(",", $project['supervisors']);
        }
        $project['type'] = $project->type;
        $project['participations'] = $participations;
        return $project;
    }
}
