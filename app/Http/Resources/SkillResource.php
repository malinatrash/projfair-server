<?php

namespace App\Http\Resources;

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
            'skillCategory_id' => $this->skillCategory_id,
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
    public $id;

    /**
     * Название скила
     * @var string
     * @OA\Property()
     */
    public $name;

    /**
     * ID категории скила
     * @var int
     * @OA\Property()
     */
    public $skillCategory_id;
}
