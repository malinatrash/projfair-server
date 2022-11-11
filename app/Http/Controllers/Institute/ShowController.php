<?php

namespace App\Http\Controllers\Institute;

use App\Http\Controllers\Controller;
use App\Models\Institute;
use Illuminate\Http\Request;

/**
 * Получить информацию об институте
 */
class ShowController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/institutes/{id}",
     *     summary="Получить информацию об институте по ID",
     *     tags={"Candidate"},
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
    public function __invoke(Institute $institute) // Получить информацию об институте
    {
        return $institute;
    }
}
