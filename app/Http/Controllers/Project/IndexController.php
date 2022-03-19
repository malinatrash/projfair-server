<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function __invoke()
    {
        $dataAll = Project::join('states', 'states.id', '=', 'projects.state_id')->where('states.state', '!=', 'Обработка')->get();
        $projectCount = count($dataAll);
        $projects = Project::with('skills', 'type', 'state', 'supervisor')->simplePaginate(7)->getCollection();
        $projects->makeHidden(['state_id', 'supervisor_id', 'type_id']);
        $projects = $projects;
        return response()->json(['data' => $projects, 'projectCount' => $projectCount])->setStatusCode(200, 'Paginating 7 projects');
    }
}
