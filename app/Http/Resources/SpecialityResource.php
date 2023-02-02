<?php

namespace App\Http\Resources;

use App\Models\Institute;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Данные о специальности для апи
 */
class SpecialityResource extends JsonResource
{
    /**
     * Подготавливает данные специальности для апи
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'institute' => new InstituteResource(Institute::find($this->institute_id)),
        ];
    }
}

/**
 * @OA\Schema()
 */
class Speciality extends SpecialityResource
{
    /**
     * ID специальности
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

    /**
     * Институт к которому принадлежит специальность
     * @var object
     * @OA\Property()
     */
    public $institute;
}
