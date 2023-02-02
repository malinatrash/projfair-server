<?php

namespace App\Utils;

use App\Models\Candidate;
use App\Models\Speciality;

/**
 * Получить специальность на которой учиться студента
 *
 * @param Candidate $candidate - студент
 * @return Speciality|null - специальность
 */
function getCandidateSpeciality(Candidate $candidate): Speciality | null
{

    $candidateSpecialityName = explode("-", $candidate['training_group'])[0];

    if ($candidateSpecialityName == null) {
        return null;
    }
    $specility = Speciality::where('name', $candidateSpecialityName)->first();
    return $specility;
}
