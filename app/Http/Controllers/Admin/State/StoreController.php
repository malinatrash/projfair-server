<?php

namespace App\Http\Controllers\Admin\State;

use App\Http\Controllers\Controller;
use App\Http\Requests\State\StoreRequestAdminState;
use App\Models\State;

/**
 * Создать состояние проекта
 */
class StoreController extends Controller
{
    /**
     * @OA\Post(
     *     path="/api/admin/states",
     *     summary="Создать состояние проекта",
     *      tags={"ADMIN"},
     *      @OA\RequestBody(
     *         description="Параметры для обновления состояния проекта",
     *         required=true,
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                  @OA\Property(
     *                      type="string",
     *                      property="state",
     *                  ),
     *              )
     *          )
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="Состояние проекта создано",
     *     ),
     * )
     * )
     */
    public function __invoke(StoreRequestAdminState $request)
    {
        $data = $request->validated();
        State::create($data);
        return response([]);
    }
}
