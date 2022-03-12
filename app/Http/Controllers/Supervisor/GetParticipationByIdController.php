<?php

namespace App\Http\Controllers\Supervisor;

use App\Http\Controllers\Controller;
use App\Models\Candidate;
use App\Models\Participation;
use App\Models\Project;
use App\Models\Supervisor;
use Illuminate\Http\Request;

class GetParticipationByIdController extends Controller
{
    public function __invoke($id_part, Request $request)
    {
        $token = $request->get('api_token');
        $id = Supervisor::where('api_token', $token)->select('id')->get()[0]['id'];

        $projects = Project::where('supervisor_id', $id)->select('id', 'title')->get();
        $id_projects = [];
        foreach ($projects as $project) {
            array_push($id_projects, $project['id']);
        }

        $id_project = Participation::where('id', $id_part)->get()[0]['id_project'];
        if (!in_array($id_project, $id_projects)) {
            return response()->json(['error' => 'Заявка не относится к проекту преподавателя'], 403);
        }

        $data = Participation::where('id', $id_part)->get()[0];
        $data_student = Candidate::where('id', $data['id_candidate'])->get()[0];
        $data_project = Project::where('id', $data['id_project'])->get()[0];

        $data['project_title'] = $data['project']['title'];
        $data->makeHidden(['id_project', 'id_state', 'state', 'project']);

        $data['group'] = $data_student['training_group'];
        $data['phone'] = $data_student['phone'];
        $data['email'] = $data_student['email'];
        $data['tags'] = $data_project['tags'];

        return response()->json($data, 200);
    }
}
