<?php

namespace App\Http\Controllers\Candidate;

use App\Http\Controllers\Controller;
use App\Models\Candidate;
use App\Models\Participation;
use App\Models\StateParticipation;
use Illuminate\Http\Request;

class DeleteParticipationController extends Controller
{
    public function __invoke($id_project, Request $request)
    {
        $id_project = intval($id_project);

        $id_cancelState = StateParticipation::where('state', 'Отозвана')->select('id')->get()[0]['id'];

        $token = $request->get('api_token');
        $id = Candidate::where('api_token', $token)->select('id')->get()[0]['id'];

        if (!Participation::where('id_candidate', $id)->where('id_project', $id_project)->get()->count()) {
            return response()->json(['error' => 'Project not found'], 400);
        }
        $data = Participation::where('id_candidate', $id)->where('id_project', $id_project)->update([
            'id_state' => $id_cancelState
        ]);

        return response()->json(['status' => 'OK'], 200);
    }
}
