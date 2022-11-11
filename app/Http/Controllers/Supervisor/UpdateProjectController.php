<?php

namespace App\Http\Controllers\Supervisor;

use App\Http\Controllers\Controller;
use App\Http\Requests\Project\UpdateRequest;
use App\Models\Project;
use App\Models\Supervisor;

class UpdateProjectController extends Controller
{
    /**
     * @OA\Patch(
     *     path="/api/supervisor/projects/{id}",
     *     summary="Обновить проект преподавателя",
     *      tags={"DEPRECATED"},
     *      @OA\Parameter(
     *         name="id",
     *         description="ID проекта @TODO BODY",
     *          in = "path",
     *         required=true,
     *         @OA\Schema(
     *             type="integer"
     *         )
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="Проект изменен",
     *     ),

     * )
     * )
     */
    public function __invoke($id, UpdateRequest $request)
    {
        $token = $request->get('api_token');
        $id_supervisor = Supervisor::where('api_token', $token)->select('id')->get()[0]['id'];

        $projs = Project::where('supervisor_id', $id_supervisor)->where('id', $id)->get();
        if ($projs->count() == 0) {
            return response()->json(['error' => 'У руководителя нет такого проекта'], 400);
        }

        $updated = [];
        $possibleFiled = [
            'title', 'places', 'difficulty', 'date_start', 'date_end',
            'goal', 'idea', 'customer', 'type', 'requirements', 'skills',
        ];

        foreach ($possibleFiled as $v) {
            if (isset($request[$v])) {
                $updated[$v] = $request[$v];
            }

        }

        Project::where('id', $id)->update($updated);

        return response()->json(['success' => 'OK'], 200);
    }
}
