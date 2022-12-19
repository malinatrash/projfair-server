<?php

namespace App\Http\Controllers\Admin\Candidate;

use App\Http\Controllers\Controller;
use App\Models\Candidate;

/**
 * Удалить студента
 */
class DeleteController extends Controller
{
    /**
     * @OA\Delete(
     *     path="/api/admin/candidates/${id}",
     *     summary="Удалить студента",
     *      tags={"ADMIN"},
     *      @OA\Parameter(
     *         name="id",
     *         description="ID студента",
     *          in = "path",
     *         required=true,
     *         @OA\Schema(
     *             type="integer"
     *         )
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="Студент удален",
     *     )
     * )
     * )
     */
    public function __invoke(Candidate $candidate)
    {
        $candidate->delete();
        return response([]);
    }
}
