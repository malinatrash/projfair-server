<?php

namespace App\Http\Controllers\Speciality;

use App\Http\Controllers\Controller;
use App\Http\Resources\SpecialityResource;
use App\Models\Speciality;

/**
 * Получить все специальности
 */
class IndexController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/specialities/",
     *     summary="Получить все специальности",
     *      tags={"Speciality"},
     *     @OA\Response(
     *         response="200",
     *         description="все специальности",
     *
     *         @OA\JsonContent(
     *              type="array",
     *                  @OA\Items(ref="#/components/schemas/Speciality")
     *          )
     *     ),
     * )
     */
    public function __invoke()
    {
        $specialities = Speciality::all();
        return SpecialityResource::collection($specialities);
    }
}
