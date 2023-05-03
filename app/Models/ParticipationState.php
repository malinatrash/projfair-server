<?php

namespace App\Models;

/**
 * @OA\Schema()
 */
class ParticipationState
{
    /**
     * ID 
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

    public function __construct(int $id, string $state)
    {
        $this->id = $id;
        $this->state = $state;
    }
}
