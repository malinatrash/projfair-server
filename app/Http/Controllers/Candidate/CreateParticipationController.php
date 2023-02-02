<?php

namespace App\Http\Controllers\Candidate;

use App\Http\Controllers\Controller;
use App\Http\Requests\Participation\StoreRequestAdminParticipation;
use App\Models\Participation;
use App\Models\Project;
use function App\Utils\isCandidateHasMaxSendedParticipation;
use function App\Utils\isCandidateInProjectSpecialities;
use function App\Utils\isCandidateOnProject;
use function App\Utils\isProjectOnRecruitment;

/**
 * Создание заявки на проект
 */
class CreateParticipationController extends Controller
{

    /**
     * @OA\Post(
     *     path="/api/participations/${id}",
     *     summary="Создание заявки на проект",
     *      tags={"UNUSED"},
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
     *         description="Заявка создана",
     *     ),
     *     @OA\Response(
     *         response="404",
     *         description="Не найдено",
     *     ),
     *     @OA\Response(
     *         response="403",
     *         description="Вы уже подали 3 заявки",
     *     )
     * )
     * )
     */
    public function __invoke(Project $project, StoreRequestAdminParticipation $request)
    {
        $project->load('specialities', 'state');
        $candidate = $request->get('candidate');

        if (!isProjectOnRecruitment($project)) {
            return response("Проект не в статусе набора заявок", 403);
        }
        if (!isCandidateInProjectSpecialities($candidate, $project)) {
            return response("Вы не можете подать заявку проект с другого института", 403);
        }
        if (isCandidateHasMaxSendedParticipation($candidate)) {
            return response("Вы уже подали 3 заявки", 403);
        }
        if (isCandidateOnProject($candidate, $project)) {
            return response()->json(['error' => 'Заявка на этот проект уже есть'], 400);
        }
        $candidateId = $candidate['id'];
        $projectId = $project->id;
        Participation::create([
            'priority' => $request['priority'],
            'project_id' => $projectId,
            'candidate_id' => $candidateId,
            'state_id' => 1,
        ])->id;

        return response()->json(['status' => 'OK'], 200);
    }

}
