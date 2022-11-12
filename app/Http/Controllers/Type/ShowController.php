<?php

namespace App\Http\Controllers\Type;

use App\Http\Controllers\Controller;
use App\Http\Resources\TypeResource;
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
     *      tags={"ProjectType"},
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
     *         @OA\JsonContent(ref="#/components/schemas/ProjectType")
     *     ),
     *     @OA\Response(
     *         response="404",
     *         description="Тип проекта не найден",
     *     ),
     * )
     */
    public function __invoke(Type $type)
    {
        return new TypeResource($type);
    }
}
