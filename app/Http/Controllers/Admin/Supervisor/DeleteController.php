<?php

namespace App\Http\Controllers\Admin\Supervisor;

use App\Http\Controllers\Controller;
use App\Models\Supervisor;

/**
 * Удалить преподавателя
 */
class DeleteController extends Controller
{
    /**
     * @OA\Delete(
     *     path="/api/admin/supervisors/${id}",
     *     summary="Удалить преподавателя",
     *      tags={"ADMIN"},
     *      @OA\Parameter(
     *         name="id",
     *         description="ID преподавателя",
     *          in = "path",
     *         required=true,
     *         @OA\Schema(
     *             type="integer"
     *         )
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="Преподаватель удален",
     *     ),
     *     @OA\Response(
     *         response="404",
     *         description="Преподаватель не найден",
     *     ),
     * )
     */
    public function __invoke(Supervisor $supervisor)
    {
        $supervisor->delete();
        return response([]);
    }
}
