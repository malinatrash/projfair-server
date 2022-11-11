<?php

namespace App\Http\Controllers\Supervisor;

use App\Http\Controllers\Controller;
use App\Http\Requests\Supervisor\StoreRequest;
use App\Models\Supervisor;

/**
 * Создать преподавателя (UNUSED)
 */
class StoreController extends Controller
{
    /**
     * @OA\Post(
     *     path="/api/supervisors",
     *     summary="Создать преподавателя @TODO BODY",
     *      tags={"UNUSED"},
     *     @OA\Response(
     *         response="200",
     *         description="Преподаватель создан",
     *     ),
     * )
     * )
     */
    public function __invoke(StoreRequest $request)
    {
        Supervisor::create($request);
        return response([]);
    }
}
