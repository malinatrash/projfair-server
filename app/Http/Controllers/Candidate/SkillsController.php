<?php

namespace App\Http\Controllers\Candidate;

use App\Http\Controllers\Controller;
use App\Http\Resources\SkillResource;
use App\Models\Candidate;
use Illuminate\Http\Request;

/**
 * Получение навыков авторизованного студента
 */
class SkillsController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/candidate/skills",
     *     summary="Получение навыков авторизованного студента",
     *     tags={"CABINET CANDIDATE"},
     *     @OA\Response(
     *         response="200",
     *         description="Получение навыков студента",
     *         @OA\JsonContent(
     *              type="array",
     *              @OA\Items(
     *                   ref="#/components/schemas/Skill"
     *              )
     *
     *          )
     *     )
     * )
     * )
     */
    public function __invoke(Request $request)
    {
        $candidateSkills = $request->get('candidate')->skills;

        return SkillResource::collection($candidateSkills);
    }
}
