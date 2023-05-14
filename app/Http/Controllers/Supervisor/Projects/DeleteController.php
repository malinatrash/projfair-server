<?php

namespace App\Http\Controllers\Supervisor\Projects;

use App\Http\Controllers\Controller;
use App\Http\Services\SupervisorCabinetService;
use App\Models\Project;

/**
 * Удалить заявку на создание проекта
 */
class DeleteController extends Controller
{
    public function __construct(private SupervisorCabinetService $supervisorCabinetService)
    {
    }

    /**
     * @OA\Delete(
     *     path="/api/supervisor/projects/${id}",
     *     summary="Удалить заявку на создание проекта",
     *      tags={"CABINET SUPERVISOR"},
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
     *         description="Заявка удалена",
     *     )
     * )
     * )
     */
    public function __invoke(Project $project)
    {
        $this->supervisorCabinetService->deleteProject($project);
        return response([]);
    }
}
