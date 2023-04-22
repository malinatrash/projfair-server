<?php

namespace App\Http\Services;

use App\Models\Project;
use App\Models\ProjectSpeciality;
use App\Models\ProjectSupervisor;
use App\Models\ProjectSupervisorRoleEnum;
use App\Models\Skill;
use App\Models\Supervisor;
use Illuminate\Support\Facades\DB;

class ProjectService
{
    public function storeBySupervisor(Supervisor $supervisorCreator, array $data): Project
    {
        $data['supervisors'] = $this->mergeSupervisorCreatorWithSupervisors($supervisorCreator, $data['supervisors']);
        return $this->store($data);
    }

    public function store(array $data): Project
    {
        return DB::transaction(function () use ($data) {
            $specialities = $data["specialities"];
            $supervisors = $data["supervisors"];
            unset($data['specialities']);
            unset($data['supervisors']);

            $skillIds = $data['skill_ids'];
            $newSkillNames = $data['new_skills'];

            unset($data['skill_ids']);
            unset($data['new_skills']);
            $project = Project::create($data);

            foreach ($specialities as $speciality) {
                ProjectSpeciality::create([
                    "project_id" => $project->id,
                    "speciality_id" => $speciality["specialitiy_id"],
                    "course" => $speciality["course"],
                    "priority" => $speciality["priority"]
                ]);
            }

            foreach ($supervisors as $supervisor) {
                $projectSupervisor = ProjectSupervisor::create([
                    "project_id" => $project->id,
                    "supervisor_id" => $supervisor["supervisor_id"]
                ]);
                $projectSupervisor->roles()->attach($supervisor["role_ids"]);
            }

            foreach ($newSkillNames as $newSkillName) {
                $skill = Skill::firstOrCreate([
                    "name" => $newSkillName,
                    "skillCategory_id" => 1,
                ]);
                array_push($skillIds, $skill->id);
            }

            $project->skills()->attach($skillIds);
            return $project;
        });
    }

    public function updateBySupervisor(Supervisor $supervisorCreator, array $data, Project $project): Project
    {
        if (isset($data['supervisors'])) {
            $data['supervisors'] = $this->mergeSupervisorCreatorWithSupervisors($supervisorCreator, $data['supervisors']);
        }
        return $this->update($data, $project);
    }

    public function update(array $data, Project $project): Project
    {
        return DB::transaction(function () use ($data, $project) {
            if (isset($data['skill_ids'])) {
                $project->skills()->sync($data['skill_ids']);
                unset($data['skill_ids']);
            }

            if (isset($data['new_skills'])) {
                $newSkillIds = [];
                $newSkillNames = $data['new_skills'];
                unset($data['new_skills']);
                foreach ($newSkillNames as $newSkillName) {
                    $skill = Skill::firstOrCreate([
                        "name" => $newSkillName,
                        "skillCategory_id" => 1,
                    ]);
                    array_push($newSkillIds, $skill->id);
                }
                $project->skills()->syncWithoutDetaching($newSkillIds);
            }


            if (isset($data['supervisors'])) {
                ProjectSupervisor::where('project_id', $project->id)->delete();
                $supervisors = $data['supervisors'];
                unset($data['supervisors']);
                foreach ($supervisors as $supervisor) {
                    $projectSupervisor = ProjectSupervisor::create([
                        "project_id" => $project->id,
                        "supervisor_id" => $supervisor["supervisor_id"]
                    ]);
                    $projectSupervisor->roles()->attach($supervisor["role_ids"]);
                }
            }


            if (isset($data['specialities'])) {
                $specialities = $data['specialities'];
                unset($data['specialities']);
                ProjectSpeciality::where('project_id', $project->id)->delete();
                foreach ($specialities as $speciality) {
                    ProjectSpeciality::create([
                        "project_id" => $project->id,
                        "speciality_id" => $speciality["specialitiy_id"],
                        "course" => $speciality["course"],
                        "priority" => $speciality["priority"]
                    ]);
                }
            }

            $project->update($data);
            return $project;
        });
    }

    public function delete()
    {
    }

    public function index()
    {
    }

    public function show()
    {
    }

    /** Вставить преподавателя-создателя проекта в массив преподавателей на проекте */
    public function mergeSupervisorCreatorWithSupervisors(Supervisor $supervisorCreator, array &$supervisorsRoles): array
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
