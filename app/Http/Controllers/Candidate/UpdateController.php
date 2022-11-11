<?php

namespace App\Http\Controllers\Candidate;

use App\Http\Controllers\Controller;
use App\Http\Requests\Candidate\UpdateRequest;
use App\Models\Candidate;
use Illuminate\Http\Request;

/**
 * Обновить данные пользователя (UNUSED)
 */
class UpdateController extends Controller
{

    /**
     * @OA\Patch(
     *     path="/api/candidates",
     *     summary="Обновить информацию о студенте @TODO BODY", 
     *     tags={"UNUSED"},
     *     @OA\Parameter(
     *         name="id",
     *         description="ID студента",
     *          in = "path",
     *         required=true,
     *         @OA\Schema(
     *             type="integer"
     *         ) 
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="Информация о студенте обновлена",
     *     )
     * )
     * )
     */
    public function __invoke(UpdateRequest $request, Candidate $candidate)
    {
        $data = $request->validated();
        $candidate->update($data);
        return response([]);
    }
}
