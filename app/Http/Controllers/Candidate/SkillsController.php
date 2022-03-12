<?php

namespace App\Http\Controllers\Candidate;

use App\Http\Controllers\Controller;
use App\Models\Candidate;
use App\Models\CandidatesSkill;
use Illuminate\Http\Request;

class SkillsController extends Controller
{
    public function __invoke(Request $request)
    {
        $token = $request->get('api_token');
        $id = Candidate::where('api_token', $token)->select('id')->get()[0]['id'];

        $data = CandidatesSkill::join('skills', 'skills.id', '=', 'candidates_skills.id_skill')
            ->where('id_candidate', $id)->select('skills.id', 'skills.skill')->get();

        return response()->json($data, 200);
    }
}
