<?php

namespace App\Http\Controllers\Type;

use App\Http\Controllers\Controller;
use App\Models\Type;

/**
 * Получение типа проекта по ID
 */
class ShowController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/types/{id}",
     *     summary="Получение типа проекта по ID",
     *      tags={"Project"},
     *           @OA\Parameter(
     *         name="id",
     *         description="ID типа проекта",
     *          in = "path",
     *         required=true,
     *         @OA\Schema(
     *             type="integer"
     *         )
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="Тип проекта",
     *
     *         @OA\JsonContent(
     *                 ref="#/components/schemas/ProjectType"
     *
     * )
     *     ),
     * )
     */
    public function __invoke(Type $type)
    {
        return $type;
    }
}
