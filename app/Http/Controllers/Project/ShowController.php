<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
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
     *         description="Проект",
     *
     *         @OA\JsonContent(
     *                 ref="#/components/schemas/Project"
     *
     * )
     *     ),
     * )
     */
    public function __invoke(Project $project)
    {
        $participations = Participation::where('project_id', '=', $project->id)->get();
        $participations->load('candidate');
        $project->load('skills', 'specialities', 'type', 'state', 'supervisor');
        $project['skills'] = $project->skills;
        $project['state'] = $project->state;
        $project['supervisor'] = $project->supervisor;
        if (isset($project['supervisors'])) {
            $project['supervisors'] = explode(",", $project['supervisors']);
        }
        $project['type'] = $project->type;
        $project['participations'] = $participations;
        return $project;
    }
}
