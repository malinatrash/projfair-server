<?php

namespace App\Http\Controllers\Supervisor\Projects;

use App\Http\Controllers\Controller;
use App\Http\Requests\Project\StoreRequestSupervisorCabinetProject;
use App\Models\Project;
use App\Models\Supervisor;
use Illuminate\Http\Request;

/**
 * Создать проект (Преподаватель)
 */
class StoreController extends Controller
{
    /**
     * @OA\Post(
     *     path="api/supervisor/projects",
     *     summary="Создать проект на рассмотрении. Делает преподаватель",
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
     *                      property="department_id",
     *                  ),
     *                  @OA\Property(
     *                      type="array",
     *                      property="supervisor_ids",
     *                      @OA\Items(type="integer")
     *                  ),
     *                  @OA\Property(
     *                      type="array",
     *                      property="skill_ids",
     *                      @OA\Items(type="integer")
     *                  ),
     *                  @OA\Property(
     *                      type="array",
     *                      property="speciality_ids",
     *                      @OA\Items(type="integer")
     *                  ),
     *              )
     *          )
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="Проект подан на рассмотрение",
     *     ),
     * )
     */
    public function __invoke(StoreRequestSupervisorCabinetProject $request)
    {
        $supervisor = $request->get('supervisor');
        $data = $request->validated();
        dd($data);
        return $data;
        $skillIds = $data['skill_ids'];
        $supervisorIds = $data['supervisor_ids'];
        $specialityIds = $data['speciality_ids'];
        unset($data['skill_ids']);
        unset($data['supervisor_ids']);
        unset($data['speciality_ids']);
        $data['state_id'] = 5;

        $project = Project::create($data);

        $project->skills()->attach($skillIds);
        $project->supervisors()->attach($supervisorIds);
        $project->specialities()->attach($specialityIds);
        return response([]);
    }
}
