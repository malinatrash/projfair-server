<?php

namespace App\Http\Controllers\Supervisor\Projects;

use App\Http\Controllers\Controller;
use App\Http\Requests\Project\UpdateRequestBySupervisorProject;
use App\Http\Resources\ProjectResource;
use App\Http\Services\SupervisorCabinetService;
use App\Models\Project;

/**
 * Обновить проект
 */
class UpdateController extends Controller
{
    public function __construct(private SupervisorCabinetService $supervisorCabinetService)
    {
    }
    /**
     * @OA\Patch(
     *     path="api/supervisor/projects/${id}",
     *     summary="Обновить проект на рассмотрении. Делает преподаватель",
     *      tags={"CABINET SUPERVISOR"},
     *      @OA\Parameter(
     *         name="id",
     *         description="ID проекта",
     *          in = "path",
     *         required=true,
     *         @OA\Schema(
     *             type="integer"
     *         )
     *     ),
     *      @OA\RequestBody(
     *         description="Параметры для обновления проекта",
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
     *                      type="integer",
     *                      property="theme_source_id",
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
     *         description="Проект обновлен",
     *         @OA\JsonContent(ref="#/components/schemas/Project")
     *     ),
     * )
     */
    public function __invoke(UpdateRequestBySupervisorProject $request, Project $project)
    {
        $data = $request->validated();

        $supervisorCreator = $request->get('supervisor');

        $project = $this->supervisorCabinetService->updateProject($supervisorCreator, $data, $project);

        return new ProjectResource($project);
    }
}
