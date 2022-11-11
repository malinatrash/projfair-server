<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use App\Http\Requests\Project\UpdateRequest;
use App\Models\Project;

/**
 * Обновить проект (UNUSED)
 */
class UpdateController extends Controller
{
    /**
     * @OA\Patch(
     *     path="/api/projects/${id}",
     *     summary="Обновить проект",
     *      tags={"UNUSED"},
     *      @OA\Parameter(
     *         name="id",
     *         description="ID проекта @TODO BODY",
     *          in = "path",
     *         required=true,
     *         @OA\Schema(
     *             type="integer"
     *         )
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="Проект изменен",
     *     ),

     * )
     * )
     */
    public function __invoke(UpdateRequest $request, Project $project)
    {
        $data = $request->validated();
        $project->update($data);
        return response([]);
    }
}
