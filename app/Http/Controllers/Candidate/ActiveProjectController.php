<?php

namespace App\Http\Controllers\Candidate;

use App\Http\Controllers\Controller;
use App\Models\Candidate;
use App\Models\Participation;
use Illuminate\Http\Request;

/**
 * Получение активного проекта студента
 */
class ActiveProjectController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/arhiveProjects",
     *     summary="Получение активного проекта студента",
     *      tags={"Candidate"},
     *     @OA\Response(
     *         response="200",
     *         description="Архивные проекты студента",
     *         @OA\JsonContent( ref="#/components/schemas/Project")
     *     )
     *  )
     * )
     */
    public function __invoke(Request $request)
    {

        $activeProject = $request->get('candidate')->activeProject();
        if ($activeProject) {
            return $activeProject;
        } else {
            return abort(404);
        }
    }
}
