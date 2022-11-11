<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Подготовка состояния проекта к апи
 */
class StateResource extends JsonResource
{
    /**
     * Трансформирует данные для апи
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'state' => $this->state,
        ];
    }
}

/**
 * @OA\Schema()
 */
class ProjectState extends StateResource
{
    /**
     * ID Состояния проекта
     * @var int
     * @OA\Property()
     */
    public $id;

    /**
     * Название состояния
     * @var string
     * @OA\Property()
     */
    public $state;
}
