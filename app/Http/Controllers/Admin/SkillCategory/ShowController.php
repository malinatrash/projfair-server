<?php

namespace App\Http\Controllers\Admin\SkillCategory;

use App\Models\SkillCategory;

class ShowController
{

    /**
     * @OA\Get(
     *     path="/api/skillCategories/{id}",
     *     summary="Получение информации о категории навыков по ID",
     *      tags={"SkillCategory"},
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
