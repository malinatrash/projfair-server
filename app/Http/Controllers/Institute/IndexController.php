<?php

namespace App\Http\Controllers\Institute;

use App\Http\Controllers\Controller;
use App\Models\Institute;
use Illuminate\Http\Request;

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
     *      *              type="array",
     *                  @OA\Items(
     *                          ref="#/components/schemas/Institute"
     *                  )
     * )
     *     )
     * )
     * )
     */
    public function __invoke() // Получить информацию обо всех институтах
    {
        $institutes = Institute::all();
        return $institutes;
    }
}
