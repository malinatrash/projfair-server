<?php

namespace App\Http\Controllers\Admin\Participation;

use App\Http\Controllers\Controller;
use App\Http\Resources\ParticipationResource;
use App\Models\Participation;

/**
 * Получить заявку по ID
 */
class ShowController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/admin/participations/{id}",
     *     summary="Получить заявку по ID",
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
     *     @OA\Response(
     *         response="200",
     *         description="Заявка",
     *         @OA\JsonContent(ref="#/components/schemas/Participation")
     *     ),
     * )
     * )
     */
    public function __invoke(Participation $participation)
    {
        return new ParticipationResource($participation);
    }
}
