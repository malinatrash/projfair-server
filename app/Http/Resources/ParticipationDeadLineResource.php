<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Данные о дедлайне сбора заявок для апи
 */
class ParticipationDeadLineResource extends JsonResource
{
    /**
     * Трансформация данных дедлайна сбора заявок для апи
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'deadline' => $this->deadline,
        ];
    }
}

/**
 * @OA\Schema()
 */
class ParticipationDeadLine extends ParticipationDeadLineResource
{
    /**
     * ID
     * @var int
     * @OA\Property()
     */
    public $id;

    /**
     * Дата окончания сбора заявок
     * @var int
     * @OA\Property()
     */
    public $deadline;
}
