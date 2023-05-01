<?php

namespace App\Http\Services;

use App\Models\Project;
use Illuminate\Database\Eloquent\Collection;

class CandidateCabinetService
{
    public function __construct(private ProjectService $projectService)
    {
    }

    /** Получить проекты для ревью */
    public function getProjectsToReview(): Collection
    {
        // TODO do
        return $this->projectService->index();
    }

    /** Дать ревью на заявку создания проекта от преподавателя. Одобрить или нет */
    public function reviewProject(array $data, Project $project): Project
    {
        return $this->projectService->update($data, $project);
    }
}
