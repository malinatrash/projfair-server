<?php

namespace App\Http\Controllers\ThemeSource;

use App\Http\Controllers\Controller;
use App\Http\Resources\ThemeSourceResource;
use App\Models\ThemeSource;

/**
 * Источники темы
 */
class IndexController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/themeSources",
     *     summary="Источники темы",
     *      tags={"Theme Sources"},
     *     @OA\Response(
     *         response="200",
     *         description="Источники темы",
     *         @OA\JsonContent(
     *              type="array",
     *                  @OA\Items(
     *                 ref="#/components/schemas/ThemeSource"
     *         )
     * )
     *     ),
     * )
     */
    public function __invoke()
    {
        return ThemeSourceResource::collection(ThemeSource::all());
    }
}
