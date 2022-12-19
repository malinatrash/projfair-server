<?php

namespace App\Http\Controllers\Admin\Type;

use App\Http\Controllers\Controller;
use App\Http\Requests\Type\UpdateRequestAdminType;
use App\Models\Type;

/**
 * Обновить тип проекта (UNUSED)
 */
class UpdateController extends Controller
{
    /**
     * @OA\Patch(
     *     path="/api/admin/types/${id}",
     *     summary="Обновить тип проекта",
     *      tags={"ADMIN"},
     *      @OA\Parameter(
     *         name="id",
     *         description="ID типа проекта",
     *          in = "path",
     *         required=true,
     *         @OA\Schema(
     *             type="integer"
     *         )
     *     ),
     *     @OA\RequestBody(
     *         description="Параметры для создания типа проекта",
     *         required=true,
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                  @OA\Property(
     *                      type="string",
     *                      property="type",
     *                  ),
     *              )
     *          )
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="Тип проекта изменен",
     *     ),
     *     @OA\Response(
     *         response="404",
     *         description="Тип проекта не найден",
     *     ),

     * )
     * )
     */
    public function __invoke(UpdateRequestAdminType $request, Type $type)
    {
        $data = $request->validated();
        $type->update($data);
        return response([]);
    }
}
