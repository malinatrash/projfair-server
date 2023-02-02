<?php

namespace App\Utils;

use App\Models\Project;

/**
 * Находится ли проект в состоянии набора
 * @param Project $project
 * @return bool
 */
function isProjectOnRecruitment(Project $project): bool
{
    return $project->state->id == 1;
}
