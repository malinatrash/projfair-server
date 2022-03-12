<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        // $projects = Project::all();
        // return $projects;

        $dataAll = Project::join('states', 'states.id', '=', 'projects.state_id')->where('states.state', '!=', 'Обработка')->get();
        $projectCount = count($dataAll);

        $data = Project::join('states', 'states.id', '=', 'projects.state_id')->where('states.state', '!=', 'Обработка')
            ->orderBy('updated_at', 'DESC')->select('projects.*')->orderBy('id', 'desc')->simplePaginate(7);

        $data->makeHidden(['state_id', 'supervisor_id', 'type_id']);
        $data = $data->toArray()['data'];


        return response()->json(['data' => $data, 'projectCount' => $projectCount])->setStatusCode(200, 'Paginating 7 projects');
    }
}
