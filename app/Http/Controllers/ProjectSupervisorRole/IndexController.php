<?php

namespace App\Http\Controllers\ProjectSupervisorRole;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProjectSupervisorRoleResource;
use App\Models\ProjectSupervisorRole;

/**
 * Получить роли преподавателей на проекте
 */
class IndexController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/projectSupervisorRoles/",
     *     summary="Получить роли преподавателей на проекте",
     *      tags={"ProjectSupervisorRole"},
     *     @OA\Response(
     *         response="200",
     *         description="Роли преподавателей на проекте",
     *         @OA\JsonContent(
     *              type="array",
     *                  @OA\Items(ref="#/components/schemas/ProjectSupervisorRole")
     *          )
     *     ),
     * )
     */
    public function __invoke()
    {
        $projectSupervisorsRoles = ProjectSupervisorRole::all();
        return ProjectSupervisorRoleResource::collection($projectSupervisorsRoles);
    }
}
