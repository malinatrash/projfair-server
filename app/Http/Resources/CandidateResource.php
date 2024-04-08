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
        $speciality = $this->getSpeciality();
        return [
            'id' => $this->id,
            'fio' => $this->fio,
            'about' => $this->about,
            'email' => $this->email,
            // вроде это коментили
            'numz' => $this->numz,
            'phone' => $this->phone,
            'course' => $this->course,
            'training_group' => $this->training_group,
            'speciality' => new SpecialityResource($speciality),
            'canSendParticipations' => $this->can_send_participations,
            'is_student' => 1,
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
    protected int $id;

    /**
     * ФИО студента
     * @var string
     * @OA\Property()
     */
    public string $fio;

    /**
     * Информация о студенте
     * @var string
     * @OA\Property()
     */
    public string $about;

    /**
     * Почта
     * @var string
     * @OA\Property()
     */
    public string $email;

    /**
     * Номер зачетной книжки
     * @var string
     * @OA\Property()
     */
    public string $numz;

    /**
     * Телефон
     * @var string
     * @OA\Property()
     */
    public string $phone;
    /**
     * Курс
     * @var int
     * @OA\Property()
     */
    public int $course;
    /**
     * Учебная группа
     * @var string
     * @OA\Property()
     */
    public string $training_group;
    /**
     * Специальность
     * @var object
     * @OA\Property(ref="#/components/schemas/Speciality")
     */
    public string $speciality;

    /**
     * Может ли отправлять заявки на проекты
     * @var boolean
     * @OA\Property()
     */
    public bool $canSendParticipations;
}
