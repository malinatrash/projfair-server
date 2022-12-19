<?php

namespace App\Http\Controllers\Admin\SkillCategory;

use App\Http\Controllers\Controller;
use App\Http\Requests\SkillCategory\UpdateRequest;
use App\Models\SkillCategory;

class UpdateController
{

    /**
     * @OA\Patch(
     *     path="/api/skillCategories/${id}",
     *     summary="Обновить категорию навыков",
     *      tags={"UNUSED"},
     *      @OA\Parameter(
     *         name="id",
     *         description="ID категория навыков @TODO BODY",
     *          in = "path",
     *         required=true,
     *         @OA\Schema(
     *             type="integer"
     *         )
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="категория навыков изменена",
     *     ),

     * )
     * )
     */
    public function __invoke(UpdateRequest $request, SkillCategory $skillCategory)
    {
        $data = $request->validated();
        $skillCategory->update($data);
        return response([]);
    }
}
