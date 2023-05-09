<?php

namespace App\Http\Controllers\Supervisor\Director\Projects;

use App\Http\Controllers\Controller;
use App\Http\Requests\Project\UpdateRequestByDirectorProject;
use App\Http\Resources\ProjectResource;
use App\Http\Services\DirectorCabinetService;
use App\Models\Project;

/**
 * Обновить проект
 */
class UpdateController extends Controller
{
    public function __construct(private DirectorCabinetService $directorCabinetService)
    {
    }
    /**
     * @OA\Patch(
     *     path="api/director/projects/${id}",
     *     summary="Отклонить или принять проект",
     *      tags={"CABINET DIRECTOR"},
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
     *                      description="Можно прислать null"
     *                  ),
     *                  @OA\Property(
     *                      type="date",
     *                      property="rejection_date",
     *                      description="Можно прислать null"
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
     *     @OA\Response(
     *         response="403",
     *         description="В институте уже одобрено максимальное количество проектов",
     *     ),
     * )
     */
    public function __invoke(UpdateRequestByDirectorProject $request, Project $project)
    {
        $data = $request->validated();
        $project = $this->directorCabinetService->reviewProject($data, $project);
        if (!$project) {
            return response(['error' => 'В институте уже одобрено максимальное количество проектов'], 403);
        }
        return new ProjectResource($project);
    }
}
