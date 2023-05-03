<?php

namespace App\Http\Controllers\State;

use App\Http\Controllers\Controller;
use App\Http\Resources\StateResource;
use App\Models\ProjectStateEnum;

/**
 * Получение всех состояний проекта
 */
class IndexController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/states/",
     *     summary="Получить все состояния проекта",
     *      tags={"ProjectState"},
     *     @OA\Response(
     *         response="200",
     *         description="Cостояния проектов",
     *
     *         @OA\JsonContent(
     *              type="array",
     *                  @OA\Items(ref="#/components/schemas/ProjectState")
     *          )
     *     ),
     * )
     */
    public function __invoke()
    {
        $states = ProjectStateEnum::getAllProjectStatesData();
        return StateResource::collection($states);
    }
}
