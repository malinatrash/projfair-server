<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Данные о специальности с курсом для апи
 */
class SpecialityCourseResource extends JsonResource
{
    /**
     * Трансформирует данные о специальности с курсом для апи
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'speciality_id' => $this->speciality_id,
            'course' => $this->course,
        ];
    }
}

/**
 * @OA\Schema()
 */
class SpecialityCourse extends SpecialityCourseResource
{
    /**
     * ID специальности с курсом
     * @var int
     * @OA\Property()
     */
    public int $id;

    /**
     * ID специальности
     * @var int
     * @OA\Property()
     */
    public int $speciality_id;

    /**
     * Курс
     * @var int
     * @OA\Property()
     */
    public int $course;
}
