<?php

namespace App\Http\Services;

use App\Models\Project;
use App\Models\ProjectSpeciality;
use App\Models\ProjectSupervisor;
use App\Models\Skill;
use App\Models\Supervisor;

class ProjectService
{
    public function storeBySupervisor(Supervisor $supervisorCreator, $data): Project
    {
        $supervisorCreatorRoleIds = [1];
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

            if ($supervisor["supervisor_id"] == $supervisorCreator->id) {
                $supervisorCreatorRoleIds = array_merge($supervisorCreatorRoleIds, $supervisor["role_ids"]);
                continue;
            }

            $projectSupervisor = ProjectSupervisor::create([
                "project_id" => $project->id,
                "supervisor_id" => $supervisor["supervisor_id"]
            ]);

            $projectSupervisor->roles()->attach($supervisor["role_ids"]);
        }

        $projectSupervisorCreator = ProjectSupervisor::create([
            "project_id" => $project->id,
            "supervisor_id" => $supervisorCreator->id
        ]);

        $projectSupervisorCreator->roles()->attach($supervisorCreatorRoleIds);

        foreach ($newSkillNames as $newSkillName) {
            $skill = Skill::firstOrCreate([
                "name" => $newSkillName,
                "skillCategory_id" => 1,
            ]);

            array_push($skillIds, $skill->id);
        }

        $project->skills()->attach($skillIds);
        return $project;
    }
    public function store()
    {
    }

    public function update()
    {
    }
    public function updateBySupervisor(Supervisor $supervisorCreator, $data, Project $project): Project
    {
        $supervisorCreatorRoleIds = [1];

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

                if ($supervisor["supervisor_id"] == $supervisorCreator->id) {
                    $supervisorCreatorRoleIds = array_merge($supervisorCreatorRoleIds, $supervisor["role_ids"]);
                    continue;
                }

                $projectSupervisor = ProjectSupervisor::create([
                    "project_id" => $project->id,
                    "supervisor_id" => $supervisor["supervisor_id"]
                ]);

                $projectSupervisor->roles()->attach($supervisor["role_ids"]);
            }
            $projectSupervisorCreator = ProjectSupervisor::create([
                "project_id" => $project->id,
                "supervisor_id" => $supervisorCreator->id
            ]);

            $projectSupervisorCreator->roles()->attach($supervisorCreatorRoleIds);
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
}
