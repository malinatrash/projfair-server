<?php

namespace App\Http\Controllers\Institute;

use App\Http\Controllers\Controller;
use App\Http\Resources\InstituteResource;
use App\Models\Institute;

/**
 * Получить информацию обо всех институтах
 */
class IndexController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/institutes",
     *     summary="Получить институты",
     *     tags={"Institute"},
     *     @OA\Response(
     *         response="200",
     *         description="Все институты",
     *         @OA\JsonContent(
     *              type="array",
     *              @OA\Items(
     *                  ref="#/components/schemas/Institute"
     *              )
     *         )
     *     )
     * )
     * )
     */
    public function __invoke()
    {
        $institutes = Institute::all();
        return InstituteResource::collection($institutes);
    }
}
