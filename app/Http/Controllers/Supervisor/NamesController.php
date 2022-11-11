<?php

namespace App\Http\Controllers\Supervisor;

use App\Http\Controllers\Controller;
use App\Models\Supervisor;

/**
 * Получение всех фио и ID преподавателей
 */
class NamesController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/supervisors/names",
     *     summary="Получение всех фио и ID преподавателей",
     *      tags={"Supervisor"},
     *     @OA\Response(
     *         response="200",
     *         description="все фио и ID преподавателей @TODO RESPONCE",
     *
     *         @OA\JsonContent(
     *              type="array",
     *                  @OA\Items(
     *                 ref="#/components/schemas/Supervisor"
     *         )
     * )
     *     ),
     * )
     */
    public function __invoke()
    {
        $data = Supervisor::select('id', 'fio')->get();
        return response()->json($data, 200);
    }
}
