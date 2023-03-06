<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProjectResource;
use App\Models\Project;

/**
 * История проекта
 */
class HistoryController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/projects/{id}/history",
     *     summary="История проекта",
     *      tags={"Project"},
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
     *         description="проекты",
     *         @OA\JsonContent(
     *              type="array",
     *                  @OA\Items(
     *                      ref="#/components/schemas/Project"
     *                  )
     *         )
     *     ),
     *     @OA\Response(
     *         response="404",
     *         description="Проект не найден",
     *     ),
     * )
     */
    public function __invoke(Project $project)
    {
        return ProjectResource::collection($project->getHistory());
    }
}
