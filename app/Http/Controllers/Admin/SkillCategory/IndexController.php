<?php

namespace App\Http\Controllers\Admin\SkillCategory;

use App\Http\Controllers\Controller;
use App\Http\Resources\SkillCategoryResource;
use App\Models\SkillCategory;
/**
 * Получение всех категорий навыков
 */
class IndexController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/admin/skillCatigory",
     *     summary="Получить информацию  о всех категориях навыков",
     *      tags={"ADMIN"},
     *     @OA\Response(
     *         response="200",
     *         description="Информация о всех категориях навыков",
     *          @OA\JsonContent(
     *              type="array",
     *                  @OA\Items(
     *                          ref="#/components/schemas/SkillCategory"
     *                  )
     *          )
     *     )
     * )
     * )
     */
    public function __invoke()
    {
        $skillCategories = SkillCategory::all();

        return SkillCategoryResource::collection($skillCategories);
    }
}
