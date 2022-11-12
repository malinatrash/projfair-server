<?php

namespace App\Http\Controllers\Skill;

use App\Http\Controllers\Controller;
use App\Http\Resources\SkillResource;
use App\Models\Skill;

/**
 * Получить информацию о навыке
 */
class ShowController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/skills/{id}",
     *     summary="Получение информации о навыке по ID",
     *      tags={"Skill"},
     *           @OA\Parameter(
     *         name="id",
     *         description="ID навыка",
     *          in = "path",
     *         required=true,
     *         @OA\Schema(
     *             type="integer"
     *         )
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="Навык",
     *         @OA\JsonContent(ref="#/components/schemas/Skill")
     *     ),
     *     @OA\Response(
     *         response="404",
     *         description="Навык не найден",
     *     ),
     * )
     */
    public function __invoke(Skill $skill)
    {
        return new SkillResource($skill);
    }
}
