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
enum StateParticipationEnum: int
{
    case ditribution = 1;
    case active = 2;
    case arhive = 3;
    case rejected = 4;
}
