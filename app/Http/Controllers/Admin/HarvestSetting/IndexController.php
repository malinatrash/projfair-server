<?php

namespace App\Http\Controllers\Admin\HarvestSetting;

use App\Http\Controllers\Controller;
use App\Http\Resources\HarvestSettingResource;
use App\Models\HarvestSetting;

/**
 * Получить информацию о настройках
 */
class IndexController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/admin/harvestSettings/",
     *     summary="Получить информацию о всех настройках",
     *      tags={"ADMIN"},
     *     @OA\Response(
     *         response="200",
     *         description="Все настройки",
     *         @OA\JsonContent(
     *              type="array",
     *                  @OA\Items(
     *                 ref="#/components/schemas/HarvestSetting"
     *         )
     * )
     *     ),
     * )
     */
    public function __invoke()
    {
        $harvestSettings = HarvestSetting::all();
        return HarvestSettingResource::collection($harvestSettings);
    }
}
