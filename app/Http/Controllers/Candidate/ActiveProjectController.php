<?php

namespace App\Http\Controllers\Candidate;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProjectResource;
use App\Models\Candidate;
use Illuminate\Http\Request;

/**
 * Получение активного проекта студента
 */
class ActiveProjectController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/activeProjects",
     *     summary="Получение активного проекта студента",
     *      tags={"CABINET CANDIDATE"},
     *     @OA\Response(
     *         response="200",
     *         description="Активный проект студента",
     *         @OA\JsonContent( ref="#/components/schemas/Project")
     *     )
     *  )
     * )
     */
    public function __invoke(Request $request)
    {

        $activeProject = $request->get('candidate')->activeProject();
        if ($activeProject) {
            return new ProjectResource($activeProject);
        } else {
            return response(['error' => 'Активного проекта нет'], 404);
        }
    }
}
