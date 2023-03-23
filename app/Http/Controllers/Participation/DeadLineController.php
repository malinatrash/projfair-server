<?php

namespace App\Http\Controllers\Participation;

use App\Http\Controllers\Controller;
use App\Http\Services\HarvestSettingService;
use App\Models\Participation;
use App\Models\ParticipationDeadLine;

/**
 * Получение дедлайна подачи заявки
 */
class DeadLineController extends Controller
{
    public function __construct(private HarvestSettingService $harvestSettingService)
    {
    }
    /**
     * @OA\Get(
     *     path="/api/participationsDeadline",
     *     summary="Получение дедлайна подачи заявки",
     *     tags={"Participation"},
     *     @OA\Response(
     *         response="200",
     *         description="Дата дедлайна",
     *         @OA\MediaType(
     *             mediaType="text/plaint",
     *             @OA\Schema(
     *                 type="string",
     *             ),
     *         ),
     *     ),
     *     @OA\Response(
     *         response="404",
     *         description="Дедлайн не назначен",
     *     ),
     * )
     * )
     */
    public function __invoke()
    {
        $deadline = $this->harvestSettingService->getCurrentHarvestDeadline();
        if (!$deadline) {
            return response('Дедлайн не назначен', 404);
        }

        return $deadline;
    }
}
