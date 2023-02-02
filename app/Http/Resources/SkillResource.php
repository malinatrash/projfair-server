<?php

namespace App\Http\Resources;

use App\Models\SkillCategory;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Данные о скиле для апи
 */
class SkillResource extends JsonResource
{
    /**
     * Трансформирует данные о скиле для апи
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'skillCategory' => new SkillCategoryResource(SkillCategory::find($this->skillCategory_id)),
        ];
    }
}

/**
 * @OA\Schema()
 */
class Skill extends SkillResource
{
    /**
     * ID скила
     * @var int
     * @OA\Property()
     */
    public int $id;

    /**
     * Название скила
     * @var string
     * @OA\Property()
     */
    public string $name;

    /**
     * ID категории скила
     * @var int
     * @OA\Property(ref="#/components/schemas/SkillCategory")
     */
    public int $skillCategory;
}
