<?php

namespace App\Http\Controllers\Participation;

use App\Http\Controllers\Controller;
use App\Http\Services\HarvestSettingService;
use App\Models\Candidate;
use App\Models\Participation;
use Illuminate\Http\Request;

/**
 * Удаление заявки у студента
 */
class DeleteController extends Controller
{
    public function __construct(private HarvestSettingService $harvestSettingService)
    {
    }
    /**
     * @OA\Delete(
     *     path="/api/participations/${id}",
     *     summary="Удаление заявки у авторизованного студента",
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
     *     @OA\Response(
     *         response="200",
     *         description="Заявка удалена",
     *     ),
     *     @OA\Response(
     *         response="403",
     *         description="Вы не можете удалить чужую заявку",
     *     )
     * )
     * )
     */
    public function __invoke(Participation $participation, Request $request)
    {
        $candidate = $request->get('candidate');
        if ($this->harvestSettingService->isCandidateBannedByHarvestSettings($candidate)) {
            return response("Сейчас вы не можете удалить заявку", 403);
        }
        if ($participation->candidate->id != $candidate->id) {
            return response("Вы не можете удалить чужую заявку", 403);
        }

        $participation->delete();
        return response([]);
    }
}
