<?php

namespace App\Http\Controllers\Admin\Candidate;

use App\Http\Controllers\Controller;
use App\Http\Requests\Candidate\StoreRequestAdminCandidate;
use App\Models\Candidate;

/**
 * Добавить студента
 */
class StoreController extends Controller
{
    /**
     * @OA\Post(
     *     path="/api/admin/candidates",
     *     summary="Создание студента",
     *     tags={"ADMIN"},
     *      @OA\RequestBody(
     *         description="Параметры для создания студента",
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
     *                      type="boolean",
     *                      property="can_send_participations",
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
     *         description="Информация о студенте создана",
     *     )
     * )
     * )
     */
    public function __invoke(StoreRequestAdminCandidate $request)
    {
        $data = $request->validated();
        $skillIds = $data['skill_ids'];
        unset($data['skill_ids']);
        $candidate = Candidate::create($data);

        $candidate->skills()->attach($skillIds);
        return response([]);
    }
}
