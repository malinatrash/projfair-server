<?php

namespace App\Http\Controllers\Participation;

use App\Http\Controllers\Controller;
use App\Http\Requests\Participation\UpdateRequestAdminParticipation;
use App\Http\Services\HarvestSettingService;
use App\Models\Participation;

/**
 * Изменение приоритета заявки
 */
class UpdateController extends Controller
{
    public function __construct(private HarvestSettingService $harvestSettingService)
    {
    }
    /**
     * @OA\Patch(
     *     path="/api/participations/${id}",
     *     summary="Изменение приоритета заявки у авторизованного студента",
     *      tags={"CABINET CANDIDATE"},
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
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                 @OA\Property(
     *                     property="priority",
     *                     type="integer",
     *                 ),
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="Заявка изменена",
     *     ),
     *     @OA\Response(
     *         response="403",
     *         description="Вы не можете изменить чужую заявку",
     *     )
     * )
     * )
     */
    public function __invoke(UpdateRequestAdminParticipation $request, Participation $participation)
    {
        $candidate = $request->get('candidate');

        if ($this->harvestSettingService->isCandidateBannedByHarvestSettings($candidate)) {
            return response("Сейчас вы не можете обновить заявку", 403);
        }

        $data = $request->validated();

        if ($participation->candidate->id != $candidate->id) {
            return response("Вы не можете изменить чужую заявку", 403);
        }

        $participation->update([
            'priority' => $data['priority'],
        ]);
        return $participation;
    }
}
