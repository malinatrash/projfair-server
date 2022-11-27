<?php

namespace App\Http\Controllers\Admin\Project;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProjectResource;
use App\Models\Project;

/**
 * Получить информацию о проектах
 */
class IndexController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/admin/projects/",
     *     summary="Получить информацию о всех проектах",
     *      tags={"ADMIN"},
     *     @OA\Response(
     *         response="200",
     *         description="Все проекты",
     *         @OA\JsonContent(
     *              type="array",
     *                  @OA\Items(
     *                 ref="#/components/schemas/Project"
     *         )
     * )
     *     ),
     * )
     */
    public function __invoke()
    {
        $projects = Project::all();
        return ProjectResource::collection($projects);
    }
}
