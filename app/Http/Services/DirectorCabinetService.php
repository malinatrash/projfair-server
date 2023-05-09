<?php

namespace App\Http\Services;

use App\Models\Project;
use App\Models\ProjectStateEnum;
use App\Models\Supervisor;
use Illuminate\Database\Eloquent\Collection;

class DirectorCabinetService
{
    public function __construct(private ProjectService $projectService)
    {
    }

    /** Получить проекты для ревью */
    public function getProjectsToReview(Supervisor $director): Collection
    {

        $instituteId = $director->department->institute->id;
        $stateIds = ProjectStateEnum::getDirectorCabinetStatesIds();


        return $this->projectService->filter(stateIds: $stateIds, nativeInstituteId: $instituteId);
    }

    /** Дать ревью на заявку создания проекта от преподавателя. Одобрить или нет */
    public function reviewProject(array $data, Project $project): Project | null
    {
        if ($data['state_id'] == ProjectStateEnum::approved->value) {
            $projectInstitute =  $project->department?->institute;
            if ($projectInstitute) {
                $maxApprovedProjectsInInstitute = $projectInstitute->max_approved_projects;
                $approvedProjectsInInstituteCount = count($this->projectService->filter(stateIds: [ProjectStateEnum::approved->value], nativeInstituteId: $projectInstitute->id));
                if ($approvedProjectsInInstituteCount >= $maxApprovedProjectsInInstitute) {
                    return null;
                }
            }
        }
        return $this->projectService->update($data, $project);
    }
}
