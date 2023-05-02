<?php

namespace App\Http\Controllers\Supervisor;

use App\Http\Controllers\Controller;

use App\Http\Resources\SupervisorResource;
use Illuminate\Http\Request;

/**
 * Получить информацию об авторизованном преподавателе
 */
class MeController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/supervisor",
     *     summary="Получить информацию об авторизованном преподавателе",
     *     tags={"CABINET SUPERVISOR"},
     *     @OA\Response(
     *         response="200",
     *         description="Информация о преподе",
     *         @OA\JsonContent(ref="#/components/schemas/Supervisor"),
     *     )
     * )
     */
    public function __invoke(Request $request) // Получить информацию об авторизованном студенте
    {
        return new SupervisorResource($request->get('supervisor'));
    }
}
