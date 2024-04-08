<?php

namespace App\Http\Controllers\Supervisor\Director\Projects;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProjectResource;
use App\Http\Services\DirectorCabinetService;
use Illuminate\Http\Request;

/**
 * Получить проекты для ревью
 */
class IndexController extends Controller
{
    public function __construct(private DirectorCabinetService $directorCabinetService)
    {
    }
    /**
     * @OA\Get(
     *     path="/api/director/projects",
     *     summary="Получить проекты на рассмотрении",
     *      tags={"CABINET DIRECTOR"},
     *     @OA\Response(
     *         response="200",
     *         description="Информации о проектах",
     *         @OA\JsonContent(
     *              type="array",
     *              @OA\Items(ref="#/components/schemas/Project")
     *          )
     *     ),
     * )
     */
    public function __invoke(Request $request)
    {
        $supervisor = $request->get('supervisor');

        return ProjectResource::collection($this->directorCabinetService->getProjectsToReview($supervisor));
    }
}
