<?php

namespace App\Http\Controllers\Participation;

use App\Http\Controllers\Controller;
use App\Http\Resources\ParticipationResource;
use App\Models\Participation;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

/**
 * Получение заявок с фильтрацией.
 */
class FilterController extends Controller
{


    private function stringToArray($arr)
    {
        if (is_string($arr)) {
            return json_decode($arr, true);
        } else {
            return $arr;
        }
    }
    /**
     * @OA\Get(
     *     path="/api/participations/filter",
     *     summary="Получение заявок с фильтрацией",
     *      tags={"Participation"},
     *      @OA\Parameter(
     *         name="page",
     *         description="Номер страницы (отчет с нуля)",
     *          in = "query",
     *         required=false,
     *         @OA\Schema(
     *               type="integer"
     *         )
     *     ),
     *      @OA\Parameter(
     *         name="state",
     *         description="Массив ID состояний",
     *          in = "query",
     *         required=false,
     *         @OA\Schema(
     *             type="array",
     *             @OA\Items(
     *                  type="integer"
     *                 )
     *         )
     *     ),
     *      @OA\Parameter(
     *         name="pageSize",
     *         description="Размер страницы. Позитивное число ИЛИ 'max' для получения без пагинации",
     *          in = "query",
     *         required=false,
     *         @OA\Schema(
     *             type="integer",
     *         )
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="Заявки",
     *          content={
     *         @OA\MediaType(
     *              mediaType="application/json",
     *              @OA\Schema(
     *                @OA\Property(
     *                property="participationCount",
     *                  type="integer",
     *                  description="Общее количество проектов",
     *                ),
     *                @OA\Property(
     *                 property="data",
     *                 type="array",
     *                 description="Массив заявок",
     *                 @OA\Items(ref="#/components/schemas/Participation")
     *                ),
     *              )
     *          )
     *          }
     *     ),
     * )
     */
    public function __invoke(Request $request)
    {
        $participationCollection = Participation::all();

        $participationCollection = $this->filterByState($request, $participationCollection);
        $projectCount = count($participationCollection);
        $participationCollection = $this->paginate($request, $participationCollection);
        return response()->json(['data' => ParticipationResource::collection($participationCollection), 'participationCount' => $projectCount])->setStatusCode(200);
    }


    private function filterByState(Request $request, Collection $participationCollection): Collection
    {
        $inputState = $this->stringToArray($request->input('state'));
        $states = array_map(function ($value) {
            return intval($value);
        }, $inputState ?? []);
        if (count($states) != 0) {
            $participationCollection = $participationCollection->whereIn('state_id', $states);
        }
        return $participationCollection;
    }

    private function paginate(Request $request, Collection $participationCollection): Collection
    {
        $page = intval($request->input('page'));
        $pageSize = $request->input('pageSize') ?? 7;
        if ($pageSize == 'max') {
            return $participationCollection;
        }
        $pageSize = intval($pageSize);
        if ($pageSize <= 0) {
            $pageSize = 7;
        }
        $startIndex = $pageSize * ($page - 1);

        return $participationCollection->slice($startIndex, $pageSize);
    }
}
