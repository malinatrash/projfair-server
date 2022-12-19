<?php

namespace App\Http\Controllers\Admin\SkillCategory;

use App\Http\Controllers\Controller;
use App\Http\Requests\SkillCategory\StoreRequest;
use App\Models\SkillCategory;

class StoreController
{

    /**
     * @OA\Post(
     *     path="/api/skills",
     *     summary="Создать категорию навыков @TODO BODY",
     *      tags={"UNUSED"},
     *     @OA\Response(
     *         response="200",
     *         description="категория навыков создана",
     *     ),
     * )
     * )
     */
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        SkillCategory::create($data);
        return response([]);
    }
}
