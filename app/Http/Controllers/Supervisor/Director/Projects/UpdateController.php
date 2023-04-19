<?php

namespace App\Http\Controllers\Supervisor\Director\Projects;

use App\Http\Controllers\Controller;
use App\Http\Requests\Project\UpdateRequestByDirectorProject;
use App\Http\Resources\ProjectResource;
use App\Http\Services\ProjectService;
use App\Models\Project;

/**
 * Обновить проект
 */
class UpdateController extends Controller
{
    public function __construct(private ProjectService $projectService)
    {
    }
    /**
     * @OA\Patch(
     *     path="api/director/projects/${id}",
     *     summary="Отклонить или принять проект",
     *      tags={"DIRECTOR CABINET"},
     *      @OA\Parameter(
     *         name="id",
     *         description="ID проекта",
     *          in = "path",
     *         required=true,
     *         @OA\Schema(
     *             type="integer"
     *         )
     *     ),
     *      @OA\RequestBody(
     *         description="Параметры для обновления проекта",
     *         required=true,
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                  @OA\Property(
     *                      type="string",
     *                      property="rejection_reason",
     *                  ),
     *                  @OA\Property(
     *                      type="integer",
     *                      property="state_id",
     *                      description="Отлонена - 8. Принята - 9"
     *                  ),
     *              )
     *          )
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="Проект обновлен",
     *         @OA\JsonContent(ref="#/components/schemas/Project")
     *     ),
     * )
     */
    public function __invoke(UpdateRequestByDirectorProject $request, Project $project)
    {
        $data = $request->validated();
        $project = $this->projectService->update($data, $project);
        return new ProjectResource($project);
    }
}
