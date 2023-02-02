<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Данные категории скила для апи
 */
class SkillCategoryResource extends JsonResource
{
    /**
     * Трансформирует данные категории скила для апи
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
class SkillCategory extends SkillCategoryResource
{
    /**
     * ID Категории скила
     * @var int
     * @OA\Property()
     */
    public int $id;

    /**
     * Название категории скила
     * @var string
     * @OA\Property()
     */
    public string $name;
}
