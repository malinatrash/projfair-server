<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

/** Данные состояния заявки для апи */
class ParticipationStateResource extends JsonResource
{
    /**
     * Трансформирует данные состояния заявки для апи
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
class ParticipationState extends ParticipationStateResource
{
    /**
     * ID Состояния заявки
     * @var int
     * @OA\Property()
     */
    public int $id;

    /**
     * Название состояния
     * @var string
     * @OA\Property()
     */
    public string $state;
}
