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
    public function __invoke(Request $request) // Получение навыков студента
    {
        $id = $request->get('candidate')->id;

        $data = CandidatesSkill::join('skills', 'skills.id', '=', 'candidates_skills.id_skill')
            ->where('id_candidate', $id)->select('skills.id', 'skills.skill')->get();

        return $data;
    }
}
