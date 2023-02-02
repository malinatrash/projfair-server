<?php

namespace App\Utils;

use App\Models\Candidate;
use App\Models\Participation;
use App\Models\Project;

/**
 * Связан ли студент с проектом
 *
 * @param Candidate $candidate - студент
 * @return bool
 */
function isCandidateOnProject(Candidate $candidate, Project $project): bool
{
    $candidateId = $candidate['id'];
    $projectId = $project->id;
    return Participation::where('candidate_id', $candidateId)->where('project_id', $projectId)->get()->count() != 0;
}
