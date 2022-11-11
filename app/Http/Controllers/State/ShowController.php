<?php

namespace App\Http\Controllers\State;

use App\Http\Controllers\Controller;
use App\Models\State;

/**
 * Получение состояния проекта
 */
class ShowController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/states/{id}",
     *     summary="Получение состояния проекта по ID",
     *      tags={"Project"},
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
     *         description="Навык",
     *
     *         @OA\JsonContent(
     *                 ref="#/components/schemas/Skill"
     *
     * )
     *     ),
     * )
     */
    public function __invoke(State $state)
    {
        return $state;
    }
}
