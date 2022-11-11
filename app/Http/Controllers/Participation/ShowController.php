<?php

namespace App\Http\Controllers\Participation;

use App\Http\Controllers\Controller;
use App\Models\Participation;
use Illuminate\Http\Request;

/**
 * Получить заявку по ID UNUSED
 */
class ShowController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/participations/{id}",
     *     summary="Создать заявку",
     *      tags={"UNUSED"},
     *      @OA\Parameter(
     *         name="id",
     *         description="ID Заявки",
     *          in = "path",
     *         required=true,
     *         @OA\Schema(
     *             type="integer"
     *         ) 
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="Заявка по ID",
     *         @OA\JsonContent(ref="#/components/schemas/Institute")
     *     ),
     * )
     * )
     */
    public function __invoke(Participation $participation)
    {
        return $participation;
    }
}
