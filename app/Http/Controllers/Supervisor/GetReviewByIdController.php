<?php

namespace App\Http\Controllers\Supervisor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class GetReviewByIdController extends Controller
{
    public function __invoke($id, Request $request)
    {

        // $data = Review::where('id_student', $id)->get();

        // foreach ($data as $k => $v) {
        //   $data_project = Project::where('id', $v['id_project'])->get()[0];
        //   $data[$k]['supervisor'] = Supervisor::where('id', $data_project['supervisor_id'])->get()[0]['fio'];
        //   $data[$k]['title_project'] = $data_project['title'];
        // }

        // $data->makeHidden(['id_project', 'id_student']);
        // return response()->json($data, 200);
    }
}
