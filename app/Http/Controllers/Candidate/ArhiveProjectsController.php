<?php

namespace App\Http\Controllers\Candidate;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProjectResource;
use Illuminate\Http\Request;

/**
 * Получение архивных проектов студента
 */
class ArhiveProjectsController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/arhiveProjects",
     *     summary="Получение архивных проектов студента",
     *      tags={"CABINET CANDIDATE"},
     *     @OA\Response(
     *         response="200",
     *         description="Архивные проекты студента",
     *         @OA\JsonContent(
     *              type="array",
     *              @OA\Items(
     *                      ref="#/components/schemas/Project"
     *              )
     *         )
     *     )
     * )
     * )
     */
    public function __invoke(Request $request)
    {
        $arhiveProjects = $request->get('candidate')->arhiveProjects();
        return ProjectResource::collection($arhiveProjects);
    }
}
