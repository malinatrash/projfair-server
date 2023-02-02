<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

/**
 * Данные о проекте для апи
 */
class ProjectResource extends JsonResource
{
    /**
     * Трансформирует данные о проекте для апи
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'prevProjectId' => $this->prev_project_id,

            'title' => $this->title,
            'places' => $this->places,
            'goal' => $this->goal,
            'description' => $this->description,
            'difficulty' => $this->difficulty,
            'date_start' => $this->date_start,
            'date_end' => $this->date_end,
            'requirements' => $this->customer,
            'additional_inf' => $this->additional_inf,
            'product_result' => $this->product_result,
            'study_result' => $this->study_result,
            'supervisors' => SupervisorResource::collection($this->supervisors),
            'skills' => SkillResource::collection($this->skills),
            'specialities' => SpecialityResource::collection($this->specialities),
            'supervisorsNames' => $this->supervisorsNames,

            'state' => new StateResource($this->state),
            'type' => new TypeResource($this->type),

            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}

/**
 * @OA\Schema()
 */
class Project extends ProjectResource
{

    /**
     * ID проекта
     * @var int
     * @OA\Property()
     */
    public int $id;

    /**
     * ID предшествующего проекта или null
     * @var int
     * @OA\Property()
     */
    public int $prevProjectId;

    /**
     * Название проекта
     * @var string
     * @OA\Property()
     */
    public string $title;
    /**
     * Количество мест на проекте
     * @var int
     * @OA\Property()
     */
    public string $places;
    /**
     * Цель
     * @var string
     * @OA\Property()
     */
    public string $goal;
    /**
     * Описание
     * @var string
     * @OA\Property()
     */
    public string $description;
    /**
     * Сложность
     * @var int
     * @OA\Property()
     */
    public int $difficulty;

    /**
     * Дата начала (2022-09-01)
     * @var string
     * @OA\Property()
     */
    public string $date_start;
    /**
     * Дата окончания (2023-05-30)
     * @var string
     * @OA\Property()
     */
    public string $date_end;
    /**
     * Требования
     * @var string
     * @OA\Property()
     */
    public string $requirements;
    /**
     * Дополнительная информация
     * @var string
     * @OA\Property()
     */
    public string $additional_inf;
    /**
     * Продуктовынй результат
     * @var string
     * @OA\Property()
     */
    public string $product_result;
    /**
     * Учебный результат
     * @var string
     * @OA\Property()
     */
    public string $study_result;

    /**
     * Руководители
     * @var array
     * @OA\Property(
     *  type="array",
     * @OA\Items(ref="#/components/schemas/Supervisor")
     * )
     */
    public $supervisors;
    /**
     * Требуемые навыки
     * @var array
     * @OA\Property(
     *  type="array",
     * @OA\Items(ref="#/components/schemas/Skill")
     * )
     */
    public $skills;
    /**
     * Для каких специальностей
     * @var array
     * @OA\Property(
     *  type="array",
     * @OA\Items(ref="#/components/schemas/Speciality")
     * )
     */
    public $specialities;
    /**
     * Имена руководителей
     * @var string
     * @OA\Property()
     */
    public string $supervisorsNames;

    /**
     * Cостояние проекта
     * @var object
     * @OA\Property(ref="#/components/schemas/ProjectState")
     */
    public $state;
    /**
     * Тип проекта
     * @var object
     * @OA\Property(ref="#/components/schemas/ProjectType")
     */
    public $type;
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
