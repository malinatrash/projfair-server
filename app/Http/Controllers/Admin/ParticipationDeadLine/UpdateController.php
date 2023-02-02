<?php

namespace App\Http\Controllers\Admin\ParticipationDeadLine;

use App\Http\Controllers\Controller;
use App\Http\Requests\ParticipationDeadline\UpdateRequestAdminParticipationDeadline;
use App\Models\ParticipationDeadLine;

/**
 * Изменение дедлайна подачи заявок
 */
class UpdateController extends Controller
{
    /**
     * @OA\Patch(
     *     path="/api/admin/participationDeadline",
     *     summary="Изменение дедлайна подачи заявок YYYY-MM-DD",
     *      tags={"ADMIN"},
     *     @OA\RequestBody(
     *          description="Параметры для обновления заявки",
     *          required=true,
     *          @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                  @OA\Property(
     *                      type="date",
     *                      property="date",
     *                  ),
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="дедлайн подачи заявок изменен",
     *     ),
     * )
     * )
     */
    public function __invoke(UpdateRequestAdminParticipationDeadline $request)
    {
        $data = $request->validated();
        ParticipationDeadLine::first()->update($data);
        return response([]);
    }
}
