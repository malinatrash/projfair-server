<?php

namespace App\Http\Controllers\State;

use App\Http\Controllers\Controller;
use App\Http\Requests\State\UpdateRequest;
use App\Models\State;

/**
 * Обновить состояние проекта
 */
class UpdateController extends Controller
{
    /**
     * @OA\Patch(
     *     path="/api/states/${id}",
     *     summary="Обновить состояние проекта",
     *      tags={"UNUSED"},
     *      @OA\Parameter(
     *         name="id",
     *         description="ID состояния проекта @TODO BODY",
     *          in = "path",
     *         required=true,
     *         @OA\Schema(
     *             type="integer"
     *         )
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="Состояние проекта изменено",
     *     ),

     * )
     * )
     */
    public function __invoke(UpdateRequest $request, State $state)
    {
        $data = $request->validated();
        $state->update($data);
        return response([]);
    }
}
