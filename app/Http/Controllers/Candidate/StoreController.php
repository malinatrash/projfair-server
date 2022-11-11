<?php

namespace App\Http\Controllers\Candidate;

use App\Http\Controllers\Controller;
use App\Http\Requests\Candidate\StoreRequest;
use App\Models\Candidate;
use Illuminate\Http\Request;

/**
 * Добавить студента (UNUSED)
 */
class StoreController extends Controller
{
    /**
     * @OA\Post(
     *     path="/api/candidates",
     *     summary="Создание студента @TODO BODY", 
     *     tags={"UNUSED"},
     *     @OA\Response(
     *         response="200",
     *         description="Информация о студенте создана",
     *     )
     * )
     * )
     */
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Candidate::create($data);
        return response([]);
    }
}
