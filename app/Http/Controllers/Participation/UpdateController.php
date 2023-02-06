<?php

namespace App\Http\Controllers\Participation;

use App\Http\Controllers\Controller;
use App\Http\Requests\Participation\UpdateRequestAdminParticipation;
use App\Models\Candidate;
use App\Models\Participation;
use Illuminate\Http\Request;

/**
 * Изменение приоритета заявки
 */
class UpdateController extends Controller
{
    /**
     * @OA\Patch(
     *     path="/api/participations/${id}",
     *     summary="Изменение приоритета заявки у авторизованного студента",
     *      tags={"Participation"},
     *      @OA\Parameter(
     *         name="id",
     *         description="ID Заявки",
     *          in = "path",
     *         required=true,
     *         @OA\Schema(
     *             type="integer"
     *         )
     *     ),
     *     @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                 @OA\Property(
     *                     property="priority",
     *                     type="integer",
     *                 ),
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="Заявка изменена",
     *     ),
     *     @OA\Response(
     *         response="403",
     *         description="Вы не можете изменить чужую заявку",
     *     )
     * )
     * )
     */
    public function __invoke(UpdateRequestAdminParticipation $request, Participation $participation)
    {
        $data = $request->validated();
        $candidate = $request->get('candidate');

        if ($participation->candidate->id != $candidate->id) {
            return response("Вы не можете изменить чужую заявку", 403);
        }



        $participation->update([
            'priority' => $data['priority'],
        ]);
        return $participation;
    }
}
