<?php

namespace App\Http\Controllers\Admin\State;

use App\Http\Controllers\Controller;
use App\Http\Requests\State\UpdateRequestAdminState;
use App\Models\State;

/**
 * Обновить состояние проекта
 */
class UpdateController extends Controller
{
    /**
     * @OA\Patch(
     *     path="/api/admin/states/${id}",
     *     summary="Обновить состояние проекта",
     *      tags={"ADMIN"},
     *      @OA\Parameter(
     *         name="id",
     *         description="ID состояния проекта",
     *          in = "path",
     *         required=true,
     *         @OA\Schema(
     *             type="integer"
     *         )
     *     ),
     *     @OA\RequestBody(
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
     *         description="Состояние проекта изменено",
     *     ),
     *     @OA\Response(
     *         response="404",
     *         description="Состояние проекта не найдено",
     *     ),

     * )
     * )
     */
    public function __invoke(UpdateRequestAdminState $request, State $state)
    {
        $data = $request->validated();
        $state->update($data);
        return response([]);
    }
}
