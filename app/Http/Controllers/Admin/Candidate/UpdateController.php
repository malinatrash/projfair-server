<?php

namespace App\Http\Controllers\Admin\Candidate;

use App\Http\Controllers\Controller;
use App\Http\Requests\Candidate\UpdateRequestAdminCandidate;
use App\Models\Candidate;

/**
 * Обновить данные пользователя
 */
class UpdateController extends Controller
{

    /**
     * @OA\Patch(
     *     path="/api/admin/candidates",
     *     summary="Обновить информацию о студенте @TODO BODY",
     *     tags={"ADMIN"},
     *     @OA\Parameter(
     *         name="id",
     *         description="ID студента",
     *          in = "path",
     *         required=true,
     *         @OA\Schema(
     *             type="integer"
     *         )
     *     ),
     *     @OA\RequestBody(
     *         description="Параметры для обновления студента",
     *         required=true,
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                  @OA\Property(
     *                      type="string",
     *                      property="fio",
     *                  ),
     *                  @OA\Property(
     *                      type="string",
     *                      property="about",
     *                  ),
     *                  @OA\Property(
     *                      type="string",
     *                      property="email",
     *                  ),
     *                  @OA\Property(
     *                      type="integer",
     *                      property="numz",
     *                  ),
     *                  @OA\Property(
     *                      type="string",
     *                      property="phone",
     *                  ),
     *                  @OA\Property(
     *                      type="integer",
     *                      property="course",
     *                  ),
     *                  @OA\Property(
     *                      type="string",
     *                      property="training_group",
     *                  ),
     *                  @OA\Property(
     *                      type="array",
     *                      property="skill_ids",
     *                      @OA\Items(type="integer")
     *                  ),
     *              )
     *          )
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="Информация о студенте обновлена",
     *     ),
     *     @OA\Response(
     *         response="404",
     *         description="Студент не найден",
     *     ),
     * )
     * )
     */
    public function __invoke(UpdateRequestAdminCandidate $request, Candidate $candidate)
    {
        $data = $request->validated();
        if (isset($data['skill_ids'])) {
            $candidate->skills()->sync($data['skill_ids']);
            unset($data['skill_ids']);
        }
        $candidate->update($data);
        return response([]);
    }
}
