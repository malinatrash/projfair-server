<?php

namespace App\Http\Controllers\Admin\Project;

use App\Http\Controllers\Controller;
use App\Models\Project;

/**
 * Удалить проект
 */
class DeleteController extends Controller
{
    /**
     * @OA\Delete(
     *     path="/api/admin/projects/${id}",
     *     summary="Удаление проекта",
     *      tags={"ADMIN"},
     *      @OA\Parameter(
     *         name="id",
     *         description="ID проекта",
     *         in = "path",
     *         required=true,
     *         @OA\Schema(
     *             type="integer"
     *         )
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="Проект удален",
     *     ),
     *     @OA\Response(
     *         response="404",
     *         description="Проект не найден",
     *     ),
     * )
     */
    public function __invoke(Project $project)
    {
        $project->delete();
        return response([]);
    }
}
