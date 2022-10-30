<?php

namespace App\Http\Controllers\Supervisor;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Supervisor;
use Illuminate\Http\Request;

class ProjectNamesController extends Controller
{
    public function __invoke(Request $request) // DEPRECATED Получение инормации о проектах руководителя через апи токен
    {
        $token = $request->get('api_token');
        $id = Supervisor::where('api_token', $token)->select('id')->get()[0]['id'];

        $data = Project::where('supervisor_id', $id)->select('id', 'title')->get();

        $data->makeHidden(['tags', 'type_name', 'vacant_places', 'state_name', 'supervisor_name']);
        return response()->json($data, 200);
    }
}
