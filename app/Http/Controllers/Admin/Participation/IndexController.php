<?php

namespace App\Http\Controllers\Admin\Participation;

use App\Http\Controllers\Controller;
use App\Http\Resources\ParticipationResource;
use App\Models\Participation;

/**
 * Получить все заявки
 */
class IndexController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/admin/participations",
     *     summary="Получить все заявки",
     *      tags={"ADMIN"},
     *     @OA\Response(
     *         response="200",
     *         description="Список всех заявок",
     *         @OA\JsonContent(
     *             type="array",
     *             @OA\Items(ref="#/components/schemas/Participation")
     *          )
     *     ),
     * )
     * )
     */
    public function __invoke()
    {
        $participations = Participation::all();
        return ParticipationResource::collection($participations);
    }
}
