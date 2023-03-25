<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ThemeSourceResource extends JsonResource
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
            'name' => $this->name
        ];
    }
}

/**
 * @OA\Schema()
 */
class ThemeSource extends TypeResource
{
    /**
     * ID типа проекта
     * @var int
     * @OA\Property()
     */
    protected int $id;

    /**
     * Название
     * @var string
     * @OA\Property()
     */
    public string $name;
}
