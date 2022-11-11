<?php

namespace App\Http\Controllers\Institute;

use App\Http\Controllers\Controller;
use App\Models\Speciality;
use Illuminate\Http\Request;

/**
 * Получить институт по названию специльности
 */
class GetBySpecialityController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/institutes/getBySpecialityName/{specialityName}",
     *     summary="Получить институт по названию специльности",
     *     tags={"Institute"},
     *      @OA\Parameter(
     *         name="specialityName",
     *         description="Название специльности",
     *          in = "path",
     *         required=true,
     *         @OA\Schema(
     *             type="string"
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
    public function __invoke($specialityName) // Получить институты по названию специльности
    {
        $specilities = Speciality::where('name', $specialityName)->get();
        if (count($specilities) == 0) {
            return response('Не найдено', 404);
        }
        $specilities->load('institute');

        return $specilities[0]->institute;
    }
}
