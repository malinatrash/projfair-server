<?php

namespace App\Http\Controllers\Admin\Participation;

use App\Http\Controllers\Controller;
use App\Http\Requests\Participation\UpdateRequestAdminParticipation;
use App\Models\Participation;
use Illuminate\Http\Request;

/**
 * Изменение заявки
 */
class UpdateController extends Controller
{
    /**
     * @OA\Patch(
     *     path="/api/admin/participations/${id}",
     *     summary="Изменение заявки на участие",
     *      tags={"ADMIN"},
     *      @OA\Parameter(
     *         name="id",
     *         description="ID Заявки",
     *          in = "path",
     *         required=true,
     *         @OA\Schema(
     *             type="integer"
     *         )
     *     ),
     *     @OA\RequestBody(
     *          description="Параметры для обновления заявки",
     *          required=true,
     *          @OA\MediaType(
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
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="Заявка изменена",
     *     ),
     *     @OA\Response(
     *         response="404",
     *         description="Заявка не найдена",
     *     ),
     *     @OA\Response(
     *         response="400",
     *         description="У кандидата уже есть заявка на этот проект",
     *     ),
     * )
     * )
     */
    public function __invoke(UpdateRequestAdminParticipation $request, Participation $participation)
    {
        $data = $request->validated();

        $projectId = isset($data['project_id']) ? $data['project_id'] : false;
        $candidateId = isset($data['candidate_id']) ? $data['candidate_id'] : false;

        if ($projectId && $candidateId) {
            $isParticipationExists = Participation::firstWhere([
                ['project_id', '=', $projectId],
                ['candidate_id', '=', $candidateId],
            ]);

            if ($isParticipationExists) {
                return response('У кандидата уже есть заявка на этот проект', 400);
            }
        }
        $participation->update($data);
        return $participation;
    }
}
