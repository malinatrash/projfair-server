<?php

namespace App\Http\Controllers\Admin\SkillCategory;

use App\Http\Requests\SkillCategory\UpdateRequest;
use App\Models\SkillCategory;

/**
 * Обновить категорию навыков
 */
class UpdateController
{

    /**
     * @OA\Patch(
     *     path="/api/admin/skillCategory/${id}",
     *     summary="Обновить категорию навыков",
     *      tags={"ADMIN"},
     *      @OA\Parameter(
     *         name="id",
     *         description="ID категория навыков",
     *         in="path",
     *         required=true,
     *         @OA\Schema(type="integer"),
     *     ),
     *     @OA\RequestBody(
     *         description= "Параметры для обновления категории навыка",
     *         required=true,
     *         @OA\MediaType(
     *             mediaType="aplication\json",
     *             @OA\Schema(
     *                 @OA\Property(
     *                     type= "string",
     *                     property= "name",
     *                 ),
     *             ),
     *         ),
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="категория навыков изменена",
     *     ),
     * )
     */
    public function __invoke(UpdateRequest $request, SkillCategory $skillCategory)
    {
        $data = $request->validated();
        $skillCategory->update($data);
        return response([]);
    }
}
