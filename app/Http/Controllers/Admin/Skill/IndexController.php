<?php

namespace App\Http\Controllers\Admin\Skill;

use App\Http\Controllers\Controller;
use App\Http\Resources\SkillResource;
use App\Models\Skill;

/**
 * Получение всех скилов
 */
class IndexController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/admin/skills/",
     *     summary="Получить все навыки",
     *      tags={"ADMIN"},
     *     @OA\Response(
     *         response="200",
     *         description="Навыки",
     *         @OA\JsonContent(
     *              type="array",
     *                  @OA\Items(ref="#/components/schemas/Skill")
     *        )
     *     ),
     * )
     */
    public function __invoke()
    {
        $skills = Skill::all();

        return SkillResource::collection($skills);
    }
}
