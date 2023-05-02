<?php

namespace App\Http\Controllers\Candidate;

use App\Http\Controllers\Controller;
use App\Http\Resources\ParticipationResource;
use App\Models\Candidate;
use App\Models\Participation;
use Illuminate\Http\Request;

/**
 * Получение заявок студента
 */
class ParticipationsController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/participations",
     *     summary="Получение заявок студента",
     *      tags={"CABINET CANDIDATE"},
     *     @OA\Response(
     *         response="200",
     *         description="Информация о заявках студента",
     *          @OA\JsonContent(
     *              type="array",
     *                  @OA\Items(
     *                          ref="#/components/schemas/Participation"
     *                  )
     *              )
     *     )
     *
     * )
     * )
     */
    public function __invoke(Request $request)
    {
        $candidate_id = $request->get('candidate')->id;
        $participations = Participation::where('candidate_id', $candidate_id)->get();
        return ParticipationResource::collection($participations);
    }
}
