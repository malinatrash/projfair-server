<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Данные о группе студента для апи
 */
class GroupResource extends JsonResource
{
    /**
     *  Трансформация данных о группе студента для апи
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'specialityCourse_id' => $this->specialityCourse_id,
            'name' => $this->name,
        ];
    }
}

/**
 * @OA\Schema()
 */
class Group extends GroupResource
{
    /**
     * ID групппы
     * @var int
     * @OA\Property()
     */
    public int $id;

    /**
     * ID специальности с курсом
     * @var int
     * @OA\Property()
     */
    public int $specialityCourse_id;

    /**
     * ID название
     * @var string
     * @OA\Property()
     */
    public string $name;
}
