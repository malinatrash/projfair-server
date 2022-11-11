<?php

namespace App\Http\Controllers\Participation;

use App\Http\Controllers\Controller;
use App\Models\Participation;
use Illuminate\Http\Request;

/**
 * Получить все заявки
 */
class IndexController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/participations",
     *     summary="Получить все заявки",
     *      tags={"UNUSED"},
     *     @OA\Response(
     *         response="200",
     *         description="Заявка создана",
     *         @OA\JsonContent(
     *                    type="array",
     *                  @OA\Items(
     *                          ref="#/components/schemas/Participation"
     *                  )
     * )
     *     ),
     * )
     * )
     */
    public function __invoke()
    {
        $participations = Participation::all();
        return $participations;
    }
}
