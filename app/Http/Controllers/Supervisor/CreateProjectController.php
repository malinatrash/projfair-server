<?php

namespace App\Http\Controllers\Supervisor;

use App\Http\Controllers\Controller;
use App\Http\Requests\Project\StoreRequestAdminProject;
use App\Models\Project;
use App\Models\ProjectSkill;
use App\Models\Supervisor;

/**
 * Создать проект (Преподаватель)
 */
class CreateProjectController extends Controller
{
    /**
     * @OA\Post(
     *     path="/supervisor/projects",
     *     summary="Создать проект (Преподаватель) @TODO BODY",
     *      tags={"DEPRECATED"},

     *     @OA\Response(
     *         response="200",
     *         description="Проект создан",
     *     ),
     * )
     */
    public function __invoke(StoreRequestAdminProject $request)
    {
        $token = $request->get('api_token');
        $id = Supervisor::where('api_token', $token)->select('id')->get()[0]['id'];

        $project_id = Project::create([
            'supervisor_id' => $id,
            'state_id' => 2, //активный
            'title' => $request['title'],
            'places' => $request['places'],
            'difficulty' => $request['difficulty'],
            'date_start' => $request['date_start'],
            'date_end' => $request['date_end'],
            'goal' => $request['goal'],
            'idea' => $request['idea'],
            'customer' => $request['customer'],
            'type_id' => $request['type'],
            'expected_result' => '',
            'requirements' => $request['requirements'],
        ])->id;

        foreach ($request['skills'] as $skill) {
            if (!is_int($skill)) {
                return response()->json(
                    [
                        'status' => false,
                        'message' => 'Массив тегов содержит не число',
                    ],
                    400
                );
            }

            ProjectSkill::create([
                'project_id' => $project_id,
                'skill_id' => $skill,
            ]);
        }

        return response()->json(['success' => 'OK'], 200);
    }
}
