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
        $candidate = $request->get('candidate');

        if ($participation->candidate->id != $candidate->id) {
            return response("Вы не можете изменить чужую заявку", 403);
        }

        $participation->update([
            'priority' => $data['priority']
        ]);
        return $participation;
    }
}
