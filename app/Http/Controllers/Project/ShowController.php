<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProjectResource;
use App\Models\Participation;
use App\Models\Project;

/**
 * Получение информации о проекте
 */
class ShowController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/projects/{id}",
     *     summary="Получение информации о проекте по ID",
     *      tags={"Project"},
     *           @OA\Parameter(
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
     *         description="Информация о проекте @TODO Понять какую информацию отдавать если проект активный архивный и т.д.",
     *         @OA\JsonContent(ref="#/components/schemas/Project")
     *     ),
     *     @OA\Response(
     *         response="404",
     *         description="Проект не найден",
     *     ),
     * )
     */
    public function __invoke(Project $project)
    {
        return new ProjectResource($project);
    }
}
