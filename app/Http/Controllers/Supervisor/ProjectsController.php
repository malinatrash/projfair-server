<?php

namespace App\Http\Controllers\Supervisor;

use App\Http\Controllers\Controller;
use App\Models\Project;
use App\Models\Supervisor;
use Illuminate\Http\Request;

/** DEPRECATED Получение информации о проектах руководителя через апи токен */
class ProjectsController extends Controller
{

    /**
     * @OA\Get(
     *     path="/supervisor/projects",
     *     summary="Получение информации о проектах руководителя через апи токен",
     *      tags={"DEPRECATED"},
     *     @OA\Response(
     *         response="200",
     *         description="Информация о проектах руководителя @TODO REPONSE",
     *
     *         @OA\JsonContent(
     *              type="array",
     *                  @OA\Items(
     *                 ref="#/components/schemas/Project"
     *         )
     * )
     *     ),
     * )
     */
    public function __invoke(Request $request)
    {
        $token = $request->get('api_token');
        $id = Supervisor::where('api_token', $token)->select('id')->get()[0]['id'];

        $data = Project::where('supervisor_id', $id)->get();

        //фильтрация по типу
        $types = array_map(function ($value) {
            return intval($value);
        }, $request->input('type') ?? []);

        if (count($types) != 0) {
            $data = $data->whereIn('type_id', $types);
        }

        //фильтрация по состоянию
        $states = array_map(function ($value) {
            return intval($value);
        }, $request->input('state') ?? []);
        if (count($states) != 0) {
            $data = $data->whereIn('state_id', $states);
        }

        //фильтрация по названию
        $title = $request->input('title') ?? '';

        $title = ltrim($title, '"');
        $title = rtrim($title, '"');

        if ($title != '') {
            $data = $data->filter(function ($value) use ($title) {
                return (strpos(mb_strtolower($value->title), mb_strtolower($title)) !== false);
            })->values();
        }

        //фильтрация по датам
        $date = $request->input('sort_date') ?? '';

        $date = ltrim($date, '"');
        $date = rtrim($date, '"');

        if ($date != '') {

            if ($date == 'ASC') {
                $data = $data->sortBy('date_start');
            } else if ($date == 'DESC') {
                $data = $data->sortByDesc('date_start');
            }
        }

        $data->makeHidden([
            'tags', 'supervisor_name', 'goal', 'idea', 'requirements', 'expected_result', 'result',
            'additional_inf', 'result', 'deleted_at', 'updated_at',
        ]);

        $dataArr = [];
        foreach ($data as $key => $value) {
            array_push($dataArr, $value);
        }
        return response()->json($dataArr, 200);
    }
}
