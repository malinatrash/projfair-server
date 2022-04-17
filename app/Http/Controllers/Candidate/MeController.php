<?php

namespace App\Http\Controllers\Candidate;

use App\Http\Controllers\Controller;
use App\Models\Candidate;
use App\Models\Participation;
use App\Models\StateParticipation;
use Illuminate\Http\Request;

class MeController extends Controller
{
    public function __invoke(Request $request)
    {
        // dd($request);
        // $token = $request->get('api_token');
        // $id = Candidate::where('api_token', $token)->select('id')->get()[0]['id'];
        // $id_finalState = StateParticipation::where('state', 'Завершил')->select('id')->get()[0]['id'];

        // $candidate = Candidate::where('api_token', $token)->get()[0];

        // $participation = Participation::select('id_project')->where('id_candidate', $id)->where('id_state', $id_finalState)->pluck('id_project');
        // $candidate['experience'] = $participation;

        // if ($candidate) {
        //     return response()->json($candidate)->setStatusCode(200, 'Candidate');
        // } else {
        //     return response()->json(['status' => false], 404);
        // }
    }
}
