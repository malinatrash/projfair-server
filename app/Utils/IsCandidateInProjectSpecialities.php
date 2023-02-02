<?php

namespace App\Utils;

use App\Models\Candidate;
use App\Models\Project;
use App\Models\ProjectSpeciality;

function isCandidateInProjectSpecialities(Candidate $candidate, Project $project): bool
{
    $candidateSpeciality = getCandidateSpeciality($candidate);
    if ($candidateSpeciality == null) {
        return false;
    }

    $idsProjectWithCandidateSpeciality = [];

    $specilitiesInInstitute = $candidateSpeciality->institute->specialities;
    $specilitiesInInstituteIds = $specilitiesInInstitute->pluck('id')->toArray();
    $idProjectsWithSpecialities = ProjectSpeciality::select('project_id as id')->whereIn('speciality_id', $specilitiesInInstituteIds)->get()->toArray();

    foreach ($idProjectsWithSpecialities as $key => $value) {
        array_push($idsProjectWithCandidateSpeciality, $value['id']);
    }

    return in_array($project->id, $idsProjectWithCandidateSpeciality);
}
