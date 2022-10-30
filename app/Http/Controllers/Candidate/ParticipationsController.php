<?php

namespace App\Http\Controllers\Candidate;

use App\Http\Controllers\Controller;
use App\Models\Candidate;
use App\Models\Participation;
use Illuminate\Http\Request;

/**
 * Получение заявок кандидата
 */
class ParticipationsController extends Controller
{
    public function __invoke(Request $request) //Получить все заявки студента
    {
        $id = $request->get('candidate')->id;
        $data = Participation::where('candidate_id', $id)->get();
        return $data;
    }
}
