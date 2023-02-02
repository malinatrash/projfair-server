<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProjectResource;
use App\Models\Project;
use App\Models\ProjectSkill;
use App\Models\ProjectSpeciality;
use App\Models\Speciality;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

/**
 * Получение проектов с фильтрацией. Скрывать данные других институтов если пользователь авторизован
 */
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

    /**
     * @OA\Get(
     *     path="/api/projects/filter",
     *     summary="Получить проекты с фильтрацией",
     *      tags={"Project"},
     *      @OA\Parameter(
     *         name="page",
     *         description="Номер страницы (отчет с нуля)",
     *          in = "query",
     *         required=false,
     *         @OA\Schema(
     *               type="integer"
     *         )
     *     ),
     *      @OA\Parameter(
     *         name="skills",
     *         description="Массив ID скилов",
     *          in = "query",
     *         required=false,
     *         @OA\Schema(
     *             type="array",
     *             @OA\Items(
     *                  type="integer"
     *                 )
     *         )
     *     ),
     *      @OA\Parameter(
     *         name="specialties",
     *         description="Массив ID специальностей",
     *          in = "query",
     *         required=false,
     *         @OA\Schema(
     *             type="array",
     *             @OA\Items(
     *                  type="integer"
     *                 )
     *         )
     *     ),
     *      @OA\Parameter(
     *         name="type",
     *         description="Массив ID типов проекта",
     *          in = "query",
     *         required=false,
     *         @OA\Schema(
     *             type="array",
     *             @OA\Items(
     *                  type="integer"
     *                 )
     *         )
     *     ),
     *      @OA\Parameter(
     *         name="state",
     *         description="Массив ID состояний проекта",
     *          in = "query",
     *         required=false,
     *         @OA\Schema(
     *             type="array",
     *             @OA\Items(
     *                  type="integer"
     *                 )
     *         )
     *     ),
     *      @OA\Parameter(
     *         name="supervisor",
     *         description="Массив ID руководителей",
     *          in = "query",
     *         required=false,
     *         @OA\Schema(
     *             type="array",
     *             @OA\Items(
     *                  type="integer"
     *                 )
     *         )
     *     ),
     *      @OA\Parameter(
     *         name="difficulty",
     *         description="Массив с сложностями",
     *          in = "query",
     *         required=false,
     *         @OA\Schema(
     *             type="array",
     *             @OA\Items(
     *                  type="integer"
     *                 )
     *         )
     *     ),
     *      @OA\Parameter(
     *         name="order",
     *         description="Порядок сортировки (возрастающий - asc, убывающий - desc)",
     *          in = "query",
     *         required=false,
     *         @OA\Schema(
     *             type="string",
     *         )
     *     ),
     *      @OA\Parameter(
     *         name="sortBy",
     *         description="По какому полю сортировать",
     *          in = "query",
     *         required=false,
     *         @OA\Schema(
     *             type="string",
     *         )
     *     ),
     *      @OA\Parameter(
     *         name="pageSize",
     *         description="Размер страницы. Позитивное число",
     *          in = "query",
     *         required=false,
     *         @OA\Schema(
     *             type="integer",
     *         )
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="7 проектов на странице + навигация",
     *          content={
     *         @OA\MediaType(
     *              mediaType="application/json",
     *              @OA\Schema(
     *                @OA\Property(
     *                property="projectCount",
     *                  type="integer",
     *                  description="Общее количество проектов",
     *                ),
     *                @OA\Property(
     *                 property="data",
     *                 type="array",
     *                 description="Массив проектов",
     *                 @OA\Items(ref="#/components/schemas/Project")
     *                ),
     *              )
     *          )
     *          }
     *     ),
     * )
     */
    public function __invoke(Request $request)
    {
        $projectCollection = Project::with('skills', 'specialities', 'type', 'state', 'supervisors')->get();
        $sortBy = $request->get('sortBy') ?? 'id';

        $order = $request->get('order') ?? 'asc';
        if ($order == 'asc') {
            $projectCollection = $projectCollection->sortBy($sortBy);

        } else {
            $projectCollection = $projectCollection->sortByDesc($sortBy);
        }

        $candidate = $request->get('candidate');
        if ($candidate != null) {
            $candidateSpeciality = explode("-", $candidate['training_group'])[0];

            $specilities = Speciality::where('name', $candidateSpeciality)->get();
            if (count($specilities) == 0) {
                return response('Не найдено', 404);
            }
            $specility1 = $specilities[0];
            $specilitiesInInstitute = $specility1->institute->specialities;
            $specilitiesInInstituteIds = $specilitiesInInstitute->pluck('id')->toArray();

            $idProjectsWithSpecialities = ProjectSpeciality::select('project_id as id')->whereIn('speciality_id', $specilitiesInInstituteIds)->get()->toArray();
            $idProject = [];
            foreach ($idProjectsWithSpecialities as $key => $value) {
                array_push($idProject, $value['id']);
            }
            $projectCollection = $projectCollection->whereIn('id', $idProject);
        }

        $inputSkills = $this->stringToArray($request->input('skills'));
        $inputSpecialities = $this->stringToArray($request->input('specialties'));

        $inputTypes = $this->stringToArray($request->input('type'));
        $inputState = $this->stringToArray($request->input('state'));
        $inputSupervisors = $this->stringToArray($request->input('supervisor'));
        $inputDiff = $this->stringToArray($request->input('difficulty'));

        //фильтрация по специальностям
        $specialities = array_map(function ($value) {
            return intval($value);
        }, $inputSpecialities ?? []);

        if (count($specialities) != 0) {
            $idProjectsWithSpecialities = ProjectSpeciality::select('project_id as id')->whereIn('speciality_id', $specialities)->get()->toArray();
            $idProject = [];
            foreach ($idProjectsWithSpecialities as $key => $value) {
                array_push($idProject, $value['id']);
            }
            $projectCollection = $projectCollection->whereIn('id', $idProject);
            //dd($idProject);
        }

        //фильтрация по скиллам
        $skills = array_map(function ($value) {
            return intval($value);
        }, $inputSkills ?? []);

        if (count($skills) != 0) {
            $idProjectsWithSkills = ProjectSkill::select('project_id as id')->whereIn('skill_id', $skills)->get()->toArray();
            $idProject = [];
            foreach ($idProjectsWithSkills as $key => $value) {
                array_push($idProject, $value['id']);
            }
            $projectCollection = $projectCollection->whereIn('id', $idProject);
        }

        //фильтрация по типу
        $types = array_map(function ($value) {
            return intval($value);
        }, $inputTypes ?? []);
        if (count($types) != 0) {
            $projectCollection = $projectCollection->whereIn('type_id', $types);
        }

        //фильтрация по состоянию
        $states = array_map(function ($value) {
            return intval($value);
        }, $inputState ?? []);
        if (count($states) != 0) {
            $projectCollection = $projectCollection->whereIn('state_id', $states);
        }

        //фильтрация по сложности
        $difficulty = array_map(function ($value) {
            return intval($value);
        }, $inputDiff ?? []);
        if (count($difficulty) != 0) {
            $projectCollection = $projectCollection->whereIn('difficulty', $difficulty);
        }

        //фильтрация по руководителю
        // $supervisors = array_map(function ($value) {
        //     return intval($value);
        // }, $inputSupervisors ?? []);
        // if (count($supervisors) != 0)
        //     $data = $data->whereIn('supervisor_id', $supervisors);

        // фильтрация по тегам
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
            $projectCollection = $projectCollection->filter(function ($value) use ($title) {
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
            $projectCollection = $projectCollection->filter(function ($value) use ($dateStart) {
                return $value->date_start >= $dateStart;
            })->values();
        }
        if ($dateEnd != '') {
            $projectCollection = $projectCollection->filter(function ($value) use ($dateEnd) {
                return $value->date_end <= $dateEnd;
            })->values();
        }

        $page = intval($request->input('page'));
        $pageSize = intval($request->input('pageSize')) ?? 7;
        if ($pageSize <= 0) {
            $pageSize = 7;
        }
        $projectCount = count($projectCollection);
        $startIndex = $pageSize * ($page - 1);

        $projectCollection = $projectCollection->slice($startIndex, $pageSize);

        return response()->json(['data' => ProjectResource::collection($projectCollection), 'projectCount' => $projectCount])->setStatusCode(200);
    }
}
