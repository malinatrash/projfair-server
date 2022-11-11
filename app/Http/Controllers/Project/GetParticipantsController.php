<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use App\Http\Resources\CandidateResource;
use App\Models\Project;

/**
 * Получение участников на проекте
 */
class GetParticipantsController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/projects/{id}/participants",
     *     summary="Получение участников на проекте",
     *      tags={"Project"},
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
     *         description="Проекты",
     *
     *         @OA\JsonContent(
     *              type="array",
     *                  @OA\Items(
     *                 ref="#/components/schemas/Candidate"
     *         )
     * )
     *     ),
     * )
     */
    public function __invoke(Project $project)
    {

        return CandidateResource::collection($project->participants());
    }
}
