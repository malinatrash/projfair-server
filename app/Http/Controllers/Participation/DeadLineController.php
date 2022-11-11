<?php

namespace App\Http\Controllers\Participation;

use App\Http\Controllers\Controller;
use App\Models\Participation;
use App\Models\ParticipationDeadLine;
use Illuminate\Http\Request;

/**
 * Получение дедлайна подачи заявки
 */
class DeadLineController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/participations_deadline",
     *     summary="Получение дедлайна подачи заявки",
     *     tags={"Participation"},
     *     @OA\Response(
     *         response="200",
     *         description="Информация об институте",
     *         @OA\JsonContent(ref="#/components/schemas/DeadLine")
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
        $deadline = ParticipationDeadLine::find(1);
        if (!$deadline) {
            return response('Дедлайн не назначен', 404);
        }

        return $deadline->deadline;
    }
}
