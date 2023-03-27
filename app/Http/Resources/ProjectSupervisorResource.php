<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Использовать только в ресурсе проекта. Нет поля проекта
 */
class ProjectSupervisorResource extends JsonResource
{
    /**
     * ПИВОТ
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'roles' => ProjectSupervisorRoleResource::collection($this->roles),
            'supervisor' => new SupervisorResource($this->supervisor),
        ];
    }
}

/**
 * @OA\Schema()
 */
class ProjectSupervisor extends ProjectSupervisorResource
{
    /**
     * ID
     * @var int
     * @OA\Property()
     */
    public int $id;

    /**
     * Роль
     * @var array
     * @OA\Property(
     *  type="array",
     *  @OA\Items(ref="#/components/schemas/ProjectSupervisorRole")
     * )
     */
    public int $roles;

    /**
     * Преподаватель
     * @var int
     * @OA\Property(ref="#/components/schemas/Supervisor")
     */
    public int $supervisor;
}
