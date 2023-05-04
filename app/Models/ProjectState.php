<?php

namespace App\Models;

/**
 * @OA\Schema()
 */
class ProjectState
{
    /**
     * ID Состояния проекта
     * @var int
     * @OA\Property()
     */
    public int $id;

    /**
     * Название состояния
     * @var string
     * @OA\Property()
     */
    public string $state;

    public function __construct(int $id, string $state, public int $showPriority)
    {
        $this->id = $id;
        $this->state = $state;
    }
}
