<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use App\Models\Project;

/**
 * Удалить проект (UNUSED)
 */
class DeleteController extends Controller
{
    /**
     * @OA\Delete(
     *     path="/api/projects/${id}",
     *     summary="Удаление проекта",
     *      tags={"UNUSED"},
     *      @OA\Parameter(
     *         name="id",
     *         description="ID проекта",
     *          in = "path",
     *         required=true,
     *         @OA\Schema(
     *             type="integer"
     *         )
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="Проект удален",
     *     ),
     * )
     */
    public function __invoke(Project $project)
    {
        $project->delete();
        return response([]);
    }
}
