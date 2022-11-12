<?php

namespace App\Http\Controllers\Type;

use App\Http\Controllers\Controller;
use App\Http\Resources\TypeResource;
use App\Models\Type;

/**
 * Получение всех типов проекта
 */
class IndexController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/types/",
     *     summary="Получение всех типов проекта",
     *      tags={"ProjectType"},
     *     @OA\Response(
     *         response="200",
     *         description="Типы проектов",
     *         @OA\JsonContent(
     *              type="array",
     *              @OA\Items(ref="#/components/schemas/ProjectType")
     *          )
     *     ),
     * )
     */
    public function __invoke()
    {
        $types = Type::all();
        return TypeResource::collection($types);
    }
}
