<?php

namespace App\Http\Controllers\Admin\Type;

use App\Http\Controllers\Controller;
use App\Http\Requests\Type\StoreRequestAdminType;
use App\Models\Type;

/**
 * Создать тип проекта (UNUSED)
 */
class StoreController extends Controller
{
    /**
     * @OA\Post(
     *     path="/api/admin/types",
     *     summary="Создать тип проекта",
     *      tags={"ADMIN"},
     *      @OA\RequestBody(
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
     *
     *     @OA\Response(
     *         response="200",
     *         description="Тип проекта создан",
     *     ),
     * )
     * )
     */
    public function __invoke(StoreRequestAdminType $request)
    {
        $data = $request->validated();
        Type::create($data);
        return response([]);
    }
}
