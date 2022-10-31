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

        return CandidateResource::collection($project->participants());
    }
}
