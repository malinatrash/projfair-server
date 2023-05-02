<?php

namespace App\Http\Controllers\Institute;

use App\Http\Controllers\Controller;
use App\Http\Resources\InstituteResource;
use App\Models\Institute;

/**
 * Получить информацию об институте
 */
class ShowController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/institutes/{id}",
     *     summary="Получить информацию об институте по ID",
     *     tags={"Institute"},
     *      @OA\Parameter(
     *         name="id",
     *         description="ID института",
     *          in = "path",
     *         required=true,
     *         @OA\Schema(
     *             type="integer"
     *         )
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="Информация об институте",
     *         @OA\JsonContent(ref="#/components/schemas/Institute")
     *     )
     * )
     * )
     */
    public function __invoke(Institute $institute)
    {
        return new InstituteResource($institute);
    }
}
