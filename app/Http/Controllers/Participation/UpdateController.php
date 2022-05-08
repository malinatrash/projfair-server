<?php

namespace App\Http\Controllers\Participation;

use App\Http\Controllers\Controller;
use App\Http\Requests\Participation\UpdateRequest;
use App\Models\Participation;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Participation $participation)
    {
        $data = $request->validated();
        $participation->update([
            'priority' => $data['priority']
        ]);
        return $participation;
    }
}
