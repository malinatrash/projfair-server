<?php

namespace App\Http\Controllers\Supervisor;

use App\Http\Controllers\Controller;
use App\Models\Candidate;
use App\Models\Participation;
use App\Models\Project;
use App\Models\Supervisor;
use Illuminate\Http\Request;

class ParticipationsOnProjectController extends Controller
{
    public function __invoke($idProject, Request $request)
    {
        $token = $request->get('api_token');
        $id = Supervisor::where('api_token', $token)->select('id')->get()[0]['id'];


        $projects = Project::where('supervisor_id', $id)->where('id', $idProject)->get();
        if ($projects->count() == 0) {
            return response()->json(['error' => 'Этот проект не принадлежит руководителю'], 200);
        }


        $data = Participation::where('id_project', $idProject)->where('id_state', 2)->get();

        foreach ($data as $key => $value) {
            $fio = Candidate::where('id', $value['id_candidate'])->select('fio')->get()[0]['fio'];
            $data[$key]['fio'] = $fio;
        }

        $data = $data->sortByDesc('date');

        $data->makeHidden(['project', 'id_state', 'id_candidate', 'id_project', 'state', 'motivation', 'date']);
        return response()->json($data, 200);
    }
}
