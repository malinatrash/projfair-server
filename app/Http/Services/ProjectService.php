<?php

namespace App\Http\Services;

use App\Models\Project;
use App\Models\ProjectSpeciality;
use App\Models\ProjectSupervisor;
use App\Models\Skill;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;

class ProjectService
{

    /** Получить проекты с фильтрацией */
    public function filter(
        ?array $difficulties = null,
        ?string $title = null,
        ?array $stateIds = null,
        ?array $typeIds = null,
        ?array $specialityIds = null,
        ?string $dateStart = null,
        ?string $dateEnd = null,
        ?array $skillIds = null,
        ?string $nativeInstituteId = null
    ): Collection {
        return Project::with('skills', 'specialities', 'type',  'supervisors')
            ->inDifficulties($difficulties)
            ->inTitle($title)
            ->inStates($stateIds)
            ->inTypes($typeIds)
            ->inDates($dateStart, $dateEnd)
            ->inSpecialities($specialityIds)
            ->inSkills($skillIds)
            ->inNativeInstitute($nativeInstituteId)
            ->get();
    }

    /** Создать проект */
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



    /** Обновить проект */
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

    /** Удалить проект */
    public function delete()
    {
    }

    /** Получить проекты */
    public function index(): Collection
    {
        return Project::all();
    }
}
