<?php

namespace App\Http\Controllers\Department;

use App\Http\Controllers\Controller;
use App\Http\Resources\DepartmentResource;
use App\Models\Department;

/**
 * Получить информацию о кафедрах
 */
class IndexController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/departments/",
     *     summary="Получить информацию о кафедрах",
     *      tags={"Department"},
     *     @OA\Response(
     *         response="200",
     *         description="Кафедры",
     *         @OA\JsonContent(
     *              type="array",
     *                  @OA\Items(
     *                 ref="#/components/schemas/Department"
     *         )
     * )
     *     ),
     * )
     */
    public function __invoke()
    {
        $departmets = Department::all();
        return DepartmentResource::collection($departmets);
    }
}
