<?php

namespace App\Http\Controllers\Institute;

use App\Http\Controllers\Controller;
use App\Models\Speciality;
use Illuminate\Http\Request;

/**
 * Проверка находятся ли две специальности в одном институте
 */
class SameInstituteController extends Controller
{
    /**
     * @OA\Get(
     *     path="/api/institutes/isInSameInstitute/{specialityName1}/{specialityName2}",
     *     summary="Проверка находятся ли две специальности в одном институте",
     *     tags={"Institute"},
     *           @OA\Parameter(
     *         name="specialityName1",
     *         description="Название первой специльности",
     *          in = "path",
     *         required=true,
     *         @OA\Schema(
     *             type="string"
     *         ) 
     *     ),
     *           @OA\Parameter(
     *         name="specialityName2",
     *         description="Название второй специльности",
     *          in = "path",
     *         required=true,
     *         @OA\Schema(
     *             type="string"
     *         ) 
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="находятся ли две специальности в одном институте",
     *         @OA\JsonContent(
     *                    type="object",
     *                  @OA\Property(
     *                      property="isSame",
     *                      type="boolean",
     *                  )
     *      ),
     *      @OA\Response(
     *         response="404",
     *         description="Не найдено",
     *     ),
     *     )
     * )
     * )
     */
    public function __invoke($specialityName1, $specialityName2)
    {
        // Проверка находятся ли две специальности в одном институте
        $specilities = Speciality::where('name', $specialityName1)->get();
        if (count($specilities) == 0) {
            return response('Не найдено', 404);
        }
        $specility1 = $specilities[0];
        $institute1 = $specility1->institute;
        $specilities = Speciality::where('name', $specialityName2)->get();
        if (count($specilities) == 0) {
            return response('Не найдено', 404);
        }
        $specility2 = $specilities[0];
        $institute2 = $specility2->institute;

        return ['isSame' => $institute1->id == $institute2->id];
    }
}
