<?php

namespace App\Http\Controllers\Candidate;

use App\Http\Controllers\Controller;
use App\Models\Candidate;
use App\Models\Participation;
use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function __invoke(Request $request)
    {
        $token = $request->get('api_token');
        $id = Candidate::where('api_token', $token)->select('id')->get()[0]['id'];

        $data = Participation::where('id_candidate', $id);

        //студент участвует|Завершил|Исключен
        $data = $data->whereIn('id_state', [2, 3, 6]);
        $data = $data->simplePaginate(7);
        $data->makeHidden(['id_project', 'id_candidate', 'date']);

        $data = $data->toArray()['data'];

        return response()->json($data, 200);
    }
}
