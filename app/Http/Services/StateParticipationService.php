<?php

namespace App\Http\Services;

use App\Models\StateParticipation;

class StateParticipationService
{
    public function getActiveParticipation(): StateParticipation
    {
        return StateParticipation::firstWhere('state', 'Участвует');
    }
}
