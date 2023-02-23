<?php

namespace App\Http\Controllers\Admin\HarvestSetting;

use App\Http\Resources\HarvestSettingResource;
use App\Models\HarvestSetting;

/**
 * Получение информации о настройке по ID
 */
class ShowController
{

    /**
     * @OA\Get(
     *     path="/api/admin/harvestSettings/{id}",
     *     summary="Получение информации о настройке по ID",
     *      tags={"ADMIN"},
     *           @OA\Parameter(
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
     *         description="настрока",
     *         @OA\JsonContent(ref="#/components/schemas/HarvestSetting")
     *     ),
     *     @OA\Response(
     *         response="404",
     *         description="настройка не найдена",
     *     ),
     * )
     */
    public function __invoke(HarvestSetting $harvestSetting)
    {
        return new HarvestSettingResource($harvestSetting);
    }
}