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
    $allCandidatesParticipations = Participation::where('candidate_id', $candidateId)->get();

    $candidatesParticipations = [];
    foreach ($allCandidatesParticipations as $participation) {
        if ($participation->priority < 4 && $participation->state_id === '1') {
            array_push($candidatesParticipations, $participation);
        }
    }


    return count($candidatesParticipations) > 2;
}
