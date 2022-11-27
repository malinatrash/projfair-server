<?php

namespace App\Http\Controllers\Supervisor\ProjectOnReview;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProjectResource;
use App\Models\Project;
use App\Models\Supervisor;
use Illuminate\Http\Request;

/**
 * DEPRECATED получение информации о заявках руководителя
 */
class IndexController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/supervisor/projectsOnReview",
     *     summary="Получить проекты на рассмотрении. Делает преподаватель",
     *      tags={"SUPERVISOR CABINET"},
     *     @OA\Response(
     *         response="200",
     *         description="Информации о заявках руководителя @TODO RESPONCE",
     *         @OA\JsonContent(
     *              type="array",
     *                  @OA\Items(
     *                 ref="#/components/schemas/Project"
     *         )
     * )
     *     ),
     * )
     */
    public function __invoke(Request $request)
    {
        $supervisor = $request->get('supervisor');

        return ProjectResource::collection($supervisor->projectsOnReview);
    }
}
