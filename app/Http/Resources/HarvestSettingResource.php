<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class HarvestSettingResource extends JsonResource
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
            'startDateParticipationHarvest' => $this->start_date_participation_harvest,
            'endDateParticipationHarvest' => $this->end_date_participation_harvest,
            // TODO add bannedSpecialities
            'bannedSpecialities' => SpecialityResource::collection($this->bannedSpecialities),
        ];
    }
}

/**
 * @OA\Schema()
 */
class HarvestSetting extends HarvestSettingResource
{
    /**
     * Дата начала приема заявок (2023-05-30)
     * @var string
     * @OA\Property()
     */
    public string $startDateParticipationHarvest;
    /**
     * Дата окончания приема заявок (2023-05-30)
     * @var string
     * @OA\Property()
     */
    public string $endDateParticipationHarvest;

    /**
     * Специальности, которые не учавствуют в сборе заявок
     * @var array
     * @OA\Property(
     *  type="array",
     * @OA\Items(ref="#/components/schemas/Supervisor")
     * )
     */
    public $bannedSpecialities;
}
