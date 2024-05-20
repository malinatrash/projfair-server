<?php

namespace App\Http\Controllers\Participation;

use App\Http\Controllers\Controller;
use App\Http\Resources\CandidateResource;
use App\Http\Resources\ParticipationResource;
use App\Models\Project;
use App\Models\Participation;


/**
 * Получение участников на проекте
 */
class GetTestController extends Controller
{
  
    public function __invoke(Project $project)
    {
        $participation = Participation::where('project_id', $project->id)->whereIn('state_id', [3])
        ->get();

       
        return ParticipationResource::collection($participation);
    }
}
