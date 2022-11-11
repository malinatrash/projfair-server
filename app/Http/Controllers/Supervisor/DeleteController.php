<?php

namespace App\Http\Controllers\Supervisor;

use App\Http\Controllers\Controller;
use App\Models\Supervisor;

/**
 * Удалить преподавателя
 */
class DeleteController extends Controller
{
    /**
     * @OA\Delete(
     *     path="/api/supervisors/${id}",
     *     summary="Удалить преподавателя",
     *      tags={"UNUSED"},
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
     * )
     */
    public function __invoke(Supervisor $supervisor)
    {
        $supervisor->delete();
        return response([]);
    }
}
