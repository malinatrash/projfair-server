<?php

namespace App\Http\Controllers\Supervisor\Projects;

use App\Http\Controllers\Controller;
use App\Http\Requests\Project\StoreRequestBySupervisorProject;
use App\Http\Resources\ProjectResource;
use App\Http\Services\SupervisorCabinetService;

/**
 * Создать проект (Преподаватель)
 */
class StoreController extends Controller
{

    public function __construct(private SupervisorCabinetService $supervisorCabinetService)
    {
    }
    /**
     * @OA\Post(
     *     path="api/supervisor/projects",
     *     summary="Создать проект на рассмотрении (id=6) или черновик (id=7). Делает преподаватель",
     *      tags={"CABINET SUPERVISOR"},
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
    public function __invoke(StoreRequestBySupervisorProject $request)
    {
        $data = $request->validated();

        $supervisorCreator = $request->get('supervisor');
        $project = $this->supervisorCabinetService->createProject($supervisorCreator, $data);

        return new ProjectResource($project);
    }
}
