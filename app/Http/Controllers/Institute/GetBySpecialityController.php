<?php

namespace App\Http\Controllers\Institute;

use App\Http\Controllers\Controller;
use App\Http\Resources\InstituteResource;
use App\Models\Speciality;

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
     *     ),
     *     @OA\Response(
     *         response="404",
     *         description="Не найдено",
     *     ),
     * )
     * )
     */
    public function __invoke($specialityName)
    {
        $specility = Speciality::firstWhere('name', $specialityName);
        if (!isset($specility)) {
            return response('Не найдено', 404);
        }

        $institute = $specility->getInstitute();

        return new InstituteResource($institute);
    }
}
