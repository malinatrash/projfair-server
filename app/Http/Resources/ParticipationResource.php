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
            'candidate_id' => $this->candidate_id,
            'state_id' => $this->state_id,

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
    public $id;
    /**
     * Приоритет заявки
     * @var int
     * @OA\Property()
     */
    public $priority;

    /**
     * ID проекта, на которые подали заявку
     * @var string
     * @OA\Property()
     */
    public $project_id;
    /**
     * ID состояния
     * @var string
     * @OA\Property()
     */
    public $state_id;
    /**
     * ID студента подавшего заявку
     * @var string
     * @OA\Property()
     */
    public $candidate_id;

    /**
     * Дата создания записи в БД
     * @var string
     * @OA\Property()
     */
    public $created_at;

    /**
     * Дата обновления записи в БД
     * @var string
     * @OA\Property()
     */
    public $updated_at;
}
