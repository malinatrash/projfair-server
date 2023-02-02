<?php

namespace App\Utils;

use App\Models\Candidate;
use App\Models\Participation;

/**
 * Проверка имеет ли студент максимальное количество отправленных заявок
 *
 * @param Candidate $candidate
 * @return bool
 */
function isCandidateHasMaxSendedParticipation(Candidate $candidate): bool
{
    $candidateId = $candidate['id'];
    $candidatesParticipations = Participation::where('candidate_id', $candidateId)->get();

    return count($candidatesParticipations) > 2;
}
