<?php

namespace App\Http\Controllers\Campus;

use App\Http\Controllers\Controller;
use App\Http\Services\HarvestSettingService;
use App\Http\Services\ProjectService;
use App\Models\Project;
use App\Models\ProjectStateEnum;

/**
 * Данные для кампуса
 */
class CampusController extends Controller
{
    public function __construct(private ProjectService $projectService)
    {
    }
    /**
     * @OA\Get(
     *     path="/api/kampus",
     *     summary="Данные для кампуса",
     *     tags={"KAMPUS"},
     *     @OA\Response(
     *         response="200",
     *         description="7 проектов на странице + навигация",
     *          content={
     *         @OA\MediaType(
     *              mediaType="application/json",
     *              @OA\Schema(
     *                @OA\Property(
     *                property="projectCount",
     *                  type="integer",
     *                  description="Общее количество проектов",
     *                ),
     *                @OA\Property(
     *                 property="data",
     *                 type="array",
     *                 description="Массив проектов",
     *                 @OA\Items(ref="#/components/schemas/Project")
     *                ),
     *              )
     *          )
     *          }
     *     ),
     * )
     * )
     */
    public function __invoke()
    {
        $arhiveProjects = $this->projectService->filter(stateIds: [ProjectStateEnum::arhive->value]);
        $arhiveProjects = $arhiveProjects->map(function (Project $project) {
            $project->participants = $project->getParticipants();
            return $project;
        });

        return $arhiveProjects;
    }
}
