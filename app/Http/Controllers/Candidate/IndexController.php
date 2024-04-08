<?php

namespace App\Http\Controllers\Candidate;

use App\Http\Controllers\Controller;
use App\Http\Resources\CandidateResource;
use App\Models\Candidate;
use Illuminate\Http\Request;

/**
 * Получить информацию о всех студентах
 */
class IndexController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/candidates",
     *     summary="Получить информацию о всех студентах",
     *      tags={"Candidate"},
     *     @OA\Response(
     *         response="200",
     *         description="Информация о всех студентах",
     *          @OA\JsonContent( 
     *              type="array",
     *                  @OA\Items(
     *                          ref="#/components/schemas/Candidate"
     *                  )
     *          )
     *     )
     * )
     * )
     */
    public function __invoke() // Получить информацию о всех студентах
    {
        //$candidates = Candidate::all();
        $candidates = Candidate::where('can_send_participations',1)->get();
        return CandidateResource::collection($candidates);
    }
}
