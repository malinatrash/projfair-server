<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Роль преподавателя на проекте
 */
class ProjectSupervisorRoleResource extends JsonResource
{
    /**
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
        ];
    }
}

/**
 * @OA\Schema()
 */
class ProjectSupervisorRole extends ProjectSupervisorRoleResource
{
    /**
     * ID
     * @var int
     * @OA\Property()
     */
    public int $id;

    /**
     * Название
     * @var string
     * @OA\Property()
     */
    public int $name;
}
