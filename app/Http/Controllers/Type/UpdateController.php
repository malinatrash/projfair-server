<?php

namespace App\Http\Controllers\Type;

use App\Http\Controllers\Controller;
use App\Http\Requests\Type\UpdateRequest;
use App\Models\Type;

/**
 * Обновить тип проекта (UNUSED)
 */
class UpdateController extends Controller
{
    /**
     * @OA\Patch(
     *     path="/api/states/${id}",
     *     summary="Обновить тип проекта",
     *      tags={"UNUSED"},
     *      @OA\Parameter(
     *         name="id",
     *         description="ID типа проекта @TODO BODY",
     *          in = "path",
     *         required=true,
     *         @OA\Schema(
     *             type="integer"
     *         )
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="Тип проекта изменен",
     *     ),

     * )
     * )
     */
    public function __invoke(UpdateRequest $request, Type $type)
    {
        $data = $request->validated();
        $type->update($data);
        return response([]);
    }
}
