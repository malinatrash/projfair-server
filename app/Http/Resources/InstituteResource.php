<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

/** Данные института для апи */
class InstituteResource extends JsonResource
{
    /**
     * Трансформация данных института для апи
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
class Institute extends InstituteResource
{
    /**
     * ID института
     * @var int
     * @OA\Property()
     */
    public $id;

    /**
     * Название института
     * @var string
     * @OA\Property()
     */
    public $name;
}
