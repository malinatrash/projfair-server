<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use App\Models\Project;

/**
 * Получить информацию о проектах с пагинацией (UNUSED)
 */
class IndexController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/projects/",
     *     summary="Получить информацию о проектах с пагинацией",
     *      tags={"UNUSED"},
     *     @OA\Response(
     *         response="200",
     *         description="Проекты",
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
    public function __invoke()
    {
        $dataAll = Project::join('states', 'states.id', '=', 'projects.state_id')->where('states.state', '!=', 'Обработка')->get();
        $projectCount = count($dataAll);
        $projects = Project::with('skills', 'specialities', 'type', 'state', 'supervisor')->simplePaginate(7)->getCollection();
        $projects->makeHidden(['state_id', 'supervisor_id', 'type_id']);
        return response()->json(['data' => $projects, 'projectCount' => $projectCount])->setStatusCode(200, 'Paginating 7 projects');
    }
}
