<?php

namespace App\Http\Controllers\Admin\HarvestSetting;

use App\Http\Controllers\Controller;
use App\Http\Requests\Type\UpdateRequestAdminType;
use App\Models\HarvestSetting;

/**
 * Обновить настройку сбора заявок
 */
class UpdateController extends Controller
{
    //TODO add body
    /**
     * @OA\Patch(
     *     path="/api/admin/harvestSettings/${id}",
     *     summary="Обновить настройку сбора заявок",
     *      tags={"ADMIN"},
     *      @OA\Parameter(
     *         name="id",
     *         description="ID настройки",
     *          in = "path",
     *         required=true,
     *         @OA\Schema(
     *             type="integer"
     *         )
     *     ),
     *     @OA\RequestBody(
     *         description="Параметры для обновления настройки",
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
     *         description="Настройка изменена",
     *     ),
     *     @OA\Response(
     *         response="404",
     *         description="Настройка не найдена",
     *     ),

     * )
     * )
     */
    public function __invoke(UpdateRequestAdminType $request, HarvestSetting $harvestSetting)
    {
        $data = $request->validated();
        $harvestSetting->update($data);
        return response([]);
    }
}
