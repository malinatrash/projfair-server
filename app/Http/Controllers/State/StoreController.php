<?php

namespace App\Http\Controllers\State;

use App\Http\Controllers\Controller;
use App\Http\Requests\State\StoreRequest;
use App\Models\State;

/**
 * Создать состояние проекта
 */
class StoreController extends Controller
{
    /**
     * @OA\Post(
     *     path="/api/states",
     *     summary="Создать состояние проекта @TODO BODY",
     *      tags={"UNUSED"},
     *     @OA\Response(
     *         response="200",
     *         description="Состояние проекта создано",
     *     ),
     * )
     * )
     */
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        State::create($data);
        return response([]);
    }
}
