<?php

namespace App\Http\Controllers\Candidate;

use App\Http\Controllers\Controller;
use App\Models\Candidate;
use App\Models\CandidatesSkill;
use Illuminate\Http\Request;

/**
 * Получение навыков студента
 */
class SkillsController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/candidate/skills",
     *     summary="Получение навыков студента",
     *     tags={"Candidate"},
     *     @OA\Response(
     *         response="200",
     *         description="Получение навыков студента @TODO RESPONCE",
     *         @OA\JsonContent(ref="#/components/schemas/CandidateSkill")
     *     )
     * )
     * )
     */
    public function __invoke(Request $request) // Получение навыков студента
    {
        $id = $request->get('candidate')->id;

        $data = CandidatesSkill::join('skills', 'skills.id', '=', 'candidates_skills.id_skill')
            ->where('id_candidate', $id)->select('skills.id', 'skills.skill')->get();

        return $data;
    }
}
