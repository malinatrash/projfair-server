<?php

namespace App\Http\Controllers\Supervisor;

use App\Http\Controllers\Controller;
use App\Models\Candidate;
use App\Models\Participation;
use App\Models\Project;
use App\Models\Supervisor;
use Illuminate\Http\Request;

/**
 * DEPRECATED получение информации о заявках руководителя
 */
class ParticipationsController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/supervisor/participation",
     *     summary="получение информации о заявках руководителя",
     *      tags={"DEPRECATED"},
     *     @OA\Response(
     *         response="200",
     *         description="Информации о заявках руководителя @TODO RESPONCE",
     *
     *         @OA\JsonContent(
     *              type="array",
     *                  @OA\Items(
     *                 ref="#/components/schemas/Participation"
     *         )
     * )
     *     ),
     * )
     */
    public function __invoke(Request $request)
    {
        $token = $request->get('api_token');
        $id = Supervisor::where('api_token', $token)->select('id')->get()[0]['id'];

        $projects = Project::where('supervisor_id', $id)->select('id', 'title')->get();
        $id_projects = [];
        foreach ($projects as $project) {
            array_push($id_projects, $project['id']);
        }

        $data = Participation::whereIn('id_project', $id_projects)->get();

        foreach ($data as $key => $value) {
            $fio = Candidate::where('id', $value['id_candidate'])->select('fio')->get()[0]['fio'];

            $data[$key]['fio'] = $fio;
            $data[$key]['project_title'] = $value['project']['title'];
        }

        $data = $data->sortByDesc('date');

        $data->makeHidden(['project', 'id_state', 'id_candidate', 'id_project', 'state', 'motivation', 'date']);
        return response()->json($data, 200);
    }
}
