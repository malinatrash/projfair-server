<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use App\Http\Requests\Project\StoreRequest;
use App\Models\Project;

/**
 * Создать проекта (UNUSED)
 */
class StoreController extends Controller
{
    /**
     * @OA\Post(
     *     path="/api/projects",
     *     summary="Создать проекта @TODO BODY",
     *      tags={"UNUSED"},
     *     @OA\Response(
     *         response="200",
     *         description="Проект создан",
     *     ),
     * )
     * )
     */
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Project::create($data);
        return response([]);
    }
}
