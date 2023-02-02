<?php

namespace App\Utils;

use App\Models\Project;

function isProjectOnRecruitment(Project $project): bool
{
    return $project->state->id == 1;
}
