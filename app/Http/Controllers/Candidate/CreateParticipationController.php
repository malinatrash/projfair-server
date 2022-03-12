<?php

namespace App\Http\Controllers\Candidate;

use App\Http\Controllers\Controller;
use App\Http\Requests\Participation\StoreRequest;
use App\Models\Candidate;
use App\Models\Participation;
use App\Models\Project;
use App\Models\StateParticipation;
use Illuminate\Http\Request;

class CreateParticipationController extends Controller
{
    public function __invoke($id_project, StoreRequest $request)
    {
        $id_project = intval($id_project);

        $token = $request->get('api_token');
        $id = Candidate::where('api_token', $token)->select('id')->get()[0]['id'];

        if (Participation::where('id_candidate', $id)->where('id_project', $id_project)->get()->count() != 0) {
            return response()->json(['error' => 'Заявка на этот проект уже есть'], 400);
        }

        if (!Project::where('id', $id_project)->get()->count()) {
            return response()->json(['error' => 'Project not found'], 400);
        }

        $part_id = Participation::create([
            'priority' => $request['priority'],

            'id_project' => $id_project,
            'id_candidate' => $id,
            'id_state' => StateParticipation::where('state', 'Ожидание рассмотрения')->select('id')->get()->toArray()[0]['id'],
        ])->id;

        foreach ($request['skills'] as $skill) {
            if (!is_int($skill)) {
                return response()->json(
                    [
                        'status' => false,
                        'message' => 'Массив скиллов содержит не число'
                    ],
                    400
                );
            }

            // ParticipationsSkill::create([
            //     'id_skill' => $skill,
            //     'id_participation' =>  $part_id
            // ]);
        }

        return response()->json(['status' => 'OK'], 200);
    }
}
