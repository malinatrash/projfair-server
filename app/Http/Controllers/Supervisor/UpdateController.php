<?php

namespace App\Http\Controllers\Supervisor;

use App\Http\Controllers\Controller;
use App\Http\Requests\Supervisor\UpdateRequest;
use App\Models\Supervisor;

/**
 * Обновить информацию о преподавателе
 */
class UpdateController extends Controller
{
    /**
     * @OA\Patch(
     *     path="/api/supervisors/{id}",
     *     summary="Обновить состояние проекта",
     *      tags={"UNUSED"},
     *      @OA\Parameter(
     *         name="id",
     *         description="ID преподавателя @TODO BODY",
     *          in = "path",
     *         required=true,
     *         @OA\Schema(
     *             type="integer"
     *         )
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="Преподаватель изменен",
     *     ),

     * )
     * )
     */
    public function __invoke(UpdateRequest $request, Supervisor $supervisor)
    {
        $data = $request->validated();
        $supervisor->update($data);
        return response([]);
    }
}
