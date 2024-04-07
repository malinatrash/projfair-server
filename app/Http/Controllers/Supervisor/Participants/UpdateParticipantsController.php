<?php

namespace App\Http\Controllers\Supervisor\Participants;

use App\Http\Controllers\Controller;
use App\Http\Requests\Project\UpdateRequestBySupervisorProject;
use App\Http\Resources\ProjectResource;
use App\Http\Services\SupervisorCabinetService;
use App\Models\Project;
use App\Models\Participation;
use App\Models\Candidate;

/**
 * Обновить проект
 */
class UpdateParticipantsController extends Controller
{
    public function __construct(private SupervisorCabinetService $supervisorCabinetService)
    {
    }
    
    public function __invoke(UpdateRequestBySupervisorProject $request, Project $project, Candidate $candidate)
    {
        $participation = Participation::where('project_id', $project->id)->where('candidate_id', $candidate->id)
        ->first();
        
        if (!$participation) {  // Студент не найден            
            return response()->json(['message' => 'Участие не найдено'], 404);
        }
        
        $data = $request->validated();

        $supervisorCreator = $request->get('supervisor');

        $project = $this->supervisorCabinetService->updateProject($supervisorCreator, $data, $project);

        return new ProjectResource($project);
    }
}
