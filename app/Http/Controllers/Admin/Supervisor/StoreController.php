<?php

namespace App\Http\Controllers\Admin\Supervisor;

use App\Http\Controllers\Controller;
use App\Http\Requests\Supervisor\StoreRequestAdminSupervisor;
use App\Models\Supervisor;

/**
 * Создать преподавателя
 */
class StoreController extends Controller
{
    /**
     * @OA\Post(
     *     path="/api/admin/supervisors",
     *     summary="Создать преподавателя",
     *      tags={"ADMIN"},
     *      @OA\RequestBody(
     *         description="Параметры для создания руководителя проекта",
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
     *     @OA\Response(
     *         response="200",
     *         description="Преподаватель создан",
     *     ),
     * )
     * )
     */
    public function __invoke(StoreRequestAdminSupervisor $request)
    {
        $data = $request->validated();
        Supervisor::create($data);
        return response([]);
    }
}
