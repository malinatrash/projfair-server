<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Состояние заявки
 * 1 - На распределении
 * 2 - Участвует
 * 3 - Архив
 * 4 - Отклонена
 */
class StateParticipation extends Model
{
    use HasFactory;

    protected $guarded = false;

    /**
     * Получить заявки состояния
     */
    public function participations()
    {
        return $this->hasMany(Participation::class);
    }
}
