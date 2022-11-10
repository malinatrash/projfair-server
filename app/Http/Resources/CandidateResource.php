<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

/** Данные студента для апи */
class CandidateResource extends JsonResource
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
            'fio' => $this->fio,
            'about' => $this->about,
            'email' => $this->email,
            'numz' => $this->numz,
            'phone' => $this->phone,
            'course' => $this->course,
            'training_group' => $this->training_group,
            'canSendParticipations' => $this->canSendParticipations,
        ];
    }
}


/**
 * @OA\Schema()
 */
class Candidate extends CandidateResource
{
    /**
     * ID студента
     * @var int
     * @OA\Property()
     */
    protected $id;

    /**
     * ФИО студента
     * @var string
     * @OA\Property()
     */
    public $fio;

    /**
     * Информация о студенте
     * @var string
     * @OA\Property()
     */
    public $about;

    /**
     * Почта
     * @var string
     * @OA\Property()
     */
    public $email;

    /**
     * Номер зачетной книжки
     * @var string
     * @OA\Property()
     */
    public $numz;

    /**
     * Телефон
     * @var string
     * @OA\Property()
     */
    public $phone;
    /**
     * Курс
     * @var int
     * @OA\Property()
     */
    public $course;
    /**
     * Учебная группа
     * @var string
     * @OA\Property()
     */
    public $training_group;
    /**
     * Может ли отправлять заявки на проекты
     * @var boolean
     * @OA\Property()
     */
    public $canSendParticipations;
}
