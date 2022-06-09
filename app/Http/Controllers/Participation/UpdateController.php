<?php

namespace App\Http\Controllers\Participation;

use App\Http\Controllers\Controller;
use App\Http\Requests\Participation\UpdateRequest;
use App\Models\Candidate;
use App\Models\Participation;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Participation $participation)
    {
        $data = $request->validated();

        $token = $request->get('api_token');
        $candidates = Candidate::where('api_token', $token)->get();
        if (count($candidates) == 0) {
            return response("Авторизируйтесь, чтобы подать заявку", 403);
        }
        $candidate = $candidates[0];

        if ($participation->candidate->id != $candidate->id) {
            return response("Вы не можете изменить чужую заявку", 403);
        }

        $participation->update([
            'priority' => $data['priority']
        ]);
        return $participation;
    }
}
