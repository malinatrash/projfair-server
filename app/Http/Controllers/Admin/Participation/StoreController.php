<?php

namespace App\Http\Controllers\Admin\Participation;

use App\Http\Controllers\Controller;
use App\Http\Requests\Participation\StoreRequestAdminParticipation;
use App\Models\Participation;

/**
 * Создать заявку
 */
class StoreController extends Controller
{
    /**
     * @OA\Post(
     *     path="/api/admin/participations",
     *     summary="Создать заявку @TODO BODY",
     *      tags={"ADMIN"},
     *      @OA\RequestBody(
     *         description="Параметры для создания заявки",
     *         required=true,
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                  @OA\Property(
     *                      type="integer",
     *                      property="priority",
     *                  ),
     *                  @OA\Property(
     *                      type="integer",
     *                      property="state_id",
     *                  ),
     *                  @OA\Property(
     *                      type="integer",
     *                      property="candidate_id",
     *                  ),
     *                  @OA\Property(
     *                      type="integer",
     *                      property="project_id",
     *                  ),
     *              )
     *          )
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="Заявка создана",
     *     ),
     *     @OA\Response(
     *         response="400",
     *         description="У кандидата уже есть заявка на этот проект",
     *     ),
     * )
     * )
     */
    public function __invoke(StoreRequestAdminParticipation $request)
    {
        $data = $request->validated();

        $projectId = $data['project_id'];
        $candidateId = $data['candidate_id'];

        $isParticipationExists = Participation::firstWhere([
            ['project_id', '=', $projectId],
            ['candidate_id', '=', $candidateId],
        ]);

        if ($isParticipationExists) {
            return response('У кандидата уже есть заявка на этот проект', 400);
        }

        Participation::create($data);
        return response([]);
    }
}
