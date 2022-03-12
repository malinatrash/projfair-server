<?php

namespace App\Http\Controllers\Supervisor;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class GetProjectByIdController extends Controller
{
    public function __invoke($id, Request $request)
    {
        $data = Project::where('id', $id)->get()[0];

        $data->makeHidden(['deleted_at', 'updated_at', 'result', 'additional_inf', 'type_id', 'supervisor_id', 'state_id']);
        return response()->json($data, 200);
    }
}
