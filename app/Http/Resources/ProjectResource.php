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
            'supervisors' => $this->supervisors,

            'supervisor_id' => $this->supervisor_id,
            'state_id' => $this->state_id,
            'type_id' => $this->type_id,

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
     * ID Проекта
     * @var int
     * @OA\Property()
     */
    public $id;

    /**
     * Название проекта
     * @var string
     * @OA\Property()
     */
    public $title;
    /**
     * Количество мест на проекте
     * @var int
     * @OA\Property()
     */
    public $places;
    /**
     * Цель
     * @var string
     * @OA\Property()
     */
    public $goal;
    /**
     * Описание
     * @var string
     * @OA\Property()
     */
    public $description;
    /**
     * Сложность
     * @var int
     * @OA\Property()
     */
    public $difficulty;

    /**
     * Дата начала (2022-09-01)
     * @var string
     * @OA\Property()
     */
    public $date_start;
    /**
     * Дата окончания (2023-05-30)
     * @var string
     * @OA\Property()
     */
    public $date_end;
    /**
     * Требования
     * @var string
     * @OA\Property()
     */
    public $requirements;
    /**
     * Дополнительная информация
     * @var string
     * @OA\Property()
     */
    public $additional_inf;
    /**
     * Продуктовынй результат
     * @var string
     * @OA\Property()
     */
    public $product_result;
    /**
     * Учебный результат
     * @var string
     * @OA\Property()
     */
    public $study_result;

    /**
     * Руководители
     * @var string
     * @OA\Property()
     */
    public $supervisors;


    /**
     * ID руководителя проекта
     * @var string
     * @OA\Property()
     */
    public $supervisor_id;
    /**
     * ID состояния проекта
     * @var string
     * @OA\Property()
     */
    public $state_id;
    /**
     * ID типа проекта
     * @var string
     * @OA\Property()
     */
    public $type_id;
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
