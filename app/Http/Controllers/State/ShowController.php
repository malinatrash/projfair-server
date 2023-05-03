<?php

namespace App\Http\Controllers\State;

use App\Http\Controllers\Controller;
use App\Http\Resources\StateResource;
use App\Models\ProjectStateEnum;

/**
 * Получение состояния проекта
 */
class ShowController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/states/{id}",
     *     summary="Получение состояния проекта по ID",
     *      tags={"ProjectState"},
     *           @OA\Parameter(
     *         name="id",
     *         description="ID состояния проекта",
     *          in = "path",
     *         required=true,
     *         @OA\Schema(
     *             type="integer"
     *         )
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="Состояние проекта",
     *         @OA\JsonContent(ref="#/components/schemas/ProjectState")
     *     ),
     *     @OA\Response(
     *         response="404",
     *         description="Состояние проекта не найдено",
     *     ),
     * )
     */
    public function __invoke($id)
    {

        $projectStateEnum = ProjectStateEnum::tryFrom($id);

        if (!isset($projectStateEnum)) {
            return response(['error' => 'Не найдено'], 404);
        }
        $projectState = ProjectStateEnum::getProjectStateFromEnum($projectStateEnum);
        return new StateResource($projectState);
    }
}
