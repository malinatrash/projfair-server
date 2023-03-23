<?php

namespace App\Http\Controllers\Supervisor;

use App\Http\Controllers\Controller;
use App\Http\Resources\SupervisorResource;
use App\Models\Supervisor;

/**
 * Получение информации о преподавателе по ID
 */
class ShowController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/states/{id}",
     *     summary="Получение информации о преподавателе по ID",
     *     tags={"Supervisor"},
     *     @OA\Parameter(
     *         name="id",
     *         description="ID преподавателя",
     *          in = "path",
     *         required=true,
     *         @OA\Schema(
     *             type="integer",
     *         ),
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="Информация о преподавателе",
     *         @OA\JsonContent(ref="#/components/schemas/Supervisor")
     *     ),
     * )
     */
    public function __invoke(Supervisor $supervisor)
    {
        return new SupervisorResource($supervisor);
    }
}
