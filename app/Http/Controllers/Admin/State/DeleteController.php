<?php

namespace App\Http\Controllers\Admin\State;

use App\Http\Controllers\Controller;
use App\Models\State;

/**
 * Удалить состояние проекта (UNUSED)
 */
class DeleteController extends Controller
{
    /**
     * @OA\Delete(
     *     path="/api/admin/states/${id}",
     *     summary="Удалить состояние проекта",
     *      tags={"ADMIN"},
     *      @OA\Parameter(
     *         name="id",
     *         description="ID состояния проекта",
     *          in = "path",
     *         required=true,
     *         @OA\Schema(
     *             type="integer"
     *         )
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="Состояние проекта удалено",
     *     ),
     *     @OA\Response(
     *         response="404",
     *         description="Состояние проекта не найдено",
     *     ),
     * )
     */
    public function __invoke(State $state)
    {
        $state->delete();
        return response([]);
    }
}
