<?php

namespace App\Http\Controllers\Candidate;

use App\Http\Controllers\Controller;
use App\Models\Candidate;
use App\Models\Participation;
use App\Models\StateParticipation;
use Illuminate\Http\Request;

/**
 * Отозвать заявку
 */
class DeleteParticipationController extends Controller
{
    /**
     * @OA\Delete(
     *     path="/api/participations/${id}",
     *     summary="Отозвать заявку",
     *      tags={"UNUSED"},
     *      @OA\Parameter(
     *         name="id",
     *         description="ID Заявки",
     *          in = "path",
     *         required=true,
     *         @OA\Schema(
     *             type="integer"
     *         ) 
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="Заявка отозвана",
     *     )
     * )
     * )
     */
    public function __invoke($id_project, Request $request)
    {
        $id_project = intval($id_project);

        $id_cancelState = StateParticipation::where('state', 'Отозвана')->select('id')->get()[0]['id'];

        $id = $request->get('candidate')->id;
        if (!Participation::where('id_candidate', $id)->where('id_project', $id_project)->get()->count()) {
            return response()->json(['error' => 'Project not found'], 400);
        }
        $data = Participation::where('id_candidate', $id)->where('id_project', $id_project)->update([
            'id_state' => $id_cancelState
        ]);

        return response()->json(['status' => 'OK'], 200);
    }
}
