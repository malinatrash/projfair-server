<?php

namespace App\Http\Controllers\Candidate;

use App\Http\Controllers\Controller;
use App\Models\Candidate;
use Illuminate\Http\Request;

/**
 * Удалить студента
 */
class DeleteController extends Controller
{
    /**
     * @OA\Delete(
     *     path="/api/candidates/${id}",
     *     summary="Удалить студента",
     *      tags={"UNUSED"},
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
