<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Использовать только в ресурсе проекта. Нет поля проекта
 */
class ProjectSpecialityResource extends JsonResource
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
            'course' => $this->course,
            'priority' => $this->priority,
            'speciality' => new SpecialityResource($this->speciality)
        ];
    }
}

/**
 * @OA\Schema()
 */
class ProjectSpeciality extends ProjectSpecialityResource
{
    /**
     * ID
     * @var int
     * @OA\Property()
     */
    public int $id;

    /**
     * Для какого курса. Если не задан, то для всех
     * @var int
     * @OA\Property()
     */
    public int $course;

    /**
     * Приоритет специальности
     * @var int
     * @OA\Property()
     */
    public int $priority;
}
