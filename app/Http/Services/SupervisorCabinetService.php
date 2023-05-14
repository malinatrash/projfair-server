<?php

namespace App\Http\Services;

use App\Models\Project;
use App\Models\ProjectSupervisorRoleEnum;
use App\Models\Supervisor;

class SupervisorCabinetService
{
    public function __construct(private ProjectService $projectService)
    {
    }

    /** Создать проект от преподавателя */
    public function deleteProject(Project $project): void
    {
        $project->delete();
    }

    /** Создать проект от преподавателя */
    public function createProject(Supervisor $supervisorCreator, array $data): Project
    {
        $data['supervisors'] = $this->mergeSupervisorCreatorWithSupervisors($supervisorCreator, $data['supervisors']);
        return $this->projectService->store($data);
    }

    /** Обновить проект от преподавателя */
    public function updateProject(Supervisor $supervisorCreator, array $data, Project $project): Project
    {
        if (isset($data['supervisors'])) {
            $data['supervisors'] = $this->mergeSupervisorCreatorWithSupervisors($supervisorCreator, $data['supervisors']);
        }
        return $this->projectService->update($data, $project);
    }

    /** Вставить преподавателя-создателя проекта в массив преподавателей на проекте */
    private function mergeSupervisorCreatorWithSupervisors(Supervisor $supervisorCreator, array &$supervisorsRoles): array
    {
        $hasSupervisorCreator = false;
        $supervisorCreatorRoleId = ProjectSupervisorRoleEnum::creator->value;
        foreach ($supervisorsRoles as &$supervisor) {
            if ($supervisor["supervisor_id"] == $supervisorCreator->id) {
                $hasSupervisorCreator = true;
                if (!in_array($supervisorCreatorRoleId, $supervisor["role_ids"])) {
                    array_push($supervisor["role_ids"], $supervisorCreatorRoleId);
                }
                break;
            }
        }
        if (!$hasSupervisorCreator) {
            array_push($supervisorsRoles, [
                "supervisor_id" => $supervisorCreator->id,
                "role_ids" => [$supervisorCreatorRoleId]
            ]);
        }

        return $supervisorsRoles;
    }
}
