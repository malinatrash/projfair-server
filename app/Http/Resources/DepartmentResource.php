<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

/** Данные студента для апи */
class DepartmentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'institute' => new InstituteResource($this->institute),
        ];
    }
}


/**
 * @OA\Schema()
 */
class Department extends DepartmentResource
{
    /**
     * ID Кафедры
     * @var int
     * @OA\Property()
     */
    protected int $id;

    /**
     * Название кафедры
     * @var string
     * @OA\Property()
     */
    public string $name;

    /**
     * Институт к которому принадлежит кафедра
     * @var object
     * @OA\Property(ref="#/components/schemas/Institute")
     */
    public $institute;
}
