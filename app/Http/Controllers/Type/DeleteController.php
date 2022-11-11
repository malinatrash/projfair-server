<?php

namespace App\Http\Controllers\Type;

use App\Http\Controllers\Controller;
use App\Models\Type;

/**
 * Удалить тип проекта (UNUSED)
 */
class DeleteController extends Controller
{
    /**
     * @OA\Delete(
     *     path="/api/types/${id}",
     *     summary="Удалить тип проекта",
     *      tags={"UNUSED"},
     *      @OA\Parameter(
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
     *         description="Тип проекта удален",
     *     ),
     * )
     */
    public function __invoke(Type $type)
    {
        $type->delete();
        return response([]);
    }
}
