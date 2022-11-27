<?php

namespace App\Http\Controllers\Admin\Participation;

use App\Http\Controllers\Controller;
use App\Models\Participation;

/**
 * Удалить заявку по ID
 */
class DeleteController extends Controller
{
    /**
     * @OA\Delete(
     *     path="/api/admin/participations/${id}",
     *     summary="Удаление заявки",
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
     *         description="Заявка удалена",
     *     ),
     * )
     * )
     */
    public function __invoke(Participation $participation)
    {
        $participation->delete();
        return response([]);
    }
}
