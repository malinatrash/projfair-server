<?php

namespace App\Http\Controllers\Admin\Supervisor;

use App\Http\Controllers\Controller;
use App\Http\Requests\Supervisor\UpdateRequestAdminSupervisor;
use App\Models\Supervisor;

/**
 * Обновить информацию о преподавателе
 */
class UpdateController extends Controller
{
    /**
     * @OA\Patch(
     *     path="/api/admin/supervisors/{id}",
     *     summary="Обновить состояние проекта",
     *      tags={"ADMIN"},
     *     @OA\RequestBody(
     *         description="Параметры для обновления руководителя проекта",
     *         required=true,
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                  @OA\Property(
     *                      type="string",
     *                      property="fio",
     *                  ),
     *                  @OA\Property(
     *                      type="string",
     *                      property="email",
     *                  ),
     *                  @OA\Property(
     *                      type="string",
     *                      property="about",
     *                  ),
     *                  @OA\Property(
     *                      type="string",
     *                      property="position",
     *                  ),
     *                  @OA\Property(
     *                      type="integer",
     *                      property="department_id",
     *                  ),
     *              )
     *          )
     *     ),
     *      @OA\Parameter(
     *         name="id",
     *         description="ID преподавателя @TODO BODY",
     *          in = "path",
     *         required=true,
     *         @OA\Schema(
     *             type="integer"
     *         )
     *     ),
     *     @OA\Response(
     *         response="200",
     *         description="Преподаватель изменен",
     *     ),
     *     @OA\Response(
     *         response="404",
     *         description="Преподаватель не найден",
     *     ),

     * )
     * )
     */
    public function __invoke(UpdateRequestAdminSupervisor $request, Supervisor $supervisor)
    {
        $data = $request->validated();
        $supervisor->update($data);
        return response([]);
    }
}
