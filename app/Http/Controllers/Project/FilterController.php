<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Collection;

class FilterController extends Controller
{
    private function stringToArray($arr)
    {
        if (is_string($arr)) {
            return json_decode($arr, true);
        } else {
            return $arr;
        }
    }

    public function paginate($items, $perPage = 7, $page = null, $options = [])
    {
        $page = $page ?: (Paginator::resolveCurrentPage() ?: 1);
        $items = $items instanceof Collection ? $items : Collection::make($items);
        return new LengthAwarePaginator($items->forPage($page, $perPage), $items->count(), $perPage, $page, $options);
    }

    public function __invoke(Request $request)
    {
        $data = Project::all();


        $inputTypes = $this->stringToArray($request->input('type'));
        $inputState = $this->stringToArray($request->input('state'));
        $inputSupervisors = $this->stringToArray($request->input('supervisor'));
        $inputDiff = $this->stringToArray($request->input('difficulty'));
        $inputTags = $this->stringToArray($request->input('tags'));
        //фильтрация по типу
        $types = array_map(function ($value) {
            return intval($value);
        }, $inputTypes ?? []);
        if (count($types) != 0)
            $data = $data->whereIn('type_id', $types);

        //фильтрация по состоянию
        $states = array_map(function ($value) {
            return intval($value);
        }, $inputState ?? []);
        if (count($states) != 0)
            $data = $data->whereIn('state_id', $states);

        //фильтрация по руководителю
        $supervisors = array_map(function ($value) {
            return intval($value);
        }, $inputSupervisors ?? []);
        if (count($supervisors) != 0)
            $data = $data->whereIn('supervisor_id', $supervisors);

        //фильтрация по сложности
        $difficulty = array_map(function ($value) {
            return intval($value);
        }, $inputDiff ?? []);
        if (count($difficulty) != 0)
            $data = $data->whereIn('difficulty', $difficulty);

        //фильтрация по тегам
        // $tags = array_map(function($value) {
        //     return intval($value);
        // }, $inputTags ?? []);
        // if (count($tags) != 0) {
        //     $idProjectsWithTags = ProjectTag::select('project_id as id')->whereIn('tag_id', $tags)->get()->toArray();
        //     $idProject = [];
        //     foreach ($idProjectsWithTags as $key => $value) {
        //         array_push($idProject, $value['id']);
        //     } 
        //     $data = $data->whereIn('id', $idProject);
        // }

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
        $dateStart = $request->input('date_start') ?? '';
        $dateEnd = $request->input('date_end') ?? '';

        $dateStart = ltrim($dateStart, '"');
        $dateStart = rtrim($dateStart, '"');

        $dateEnd = rtrim($dateEnd, '"');
        $dateEnd = ltrim($dateEnd, '"');

        if ($dateStart != '') {
            $data = $data->filter(function ($value) use ($dateStart) {
                return $value->date_start >= $dateStart;
            })->values();
        }
        if ($dateEnd != '') {
            $data = $data->filter(function ($value) use ($dateEnd) {
                return $value->date_end <= $dateEnd;
            })->values();
        }

        $page = intval($request->input('page')) ?? 1;
        $projectCount = count($data);
        $data = $this->paginate($data, 7, $page);
        $data->makeHidden(['state_id', 'supervisor_id', 'type_id']);

        $data = $data->toArray()['data'];


        $dataArr = [];
        foreach ($data as $key => $value) {
            array_push($dataArr, $value);
        }
        //return response()->json(['data' => $dataArr, 'request' => urldecode($_SERVER['REQUEST_URI'])])->setStatusCode(200);
        return response()->json(['data' => $dataArr, 'projectCount' => $projectCount])->setStatusCode(200);
    }
}
