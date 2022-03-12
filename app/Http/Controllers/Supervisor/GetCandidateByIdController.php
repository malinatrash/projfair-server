<?php

namespace App\Http\Controllers\Supervisor;

use App\Http\Controllers\Controller;
use App\Models\Candidate;
use App\Models\Participation;
use App\Models\StateParticipation;
use Illuminate\Http\Request;

class GetCandidateByIdController extends Controller
{
    public function __invoke($id, Request $request)
    {
        $data = Candidate::where('id', $id)->get()[0];

        $id_finalState = StateParticipation::where('state', 'Завершил')->select('id')->get()[0]['id'];
        $participation = Participation::select('id_project')->where('id_candidate', $id)->where('id_state', $id_finalState)->pluck('id_project');
        $data['experience'] = $participation;

        return response()->json($data, 200);
    }
}
