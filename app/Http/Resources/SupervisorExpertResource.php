<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SupervisorExpertResource extends JsonResource
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
            'position' => $this->position,
            //'created_at' => $this->created_at,
           // 'updated_at' => $this->updated_at,            
            //'department' => new DepartmentResource($this->department),                      
        ];
    }
}

/**
 * @OA\Schema()
 */
class SupervisorExpert extends SupervisorExpertResource
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

}
