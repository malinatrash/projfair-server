<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProjectResource;
use App\Models\Candidate;
use App\Models\Project;
use App\Models\ProjectSkill;
use App\Models\ProjectSpeciality;
use App\Models\Speciality;
use App\Utils\StateParticipationUtil;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

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
     *         description="Размер страницы. Позитивное число ИЛИ 'max' для получения без пагинации",
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
        $projectCollection = $this->sortProjects($request, $projectCollection);
        $projectCollection = $this->filterProjectsByCandidateSpeciality($request, $projectCollection);
        $projectCollection = $this->filterProjectsBySpecialities($request, $projectCollection);
        $projectCollection = $this->filterProjectsBySkills($request, $projectCollection);
        $projectCollection = $this->filterProjectsByType($request, $projectCollection);
        $projectCollection = $this->filterProjectsByState($request, $projectCollection);
        $projectCollection = $this->filterProjectsByDifficulty($request, $projectCollection);
        $projectCollection = $this->filterProjectsByTitle($request, $projectCollection);
        $projectCollection = $this->filterProjectsBySupervisor($request, $projectCollection);
        $projectCollection = $this->filterProjectsByDate($request, $projectCollection);
        $projectCount = count($projectCollection);
        $projectCollection = $this->paginateProjects($request, $projectCollection);
        return response()->json(['data' => ProjectResource::collection($projectCollection), 'projectCount' => $projectCount])->setStatusCode(200);
    }

    private function sortProjects(Request $request, Collection $projectCollection): Collection
    {
        $sortBy = $request->get('sortBy') ?? 'state.show_priority';
        $order = $request->get('order') ?? 'desc';
        return $projectCollection->sortBy([[$sortBy, $order]]);
    }

    private function filterProjectsByCandidateSpeciality(Request $request, Collection $projectCollection): Collection
    {
        $candidate = $request->get('candidate');

        if ($candidate == null) {
            return $projectCollection;
        }

        $candidateInsitute = $candidate->getInstitute();
        if (!isset($candidateInsitute)) {
            return $projectCollection;
        }

        $specilitiesInInstitute = $candidateInsitute->specialities;
        $specilitiesInInstituteIds = $specilitiesInInstitute->pluck('id')->toArray();

        $idProjectsWithSpecialities = ProjectSpeciality::select('project_id as id')->whereIn('speciality_id', $specilitiesInInstituteIds)->get()->toArray();
        $idProject = [];
        foreach ($idProjectsWithSpecialities as $key => $value) {
            array_push($idProject, $value['id']);
        }
        $projectCollection = $projectCollection->whereIn('id', $idProject);
        return $projectCollection;
    }

    private function filterProjectsBySkills(Request $request, Collection $projectCollection): Collection
    {
        $inputSkills = $this->stringToArray($request->input('skills'));

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
        return $projectCollection;
    }
    private function filterProjectsBySpecialities(Request $request, Collection $projectCollection): Collection
    {
        $inputSpecialities = $this->stringToArray($request->input('specialties'));
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
        return $projectCollection;
    }

    private function filterProjectsByType(Request $request, Collection $projectCollection): Collection
    {
        $inputTypes = $this->stringToArray($request->input('type'));
        $types = array_map(function ($value) {
            return intval($value);
        }, $inputTypes ?? []);
        if (count($types) != 0) {
            $projectCollection = $projectCollection->whereIn('type_id', $types);
        }
        return $projectCollection;
    }

    private function filterProjectsByState(Request $request, Collection $projectCollection): Collection
    {
        $inputState = $this->stringToArray($request->input('state'));
        $states = array_map(function ($value) {
            return intval($value);
        }, $inputState ?? []);
        if (count($states) != 0) {
            $projectCollection = $projectCollection->whereIn('state_id', $states);
        }
        return $projectCollection;
    }

    private function filterProjectsByDifficulty(Request $request, Collection $projectCollection): Collection
    {
        $inputDiff = $this->stringToArray($request->input('difficulty'));
        $difficulty = array_map(function ($value) {
            return intval($value);
        }, $inputDiff ?? []);
        if (count($difficulty) != 0) {
            $projectCollection = $projectCollection->whereIn('difficulty', $difficulty);
        }
        return $projectCollection;
    }

    private function filterProjectsByTitle(Request $request, Collection $projectCollection): Collection
    {
        $title = $request->input('title') ?? '';
        $title = ltrim($title, '"');
        $title = rtrim($title, '"');
        if ($title == '') {
            return $projectCollection;
        }
        return $projectCollection->filter(function ($value) use ($title) {
            return (strpos(mb_strtolower($value->title), mb_strtolower($title)) !== false);
        })->values();;
    }

    private function filterProjectsBySupervisor(Request $request, Collection $projectCollection): Collection
    {
        // TODO add functionality
        // $inputSupervisors = $this->stringToArray($request->input('supervisor'));
        // $supervisors = array_map(function ($value) {
        //     return intval($value);
        // }, $inputSupervisors ?? []);
        // if (count($supervisors) != 0)
        //     $data = $data->whereIn('supervisor_id', $supervisors);
        // return $projectCollection->filter(function ($value) use ($title) {
        //     return (strpos(mb_strtolower($value->title), mb_strtolower($title)) !== false);
        // })->values();;
        return $projectCollection;
    }

    private function filterProjectsByDate(Request $request, Collection $projectCollection): Collection
    {
        $dateStart = $request->input('date_start') ?? '';
        $dateEnd = $request->input('date_end') ?? '';

        $dateStart = ltrim($dateStart, '"');
        $dateStart = rtrim($dateStart, '"');

        $dateEnd = rtrim($dateEnd, '"');
        $dateEnd = ltrim($dateEnd, '"');

        if ($dateStart != '') {
            $projectCollection = $projectCollection->filter(function ($project) use ($dateStart) {
                return $project->date_start >= $dateStart;
            })->values();
        }
        if ($dateEnd != '') {
            $projectCollection = $projectCollection->filter(function ($project) use ($dateEnd) {
                return $project->date_end <= $dateEnd;
            })->values();
        }
        return $projectCollection;
    }

    private function paginateProjects(Request $request, Collection $projectCollection): Collection
    {
        $page = intval($request->input('page'));
        $pageSize = $request->input('pageSize') ?? 7;
        if ($pageSize == 'max') {
            return $projectCollection;
        }
        $pageSize = intval($pageSize);
        if ($pageSize <= 0) {
            $pageSize = 7;
        }
        $startIndex = $pageSize * ($page - 1);

        return $projectCollection->slice($startIndex, $pageSize);
    }
}
