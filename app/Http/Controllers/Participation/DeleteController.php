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
        $token = $request->get('api_token');
        $candidates = Candidate::where('api_token', $token)->get();
        if (count($candidates) == 0) {
            return response("Авторизируйтесь, чтобы подать заявку", 403);
        }
        $candidate = $candidates[0];

        if ($participation->candidate->id != $candidate->id) {
            return response("Вы не можете удалить чужую заявку", 403);
        }

        $participation->delete();
        return response("Заявка успешно удалена", 200);
    }
}
