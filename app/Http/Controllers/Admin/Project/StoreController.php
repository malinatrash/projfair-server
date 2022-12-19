<?php

namespace App\Http\Controllers\Admin\Project;

use App\Http\Controllers\Controller;
use App\Http\Requests\Project\StoreRequestAdminProject;
use App\Models\Project;

/**
 * Создать проект
 */
class StoreController extends Controller
{
    /**
     * @OA\Post(
     *     path="/api/admin/projects",
     *     summary="Создать проект",
     *     tags={"ADMIN"},
     *     @OA\RequestBody(
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
     *                      property="state_id",
     *                  ),
     *                  @OA\Property(
     *                      type="integer",
     *                      property="type_id",
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
     *         description="Проект создан",
     *     ),
     * )
     * )
     */
    public function __invoke(StoreRequestAdminProject $request)
    {
        $data = $request->validated();
        $skillIds = $data['skill_ids'];
        $supervisorIds = $data['supervisor_ids'];
        $specialityIds = $data['speciality_ids'];
        unset($data['skill_ids']);
        unset($data['supervisor_ids']);
        unset($data['speciality_ids']);
        $project = Project::create($data);
        $project->skills()->attach($skillIds);
        $project->supervisors()->attach($supervisorIds);
        $project->specialities()->attach($specialityIds);
        return response([]);
    }
}
