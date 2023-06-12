<?php

namespace App\Http\Controllers\Admin\Participation;

use App\Http\Controllers\Controller;
use App\Http\Requests\Participation\StoreRequestAdminParticipation;
use App\Models\Participation;

/**
 * Обновить или создать заявку если не существует
 */
class UpdateOrStoreController extends Controller
{
    /**
     * @OA\Post(
     *     path="/api/admin/participations/updateOrCreate",
     *     summary="Обновить или создать заявку если не существует",
     *      tags={"ADMIN"},
     *      @OA\RequestBody(
     *         description="Параметры для создания-обновления заявки",
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
     *         description="созданая-обновленная заявка",
     *     ),
     * )
     * )
     */
    public function __invoke(StoreRequestAdminParticipation $request)
    {
        $data = $request->validated();

        $projectId = $data['project_id'];
        $candidateId = $data['candidate_id'];
        $stateId = $data['state_id'];
        $priority = $data['priority'];

        $participation = Participation::updateOrCreate(
            ['project_id' => $projectId, 'candidate_id' => $candidateId],
            ['priority' => $priority, 'state_id' => $stateId],
        );

        return response($participation);
    }
}
