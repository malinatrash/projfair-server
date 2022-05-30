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

        if (Participation::where('candidate_id', $id)->where('project_id', $id_project)->get()->count() != 0) {
            return response()->json(['error' => 'Заявка на этот проект уже есть'], 400);
        }
        $data =  $request->json()->all();
        $bodyContent = $request->getContent();
        $priority = json_decode($bodyContent)->priority;
        //dd(json_decode($bodyContent)->priority);
        Participation::create([
            'priority' => $request['priority'],

            'project_id' => $id_project,
            'candidate_id' => $id,
            'state_id' => 0,
        ])->id;



        return response()->json(['status' => 'OK'], 200);
    }
}
