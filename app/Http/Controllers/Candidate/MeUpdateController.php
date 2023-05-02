<?php

namespace App\Http\Controllers\Candidate;

use App\Http\Controllers\Controller;
use App\Http\Requests\Candidate\MeUpdateRequest;
use App\Models\Candidate;
use App\Models\CandidatesSkill;
use Illuminate\Http\Request;

/**
 * Обновить номер телефона, о себе, скиллы студента
 */
class MeUpdateController extends Controller
{
    /**
     * @OA\Patch(
     *     path="/api/candidate",
     *     summary="Обновить номер телефона, о себе, скиллы студента @TODO BODY",
     *      tags={"CABINET CANDIDATE"},
     *      @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                 @OA\Property(
     *                     property="skill_ids[]",
     *                     type="array",
     *                     @OA\Items(type="integer")
     *                 ),
     *                 @OA\Property(
     *                     property="about",
     *                     type="string",
     *                 ),
     *                 @OA\Property(
     *                     property="phone",
     *                     type="string",
     *                 ),
     *             )
     *         )
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="Информация о студенте Обновлена",
     *     )
     * )
     */
    public function __invoke(MeUpdateRequest $req)
    {
        $id = $req->get('candidate')->id;
        Candidate::where('id', $id)->update([
            'about' => $req['about'],
            'phone' => $req['phone'],
        ]);
        CandidatesSkill::where('id_candidate', $id)->delete();
        foreach ($req['skills'] as $skill) {
            if (!is_int($skill)) {
                return response()->json(
                    [
                        'status' => false,
                        'message' => 'Массив скиллов содержит не число',
                    ],
                    400
                );
            }

            CandidatesSkill::create([
                'id_skill' => $skill,
                'id_candidate' => $id,
            ]);
        }

        return response()->json(['status' => true], 200);
    }
}
