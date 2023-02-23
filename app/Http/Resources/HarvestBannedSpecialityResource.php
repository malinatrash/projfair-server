<?php

namespace App\Http\Resources;

use App\Models\Institute;
use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Данные о специальности для апи
 */
class HarvestBannedSpecialityResource extends JsonResource
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
            'course' => $this->course,
            'speciality' => new SpecialityResource($this->speciality),
        ];
    }
}

/**
 * @OA\Schema()
 */
class HarvestBannedSpeciality extends HarvestBannedSpecialityResource
{
    /**
     * ID специальности
     * @var int
     * @OA\Property()
     */
    public int $id;



    /**
     * Курс, если на задан, то все курсы не учавствуют
     * @var int
     * @OA\Property()
     */
    public $course;
    /**
     * Специальность
     * @var object
     * @OA\Property(ref="#/components/schemas/Speciality")
     */
    public $speciality;
}
