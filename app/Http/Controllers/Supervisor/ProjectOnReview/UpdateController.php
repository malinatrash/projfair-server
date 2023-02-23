<?php

namespace App\Http\Controllers\Supervisor\ProjectOnReview;

use App\Http\Controllers\Controller;
use App\Http\Requests\Project\UpdateRequestBySupervisorProject;
use App\Models\Project;

/**
 * Обновить проект
 */
class UpdateController extends Controller
{
    /**
     * @OA\Patch(
     *     path="api/supervisor/projectsOnReview/${id}",
     *     summary="Обновить проект на рассмотрении. Делает преподаватель",
     *      tags={"SUPERVISOR CABINET"},
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
     *         description="Проект на рассмотрение обновлен",
     *     ),
     * )
     */
    public function __invoke(UpdateRequestBySupervisorProject $request, Project $project)
    {
        $data = $request->validated();

        if (isset($data['skill_ids'])) {
            $project->skills()->sync($data['skill_ids']);
            unset($data['skill_ids']);
        }
        if (isset($data['supervisor_ids'])) {
            $project->supervisors()->sync($data['supervisor_ids']);
            unset($data['supervisor_ids']);
        }
        if (isset($data['speciality_ids'])) {
            $project->specialities()->sync($data['speciality_ids']);
            unset($data['speciality_ids']);
        }

        $project->update($data);
        return response([]);
    }
}
