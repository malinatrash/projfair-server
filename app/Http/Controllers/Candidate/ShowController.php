<?php

namespace App\Http\Controllers\Candidate;

use App\Http\Controllers\Controller;
use App\Http\Resources\CandidateResource;
use App\Models\Candidate;

/**
 * Получить информацию о студенте
 */
class ShowController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/candidates/{id}",
     *     summary="Получить информацию о студенте по ID",
     *     tags={"Candidate"},
     *      @OA\Parameter(
     *         name="id",
     *         description="ID студента",
     *          in = "path",
     *         required=true,
     *         @OA\Schema(
     *             type="integer"
     *         )
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="Информация о студенте",
     *         @OA\JsonContent(ref="#/components/schemas/Candidate")
     *     ),
     *     @OA\Response(
     *         response="404",
     *         description="Информация о студенте не найдена",
     *     )
     * )
     * )
     */
    public function __invoke(Candidate $candidate)
    {
        $candidate->load('group.specialityCourse.speciality');
        return new CandidateResource($candidate);
    }
}
