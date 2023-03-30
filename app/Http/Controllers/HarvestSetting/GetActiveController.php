<?php

namespace App\Http\Controllers\HarvestSetting;

use App\Http\Controllers\Controller;
use App\Http\Resources\HarvestSettingResource;
use App\Models\ActiveHarvestSetting;
use Illuminate\Http\Request;

/**
 * Получение информации о активной настройке
 */
class GetActiveController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/harvestSettings/active",
     *     summary="Получение информации о активной настройке",
     *      tags={"ADMIN"},

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
    public function __invoke()
    {
        $harvestSetting = ActiveHarvestSetting::firstWhere('id', 1)->harvest;

        return new HarvestSettingResource($harvestSetting);
    }
}
