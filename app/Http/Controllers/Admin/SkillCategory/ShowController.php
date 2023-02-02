<?php

namespace App\Http\Controllers\Admin\SkillCategory;

use App\Https\Resources\SkillCategoryResource;
use App\Models\SkillCategory;

/**
 * Получение информации о категории навыков по ID
 */
class ShowController
{

    /**
     * @OA\Get(
     *     path="/api/admin/skillCategory/{id}",
     *     summary="Получение информации о категории навыков по ID",
     *      tags={"ADMIN"},
     *           @OA\Parameter(
     *         name="id",
     *         description="ID категории навыков",
     *          in = "path",
     *         required=true,
     *         @OA\Schema(
     *             type="integer"
     *         )
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="Категория навыков",
     *         @OA\JsonContent(ref="#/components/schemas/SkillCategory")
     *     ),
     *     @OA\Response(
     *         response="404",
     *         description="Категория навыков не найдена",
     *     ),
     * )
     */
    public function __invoke(SkillCategory $skillCategory)
    {
        return new SkillCategoryResource($skillCategory);
    }
}
