<?php

namespace App\Http\Controllers\Supervisor\Projects;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProjectResource;
use Illuminate\Http\Request;

/**
 * Получить проекты преподавателя
 */
class IndexController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/supervisor/projects",
     *     summary="Получить проекты преподавателя",
     *      tags={"CABINET SUPERVISOR"},
     *     @OA\Response(
     *         response="200",
     *         description="Информации о проектах",
     *         @OA\JsonContent(
     *              type="array",
     *                  @OA\Items(
     *                      ref="#/components/schemas/Project"
     *                  )
     *          )
     *     ),
     * )
     */
    public function __invoke(Request $request)
    {
        $supervisor = $request->get('supervisor');

        return ProjectResource::collection($supervisor->projects);
    }
}
