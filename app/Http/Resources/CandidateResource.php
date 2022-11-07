<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

/**
 * @OA\Schema()
 */
class CandidateResource extends JsonResource
{
    /**
     * The product name,
     * @var string
     * @OA\Property()
     */
    public $id;

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
            'fio' => $this->fio,
            'about' => $this->about,
            'email' => $this->email,
            'numz' => $this->numz,
            'phone' => $this->phone,
            'course' => $this->course,
            'training_group' => $this->training_group,
            'candSendParticipations' => $this->candSendParticipations,
        ];
    }
}
