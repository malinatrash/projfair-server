<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use App\Http\Resources\CandidateResource;
use App\Models\Participation;
use App\Models\Project;
use App\Models\StateParticipation;
use Illuminate\Http\Request;

/**
 * Получение участников на проекте
 */
class GetParticipantsController extends Controller
{
    public function __invoke(Project $project)
    {
        $activeState = StateParticipation::where('state', 'Участвует')->get()[0];
        $activeParticipations = Participation::with('candidate')->where('project_id', '=', $project->id)->where('state_id', '=', $activeState->id)->get();
        $participants = $activeParticipations->pluck('candidate');
        return CandidateResource::collection($participants);
    }
}
