<?php

namespace App\Http\Controllers\Participation;

use App\Http\Controllers\Controller;
use App\Http\Resources\ParticipationResource;
use App\Models\Project;
use App\Models\Candidate;
use App\Models\Participation;
use App\Http\Requests\Project\UpdateRequestBySupervisorProject;
use Illuminate\Http\Request;
class UpdateParticipationController extends Controller
{
    public function update(UpdateRequestBySupervisorProject $request, Project $project, Candidate $candidate)
    {
        
        $participation = Participation::where('project_id', $project->id)->where('candidate_id', $candidate->id)->whereIn('state_id', [2, 3])
        ->first();

        if (!$participation) {           
            return response()->json(['message' => 'Участие не найдено'], 404);
        }

        
        $mark = $request->input('mark');
        $review = $request->input('review');

        
        
        $participation->update([
            'mark' => $mark,
            'review' => $review,
        ]);

        // Обновленные данные ParticipationResource
        return new ParticipationResource($participation);
    }
}
