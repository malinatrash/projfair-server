<?php

namespace App\Http\Controllers\Participation;

use App\Http\Controllers\Controller;
use App\Models\Participation;
use App\Models\ParticipationDeadLine;
use Illuminate\Http\Request;

/**
 * Получение дедлайна подачи заявки
 */
class DeadLineController extends Controller
{
    public function __invoke()
    {
        $deadline = ParticipationDeadLine::find(1);
        if (!$deadline) {
            return response('Дедлайн не назначен', 404);
        }

        return $deadline->deadline;
    }
}
