<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Данные о заявки для апи
 */
class ParticipationResource extends JsonResource
{
    /**
     * Трансформация данных заявки для апи
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'priority' => $this->priority,
            'review' => $this->review,

            'project_id' => $this->project_id,
            'candidate' => new CandidateResource($this->candidate),
            'candidate_id' => $this->candidate_id,
            'state' => new ParticipationStateResource($this->getState()),

        ];
    }
}

/**
 * @OA\Schema()
 */
class Participation extends ParticipationResource
{
    /**
     * ID заявки
     * @var int
     * @OA\Property()
     */
    public int $id;
    /**
     * Приоритет заявки
     * @var int
     * @OA\Property()
     */
    public int $priority;

    /**
     * ID проекта, на которые подали заявку
     * @var string
     * @OA\Property()
     */
    public string $project_id;

    /**
     * ID участника
     * @var string
     * @OA\Property()
     */
    public string $candidate_id;

    /**
     * Cостояние заявки
     * @var object
     * @OA\Property(ref="#/components/schemas/ParticipationState")
     */
    public string $state;

    /**
     * Студент
     * @var object
     * @OA\Property(ref="#/components/schemas/Candidate")
     */
    public string $candidate;

    /**
     * Дата создания записи в БД
     * @var string
     * @OA\Property()
     */
    public string $created_at;

    /**
     * Дата обновления записи в БД
     * @var string
     * @OA\Property()
     */
    public string $updated_at;
}
