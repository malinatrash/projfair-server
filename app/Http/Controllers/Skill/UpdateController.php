<?php

namespace App\Http\Controllers\Skill;

use App\Http\Controllers\Controller;
use App\Http\Requests\Skill\UpdateRequest;
use App\Models\Skill;

/**
 * Обновить навык
 */
class UpdateController extends Controller
{
    /**
     * @OA\Patch(
     *     path="/api/skills/${id}",
     *     summary="Обновить навык",
     *      tags={"UNUSED"},
     *      @OA\Parameter(
     *         name="id",
     *         description="ID навыка @TODO BODY",
     *          in = "path",
     *         required=true,
     *         @OA\Schema(
     *             type="integer"
     *         )
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="навык изменен",
     *     ),

     * )
     * )
     */
    public function __invoke(UpdateRequest $request, Skill $skill)
    {
        $data = $request->validated();
        $skill->update($data);
        return response([]);
    }
}
