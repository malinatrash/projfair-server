<?php

namespace App\Http\Controllers\Participation;

use App\Http\Controllers\Controller;
use App\Models\Candidate;
use App\Models\Participation;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function __invoke(Participation $participation, Request $request)
    {
        $candidate = $request->get('candidate');

        if ($participation->candidate->id != $candidate->id) {
            return response("Вы не можете удалить чужую заявку", 403);
        }

        $participation->delete();
        return response([]);
    }
}
