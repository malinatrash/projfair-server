<?php

namespace App\Http\Controllers\Skill;

use App\Http\Controllers\Controller;
use App\Models\Skill;

/**
 * Удалить навык (UNUSED)
 */
class DeleteController extends Controller
{
    /**
     * @OA\Delete(
     *     path="/api/skills/${id}",
     *     summary="Удаление навыка",
     *      tags={"UNUSED"},
     *      @OA\Parameter(
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
     *         description="навык удален",
     *     ),
     * )
     */
    public function __invoke(Skill $skill)
    {
        $skill->delete();
        return response([]);
    }
}
