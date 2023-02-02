<?php

namespace App\Http\Controllers\Admin\SkillCategory;

use App\Http\Requests\SkillCategory\StoreRequest;
use App\Models\SkillCategory;

/**
 * Создать категорию навыков
 */
class StoreController
{

    /**
     * @OA\Post(
     *     path="/api/admin/skillCategory",
     *     summary="Создать категорию навыков",
     *     tags={"ADMIN"},
     *     @OA\RequestBody(
     *         description= "Параметры для обновления категории навыка",
     *         required=true,
     *         @OA\MediaType(
     *             mediaType="aplication\json",
     *             @OA\Schema(
     *                 @OA\Property(
     *                     type="string",
     *                     property="name",
     *                 ),
     *             ),
     *         ),
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="категория навыков создана",
     *     ),
     * )
     */
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        SkillCategory::create($data);
        return response([]);
    }
}
