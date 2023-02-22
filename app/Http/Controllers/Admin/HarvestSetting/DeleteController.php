<?php

namespace App\Http\Controllers\Admin\Type;

use App\Http\Controllers\Controller;
use App\Models\HarvestSetting;
use App\Models\Type;

/**
 * Удалить настройку сбора заявок
 */
class DeleteController extends Controller
{
    /**
     * @OA\Delete(
     *     path="/api/admin/harvestSetting/${id}",
     *     summary="Удалить настройку сбора заявок",
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
     *     @OA\Response(
     *         response="200",
     *         description="Тип проекта удален",
     *     ),
     *     @OA\Response(
     *         response="404",
     *         description="Тип проекта не найден",
     *     ),
     * )
     */
    public function __invoke(HarvestSetting $harvestSetting)
    {
        $harvestSetting->delete();
        return response([]);
    }
}
