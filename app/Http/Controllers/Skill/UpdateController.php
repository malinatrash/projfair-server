<?php

namespace App\Http\Controllers\Skill;

use App\Http\Controllers\Controller;
use App\Http\Requests\Skill\UpdateRequest;
use App\Models\Skill;
use Illuminate\Http\Request;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request, Skill $skill)
    {
        $data = $request->validated();
        $skill->update($data);
        return response([]);
    }
}
