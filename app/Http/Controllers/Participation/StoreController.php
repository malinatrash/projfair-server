<?php

namespace App\Http\Controllers\Participation;

use App\Http\Controllers\Controller;
use App\Http\Requests\Participation\StoreRequest;
use App\Models\Participation;
use Illuminate\Http\Request;

/**
 * Создать заявку UNUSED
 */
class StoreController extends Controller
{
    /**
     * @OA\Post(
     *     path="/api/participations",
     *     summary="Создать заявку @TODO BODY",
     *      tags={"UNUSED"},
     *     @OA\Response(
     *         response="200",
     *         description="Заявка создана",
     *     ),
     * )
     * )
     */
    public function __invoke(StoreRequest $request)
    {
        $data = $request->validated();
        Participation::create($data);
        return response([]);
    }
}
