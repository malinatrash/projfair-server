<?php

namespace App\Http\Controllers\Type;

use App\Http\Controllers\Controller;
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
     *      tags={"ProjectState"},
     *     @OA\Response(
     *         response="200",
     *         description="Cостояния проектов",
     *
     *         @OA\JsonContent(
     *              type="array",
     *                  @OA\Items(
     *                 ref="#/components/schemas/ProjectType"
     *         )
     * )
     *     ),
     * )
     */
    public function __invoke()
    {
        $types = Type::all();
        return $types;
    }
}
