<?php

namespace App\Http\Controllers\Supervisor;

use App\Http\Controllers\Controller;
use App\Http\Resources\SupervisorResource;
use App\Models\Supervisor;

/**
 * Получение всех преподавателей
 */
class IndexController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/supervisors/",
     *     summary="Получить всех преподавателей",
     *      tags={"Supervisor"},
     *     @OA\Response(
     *         response="200",
     *         description="все преподаватели",
     *
     *         @OA\JsonContent(
     *              type="array",
     *                  @OA\Items(
     *                 ref="#/components/schemas/Supervisor"
     *         )
     * )
     *     ),
     * )
     */
    public function __invoke()
    {
        $supervisors = Supervisor::all();
        return SupervisorResource::collection($supervisors);
    }
}
