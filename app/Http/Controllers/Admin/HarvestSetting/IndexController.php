<?php

namespace App\Http\Controllers\Admin\Project;

use App\Http\Controllers\Controller;
use App\Http\Resources\HarvestSettingResource;
use App\Http\Resources\ProjectResource;
use App\Models\HarvestSetting;
use App\Models\Project;

/**
 * Получить информацию о настройках
 */
class IndexController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/admin/harvestSetting/",
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
