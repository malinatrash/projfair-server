<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

/**
 *  Подготавливает данные для апи
 */
class SupervisorResource extends JsonResource
{
    /**
     * Подготавливает данные для апи
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'fio' => $this->fio,
            'email' => $this->email,
            'about' => $this->about,
            'position' => $this->position,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'canReviewProjects' => $this->can_review_projects,
            'department' => new DepartmentResource($this->department),
        ];
    }
}

/**
 * @OA\Schema()
 */
class Supervisor extends SupervisorResource
{
    /**
     * ID Преподавателя
     * @var int
     * @OA\Property()
     */
    public int $id;
    /**
     * ФИО
     * @var string
     * @OA\Property()
     */
    public string $fio;
    /**
     * Почта
     * @var string
     * @OA\Property()
     */
    public string $email;
    /**
     * Информация о преподавателе
     * @var string
     * @OA\Property()
     */
    public string $about;
    /**
     * Должность
     * @var string
     * @OA\Property()
     */
    public string $position;

    /**
     * Кафедра
     * @var object
     * @OA\Property(ref="#/components/schemas/Department")
     */
    public $department;

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

    /**
     * Может ли делать ревью проектов
     * @var boolean
     * @OA\Property()
     */
    public bool $canReviewProjects;
}
