<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TypeResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}

/**
 * @OA\Schema()
 */
class ProjectType extends TypeResource
{
    /**
     * ID типа проекта
     * @var int
     * @OA\Property()
     */
    protected int $id;

    /**
     * Название типа проекта
     * @var string
     * @OA\Property()
     */
    public string $type;
}
