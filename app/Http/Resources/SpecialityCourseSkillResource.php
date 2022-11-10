<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

/**
 * ПИВОТ
 */
class SpecialityCourseSkillResource extends JsonResource
{
    /**
     * ТРАНСФОРМАЦИЯ ПИВОТА
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }
}
