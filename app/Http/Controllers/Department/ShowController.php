<?php

namespace App\Http\Controllers\Department;

use App\Http\Resources\DepartmentResource;
use App\Models\Department;

/**
 * Получение информации о кафедре по ID
 */
class ShowController
{

    /**
     * @OA\Get(
     *     path="/api/departments/{id}",
     *     summary="Получение информации о кафедре по ID",
     *      tags={"Department"},
     *           @OA\Parameter(
     *         name="id",
     *         description="ID кафедры",
     *          in = "path",
     *         required=true,
     *         @OA\Schema(
     *             type="integer"
     *         )
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="кафедра",
     *         @OA\JsonContent(ref="#/components/schemas/Department")
     *     ),
     *     @OA\Response(
     *         response="404",
     *         description="настройка не найдена",
     *     ),
     * )
     */
    public function __invoke(Department $department)
    {
        return new DepartmentResource($department);
    }
}
