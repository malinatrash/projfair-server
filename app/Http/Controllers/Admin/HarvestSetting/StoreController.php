<?php

namespace App\Http\Controllers\Admin\HarvestSetting;

use App\Http\Controllers\Controller;
use App\Http\Requests\Type\StoreRequestAdminType;
use App\Models\HarvestSetting;

/**
 * Создать настройку сбора заявок
 */
class StoreController extends Controller
{
    //TODO add body
    /**
     * @OA\Post(
     *     path="/api/admin/harvestSettings",
     *     summary="Создать настройку сбора заявок",
     *      tags={"ADMIN"},
     *      @OA\RequestBody(
     *         description="Параметры для настройки",
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
     *         description="Тип настройка создана",
     *     ),
     * )
     * )
     */
    public function __invoke(StoreRequestAdminType $request)
    {
        $data = $request->validated();
        HarvestSetting::create($data);
        return response([]);
    }
}
