<?php

namespace App\Http\Controllers\Candidate;

use App\Http\Controllers\Controller;
use App\Http\Resources\CandidateResource;
use Illuminate\Http\Request;

/**
 * Получить информацию об авторизованном студенте
 */
class MeController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/candidate",
     *     summary="Получить информацию об авторизованном студенте",
     *      tags={"CABINET CANDIDATE"},
     *     @OA\Response(
     *         response="200",
     *         description="Информация о студенте",
     *         @OA\JsonContent(ref="#/components/schemas/Candidate"),
     *     )
     * )
     */
    public function __invoke(Request $request) // Получить информацию об авторизованном студенте
    {
        return new CandidateResource($request->get('candidate'));
    }
}
