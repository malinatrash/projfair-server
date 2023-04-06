<?php

namespace App\Http\Controllers\Supervisor\Projects;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProjectResource;
use App\Models\Project;
use App\Models\ProjectSpeciality;
use App\Models\ProjectSupervisor;
use App\Models\Skill;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

/**
 * Создать проект (Преподаватель)
 */
class StoreController extends Controller
{
    /**
     * @OA\Post(
     *     path="api/supervisor/projects",
     *     summary="Создать проект на рассмотрении (id=6) или черновик (id=7). Делает преподаватель",
     *      tags={"SUPERVISOR CABINET"},
     *      @OA\RequestBody(
     *         description="Параметры для создания проекта",
     *         required=true,
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                  @OA\Property(
     *                      type="string",
     *                      property="title",
     *                  ),
     *                  @OA\Property(
     *                      type="integer",
     *                      property="places",
     *                  ),
     *                  @OA\Property(
     *                      type="string",
     *                      property="goal",
     *                  ),
     *                  @OA\Property(
     *                      type="string",
     *                      property="description",
     *                  ),
     *                  @OA\Property(
     *                      type="integer",
     *                      property="difficulty",
     *                  ),
     *                  @OA\Property(
     *                      type="date",
     *                      property="date_start",
     *                  ),
     *                  @OA\Property(
     *                      type="date",
     *                      property="date_end",
     *                  ),
     *                  @OA\Property(
     *                      type="string",
     *                      property="requirements",
     *                  ),
     *                  @OA\Property(
     *                      type="string",
     *                      property="customer",
     *                  ),
     *                  @OA\Property(
     *                      type="string",
     *                      property="product_result",
     *                  ),
     *                  @OA\Property(
     *                      type="string",
     *                      property="study_result",
     *                  ),
     *                  @OA\Property(
     *                      type="string",
     *                      property="additional_inf",
     *                  ),
     *                  @OA\Property(
     *                      type="integer",
     *                      property="type_id",
     *                  ),
     *                  @OA\Property(
     *                      type="integer",
     *                      property="theme_source_id",
     *                  ),
     *                  @OA\Property(
     *                      type="integer",
     *                      property="department_id",
     *                  ),
     *                  @OA\Property(
     *                      type="integer",
     *                      property="prev_project_id",
     *                  ),
     *                  @OA\Property(
     *                      type="integer",
     *                      property="state_id",
     *                  ),
     *                  @OA\Property(
     *                      type="array",
     *                      property="supervisors",
     *                      @OA\Items(
     *                            @OA\Property(
     *                                type="integer",
     *                                property="supervisor_id",
     *                            ),
     *                            @OA\Property(
     *                                type="array",
     *                                property="role_ids",
     *                                @OA\Items(type="integer")
     *                            ),
     *                      ),
     *                  ),
     *                  @OA\Property(
     *                      type="array",
     *                      property="skill_ids",
     *                      @OA\Items(type="integer")
     *                  ),
     *                  @OA\Property(
     *                      type="array",
     *                      property="new_skills",
     *                      @OA\Items(type="string")
     *                  ),
     *                  @OA\Property(
     *                      type="array",
     *                      property="specialities",
     *                      @OA\Items(
     *                          @OA\Property(
     *                              type="integer",
     *                              property="specialitiy_id",
     *                          ),
     *                          @OA\Property(
     *                              type="integer",
     *                              property="course",
     *                          ),
     *                          @OA\Property(
     *                              type="integer",
     *                              property="priority",
     *                          ),
     *                      ),
     *                  ),
     *              )
     *          )
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="созданный проект",
     *         @OA\JsonContent(ref="#/components/schemas/Project")
     *     ),
     * )
     */
    public function __invoke(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'string',
            'places' => 'integer',
            'goal' => 'string',
            'description' => 'string',
            'difficulty' => 'integer',
            'date_start' => 'date',
            'date_end' => 'date',
            'requirements' => 'string',
            'customer' => 'string|nullable',
            'product_result' => 'string',
            'study_result' => 'string',
            'additional_inf' => 'string|nullable',

            'type_id' => 'required|integer|exists:states,id',
            'theme_source_id' => 'nullable|integer|exists:theme_sources,id',
            'department_id' => 'nullable|integer|exists:departments,id',
            'state_id' => 'numeric|min:6|max:7|exists:states,id',
            'prev_project_id' => 'nullable|integer|exists:projects,id',

            'supervisors' => 'nullable|array',
            'supervisors.supervisor_id' => 'nullable|integer|exists:supervisors,id',
            'supervisors.role_ids' => 'nullable|array',
            'supervisors.role_ids.*' => 'nullable|integer|min:2|max:3|exists:project_supervisor_roles,id',

            'skill_ids' => 'nullable|array',
            'skill_ids.*' => 'nullable|integer|exists:skills,id',

            'new_skills' => 'nullable|array',
            'new_skills.*' => 'nullable|string',

            'specialities' => 'nullable|array',
            'specialities.specialitiy_id' => 'nullable|integer|exists:specialities,id',
            'specialities.course' => 'nullable|integer',
            'specialities.priority' => 'nullable|integer',
        ]);

        if ($validator->fails()) {
            return $validator->errors();
        }

        $data = $validator->validated();


        $supervisorCreator = $request->get('supervisor');
        $supervisorCreatorRoleIds = [1];


        $specialities = $request["specialities"];
        $supervisors = $request["supervisors"];

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
        return new ProjectResource($project);
    }
}
