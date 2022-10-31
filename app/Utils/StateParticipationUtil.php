<?php

namespace App\Utils;

use App\Models\StateParticipation;

class StateParticipationUtil
{
    public function __construct()
    {
    }

    public function getActiveParticipation(): StateParticipation
    {
        return StateParticipation::where('state', 'Участвует')->get()[0];
    }
}
