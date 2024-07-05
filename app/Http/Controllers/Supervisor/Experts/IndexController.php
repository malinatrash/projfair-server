<?php

namespace App\Http\Controllers\Supervisor\Experts;

use App\Http\Controllers\Controller;
use App\Http\Resources\SupervisorExpertResource;
use App\Models\Supervisor;

/**
 * Получение всех преподавателей для выбора привлечённого эксперта при формированиии результатов проекта
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
        return SupervisorExpertResource::collection($supervisors);
    }
}
