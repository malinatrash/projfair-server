<?php

namespace App\Http\Controllers\Skill;

use App\Http\Controllers\Controller;
use App\Http\Requests\Skill\StoreRequest;
use App\Models\Skill;

/**
 * Создать навык (UNUSED)
 */
class StoreController extends Controller
{
    /**
     * @OA\Post(
     *     path="/api/skills",
     *     summary="Создать навык @TODO BODY",
     *      tags={"UNUSED"},
     *     @OA\Response(
     *         response="200",
     *         description="навык создан",
     *     ),
     * )
     * )
     */
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Skill::create($data);
        return response([]);
    }
}
