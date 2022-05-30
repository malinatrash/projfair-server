<?php

namespace App\Http\Controllers\Candidate;

use App\Http\Controllers\Controller;
use App\Models\Candidate;
use App\Models\Participation;
use App\Models\StateParticipation;
use App\Models\Supervisor;
use Illuminate\Http\Request;

class MeController extends Controller
{
    const API_KEY_HEADER = 'x-api-key';

    public function __invoke(Request $request)
    {
        $token = $request->cookie('token');
        //$token = $request->header(self::API_KEY_HEADER);
        // dd($request);
        //$token = $request->get('api_token');
        // $id = Candidate::where('api_token', $token)->select('id')->get()[0]['id'];
        // $id_finalState = StateParticipation::where('state', 'Завершил')->select('id')->get()[0]['id'];
        $user = Candidate::where('api_token', $token)->get();


        if (!$user->isEmpty()) {
            $candidate = $user[0];
            $candidate['is_student'] = true;
            return  response($candidate, 200);
        }

        $user = Supervisor::where('api_token', $token)->get();
        if (!$user->isEmpty()) {
            $supervisor = $user[0];
            $supervisor['is_student'] = false;
            return response($supervisor, 202);
        }
        return response('API токен не найден', 404);

        // $participation = Participation::select('id_project')->where('id_candidate', $id)->where('id_state', $id_finalState)->pluck('id_project');
        // $candidate['experience'] = $participation;

        // if ($candidate) {
        //     return response()->json($candidate)->setStatusCode(200, 'Candidate');
        // } else {
        //     return response()->json(['status' => false], 404);
        // }
    }
}
