<?php

namespace App\Http\Controllers\Admin\SkillCategory;

use App\Http\Controllers\Controller;
use App\Models\SkillCategory;

/**
 * Удалить категорию навыков
 */
class DeleteController extends Controller
{
    /**
     * @OA\Delete(
     *     path="/api/admin/${id}",
     *     summary="Удаление категории навыков",
     *      tags={"ADMIN"},
     *      @OA\Parameter(
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
     *         description="категория навыков удалена",
     *     ),
     * )
     */
    public function __invoke(SkillCategory $skillCategory)
    {
        $skillCategory->delete();
        return response([]);
    }
}
