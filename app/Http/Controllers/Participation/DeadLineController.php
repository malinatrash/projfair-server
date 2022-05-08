<?php

namespace App\Http\Controllers\Participation;

use App\Http\Controllers\Controller;
use App\Models\Participation;
use App\Models\ParticipationDeadLine;
use Illuminate\Http\Request;

class DeadLineController extends Controller
{
    public function __invoke()
    {
        $deadline = ParticipationDeadLine::find(1);
        return $deadline->deadline;
    }
}
